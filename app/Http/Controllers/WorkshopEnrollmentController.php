<?php

namespace App\Http\Controllers;

use App\Workshop;
use App\WorkshopEnrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use App\CourseEnrollment;
use Razorpay\Api\Api;
use Session;
use Redirect;
use Carbon\Carbon;

class WorkshopEnrollmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function checkEnroll($id)
    {
        $workshop = Workshop::findorFail($id);
        if($this->isEnrolled($id)=='true')
        {
            if($this->batchStatus($id)=='true')
            {
                if($this->inLimit($id)=='true')
                {
                    $a = new WorkshopEnrollment;
                    $a->userId = Auth::User()->id;
                    $a->workshopId = $workshop->id;
                    $a->certificateId = substr(md5(time()), 0, 16);
                    $a->save();
                    session()->flash('alert-success', 'You have successfully enrolled in the '. $workshop->name);
                    return redirect('/home');

                }
                else{
                    $a = new WorkshopEnrollment;
                    $a->userId = Auth::User()->id;
                    $a->workshopId = $workshop->id;
                    $a->status = 0;
                    $a->save();
                    session()->flash('alert-warning', 'All the seats are full');
                    return redirect('/home');
                }
                
            }
            else{
                session()->flash('alert-warning', 'Batch is not active');
                return redirect('/home');
            }
        }
        else{
            session()->flash('alert-warning', 'already enrolled');
            return redirect( '/home');
        }

    }
    private function isEnrolled($id){
        $isEnrolled = WorkshopEnrollment::where('workshopId', $id)->where('userId', Auth::user()->id)->get();
        if($isEnrolled->count() == 0)
        return 'true';
        
       
    }
    private function enroll($batch){
        
        
    }
    private function batchStatus($id){
        $workshop = Workshop::findorFail($id);
        if($workshop->status == 1)
        {
            return 'true';
        }
    }

    private function inLimit($id){
        $workshop = Workshop::findorFail($id);
        if($workshop->limit !=''){
        $isEnrolled = WorkshopEnrollment::where('workshopId', $id)->get();
        if($isEnrolled->count() < $workshop->limit)
        return 'true';
        }
        
       
    }
    public function certificate($id)
    {
        $certificate = WorkshopEnrollment::where('certificateId', $id)->firstOrFail();
        $batch = Workshop::findorFail($certificate->workshopId);
            return view('students.certificate', compact('certificate', 'batch'));
        
    }

}
