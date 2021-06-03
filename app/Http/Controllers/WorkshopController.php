<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workshop;
use App\Feedback;
use App\WorkshopEnrollment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use App\CourseEnrollment;
use Session;
use Redirect;
use Carbon\Carbon;

class WorkshopController extends Controller
{
    public function index()
    {
        $batches = Workshop::where('status',1)->latest()->get();;
        return view('event', compact('batches'));
    }
    
    public function details($id)
    {
        $event = Workshop::findorfail($id);
        if($event->status == 1)
        {
        // $topics = BatchTopics::all();
        return view('eventDetails',compact('event') );
        }
        else{
            session()->flash('alert-danger', 'Error');
            return redirect()->back();
        }
    }

    public function workshopDetails($id){
        
        $id = Crypt::decrypt($id);
        $Enrollment = WorkshopEnrollment::findorFail($id);
        $workshop = Workshop::findorFail($Enrollment->workshopId);
        $feedback = Feedback::where('workshopId', $Enrollment->workshopId)->where('userId', Auth::user()->id)->first();
        // dd($feedback);
        if ($Enrollment->userId == Auth::user()->id) {
            return view('students.workshopDetails', compact('workshop', 'Enrollment', 'feedback'));
        }
        else{
            session()->flash('alert-danger', 'Error');
            return redirect()->back();
        }
        
        
        
    }

}
