<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Batch;
use App\User;
use App\Workshop;
use App\CourseEnrollment;
use App\WorkshopEnrollment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        
        // return view('home');
        if(Auth::User()->role == 0){
            if(Auth::user()->status == 1){
            // $Enrollments = DB::table('course_enrollments')->where('userId', Auth::user()->id)
            // ->join('batches', 'batches.id', '=', 'course_enrollments.batchId')->orderBy('date', 'asc')->get();
            // dd($Enrollments);
            $Enrollments = CourseEnrollment::where('userId', Auth::user()->id)->where('status', 1)->orderBy('nextClass', 'asc')->get();
            $workshopEnrollments = WorkshopEnrollment::where('userId', Auth::user()->id)->where('status', 1)->get();
            $batches = Workshop::where('status',1)->latest()->take(2)->get();;
            // 
            return view ('students.index', compact('Enrollments', 'batches', 'workshopEnrollments'));}
            else{
                session()->flash('alert-danger', 'Your Acount has been terminated!');
                return view('students.index');
            }
        }
        elseif(Auth::User()->role == 1){
            $batches = Batch::where('TeacherId', Auth::User()->id)->where('status', '<', 3)->orderBy('nextClass', 'asc')->get();
            $workshops = Workshop::where('TeacherId', Auth::User()->id)->where('status', '<', 3)->orderBy('nextClass', 'asc')->get();
            
            return view('teachers.index', compact('batches', 'workshops'));
        }
        elseif(Auth::User()->role == 100){
            $users = User::all()->count();
            $month_date = date('m');
            $usersThisMonth = User::whereMonth('created_at', $month_date)->count();
            $batches = Batch::where('status', 1)->get()->count();
            $total = CourseEnrollment::where('hasPaid', 1)->sum('amountPaid')/100;
            $month = CourseEnrollment::where('hasPaid', 1)->whereMonth('paidAt', $month_date)->sum('amountPaid')/100;
            $previousMonth = CourseEnrollment::where('hasPaid', 1)->whereMonth('paidAt', date('m', strtotime('-1 month')))->sum('amountPaid')/100;
        return view('admin.index', compact('users', 'batches', 'total', 'month', 'previousMonth', 'usersThisMonth'));
        }
        }
        else{
            return view ('home');
        }
    }
    
    public function editProfile(){
        return view ('editProfile');
    }

    public function updateProfile($id){
        //
    }
}
