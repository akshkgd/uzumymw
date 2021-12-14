<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use App\Batch;
use App\User;
use App\Workshop;
use App\BatchTopics;
use App\CourseEnrollment;
use Razorpay\Api\Api;
use Session;
use Redirect;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'isAdmin']);
    }
    public function getUsers(){
        $users = User::all();
        return view('admin.emails', compact('users'))->with('i');
    }
    public function students()
    {
        $users = User::latest()->paginate(50);
        return view('admin.students', compact('users'))->with('i', (request()->input('page', 1) - 1) * 50);;
    }

    public function studentDetails($id)
    {
        $user = User::findorFail($id);
        $enrollments = CourseEnrollment::where('userId', $id)->get();
        return view('admin.studentDetails', compact('user', 'enrollments'))->with('i');
    }

    public function search(Request $request)
    {
        $search = $request->search_value;
        $users = User::where('email', 'LIKE', '%' . $search . '%')->orWhere('mobile', 'LIKE', '%' . $search . '%')->orderBy('created_at', 'desc')->get();
        if ($users->count() > 0){
        return view('admin.search', compact('users'))->with('i');}
        else{
            session()->flash('alert-danger', 'not found!');
        return  redirect()->back();
        }
    }
    public function banStudent($id)
    {
        $user  = User::findorFail($id);
        $user->status = 0;
        $user->save();
        session()->flash('alert-success', 'Account Updated Successfully!');
        return redirect()->back();
    }
    public function activateStudent($id)
    {
        $user  = User::findorFail($id);
        $user->status = 1;
        $user->save();
        session()->flash('alert-success', 'Account Updated Successfully!');
        return redirect()->back();
    }
    public function makeTeacher($id)
    {
        $user  = User::findorFail($id);
        $user->role = 1;
        $user->save();
        session()->flash('alert-success', 'Account Updated Successfully!');
        return redirect()->back();
    }
    public function downgradeTeacher($id)
    {
        $user  = User::findorFail($id);
        $user->role = 0;
        $user->save();
        session()->flash('alert-success', 'Account Updated Successfully!');
        return redirect()->back();
    }

    public function addTopics($id)
    {
        $id = Crypt::decrypt($id);
        $batch = Batch::findorFail($id);
        $topics = BatchTopics::where('batchId', $id)->get();
        return view('admin.addTopics', compact('topics','batch'));

    }

    public function liveBatches(){
        $batches = Batch::where('status', 1)->get();
        foreach($batches as $batch){
            $enrollments = CourseEnrollment::where('batchId', $batch->id)->get()->count();
            $unpaidEnrollments = CourseEnrollment::where('batchId', $batch->id)->where('hasPaid', 0)->count();
            $paidEnrollments = CourseEnrollment::where('batchId', $batch->id)->where('hasPaid', 1)->count();
            $earnings = CourseEnrollment::where('batchId', $batch->id)->where('hasPaid', 1)->sum('amountPayable');
            $batch->enrollments = $enrollments;
            $batch->unpaidEnrollments = $unpaidEnrollments;
            $batch->paidEnrollments = $paidEnrollments;
            $batch->earnings = $earnings;

        }
        return view ('admin.batch', compact('batches'))->with('i');
    }

    public function createBatch()
    {
        return view('admin.createBatch');
    }


    public function batchEnrollment($id)
    {
        $batch = Batch::findorFail($id);
        $paidEnrollments = CourseEnrollment::where('batchId', $batch->id)->where('hasPaid', 1)->get();
        $unpaidEnrollments = CourseEnrollment::where('batchId', $batch->id)->where('hasPaid', 0)->get();
        $paidUsers = $paidEnrollments->count();
        $unpaidUsers = $unpaidEnrollments->count();
        $totalUsers = $paidUsers + $unpaidUsers;
        $earning = (CourseEnrollment::where('batchId',$id)->where('hasPaid',1)->sum('amountPaid'))/100;
        $teacherEarning = $earning * 0.4;
        $profit = $earning - $teacherEarning;
        return view('admin.batchEnrollment', compact('batch', 'paidEnrollments', 'unpaidEnrollments', 'totalUsers', 'paidUsers', 'unpaidUsers', 'earning', 'teacherEarning', 'profit'))->with('i');
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
    public function paymentReceived($id)
    {
        $id = Crypt::decrypt($id);
        $enrollment = CourseEnrollment::findorFail($id);
        $batch = Batch::findorFail($enrollment->batchId);
        return view('admin.paymentReceived', compact('enrollment','batch'));
    }
    public function updatePaymentStatus(Request $request)
    {
        $enrollment = CourseEnrollment::findorFail($request->enrollmentId);
        $enrollment->invoiceId = $request->invoiceId;
        $enrollment->transactionId = $request->transactionId;
        $enrollment->paymentMethod = $request->paymentMethod;
        $enrollment->amountPaid = $request->amountPaid;
        $enrollment->hasPaid = $request->hasPaid;
        $enrollment->paidAt = Carbon::now();
        $enrollment->save();
        session()->flash('alert-success', 'Payment Details Updated Successfully!');
        return redirect('/home');
        
    }

    public function addWorkshop(Request $request)
    {
        $a = new Workshop();
        $a->topicId = $request->courseId;
        $a->name = $request->name;
        $a->description = $request->description;
        $a->payable = $request->payable ;
        $a->offerId = $request->offerId ;
        $a->limit = $request->limit;
        $a->img = $request->img ;
        if($request->hasFile('img')){
            // $a->association = $request->association;
            $path = $request->file('img')->store('img', 'public');
            $a->img = $path;}
        
        $a->startDate = $request->startDate ;
        $a->endDate = $request->endDate ;
        $a->schedule = $request->schedule ;
        $a->about = $request->about ;
        $a->learn = $request->learn;
        $a->benefits = $request->benefits ;
        $a->groupLink = $request->groupLink ;
        $a->groupLink1 = $request-> groupLink1;
        $a->teacherId = $request->teacherId ;
        $a->meetingLink = $request->meetingLink ;
        $a->topic = $request->topic ;
        $a->desc = $request->desc ;
        $a->nextClass = $request->nextClass ;
        $a->save();
        session()->flash('alert-danger', 'Batch Added');
        return redirect('/home');
    }
}
