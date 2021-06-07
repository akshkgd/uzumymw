<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CourseEnrollment;
use App\WorkshopEnrollment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Batch;
use App\Workshop;
use App\batchContent;
use App\BatchTopics;
use App\Feedback;

class TeacherController extends Controller
{
    public function updateClass(Request $request)
    {   

    
        $batch = Batch::findorFail($request->batchId);
        $batch->topic = $request->topic;
        $batch->nextClass = $request->nextClass;
        $batch->desc = $request->desc;
        $batch->meetingLink = $request->meetingLink;
        $batch->save();
        return redirect()->back();
        
    }

    public function updateWorkshopClass(Request $request)
    {   

    
        $batch = Workshop::findorFail($request->batchId);
        $batch->topic = $request->topic;
        $batch->nextClass = $request->nextClass;
        $batch->desc = $request->desc;
        $batch->meetingLink = $request->meetingLink;
        $batch->save();
        return redirect()->back();
        
    }
    public function enrollments($id)
    {
        $batch = Batch::findorFail($id);
        if($batch->teacherId == Auth::user()->id)
        {
        $enrollments = CourseEnrollment::where('batchId', $id)->where('hasPaid', 1)->get();
        return view('teachers.enrollments', compact('enrollments'))->with('i');
        }
        else{
            return redirect()->back();
        }
    }

    public function workshopEnrollments($id)
    {
        $batch = Workshop::findorFail($id);
        if($batch->teacherId == Auth::user()->id)
        {
        $enrollments = WorkshopEnrollment::where('workshopId', $id)->where('status', 1)->get();
        $failedEnrollments = WorkshopEnrollment::where('workshopId', $id)->where('status', 0)->get();
        return view('teachers.workshopEnrollments', compact('enrollments', 'failedEnrollments'))->with('i');
        }
        else{
            return redirect()->back();
        }
    }



    public function generateCertificate($id)
    {
        $enrollment = CourseEnrollment::findorFail($id);
        if($enrollment->certificateId == '')
        {
            $enrollment->certificateId = substr(md5(time()), 0, 16);
            $enrollment->save();
            $name = Auth::user()->name;
            session()->flash('alert-success',  'Certificate Generated Successfully!');
            return back();
        }
    }

    public function addContent($id)
    {
        $batch = Batch::findorFail($id);
        $batchContent = BatchContent::where('batchId', $batch->id)->get();
        if($batch->teacherId == Auth::user()->id)
        return view('teachers.addContent', compact('batch', 'batchContent'));
    }

    public function updateBatchStatus(Request $request)
    {
        $batch = Batch::findorFail($request->batchId);
        $batch->status = $request->status;
        $batch->save();
        session()->flash('alert-success',  'Status Updated!');
        return back();

    }


    public function storeContent( Request $request)
    {
        $batch = Batch::findorFail($request->batchId);
        if($batch->teacherId == Auth::user()->id)
        {
            $a = new BatchContent;
            $a->title = $request->title;
            $a->type = $request->type;
            $a->desc  = $request->desc;
            $a->videoLink = $request->videoLink;
            $a->batchId = $batch->id;
            $a->teacherId = Auth::user()->id;
            $a->save();
            session()->flash('alert-success',  'Content added Successfully!');
            return back();

        }
    }
}
