<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseEnrollment;
use App\BatchContent;
use App\WorkshopEnrollment;
use App\Workshop;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Batch;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

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

    public function workshopEnrollmentSuccess($id){
        $id = Crypt::decrypt($id);
        $enrollment = WorkshopEnrollment::findorFail($id);
        $workshop = Workshop::findorFail($enrollment->workshopId);
        return view('students.workshopEnrollmentSuccess', compact('enrollment', 'workshop'));
    }

    public function recordings($id, $videoLink = null)
    {
        // $id = Crypt::decrypt($id);
        try {
            // batchId is batchEnrollemnt Id
            $batchId = $id;
            $id = decrypt($id);
        } catch (DecryptException $e) {
        }
        
        $enrollment = CourseEnrollment::findorFail($id);
        if(Auth::User()->id == $enrollment->userId){
        if ($enrollment->hasPaid == 1) {
            if ($videoLink) {
                $video = BatchContent::where('batchId', $enrollment->batchId)->where('type', 2)->where('videoLink', $videoLink)->first();
                $content = BatchContent::where('batchId', $enrollment->batchId)->where('type', 2)->latest()->get();
                return view('students.recordings', compact('content', 'batchId', 'video'));
            } else {
                $content = BatchContent::where('batchId', $enrollment->batchId)->where('type', 2)->latest()->get();
                $video = BatchContent::where('batchId', $enrollment->batchId)->where('type', 2)->latest()->first();
                return view('students.recordings', compact('content', 'batchId', 'video'));
            }
        } else {
            session()->flash('alert-warning', 'Complete your payment to see notes and assignments');
            return redirect()->back();
        }
        }
    else{
        session()->flash('alert-danger', 'You are not authorized to view the recordings');
        return redirect()->back();
    }
    }
}
