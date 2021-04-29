<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use App\Batch;
use App\User;
use App\BatchTopics;
use App\CourseEnrollment;
use Razorpay\Api\Api;
use Session;
use Redirect;

class AdminController extends Controller
{
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
        $user->is_active = 0;
        $user->save();
        session()->flash('alert-success', 'Account Updated Successfully!');
        return redirect()->back();
    }
    public function activateStudent($id)
    {
        $user  = User::findorFail($id);
        $user->is_active = 1;
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
}
