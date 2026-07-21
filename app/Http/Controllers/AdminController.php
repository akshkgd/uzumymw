<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use App\Batch;
use App\User;
use App\Workshop;
use App\Feedback;
use App\BatchTopics;
use App\CourseProgress;
use App\CourseEnrollment;
use App\CourseEnrollmentPayment;
use App\WorkshopEnrollment;
use PDF;
use Razorpay\Api\Api;
use Session;
use Redirect;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use App\Mail\WelcomeEmail;
use App\Mail\OnboardingMailL2;
use App\Mail\EmailForQueuing;
use Mail;
use Illuminate\Support\Facades\Http;
use Ognjen\Laravel\AsyncMail;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;
use App\Jobs\UpdateBatchProgressJob;
use App\Traits\NotificationTrait;
use Illuminate\Support\Facades\Log;
use Carbon\CarbonPeriod;
use Vinkla\Hashids\Facades\Hashids;

class AdminController extends Controller
{
    use NotificationTrait;

    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'isAdmin']);
    }
    public function getUsers()
    {
        $users = User::select('id', 'name', 'email', 'created_at', 'updated_at')->paginate(500);

        foreach ($users as $user) {
            $isPaid = CourseEnrollment::where('userId', $user->id)->where('hasPaid', 1)->count();

            if ($isPaid > 0) {
                $user->hasPaid = 1;
            } else {
                $user->hasPaid = 0;
            }
        }
        return view('admin.emails', compact('users'))->with('i');
    }
    public function cssEnrollments()
    {
        $enrollments = CourseEnrollment::join('batches', 'course_enrollments.batchId', '=', 'batches.id')
            ->where('batches.topicId', 100)
            ->where('course_enrollments.hasPaid', 1)
            ->select('course_enrollments.*')->latest()
            ->paginate(100);
        return view('admin.cssEnrollment', compact('enrollments'))->with('i', (request()->input('page', 1) - 1) * 100);
    }
    public function jsEnrollments()
    {
        $enrollments = CourseEnrollment::join('batches', 'course_enrollments.batchId', '=', 'batches.id')
            ->where('batches.topicId', 101)
            ->where('course_enrollments.hasPaid', 1)
            ->select('course_enrollments.*')->latest()
            ->paginate(100);
        return view('admin.jsEnrollment', compact('enrollments'))->with('i', (request()->input('page', 1) - 1) * 100);
    }
    public function reactEnrollments()
    {
        $enrollments = CourseEnrollment::join('batches', 'course_enrollments.batchId', '=', 'batches.id')
            ->where('batches.topicId', 102)
            ->where('course_enrollments.hasPaid', 1)
            ->select('course_enrollments.*')->latest()
            ->paginate(100);
        return view('admin.reactEnrollment', compact('enrollments'))->with('i', (request()->input('page', 1) - 1) * 100);
    }

    public function addAccess()
    {
        return view('admin.addAccess');
    }
    public function getUser(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email', $email)->first();

        if ($user) {
            $userDetails = [
                'name' => $user->name,
                'email' => $user->email,
                'mobile' => $user->mobile,
                // Add other user details as needed
            ];
            return response()->json($userDetails);
        } else {
            return response()->json(null);
        }
    }

    public function studentDetails($id)
    {
        $user = User::findorFail($id);
        $enrollments = CourseEnrollment::where('userId', $id)->get();
        $recentVideos = CourseProgress::where('userId', $id)
            ->orderBy('updated_at', 'desc') // Assuming 'updated_at' tracks the most recent activity
            ->limit(3)
            ->get();
        return view('admin.studentDetails', compact('user', 'enrollments'))->with('i');
    }
    public function getStudentSessions($id)
    {
        // Ensure the user (student) exists
        $student = User::find($id);
        if (!$student) {
            return response()->json(['error' => 'Student not found'], 404);
        }

        // Fetch the sessions for the student (use the user_id as the student)
        $devices = \DB::table('sessions')->where('user_id', $student->id)
            ->latest('last_activity')
            ->select('id', 'ip_address', 'user_agent', 'last_activity')
            ->cursor();

        $deviceList = [];


        // Process each session (using Jenssegers\Agent for device and browser details)
        foreach ($devices as $device) {
            $agent = new \Jenssegers\Agent\Agent();
            $agent->setUserAgent($device->user_agent);

            $device->browser = $agent->browser();
            $device->is_mobile = $agent->isMobile();
            $device->is_desktop = $agent->isDesktop();
            $device->device_name = $agent->device();
            $device->last_activity = \Carbon\Carbon::createFromTimestamp($device->last_activity)->format('d M Y h:i A');
            $deviceList[] = $device;
        }

        return response()->json([
            'devices' => $deviceList,
            'current_session_id' => \Session::getId()
        ]);
    }

    public function deleteStudentSession($id, $sessionId)
    {
        $student = User::findOrFail($id);
        
        \DB::table('sessions')
            ->where('user_id', $student->id)
            ->where('id', $sessionId)
            ->delete();

        return response()->json([
            'success' => true,
            'message' => 'Session deleted successfully'
        ]);
    }

    public function deleteAllStudentSessions($id)
    {
        $student = User::findOrFail($id);
        
        \DB::table('sessions')
            ->where('user_id', $student->id)
            ->delete();

        return response()->json([
            'success' => true,
            'message' => 'All sessions deleted successfully'
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->search_value;
        $users = User::where('email', 'LIKE', '%' . $search . '%')
            ->orWhere('mobile', 'LIKE', '%' . $search . '%')
            ->orderBy('created_at', 'desc')
            ->get();

        if ($users->count() > 0) {
            // If only one user is found, redirect to the user details page
            if ($users->count() === 111) {
                $user = $users->first();
                return redirect()->route('admin.user.details', ['id' => $user->id]);
            }
            // If more than one user is found, show the list of users
            else {
                return view('admin.search', compact('users', 'search'))->with('i');
            }
        } else {
            // If no users are found, show a flash message and redirect back
            session()->flash('success', 'User not found!');
            return redirect()->back();
        }
    }

    public function banStudent($id)
    {
        $user = User::findorFail($id);
        $user->status = 0;
        $user->save();
        session()->flash('alert-success', 'Account Updated Successfully!');
        return redirect()->back();
    }
    public function activateStudent($id)
    {
        $user = User::findorFail($id);
        $user->status = 1;
        $user->save();
        session()->flash('alert-success', 'Account Updated Successfully!');
        return redirect()->back();
    }
    public function makeTeacher($id)
    {
        $user = User::findorFail($id);
        $user->role = 1;
        $user->save();
        session()->flash('alert-success', 'Account Updated Successfully!');
        return redirect()->back();
    }
    public function feedbacks()
    {
        $feedbacks = Feedback::latest()->get();
        return view('admin.feedbacks', compact('feedbacks'))->with('i');
    }
    public function featureRequests()
    {
        $featureRequests = \App\FeatureRequest::with('user')->latest()->paginate(50)->withQueryString();
        return view('admin.featureRequests', compact('featureRequests'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }
    public function removeFeedback($id)
    {
        $feedback = Feedback::findorFail($id);
        $feedback->status = 1;
        $feedback->save();

        // Check if it's an AJAX request
        if (request()->ajax() || request()->wantsJson() || request()->header('X-Requested-With') == 'XMLHttpRequest') {
            return response()->json([
                'success' => true,
                'message' => 'Feedback Removed!'
            ]);
        }

        // For regular requests
        session()->flash('alert-success', 'Feedback Removed!');
        return redirect()->back();
    }
    public function addFeedback($id)
    {
        $feedback = Feedback::findorFail($id);
        $feedback->status = 0;
        $feedback->save();

        // Check if it's an AJAX request
        if (request()->ajax() || request()->wantsJson() || request()->header('X-Requested-With') == 'XMLHttpRequest') {
            return response()->json([
                'success' => true,
                'message' => 'Feedback Added Back!'
            ]);
        }

        // For regular requests
        session()->flash('alert-success', 'Feedback Added Back!');
        return redirect()->back();
    }
    public function downgradeTeacher($id)
    {
        $user = User::findorFail($id);
        $user->role = 0;
        $user->save();
        session()->flash('alert-success', 'Account Updated Successfully!');
        return redirect()->back();
    }
    public function batchSuggestions(Request $request)
    {
        $batchName = $request->query('batchName');
        $batches = Batch::where('name', 'LIKE', '%' . $batchName . '%')
            ->orderBy('created_at', 'desc')  // Order by most recent
            ->limit(50)
            ->get(['id', 'name', 'payable']);
        return response()->json($batches);
    }

    public function addTopics($id)
    {
        $id = Crypt::decrypt($id);
        $batch = Batch::findorFail($id);
        $topics = BatchTopics::where('batchId', $id)->get();
        return view('admin.addTopics', compact('topics', 'batch'));

    }

    public function liveBatches()
    {
        $batches = Batch::orderBy('created_at', 'desc')
            ->get();
        return view('admin.batch', compact('batches'))->with('i');
    }

    public function createBatch()
    {
        $teachers = User::where('role', 1)->get();
        return view('admin.createBatch', compact('teachers'));
    }
    public function editBatch($id)
    {
        $batch = Batch::findOrFail($id);
        $teachers = User::where('role', 1)->get();
        return view('admin.editBatch', compact('batch', 'teachers'));
    }
    public function updateBatch(Request $request, $id)
    {
        $a = Batch::findOrFail($id);
        $a->topicId = $request->courseId;
        $a->name = $request->name;
        $a->description = $request->description;
        $a->price = $request->price;
        $a->payable = $request->payable;
        $a->offerId = $request->offerId;
        $a->limit = $request->limit;
        $a->img = $request->img;
        if ($request->hasFile('img')) {
            // $a->association = $request->association;
            $path = $request->file('img')->store('img', 'public');
            $a->img = $path;
        }
        $a->type = $request->type;
        $a->startDate = $request->startDate;
        $a->endDate = $request->endDate;
        $a->schedule = $request->timing;
        $a->about = $request->about;
        $a->learn = $request->learn;
        $a->benefits = $request->benefits;
        $a->groupLink = $request->groupLink;
        $a->groupLink2 = $request->groupLink2;
        $a->teacherId = $request->teacherId;
        $a->meetingLink = $request->meetingLink;
        $a->topic = $request->topic;
        $a->desc = $request->desc;
        $a->nextClass = $request->nextClass;
        $a->status = $request->status;
        $a->field5 = $request->accessTill;
        $a->save();
        session()->flash('success', 'Batch updated');
        return redirect('/admin/batches');
    }

    public function addLiveClass($id)
    {
        $batch = Batch::findorFail($id);
        return view('admin.updateLiveClass', compact('batch'));
    }
    public function upcomingSessions()
    {
        $batches = Batch::whereNotNull('meetingLink')->whereNotNull('nextClass')->whereNotNull('field1')->get();
        return view('admin.upcomingSessions', compact('batches'))->with('i');
    }
    public function updateLiveClass(Request $request)
    {
        $batch = Batch::findOrFail($request->batchId);

        // Update batch details
        $batch->topic = $request->topic;
        $batch->nextClass = $request->nextClass;
        $batch->meetingLink = $request->meetingLink;
        $batch->field1 = $request->field1;
        $batch->field2 = $request->field2;
        $batch->save();

        // If 'sendWhatsApp' is checked, send WhatsApp notifications
        if ($request->has('sendWhatsApp')) {
            $enrollments = CourseEnrollment::where('batchId', $batch->id)->where('hasPaid', 1)->get();
            foreach ($enrollments as $enrollment) {
                if ($enrollment->students->mobile) {
                    $this->sendLiveclassWhatsappReminder($enrollment->id, $batch);
                }
            }
        }

        return redirect()->back()->with('success', 'Live class scheduled.');
    }
    private function sendLiveclassWhatsappReminder($id, $batch)
    {
        $pabblyWebhookUrl = 'https://connect.pabbly.com/workflow/sendwebhookdata/IjU3NjUwNTY0MDYzMjA0MzQ1MjY0NTUzZDUxM2Ii_pc';
        $enrollment = CourseEnrollment::findOrFail($id);
        $name = $enrollment->students->name;
        $email = $enrollment->students->email;
        $batchName = $enrollment->batch->name;
        $user = $enrollment->students;
        $topic = $batch->topic;
        $link = $batch->meetingLink;
        $data = [
            'firstName' => strtok($name, ' '),
            'email' => $email,
            'phone' => $user->mobile,
            'batchName' => $batchName,
            'link' => $link,
            'topic' => $topic,

            // Add any other data you want to send to the Zapier webhook
        ];
        $response = Http::post($pabblyWebhookUrl, $data);
    }

    public function batchEnrollmentOld($id)
    {
        $batch = Batch::findorFail($id);
        $paidEnrollments = CourseEnrollment::where('batchId', $batch->id)->where('hasPaid', 1)->get();
        $unpaidEnrollments = CourseEnrollment::where('batchId', $batch->id)->where('hasPaid', 0)->get();
        $paidUsers = $paidEnrollments->count();
        $unpaidUsers = $unpaidEnrollments->count();
        $totalUsers = $paidUsers + $unpaidUsers;
        $earning = (CourseEnrollment::where('batchId', $id)->where('hasPaid', 1)->sum('amountPaid')) / 100;
        $teacherEarning = $earning * 0.4;
        $profit = $earning - $teacherEarning;
        return view('admin.batchEnrollment', compact('batch', 'paidEnrollments', 'unpaidEnrollments', 'totalUsers', 'paidUsers', 'unpaidUsers', 'earning', 'teacherEarning', 'profit'))->with('i');
    }
    public function batchEnrollment($id)
    {
        $batch = Batch::findOrFail($id);

        // Fetch all enrollments for the batch in one query
        $enrollments = CourseEnrollment::where('batchId', $batch->id)->get();

        // Separate paid and unpaid enrollments
        $paidEnrollments = $enrollments->where('hasPaid', 1);
        $paidUserIds = $paidEnrollments->pluck('userId')->toArray();
        $unpaidEnrollments = $enrollments
            ->where('hasPaid', 0)
            ->whereNotIn('userId', $paidUserIds)
            ->unique('userId');

        // Total paid users
        $totalPaidUsers = $paidEnrollments->count();
        $totalUnpaidUsers = $unpaidEnrollments->count();

        // Paid users with and without certificates
        $paidUsersWithCertificate = $paidEnrollments->where('hasCertificate', 1)->count();
        $paidUsersWithoutCertificate = $totalPaidUsers - $paidUsersWithCertificate;

        // Revenue calculations (ensure consistency in monetary units)
        $totalEarning = $paidEnrollments->sum('amountPaid') / 100;
        $certificateFeeEarning = $paidEnrollments->sum('certificateFee');
        $classEarning = $totalEarning - $certificateFeeEarning;

        // Percentage calculations
        if ($totalEarning > 0) {
            $certificateFeePercentage = number_format(($certificateFeeEarning / $totalEarning) * 100, 2);
            $classEarningPercentage = number_format(($classEarning / $totalEarning) * 100, 2);
        } else {
            $certificateFeePercentage = $classEarningPercentage = 0;
        }

        return view('admin.batchEnrollment', compact(
            'batch',
            'paidEnrollments',
            'unpaidEnrollments',
            'totalPaidUsers',
            'paidUsersWithCertificate',
            'paidUsersWithoutCertificate',
            'totalEarning',
            'certificateFeeEarning',
            'classEarning',
            'certificateFeePercentage',
            'classEarningPercentage',
            'totalPaidUsers',
            'totalUnpaidUsers'
        ))->with('i');
    }



    public function storeTopic(Request $request)
    {
        $batch = Batch::findorFail($request->batchId);
        $a = new batchTopics;
        $a->batchId = $request->batchId;
        $a->title = $request->title;
        $a->modules = $request->modules;
        $a->save();
        session()->flash('alert-success', 'Topics added Successfully!');
        return redirect()->back();


    }
    public function deleteTopic($id)
    {
        BatchTopics::destroy($id);
        session()->flash('alert-success', 'Topics deleted Successfully!');
        return redirect()->back();

    }

    public function createWorkshop()
    {
        $teachers = User::where('role', 1)->get();
        return view('admin.createWorkshop', compact('teachers'));
    }
    public function workshops()
    {
        $workshops = Workshop::latest()->take(30)->get();
        foreach ($workshops as $workshop) {
            $workshop->teacher = User::findorFail($workshop->teacherId);
            $users = WorkshopEnrollment::where('workshopId', $workshop->id)->get();
            foreach ($users as $user) {
                $isConverted = CourseEnrollment::where('userId', $user->userId)->where('hasPaid', 1)->count();
                if ($isConverted == 0) {
                    $user->isConverted = 0;
                } else {
                    $user->isConverted = 1;
                }
            }
            $totalUsers = $users->count();
            $paidUsers = $users->where('isConverted', 1)->count();
            if ($totalUsers != 0) {
                $workshop->conversions = $paidUsers / $totalUsers * 100;
            } else {
                $workshop->conversions = 0;
            }
            $workshop->users = $totalUsers;
        }
        $totalWorkshops = Workshop::all()->count();
        $users = WorkshopEnrollment::select('userId')->distinct()->get();
        foreach ($users as $user) {
            $isConverted = CourseEnrollment::where('userId', $user->userId)->where('hasPaid', 1)->count();
            if ($isConverted == 0) {
                $user->isConverted = 0;
            } else {
                $user->isConverted = 1;
            }
        }
        $totalUsers = $users->count();
        $paidUsers = $users->where('isConverted', 1)->count();
        $conversionRate = ($paidUsers / $totalUsers) * 100;
        return view('admin.workshops', compact('workshops', 'totalWorkshops', 'totalUsers', 'paidUsers', 'conversionRate'))->with('i');
    }
    public function paymentReceived($id)
    {
        $id = Crypt::decrypt($id);
        $enrollment = CourseEnrollment::findorFail($id);
        $batch = Batch::findorFail($enrollment->batchId);
        return view('admin.paymentReceived', compact('enrollment', 'batch'));
    }
    public function updatePaymentStatus(Request $request)
    {
        $enrollment = CourseEnrollment::findorFail($request->enrollmentId);
        $enrollment->batchId = $request->batchId;
        $enrollment->accessTill = $request->accessTill;
        $enrollment->override_access_days = $request->override_access_days;
        $enrollment->startFrom = $request->startFrom;
        $enrollment->certificateFee = (int) $request->certificateFee;
        if ($request->has('amountPayable')) {
            $enrollment->amountPayable = $request->amountPayable * 100;
        }
        if ($request->has('status')) {
            $enrollment->status = (int) $request->status;
        }
        if ($request->has('hasPaid')) {
            $enrollment->hasPaid = (int) $request->hasPaid;
        }
        $enrollment->save();

        // Update or create primary payment transaction if amountPaid is present
        if ($request->has('amountPaid')) {
            $payment = $enrollment->payments()->first();
            if (!$payment) {
                $payment = new CourseEnrollmentPayment();
                $payment->course_enrollment_id = $enrollment->id;
            }

            $payment->amount = $request->amountPaid;
            $payment->paid_at = $request->paidAt ?? Carbon::now();
            $payment->payment_method = $request->paymentMethod;
            $payment->transaction_id = $request->transactionId;
            $payment->invoice_id = $request->invoiceId;
            $payment->purpose = $request->purpose ?? $payment->purpose ?? 'enrollment';
            $payment->is_gst_applicable = $request->has('is_gst_applicable') ? (bool) $request->is_gst_applicable : ($payment->is_gst_applicable ?? true);
            $payment->remarks = $request->remarks ?? $payment->remarks ?? 'Updated via payment update form';
            $payment->save();
        }

        session()->flash('alert-success', 'Payment Details Updated Successfully!');
        return redirect()->action('AdminController@paymentReceived', Crypt::encrypt($enrollment->id));

    }

    public function addManualPayment(Request $request)
    {
        $enrollment = CourseEnrollment::findorFail($request->enrollmentId);
        
        $transactionId = $request->transactionId ?? 'TXN-' . strtoupper(uniqid());
        $invoiceId = $request->invoiceId ?? 'INV-' . strtoupper(uniqid());

        // Check if transaction has already been logged
        $txnExists = CourseEnrollmentPayment::where('transaction_id', $transactionId)->exists();
        if ($txnExists) {
            if ($request->wantsJson()) {
                return response()->json(['success' => false, 'message' => 'This transaction ID has already been recorded.'], 422);
            }
            session()->flash('alert-warning', 'This transaction ID has already been recorded.');
            return redirect()->back();
        }

        $payment = $enrollment->payments()->create([
            'amount'            => $request->amount * 100, // input is in rupees, convert to paisa
            'paid_at'           => $request->paidAt ?? Carbon::now(),
            'payment_method'    => $request->paymentMethod ?? 'cash',
            'transaction_id'    => $transactionId,
            'invoice_id'        => $invoiceId,
            'purpose'           => $request->purpose ?? 'enrollment',
            'is_gst_applicable' => $request->has('is_gst_applicable') ? (bool) $request->is_gst_applicable : true,
            'remarks'           => $request->remarks ?? 'Logged manually by admin'
        ]);

        $totalPaidPaisa = $enrollment->payments()->sum('amount');
        $totalPaidRupees = $totalPaidPaisa / 100;
        $payableRupees = $enrollment->payable_in_rupees;

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'New transaction logged successfully!',
                'payment' => [
                    'amount' => $payment->amount,
                    'paid_at' => Carbon::parse($payment->paid_at)->format('d-M-Y'),
                    'payment_method' => strtoupper($payment->payment_method),
                    'purpose' => ucfirst($payment->purpose),
                    'is_gst_applicable' => $payment->is_gst_applicable ? 'Yes' : 'No',
                    'remarks' => $payment->remarks
                ],
                'enrollment' => [
                    'amount_paid' => $totalPaidRupees,
                    'payable_in_rupees' => $payableRupees,
                    'pending_balance' => $payableRupees - $totalPaidRupees,
                    'partially_paid' => $enrollment->fresh()->partiallyPaid()
                ]
            ]);
        }

        session()->flash('alert-success', 'New transaction logged successfully!');
        return redirect()->back();
    }

    public function updatePayment(Request $request, $id)
    {
        $payment = CourseEnrollmentPayment::findOrFail($id);
        
        $payment->amount = $request->amount * 100; // convert input rupees to paisa
        $payment->paid_at = $request->paidAt ?? \Carbon\Carbon::now();
        $payment->payment_method = $request->paymentMethod ?? $payment->payment_method;
        $payment->transaction_id = $request->transactionId;
        $payment->invoice_id = $request->invoiceId;
        $payment->purpose = $request->purpose ?? 'enrollment';
        $payment->is_gst_applicable = $request->has('is_gst_applicable') ? (bool) $request->is_gst_applicable : false;
        $payment->remarks = $request->remarks;
        $payment->save();

        session()->flash('alert-success', 'Transaction updated successfully!');
        return redirect()->back();
    }

    public function deletePayment($id)
    {
        $payment = CourseEnrollmentPayment::findOrFail($id);
        $payment->delete();

        session()->flash('alert-success', 'Transaction deleted successfully!');
        return redirect()->back();
    }

    public function getEnrollmentPaymentsJson($id)
    {
        $enrollment = CourseEnrollment::with(['students', 'payments'])->findOrFail($id);
        $totalPaidPaisa = $enrollment->payments()->sum('amount');
        $totalPaidRupees = $totalPaidPaisa / 100;
        $payableRupees = $enrollment->payable_in_rupees;
        
        return response()->json([
            'enrollment' => [
                'id' => $enrollment->id,
                'student_name' => $enrollment->students->name,
                'amount_payable' => $payableRupees,
                'amount_paid' => $totalPaidRupees,
                'pending_balance' => $payableRupees - $totalPaidRupees,
                'partially_paid' => $enrollment->partiallyPaid()
            ],
            'payments' => $enrollment->payments()->orderBy('paid_at', 'desc')->get()->map(function($p) {
                return [
                    'amount' => $p->amount,
                    'paid_at' => Carbon::parse($p->paid_at)->format('d-M-Y'),
                    'payment_method' => strtoupper($p->payment_method),
                    'purpose' => ucfirst($p->purpose),
                    'is_gst_applicable' => $p->is_gst_applicable ? 'Yes' : 'No',
                    'remarks' => $p->remarks
                ];
            })
        ]);
    }

    public function addWorkshop(Request $request)
    {
        $a = new Workshop();
        $a->topicId = $request->courseId;
        $a->name = $request->name;
        $a->description = $request->description;
        $a->payable = $request->payable;
        $a->offerId = $request->offerId;
        $a->limit = $request->limit;
        $a->img = $request->img;
        if ($request->hasFile('img')) {
            // $a->association = $request->association;
            $path = $request->file('img')->store('img', 'public');
            $a->img = $path;
        }

        $a->startDate = $request->startDate;
        $a->endDate = $request->endDate;
        $a->schedule = $request->schedule;
        $a->about = $request->about;
        $a->learn = $request->learn;
        $a->benefits = $request->benefits;
        $a->groupLink = $request->groupLink;
        $a->groupLink1 = $request->groupLink1;
        $a->teacherId = $request->teacherId;
        $a->meetingLink = $request->meetingLink;
        $a->topic = $request->topic;
        $a->desc = $request->desc;
        $a->nextClass = $request->nextClass;
        $a->save();
        session()->flash('alert-danger', 'Batch Added');
        return redirect('/home');
    }
    public function fetchCourseProgress()
    {
        $courseProgress = CourseProgress::with(['students', 'batch', 'content'])  // Changed 'user' to 'students'
            ->orderBy('lastAccess', 'desc')
            ->paginate(100);

        return view('admin.courseProgressTable', compact('courseProgress'));
    }

    public function listInvoices(Request $request)
    {
        // If no month is selected, default to last month
        $month = $request->query('month', Carbon::now()->subMonth()->format('m'));
        $year = $request->query('year', Carbon::now()->format('Y'));
        // You can also let user pick year if needed, or just default to current year

        // Fetch all paid enrollments for the selected month
        // Assuming 'paidAt' column stores date/time in a format recognized by MySQL (e.g., Y-m-d H:i:s)
        $enrollments = CourseEnrollment::whereYear('paidAt', $year)
            ->whereMonth('paidAt', $month)
            ->where('hasPaid', 1)
            ->get();

        // Pass the currently selected month and year, and the enrollments
        return view('admin.invoices', compact('enrollments', 'month', 'year'));
    }

    public function downloadInvoices($invoiceId)
    {
        // Find the specific enrollment (invoice) by its invoiceId
        $enrollment = CourseEnrollment::where('invoiceId', $invoiceId)->firstOrFail();

        // Prepare any data needed for the invoice PDF
        $data = [
            'enrollment' => $enrollment,
            // Include any other relevant info, such as user data, course details, etc.
        ];

        // Load your invoice blade file
        $pdf = PDF::loadView('admin.invoicePdf', $data);

        // Return the PDF as a download
        return $pdf->download('invoice_' . $invoiceId . '.pdf');
    }

    public function addCourseAccess(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            session()->flash('alert-danger', 'User not found!');
            return redirect()->back();
        }

        $enrollment = CourseEnrollment::where('batchId', $request->batchId)->where('userId', $user->id)->first();
        $hasPaid = $request->has('hasPaid') ? (int)$request->hasPaid : 1;

        if (!$enrollment) {
            $batch = Batch::findOrFail($request->batchId);
            $enrollment = new CourseEnrollment;
            $enrollment->userId = $user->id;
            $enrollment->batchId = $request->batchId;
            $enrollment->price = $batch->price;
            $enrollment->amountPayable = $request->amountPayable ? ($request->amountPayable * 100) : ($batch->payable * 100);
            $enrollment->startFrom = $request->startFrom;
            $enrollment->status = $request->has('status') ? (int)$request->status : 1;
            $enrollment->certificateId = substr(md5(time()), 0, 16);
            $enrollment->field2 = 'access granted manually';
            $enrollment->save();
        } else {
            $enrollment->status = $request->has('status') ? (int)$request->status : 1;
            if ($request->has('amountPayable')) {
                $enrollment->amountPayable = $request->amountPayable * 100;
            }
            $enrollment->field2 = 'webhook/manual access updated';
            $enrollment->save();
        }

        if ($hasPaid === 1) {
            $transactionId = $request->transactionId ?? 'TXN-' . strtoupper(uniqid());
            $invoiceId = $request->invoiceId ?? 'INV-' . strtoupper(uniqid());

            // Check if transaction has already been logged
            $txnExists = CourseEnrollmentPayment::where('transaction_id', $transactionId)->exists();
            if ($txnExists) {
                session()->flash('alert-warning', 'This transaction ID has already been recorded.');
                return redirect()->back();
            }

            // Create the transaction
            $enrollment->payments()->create([
                'amount'            => ($request->amount ?? 0) * 100,
                'paid_at'           => $request->paidAt ?? Carbon::now(),
                'payment_method'    => $request->paymentMethod ?? 'upi',
                'transaction_id'    => $transactionId,
                'invoice_id'        => $invoiceId,
                'purpose'           => $request->purpose ?? 'enrollment',
                'is_gst_applicable' => $request->has('is_gst_applicable') ? (bool) $request->is_gst_applicable : true,
                'remarks'           => $request->remarks ?? 'Access granted manually'
            ]);
        } else {
            $enrollment->syncPaymentSummary();
        }

        session()->flash('alert-success', 'Access and Payment logged successfully!');
        return redirect()->back();
    }


    public function updateAllProgress($batchId)
    {
        try {
            // Queue the batch progress update job
            dispatch(new UpdateBatchProgressJob($batchId));

            return response()->json([
                'success' => true,
                'message' => 'Progress update has been queued and will be processed shortly'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function updateUserProfile(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);

            // Validate email uniqueness excluding current user
            $emailExists = User::where('email', $request->email)
                ->where('id', '!=', $id)
                ->exists();

            if ($emailExists) {
                return response()->json([
                    'success' => false,
                    'message' => 'Email already exists',
                    'errors' => ['email' => ['This email is already registered']]
                ], 422);
            }

            // Validate request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'mobile' => [
                    'required',
                    'string',
                    'regex:/^[0-9]{10}$/' // Ensures exactly 10 digits
                ]
            ], [
                'mobile.regex' => 'Phone number must be exactly 10 digits'
            ]);

            // Only update if data has changed
            if ($user->email !== $request->email) {
                $user->email = $request->email;
            }

            if ($user->mobile !== $request->mobile) {
                $user->mobile = $request->mobile;
            }

            if ($user->name !== $request->name) {
                $user->name = $request->name;
            }

            $user->save();

            return response()->json([
                'success' => true,
                'message' => 'Profile updated successfully'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating profile: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display paginated list of students
     */
    public function students()
    {
        $users = User::select('id', 'name', 'email', 'mobile', 'avatar', 'created_at', 'lastActivity')
            ->where('role', 0)
            ->orderByDesc('id')
            ->paginate(100)
            ->withQueryString();

        return view('admin.students', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 1000);
    }
    public function courseProgress($enrollmentId)
    {
        $enrollment = CourseEnrollment::findorFail($enrollmentId);
        $courseProgress = CourseProgress::with('content')
            ->where('userId', $enrollment->userId)
            ->where('batchId', $enrollment->batchId)
            ->get();
        return view('admin.courseProgress', compact('courseProgress', 'enrollment'));
    }

    public function getReportsData(Request $request)
    {
        try {
            $range = $request->input('range', '7');
            $endDate = Carbon::now();
            $startDate = Carbon::now();

            // Set date ranges
            switch ($range) {

                case '7':
                    $startDate = Carbon::now()->subDays(7)->startOfDay();
                    $endDate = Carbon::now()->endOfDay();
                    $previousStartDate = $startDate->copy()->subDays(7)->startOfDay();
                    $previousEndDate = $endDate->copy()->subDays(7)->endOfDay();
                    break;


                case '30':
                    $startDate = Carbon::now()->subDays(30)->startOfDay();
                    $endDate = Carbon::now()->endOfDay();
                    $previousStartDate = $startDate->copy()->subDays(30)->startOfDay();
                    $previousEndDate = $endDate->copy()->subDays(30)->endOfDay();
                    break;

                case 'this_month':
                    $startDate = Carbon::now()->startOfMonth();
                    $endDate = Carbon::now()->endOfMonth();
                    // Previous month comparison
                    $previousStartDate = Carbon::now()->subMonth()->startOfMonth();
                    $previousEndDate = Carbon::now()->subMonth()->endOfMonth();
                    break;

                case 'last_month':
                    $startDate = Carbon::now()->subMonth()->startOfMonth();
                    $endDate = Carbon::now()->subMonth()->endOfMonth();
                    // Month before last month comparison
                    $previousStartDate = Carbon::now()->subMonths(2)->startOfMonth();
                    $previousEndDate = Carbon::now()->subMonths(2)->endOfMonth();
                    break;

                case '90':
                    $startDate = Carbon::now()->subDays(89)->startOfDay(); // Last 90 days including today
                    $endDate = Carbon::now()->endOfDay();
                    // Previous 90 days comparison
                    $previousStartDate = Carbon::now()->subDays(179)->startOfDay();
                    $previousEndDate = Carbon::now()->subDays(90)->endOfDay();
                    break;

                case 'this_year':
                    $startDate = Carbon::now()->startOfYear();
                    $endDate = Carbon::now()->endOfYear();
                    // Previous year comparison
                    $previousStartDate = Carbon::now()->subYear()->startOfYear();
                    $previousEndDate = Carbon::now()->subYear()->endOfYear();
                    break;

                case '365':
                    $startDate = Carbon::now()->subDays(365)->startOfDay();
                    $endDate = Carbon::now()->endOfDay();
                    $previousStartDate = $startDate->copy()->subDays(365)->startOfDay();
                    $previousEndDate = $endDate->copy()->subDays(365)->endOfDay();
                    break;

                case 'custom':
                    $startDate = Carbon::parse($request->input('start_date'))->startOfDay();
                    $endDate = Carbon::parse($request->input('end_date'))->endOfDay();
                    // Calculate previous period of same length
                    $daysDiff = $startDate->diffInDays($endDate);
                    $previousStartDate = $startDate->copy()->subDays($daysDiff + 1)->startOfDay();
                    $previousEndDate = $endDate->copy()->subDays($daysDiff + 1)->endOfDay();
                    break;

                default:
                    $startDate = Carbon::now()->subDays(6)->startOfDay(); // Default to last 7 days
                    $endDate = Carbon::now()->endOfDay();
                    // Previous 7 days comparison
                    $previousStartDate = Carbon::now()->subDays(13)->startOfDay();
                    $previousEndDate = Carbon::now()->subDays(7)->endOfDay();
                    break;
            }

            // Get signups data
            $currentSignups = User::whereDate('created_at', '>=', $startDate)
                ->whereDate('created_at', '<=', $endDate)
                ->count();
            $previousSignups = User::whereDate('created_at', '>=', $previousStartDate)
                ->whereDate('created_at', '<=', $previousEndDate)
                ->count();

            // Get enrollments data
            $currentEnrollments = CourseEnrollment::where('hasPaid', 1)
                ->whereDate('paidAt', '>=', $startDate)
                ->whereDate('paidAt', '<=', $endDate)
                ->count();
            $previousEnrollments = CourseEnrollment::where('hasPaid', 1)
                ->whereDate('paidAt', '>=', $previousStartDate)
                ->whereDate('paidAt', '<=', $previousEndDate)
                ->count();


            // Get revenue data
            $currentPayments = CourseEnrollmentPayment::whereDate('paid_at', '>=', $startDate)
                ->whereDate('paid_at', '<=', $endDate)
                ->get();

            $currentRevenue = $currentPayments->sum('amount') / 100;

            $currentRevenueNet = 0;
            $currentRevenueGst = 0;
            $currentRevenueCash = 0;
            $currentRevenueGstApplicable = 0;
            foreach ($currentPayments as $payment) {
                $amt = $payment->amount / 100;
                if ($payment->is_gst_applicable) {
                    $net = $amt / 1.18;
                    $currentRevenueGst += ($amt - $net);
                    $currentRevenueNet += $net;
                    $currentRevenueGstApplicable += $amt;
                } else {
                    $currentRevenueNet += $amt;
                    $currentRevenueCash += $amt;
                }
            }

            $previousPayments = CourseEnrollmentPayment::whereDate('paid_at', '>=', $previousStartDate)
                ->whereDate('paid_at', '<=', $previousEndDate)
                ->get();

            $previousRevenue = $previousPayments->sum('amount') / 100;

            $previousRevenueNet = 0;
            $previousRevenueGst = 0;
            $previousRevenueCash = 0;
            $previousRevenueGstApplicable = 0;
            foreach ($previousPayments as $payment) {
                $amt = $payment->amount / 100;
                if ($payment->is_gst_applicable) {
                    $net = $amt / 1.18;
                    $previousRevenueGst += ($amt - $net);
                    $previousRevenueNet += $net;
                    $previousRevenueGstApplicable += $amt;
                } else {
                    $previousRevenueNet += $amt;
                    $previousRevenueCash += $amt;
                }
            }

            // Get learning time data
            $currentLearningTime = CourseProgress::whereDate('firstAccess', '>=', $startDate)
                ->whereDate('firstAccess', '<=', $endDate)
                ->sum('timeSpent') / 60;
            $previousLearningTime = CourseProgress::whereDate('firstAccess', '>=', $previousStartDate)
                ->whereDate('firstAccess', '<=', $previousEndDate)
                ->sum('timeSpent') / 60;

            // Calculate changes
            $signupsChange = $previousSignups > 0 ? (($currentSignups - $previousSignups) / $previousSignups) * 100 : 0;
            $enrollmentsChange = $previousEnrollments > 0 ? (($currentEnrollments - $previousEnrollments) / $previousEnrollments) * 100 : 0;
            $revenueChange = $previousRevenue > 0 ? (($currentRevenue - $previousRevenue) / $previousRevenue) * 100 : 0;
            $learningTimeChange = $previousLearningTime > 0 ? (($currentLearningTime - $previousLearningTime) / $previousLearningTime) * 100 : 0;

            // Get chart data
            $currentPeriod = CarbonPeriod::create($startDate->copy()->startOfDay(), $endDate->copy()->endOfDay());
            $currentDates = [];
            foreach ($currentPeriod as $date) {
                $currentDates[] = $date->format('Y-m-d');
            }

            $previousPeriod = CarbonPeriod::create($previousStartDate->copy()->startOfDay(), $previousEndDate->copy()->endOfDay());
            $previousDates = [];
            foreach ($previousPeriod as $date) {
                $previousDates[] = $date->format('Y-m-d');
            }

            // Get signups data
            $currentSignupsQuery = User::where('role', 0)
                ->whereDate('created_at', '>=', $startDate)
                ->whereDate('created_at', '<=', $endDate)
                ->selectRaw('DATE(created_at) as date, COUNT(*) as signups')
                ->groupBy('date')
                ->get()
                ->pluck('signups', 'date')
                ->toArray();

            $previousSignupsQuery = User::where('role', 0)
                ->whereDate('created_at', '>=', $previousStartDate)
                ->whereDate('created_at', '<=', $previousEndDate)
                ->selectRaw('DATE(created_at) as date, COUNT(*) as signups')
                ->groupBy('date')
                ->get()
                ->pluck('signups', 'date')
                ->toArray();

            $signupsEnrollments = [];
            foreach ($currentDates as $index => $currentDateStr) {
                $previousDateStr = isset($previousDates[$index]) ? $previousDates[$index] : null;
                $currentVal = $currentSignupsQuery[$currentDateStr] ?? 0;
                $previousVal = ($previousDateStr && isset($previousSignupsQuery[$previousDateStr])) ? $previousSignupsQuery[$previousDateStr] : 0;

                $signupsEnrollments[] = [
                    'date' => Carbon::parse($currentDateStr)->format('M d'),
                    'signups' => (int) $currentVal,
                    'previousSignups' => (int) $previousVal
                ];
            }

            // Group current payments by date
            $currentPaymentsByDate = [];
            foreach ($currentPayments as $payment) {
                $dateStr = Carbon::parse($payment->paid_at)->format('Y-m-d');
                if (!isset($currentPaymentsByDate[$dateStr])) {
                    $currentPaymentsByDate[$dateStr] = [];
                }
                $currentPaymentsByDate[$dateStr][] = $payment;
            }

            // Group previous payments by date
            $previousPaymentsByDate = [];
            foreach ($previousPayments as $payment) {
                $dateStr = Carbon::parse($payment->paid_at)->format('Y-m-d');
                if (!isset($previousPaymentsByDate[$dateStr])) {
                    $previousPaymentsByDate[$dateStr] = [];
                }
                $previousPaymentsByDate[$dateStr][] = $payment;
            }

            $revenueData = [];
            foreach ($currentDates as $index => $currentDateStr) {
                $previousDateStr = isset($previousDates[$index]) ? $previousDates[$index] : null;

                // Current period stats for this date
                $currGross = 0;
                $currNet = 0;
                $currGst = 0;
                if (isset($currentPaymentsByDate[$currentDateStr])) {
                    foreach ($currentPaymentsByDate[$currentDateStr] as $payment) {
                        $amt = $payment->amount / 100;
                        $currGross += $amt;
                        if ($payment->is_gst_applicable) {
                            $net = $amt / 1.18;
                            $currGst += ($amt - $net);
                        } else {
                            $currNet += $amt; // Only sum where GST is not applicable
                        }
                    }
                }

                // Previous period stats for this date
                $prevGross = 0;
                $prevNet = 0;
                $prevGst = 0;
                if ($previousDateStr && isset($previousPaymentsByDate[$previousDateStr])) {
                    foreach ($previousPaymentsByDate[$previousDateStr] as $payment) {
                        $amt = $payment->amount / 100;
                        $prevGross += $amt;
                        if ($payment->is_gst_applicable) {
                            $net = $amt / 1.18;
                            $prevGst += ($amt - $net);
                        } else {
                            $prevNet += $amt; // Only sum where GST is not applicable
                        }
                    }
                }

                $revenueData[] = [
                    'date' => Carbon::parse($currentDateStr)->format('M d'),
                    'amount' => $currGross,
                    'previousAmount' => $prevGross,
                    'amountNet' => $currNet,
                    'previousAmountNet' => $prevNet,
                    'amountGst' => $currGst,
                    'previousAmountGst' => $prevGst
                ];
            }

            // Get learning time data by date
            $currentLearningQuery = CourseProgress::whereDate('firstAccess', '>=', $startDate)
                ->whereDate('firstAccess', '<=', $endDate)
                ->selectRaw('DATE(firstAccess) as date, SUM(timeSpent)/60 as hours')
                ->groupBy('date')
                ->get()
                ->pluck('hours', 'date')
                ->toArray();

            $previousLearningQuery = CourseProgress::whereDate('firstAccess', '>=', $previousStartDate)
                ->whereDate('firstAccess', '<=', $previousEndDate)
                ->selectRaw('DATE(firstAccess) as date, SUM(timeSpent)/60 as hours')
                ->groupBy('date')
                ->get()
                ->pluck('hours', 'date')
                ->toArray();

            $learningTimeData = [];
            foreach ($currentDates as $index => $currentDateStr) {
                $previousDateStr = isset($previousDates[$index]) ? $previousDates[$index] : null;
                $currentVal = $currentLearningQuery[$currentDateStr] ?? 0;
                $previousVal = ($previousDateStr && isset($previousLearningQuery[$previousDateStr])) ? $previousLearningQuery[$previousDateStr] : 0;

                $learningTimeData[] = [
                    'date' => Carbon::parse($currentDateStr)->format('M d'),
                    'hours' => round($currentVal),
                    'previousHours' => $previousDateStr ? round($previousVal) : 0
                ];
            }

            // Get all transactions in that period
            $paymentsQuery = CourseEnrollmentPayment::with(['enrollment.students', 'enrollment.batch'])
                ->whereDate('paid_at', '>=', $startDate)
                ->whereDate('paid_at', '<=', $endDate)
                ->orderBy('paid_at', 'desc')
                ->get();

            $transactions = $paymentsQuery->map(function ($payment) {
                $studentId = $payment->enrollment && $payment->enrollment->students
                    ? $payment->enrollment->students->id
                    : null;
                $studentName = $payment->enrollment && $payment->enrollment->students
                    ? $payment->enrollment->students->name
                    : 'N/A';
                $studentEmail = $payment->enrollment && $payment->enrollment->students
                    ? $payment->enrollment->students->email
                    : ($payment->enrollment->email ?? 'N/A');
                $courseName = $payment->enrollment && $payment->enrollment->batch
                    ? $payment->enrollment->batch->name
                    : 'N/A';
                $batchType = $payment->enrollment && $payment->enrollment->batch
                    ? (int) $payment->enrollment->batch->type
                    : 0;

                $enrollmentIdEncrypted = $payment->enrollment
                    ? Crypt::encrypt($payment->enrollment->id)
                    : null;

                return [
                    'id' => $payment->id,
                    'student_id' => $studentId,
                    'student_name' => $studentName,
                    'student_email' => $studentEmail,
                    'course_name' => $courseName,
                    'batch_type' => $batchType,
                    'amount' => (int) ($payment->amount / 100),
                    'is_gst_applicable' => (bool) $payment->is_gst_applicable,
                    'gst_amount' => $payment->is_gst_applicable ? (int) round(($payment->amount / 100) - ($payment->amount / 100 / 1.18)) : 0,
                    'payment_method' => $payment->payment_method,
                    'transaction_id' => $payment->transaction_id,
                    'invoice_id' => $payment->invoice_id,
                    'remarks' => $payment->remarks ?? '',
                    'purpose' => $payment->purpose ?? '',
                    'paid_at' => Carbon::parse($payment->paid_at)->format('d M Y, h:i A'),
                    'paid_at_date' => Carbon::parse($payment->paid_at)->format('Y-m-d'),
                    'enrollment_id_encrypted' => $enrollmentIdEncrypted
                ];
            });

            return response()->json([
                'metrics' => [
                    'signups' => [
                        'current' => (int) $currentSignups,
                        'change' => round($signupsChange, 1),
                        'difference' => $currentSignups - $previousSignups,
                        'trend' => $signupsChange >= 0 ? 'up' : 'down'
                    ],
                    'enrollments' => [
                        'current' => (int) $currentEnrollments,
                        'change' => round($enrollmentsChange, 1),
                        'difference' => $currentEnrollments - $previousEnrollments,
                        'trend' => $enrollmentsChange >= 0 ? 'up' : 'down'
                    ],
                    'revenue' => [
                        'current' => $currentRevenue,
                        'change' => round($revenueChange, 1),
                        'difference' => round($currentRevenue - $previousRevenue),
                        'trend' => $revenueChange >= 0 ? 'up' : 'down',

                        'currentNet' => $currentRevenueNet,
                        'changeNet' => round($previousRevenueNet > 0 ? (($currentRevenueNet - $previousRevenueNet) / $previousRevenueNet) * 100 : 0, 1),
                        'differenceNet' => round($currentRevenueNet - $previousRevenueNet),
                        'trendNet' => ($currentRevenueNet - $previousRevenueNet) >= 0 ? 'up' : 'down',

                        'currentGst' => $currentRevenueGst,
                        'changeGst' => round($previousRevenueGst > 0 ? (($currentRevenueGst - $previousRevenueGst) / $previousRevenueGst) * 100 : 0, 1),
                        'differenceGst' => round($currentRevenueGst - $previousRevenueGst),
                        'trendGst' => ($currentRevenueGst - $previousRevenueGst) >= 0 ? 'up' : 'down',

                        'currentCash' => $currentRevenueCash,
                        'currentGstApplicable' => $currentRevenueGstApplicable,
                    ],
                    'learningTime' => [
                        'current' => round($currentLearningTime),
                        'change' => round($learningTimeChange, 1),
                        'trend' => $learningTimeChange >= 0 ? 'up' : 'down'
                    ]
                ],
                'signupsEnrollments' => $signupsEnrollments,
                'revenue' => $revenueData,
                'learningTime' => $learningTimeData,
                'transactions' => $transactions
            ]);

        } catch (\Exception $e) {
            \Log::error('Reports Data Error: ' . $e->getMessage());
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function wf()
    {
        // Find professional users with latest first and pagination of 100
        $professionalUsers = User::where('college', 'professional')
            ->latest()
            ->paginate(100);

        // Get count of professional users
        $professionalUsersCount = User::where('college', 'professional')->count();

        // Alternative using scope (if you add the scope to User model)
        // $professionalUsers = User::professional()->latest()->paginate(100);

        return view('admin.wf', compact('professionalUsers', 'professionalUsersCount'));
    }
    public function reports()
    {
        return view('admin.reports');
    }

    public function searchUsersAjax(Request $request)
    {
        $query = $request->query('query');
        if (empty($query)) {
            return response()->json([]);
        }

        $users = User::where(function($q) use ($query) {
            $q->where('name', 'LIKE', '%' . $query . '%')
              ->orWhere('email', 'LIKE', '%' . $query . '%')
              ->orWhere('mobile', 'LIKE', '%' . $query . '%');
        })
        ->orderBy('created_at', 'desc')
        ->limit(10)
        ->get(['id', 'name', 'email', 'mobile']);

        return response()->json($users);
    }

    public function updateAccessOverride(Request $request, $id)
    {
        $request->validate([
            'days' => 'nullable|integer|min:0'
        ]);

        try {
            $enrollment = CourseEnrollment::findOrFail($id);
            $enrollment->override_access_days = $request->input('days');
            $enrollment->save();

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Student access override days updated successfully.'
                ]);
            }

            session()->flash('alert-success', 'Student access override days updated successfully.');
            return redirect()->back();
        } catch (\Exception $e) {
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error updating student access: ' . $e->getMessage()
                ], 500);
            }

            session()->flash('alert-danger', 'Error updating student access: ' . $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the Admin Migrations page.
     */
    public function migrations()
    {
        $usersCount = User::count();
        $batchesCount = Batch::count();
        $enrollmentsCount = CourseEnrollment::count();

        return view('admin.migrations', compact('usersCount', 'batchesCount', 'enrollmentsCount'));
    }

    /**
     * Get real-time migration stats (counts).
     */
    public function migrationStats()
    {
        return response()->json([
            'success' => true,
            'users' => User::count(),
            'batches' => Batch::count(),
            'enrollments' => CourseEnrollment::count(),
        ]);
    }

    /**
     * Process and transmit a chunk of migration data to external API.
     */
    public function sendMigrationChunk(Request $request)
    {
        $request->validate([
            'entity' => 'required|in:users,batches,enrollments',
            'offset' => 'required|integer|min:0',
            'limit' => 'required|integer|min:1|max:5000',
            'target_url' => 'nullable|url',
            'api_key' => 'nullable|string',
        ]);

        $entity = $request->input('entity');
        $offset = (int) $request->input('offset');
        $limit = (int) $request->input('limit', 50);
        $targetUrl = $request->input('target_url') ?: 'https://api.codekaro.in/migration/users';
        $apiKey = $request->input('api_key');

        $items = [];
        $totalRecords = 0;

        if ($entity === 'users') {
            $totalRecords = User::count();
            $rawUsers = User::skip($offset)->take($limit)->get();
            
            // Format users payload: remove field1..field5, password, remember_token
            $items = $rawUsers->map(function ($user) {
                $userData = $user->toArray();
                unset(
                    $userData['field1'],
                    $userData['field2'],
                    $userData['field3'],
                    $userData['field4'],
                    $userData['field5'],
                    $userData['password'],
                    $userData['remember_token']
                );
                return $userData;
            })->values()->all();
        } elseif ($entity === 'batches') {
            $totalRecords = Batch::count();
            $items = Batch::skip($offset)->take($limit)->get()->toArray();
        } elseif ($entity === 'enrollments') {
            $totalRecords = CourseEnrollment::count();
            $items = CourseEnrollment::skip($offset)->take($limit)->get()->toArray();
        }

        $processedCount = count($items);
        $hasMore = ($offset + $processedCount) < $totalRecords;
        $nextOffset = $offset + $processedCount;

        if ($processedCount === 0) {
            return response()->json([
                'success' => true,
                'entity' => $entity,
                'processed' => 0,
                'total_records' => $totalRecords,
                'has_more' => false,
                'next_offset' => $nextOffset,
                'status_code' => 200,
                'message' => 'No items left to process.'
            ]);
        }

        $payload = [
            'entity' => $entity,
            'batch_index' => floor($offset / $limit) + 1,
            'chunk_size' => $limit,
            'total_records' => $totalRecords,
            'data' => $items,
        ];

        try {
            $startTime = microtime(true);
            
            $httpClient = Http::timeout(30);
            if (!empty($apiKey)) {
                $httpClient = $httpClient->withHeaders([
                    'Authorization' => 'Bearer ' . $apiKey,
                    'X-API-Key' => $apiKey,
                ]);
            }

            $response = $httpClient->post($targetUrl, $payload);
            $durationMs = round((microtime(true) - $startTime) * 1000, 2);

            return response()->json([
                'success' => $response->successful(),
                'entity' => $entity,
                'processed' => $processedCount,
                'total_records' => $totalRecords,
                'has_more' => $hasMore,
                'next_offset' => $nextOffset,
                'status_code' => $response->status(),
                'response_body' => $response->json() ?? Str::limit($response->body(), 300),
                'duration_ms' => $durationMs,
                'target_url' => $targetUrl,
            ]);
        } catch (\Exception $e) {
            Log::error("Migration Chunk Error [{$entity}]: " . $e->getMessage());

            return response()->json([
                'success' => false,
                'entity' => $entity,
                'processed' => 0,
                'total_records' => $totalRecords,
                'has_more' => true,
                'next_offset' => $offset,
                'status_code' => 500,
                'error' => $e->getMessage(),
                'target_url' => $targetUrl,
            ], 500);
        }
    }
}

