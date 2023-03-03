<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseEnrollment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\BatchTopics;
use App\Batch;
use App\User;
use App\Feedback;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches = Batch::where('status', 1)->get();
        return view ('course', compact('batches'));
    }
    
    public function details($id)
    {
        $batch = Batch::findorfail($id);
        if($batch->status == 1)
        {
        $topics = BatchTopics::where('batchId', $batch->id)->get();
        return view('courseDetails',compact('batch', 'topics') );
        }
        else{
            session()->flash('alert-danger', 'Error');
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function batchDetails($id){
        
        $id = Crypt::decrypt($id);
        $Enrollment = CourseEnrollment::findorFail($id);
        $batch = Batch::findorFail($Enrollment->batchId);
        $feedback = Feedback::where('batchId', $Enrollment->batchId)->where('userId', Auth::user()->id)->first();
        // dd($feedback);
        if ($Enrollment->userId == Auth::user()->id) {
            return view('students.batchDetails', compact('batch', 'Enrollment', 'feedback'));
        }
        else{
            session()->flash('alert-danger', 'Error');
            return redirect()->back();
        }
        
        
        
    }

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
    public function myClasses()
    {
        $batches = Batch::where('teacherId', Auth::User()->id)->get();
        foreach($batches as $batch){
            $count = 0;
            $total = CourseEnrollment::where('batchId',$batch->id)->where('hasPaid',1)->sum('amountPaid');
            $enrollments = CourseEnrollment::where('batchId',$batch->id)->where('hasPaid',1)->get();
            $count = $enrollments->count();
            $total = round(($total *40)/100,0); 
            $batch->count = $count;
            $batch->earning = $total;
        }
        // dd($batches);
        return view('teachers.myClasses',compact('batches'));
        
    }

    public function classDetails($id)
    {
        $batch = Batch::findorFail($id);
        $enrollments = CourseEnrollment::where('batchId', $id)->where('hasPaid', 1)->get();
        $total = CourseEnrollment::where('batchId',$id)->where('hasPaid',1)->sum('amountPayable');
        $total = round(($total *40)/100,0); 
        return view('teachers.classDetails', compact('batch', 'enrollments', 'total'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a = new Batch();
        $a->topicId = $request->courseId;
        $a->name = $request->name;
        $a->description = $request->description;
        $a->price = $request->price;
        $a->payable = $request->payable ;
        $a->offerId = $request->offerId ;
        $a->limit = $request->limit;
        $a->img = $request->img ;
        if($request->hasFile('img')){
            // $a->association = $request->association;
            $path = $request->file('img')->store('img', 'public');
            $a->img = $path;}
        $a->type = $request->type ;
        $a->startDate = $request->startDate ;
        $a->endDate = $request->endDate ;
        $a->schedule = $request->timing ;
        $a->about = $request->about ;
        $a->learn = $request->learn;
        $a->benefits = $request->benefits ;
        $a->groupLink = $request->groupLink ;
        $a->groupLink2 = $request-> groupLink2;
        $a->teacherId = $request->teacherId ;
        $a->meetingLink = $request->meetingLink ;
        $a->topic = $request->topic ;
        $a->desc = $request->desc ;
        $a->nextClass = $request->nextClass ;
        $a->save();
        session()->flash('alert-danger', 'Batch Added');
        return redirect('/home');
    }


    public function certificate($id)
    {
        $certificate = CourseEnrollment::where('certificateId', $id)->firstOrFail();
        $batch = Batch::findorFail($certificate->batchId);
            return view('students.cocCertificate', compact('certificate', 'batch'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // this is a test
    }
}
