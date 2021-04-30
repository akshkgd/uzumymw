<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Batch;
use App\User;
use App\CourseEnrollment;

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
            $batches = Batch::where('status', 0)->get();
            // 
            return view ('students.index', compact('Enrollments', 'batches'));}
            else{
                session()->flash('alert-danger', 'Your Acount has been terminated!');
                return view('students.index');
            }
        }
        elseif(Auth::User()->role == 1){
            $batches = Batch::where('TeacherId', Auth::User()->id)->orderBy('nextClass', 'asc')->get();
            
            return view('teachers.index', compact('batches'));
        }
        elseif(Auth::User()->role == 100){
            $users = User::all()->count();
            $batches = Batch::where('status', 1)->get()->count();
        return view('admin.index', compact('users', 'batches'));
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
