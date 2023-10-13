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
        $workshop = Workshop::findorFail($id);
        return view('students.workshopEnrollmentSuccess', compact('workshop'));
    }
    public function workshopEnrollmentSuccessNS($id){
        $id = Crypt::decrypt($id);
        $workshop = Workshop::findorFail($id);
        return view('students.workshopNextSteps', compact('workshop'));
    }

    public function recordings($id, $videoLink = null)
    {
        // $id = Crypt::decrypt($id);
        try {
            // batchId is batchEnrollemnt Id
            $batchId = $id;
            $id = decrypt($id);
            $chapterId = decrypt($videoLink);
        } catch (DecryptException $e) {
        }
        
        $enrollment = CourseEnrollment::findorFail($id);
        if(Auth::User()->id == $enrollment->userId){
        if ($enrollment->hasPaid == 1) {
            if ($videoLink) {
                $video = BatchContent::find($chapterId);
                // $video = BatchContent::where('batchId', $enrollment->batchId)->where('videoLink', $videoLink)->first();
                $content = BatchContent::where('batchId', $enrollment->batchId)->latest()->get();
                return view('students.recordings', compact('content', 'batchId', 'video', 'enrollment'));
            } else {
                $content = BatchContent::where('batchId', $enrollment->batchId)->latest()->get();
                $video = BatchContent::where('batchId', $enrollment->batchId)->latest()->first();
                return view('students.recordings', compact('content', 'batchId', 'video','enrollment'));
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
