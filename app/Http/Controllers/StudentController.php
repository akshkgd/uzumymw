<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseEnrollment;
use App\BatchContent;
use App\BatchSection;
use App\WorkshopEnrollment;
use App\CourseProgress;
use Carbon\Carbon;
use App\Workshop;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Batch;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;
use PDF;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function notes($id)
    {
        // $id = Crypt::decrypt($id);
        try {
            $id = decrypt($id);
        } catch (DecryptException $e) {
        }
        $enrollment = CourseEnrollment::findorFail($id);
        if ($enrollment->hasPaid == 1) {
            $batch = Batch::findorFail($enrollment->batchId);
            $content = BatchContent::where('batchId', $enrollment->batchId)->where('type', 1)->latest()->get();
            // dd($content);
            return view('students.content', compact('content', 'batch'));
        } else {
            session()->flash('alert-warning', 'Complete your payment to see notes and assignments');
            return redirect()->back();
        }
    }

    public function workshopEnrollmentSuccess($id)
    {
        $id = Crypt::decrypt($id);
        $workshop = Workshop::findorFail($id);
        return view('students.workshopEnrollmentSuccess', compact('workshop'));
    }
    public function workshopEnrollmentSuccessNS($id)
    {
        $id = Crypt::decrypt($id);
        $workshop = Workshop::findorFail($id);
        return view('students.workshopNextSteps', compact('workshop'));
    }


    // public function recordings($id, $videoLink = null)
    // {
    //     try {
    //         $batchId = $id;
    //         $id = decrypt($id);
    //         $chapterId = decrypt($videoLink);
    //     } catch (DecryptException $e) {
    //     }

    //     $enrollment = CourseEnrollment::findorFail($id);
    //     if(Auth::User()->id == $enrollment->userId){
    //     if ($enrollment->hasPaid == 1) {
    //         if ($videoLink) {
    //             $video = BatchContent::find($chapterId);
    //             // $video = BatchContent::where('batchId', $enrollment->batchId)->where('videoLink', $videoLink)->first();
    //             $content = BatchContent::where('batchId', $enrollment->batchId)->latest()->get();
    //             return view('students.recordings', compact('content', 'batchId', 'video', 'enrollment'));
    //         } else {
    //             $content = BatchContent::where('batchId', $enrollment->batchId)->latest()->get();
    //             $video = BatchContent::where('batchId', $enrollment->batchId)->latest()->first();
    //             return view('students.recordings', compact('content', 'batchId', 'video','enrollment'));
    //         }
    //     } else {
    //         session()->flash('alert-warning', 'Complete your payment to see notes and assignments');
    //         return redirect()->back();
    //     }
    //     }
    // else{
    //     session()->flash('alert-danger', 'You are not authorized to view the recordings');
    //     return redirect()->back();
    // }
    // }

    public function recordings($id, $videoLink = null)
    {
        try {
            // batchId is batch Enrollment Id
            $batchId = $id;
            $id = decrypt($id);
            $chapterId = decrypt($videoLink);
        } catch (DecryptException $e) {
            // Handle decryption exception if needed
        }

        $enrollment = CourseEnrollment::findOrFail($id);
        if (!empty($chapterId)) {
            $progress = $this->updateCourseProgress($enrollment, $chapterId);
        }

        if (Auth::user()->id == $enrollment->userId) {
            
            if ($enrollment->hasPaid == 1) {
                $content = BatchContent::where('batchId', $enrollment->batchId)->latest()->get();
                if (!isset($chapterId)) {
                    $chapterId = null; 
                }
                $video = $videoLink ? BatchContent::find($chapterId) : $content->first();
                // $intro = false;
                $intro = ($videoLink) ? "false" : "true";
                if (blank($enrollment->accessTill)) {
                    $field5 = $enrollment->batch->field5;
                
                    // If field5 is empty or not numeric, default to 1 year
                    $yearsToAdd = (is_numeric($field5) && (int)$field5 > 0) ? (int)$field5 : 1;
                
                    $effectiveAccessTill = Carbon::parse($enrollment->batch->startDate)->addYears($yearsToAdd);
                }
                 else {
                    $effectiveAccessTill = Carbon::parse($enrollment->accessTill);
                }

                if ($effectiveAccessTill->isFuture()) {
                    $subStatus = true;
                } else {
                    $subStatus = false;
                }
                $accessTill = Carbon::now()->diffInDays(Carbon::parse($enrollment->paidAt));
                $sections = BatchSection::where('batchId', $enrollment->batchId)
                    ->with(['chapters' => function($query) {
                        $query->with(['progress' => function($query) {
                            $query->where('userId', Auth::id())
                                ->select(['contentId', 'status', 'id']);
                        }]);
                    }])
                    ->orderBy('order')
                    ->get();
                $accessOn = true;
                if ($videoLink) {
                    $isVideoUnlocked = ($accessTill >=  $video->accessOn) ? true : false;
                    $enrollmentDate = Carbon::parse($enrollment->paidAt);
                    $videoUnlockedOn = $enrollmentDate->copy()->addDays($video->accessOn);
                    $daysUntilVideoUnlocks = Carbon::now()->diffInDays($videoUnlockedOn, false) + 1;
                } else {
                    $isVideoUnlocked = false;
                    $daysUntilVideoUnlocks = Carbon::now()->addDays(7);
                }
                if ($sections->isEmpty()) {
                   
                    return view('students.recordings', compact('content', 'subStatus', 'batchId', 'video', 'enrollment', 'accessTill', 'isVideoUnlocked', 'daysUntilVideoUnlocks'));
                } else {
                   
                    return view('students.recordingsTA', compact('sections', 'subStatus', 'content', 'batchId', 'video', 'intro', 'enrollment', 'accessTill', 'isVideoUnlocked', 'daysUntilVideoUnlocks'));
                }
            } else {
                session()->flash('alert-warning', 'Complete your payment to see notes and assignments');
                return redirect()->back();
            }
        } else {
            session()->flash('alert-danger', 'You are not authorized to view the recordings');
            return redirect()->back();
        }
    }

    private function updateCourseProgress($enrollment, $chapterId){
        $courseProgress = CourseProgress::where('userId', Auth::user()->id)
        ->where('batchId', $enrollment->batchId)
        ->where('contentId', $chapterId)
        ->first();

        if ($courseProgress) {
            // Update existing progress
            $courseProgress->visited += 1; // or $courseProgress->visited = $visited; based on your requirement
            $courseProgress->lastAccess = now();
            $courseProgress->save();
        } else {
            $progress = new CourseProgress;
            $progress->userId = Auth::user()->id;
            $progress->batchId = $enrollment->batchId;
            $progress->contentId = $chapterId;
            $progress->visited = 1;
            $progress->timespent = 0;
            $progress->firstAccess = now();
            $progress->lastAccess = now();
            $progress->save();
        }
    }
    // In VideoController.php
public function updateTimeSpent(Request $request)
{
    $videoId = intval($request->input('videoId'));
    $batchId = intval($request->input('batchId'));
    $currentProgress = floatval($request->input('progress')); // Get current video timestamp
    $totalVideoDuration = intval($request->input('duration'));

    try {
        $courseProgress = CourseProgress::where('userId', Auth::user()->id)
            ->where('batchId', $batchId)
            ->where('contentId', $videoId)
            ->first();
        
        if ($courseProgress) {
            // Update both time spent and progress
            $courseProgress->timeSpent = ($courseProgress->timeSpent ?? 0) + 1;
            $courseProgress->progress = $currentProgress; // Save current video timestamp
            $courseProgress->save();

            // Update course enrollment time spent
            $courseEnrollment = CourseEnrollment::where('userId', Auth::user()->id)
                ->where('batchId', $batchId)
                ->first();

            if ($courseEnrollment) {
                $courseEnrollment->time_spent = ($courseEnrollment->time_spent ?? 0) + 1;
                $courseEnrollment->save();
            }
        } else {
            // Create new progress record if it doesn't exist
            $courseProgress = new CourseProgress();
            $courseProgress->userId = Auth::user()->id;
            $courseProgress->batchId = $batchId;
            $courseProgress->contentId = $videoId;
            $courseProgress->timeSpent = 1;
            $courseProgress->progress = $currentProgress;
            $courseProgress->save();
        }

        return response()->json(['status' => 'success']);
    } catch (\Exception $e) {
        \Log::error('Error updating time spent: ' . $e->getMessage());
        return response()->json(['status' => 'error', 'message' => 'Failed to update time spent'], 500);
    }
}


    public function joinClass(){

    }
    public function fff(){
        $session = \DB::table('sessions')
        ->where('ip_address', '223.233.84.0')->get();
        dd($session);
    }
    public function sessions()
    {
        $devices = \DB::table('sessions')
            ->where('user_id', \Auth::user()->id)
            ->latest('last_activity')
            ->select('id', 'ip_address', 'user_agent', 'last_activity')
            ->get();
        foreach ($devices as $device) {
            $agent = new Agent();
            $agent->setUserAgent($device->user_agent);

            $device->browser = $agent->browser();
            $device->is_mobile = $agent->isMobile();
            $device->is_desktop = $agent->isDesktop();
            $device->device_name = $agent->device();
        }
        return view('students.sessions')
            ->with('devices', $devices)
            ->with('current_session_id', \Session::getId());
    }

    public function deleteSession(Request $request, $sessionId)
    {
        DB::table('sessions')->where('id', $sessionId)->delete();
        // Add your logic to check if the session should be deleted (e.g., based on user agent or any other condition)

        // Delete the session
        // Replace 'your_session_key' with the actual session key you want to delete
        session()->forget($sessionId);

        // Redirect back or to a specific page after deleting the session
        return redirect()->back()->with('success', 'Session deleted successfully');
    }

    public function recordingsTest($userId, $batchId)
    {
        // Fetch the relevant course enrollment record for the user and batch
        $courseEnrollment = CourseEnrollment::where('userId', $userId)
            ->where('batchId', $batchId)
            ->first();

        if ($courseEnrollment) {
            $paidAt = $courseEnrollment->paidAt;

            // Check if paidAt is set (i.e., the user has made a payment)
            if ($paidAt) {
                // Calculate the number of days since the payment was made
                $daysSincePayment = Carbon::now()->diffInDays(Carbon::parse($paidAt));

                // Get all content IDs in the batch
                $allContentIds = BatchContent::where('batchId', $batchId)->pluck('id')->toArray();

                // Initialize an array to store the unlocked content IDs
                $unlockedContentIds = [];

                // Loop through each content ID and check if it should be unlocked
                foreach ($allContentIds as $contentId) {
                    // Example: Unlock content every 2 days after the payment
                    // Adjust this logic based on your specific requirements
                    if ($daysSincePayment >= 2) {
                        $unlockedContentIds[] = $contentId;
                    }
                }

                // Get section IDs for the unlocked content
                $unlockedSectionIds = BatchContent::whereIn('id', $unlockedContentIds)
                    ->pluck('sectionId')
                    ->unique()
                    ->toArray();

                // Filter the visible sections based on the unlocked section IDs
                $visibleSections = BatchSection::whereIn('id', $unlockedSectionIds)->get();

                // Display or process the $visibleSections as needed
                return response()->json(['message' => 'Sections unlocked successfully', 'sections' => $visibleSections]);
            } else {
                return response()->json(['message' => 'User has not made a payment.']);
            }
        } else {
            return response()->json(['message' => 'Course enrollment not found.']);
        }
    }

    public function markVideoComplete(Request $request)
    {
        try {
            $videoId = $request->input('videoId');
            $batchId = $request->input('batchId');

            // Find or create progress record
            $courseProgress = CourseProgress::firstOrNew([
                'userId' => Auth::user()->id,
                'batchId' => $batchId,
                'contentId' => $videoId,
            ]);

            // Update status
            $courseProgress->status = 1;
            if (!$courseProgress->exists) {
                $courseProgress->timeSpent = 0;
                $courseProgress->visited = 1;
                $courseProgress->firstAccess = now();
            }
            $courseProgress->lastAccess = now();
            $courseProgress->save();

            // Calculate overall course progress
            $totalVideos = BatchContent::where('batchId', $batchId)
                ->where('type', 2) // Assuming 2 is for video type
                ->count();

            $completedVideos = CourseProgress::where('userId', Auth::user()->id)
                ->where('batchId', $batchId)
                ->where('status', 1)
                ->count();

            $progressPercentage = ($totalVideos > 0) ? 
                round(($completedVideos / $totalVideos) * 100) : 0;

            // Update course enrollment progress
            CourseEnrollment::where('userId', Auth::user()->id)
                ->where('batchId', $batchId)
                ->update(['progress' => $progressPercentage]);

            return response()->json([
                'status' => 'success',
                'progress' => $progressPercentage,
                'message' => 'Video marked as complete'
            ]);

        } catch (\Exception $e) {
            \Log::error('Error marking video complete: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to mark video as complete'
            ], 500);
        }
    }

    public function certificate($certificateId)
    {
        try {
            $enrollment = CourseEnrollment::where('certificateId', $certificateId)
                ->where('userId', Auth::user()->id)
                ->firstOrFail();

            if ($enrollment->batch->status != 3) {
                session()->flash('alert-warning', 'Certificate is only available for completed courses');
                return redirect()->back();
            }

            $data = [
                'user' => Auth::user(),
                'certificate' => $enrollment,
                'date' => Carbon::parse($enrollment->batch->endDate)->format('F d, Y')
            ];

            // Custom dimensions in points (1 inch = 72 points)
            $width = 1024;  // Example width
            $height = 768;  // Example height
            
            $pdf = PDF::loadView('students.certificatePdf', $data)
                ->setPaper([0, 0, $width, $height], 'landscape')  // Added 'landscape' orientation
                ->setOptions([
                    'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,
                    'defaultFont' => 'Poppins',
                    'margin_left' => 0,
                    'margin_right' => 0,
                    'margin_top' => 0,
                    'margin_bottom' => 0
                ]);
            
            $filename = 'certificate-' . $certificateId . '.pdf';
            return $pdf->download($filename);
            // return view('students.certificatePdf', $data);
        } catch (\Exception $e) {
            \Log::error('Certificate generation error: ' . $e->getMessage());
            session()->flash('alert-danger', 'Error generating certificate. Please try again.');
            return redirect()->back();
        }
    }

    public function downloadInvoice($enrollmentId)
    {
        try {
            \Log::info('Starting invoice download process for enrollment: ' . $enrollmentId);
            
            // Find enrollment and verify ownership
            $enrollment = CourseEnrollment::findOrFail($enrollmentId);
            \Log::info('Enrollment found', ['enrollment' => $enrollment->toArray()]);
            
            if (Auth::id() !== $enrollment->userId) {
                \Log::warning('Unauthorized access attempt', ['user_id' => Auth::id(), 'enrollment_user_id' => $enrollment->userId]);
                session()->flash('alert-danger', 'Unauthorized access to invoice');
                return redirect()->back();
            }

            // Only allow invoice download for paid enrollments
            if (!$enrollment->hasPaid) {
                \Log::warning('Unpaid enrollment invoice attempt', ['enrollment_id' => $enrollmentId]);
                session()->flash('alert-warning', 'Invoice is only available for paid enrollments');
                return redirect()->back();
            }

            // Load relationships needed for invoice
            
            // Generate invoice ID if not exists
            if (!$enrollment->invoiceId) {
                $enrollment->invoiceId = 'INV-' . strtoupper(uniqid());
                $enrollment->save();
            }

            $data = [
                'enrollment' => $enrollment,
                'user' => $enrollment->students,
                'batch' => $enrollment->batch,
                'paymentMethod' => $enrollment->paymentMethod,
                'transactionId' => $enrollment->transactionId,
                'invoiceDate' => Carbon::parse($enrollment->paidAt)->format('d M Y'),
                'amount' => number_format($enrollment->amountPaid / 100, 2), // Convert from paisa to rupees
                'invoiceId' => $enrollment->invoiceId
            ];
            
            \Log::info('Preparing PDF with data', ['data' => $data]);

            try {
                $pdf = PDF::loadView('students.invoicePdf', $data);
                \Log::info('PDF loaded successfully');
                
                $filename = 'invoice_' . $enrollment->invoiceId . '.pdf';
                return $pdf->download($filename);
            } catch (\Exception $pdfError) {
                \Log::error('PDF generation failed', [
                    'error' => $pdfError->getMessage(),
                    'trace' => $pdfError->getTraceAsString()
                ]);
                throw $pdfError;
            }

        } catch (\Exception $e) {
            \Log::error('Invoice download error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'enrollment_id' => $enrollmentId
            ]);
            session()->flash('alert-danger', 'Error generating invoice. Please try again.');
            return redirect()->back();
        }
    }
}
