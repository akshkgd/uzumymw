<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Batch;
use Carbon\Carbon;
use App\User;
use App\Workshop;
use App\CourseProgress;
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
    public function index(Request $request)
    {
        
        
        // return view('home');
        if(Auth::User()->role == 0){
            if(Auth::user()->status == 1){
            // $Enrollments = DB::table('course_enrollments')->where('userId', Auth::user()->id)
            // ->join('batches', 'batches.id', '=', 'course_enrollments.batchId')->orderBy('date', 'asc')->get();
            // dd($Enrollments);
            // $Enrollments = CourseEnrollment::where('userId', Auth::user()->id)->where('status', 1)->orderBy('nextClass', 'asc')->get();
            $enrollments = CourseEnrollment::where('userId', Auth::user()->id)->where('status', 1)->where('hasPaid', 1)->latest()->get();;
            // $workshopEnrollments = WorkshopEnrollment::where('userId', Auth::user()->id)->where('status', 1)->get();
            // $batches = Workshop::where('status',1)->latest()->take(2)->get();;
            
            return view ('students.index', compact('enrollments'));}
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
        elseif(Auth::User()->role == 10){
            $batch = Batch::findorFail($id);
            $paidEnrollments = CourseEnrollment::where('batchId', $batch->id)->where('hasPaid', 1)->get();
            $unpaidEnrollments = CourseEnrollment::where('batchId', $batch->id)->where('hasPaid', 0)->get();
            $paidUsers = $paidEnrollments->count();
            $unpaidUsers = $unpaidEnrollments->count();
            $totalUsers = $paidUsers + $unpaidUsers;
            $earning = (CourseEnrollment::where('batchId',$id)->where('hasPaid',1)->sum('amountPaid'))/100;
            $teacherEarning = $earning * 0.4;
            $profit = $earning - $teacherEarning;
            return view('affiliates', compact('batch', 'paidEnrollments', 'unpaidEnrollments', 'totalUsers', 'paidUsers', 'unpaidUsers', 'earning', 'teacherEarning', 'profit'))->with('i');
    
        }
        elseif(Auth::User()->role == 100){
            $range = $request->input('range', 'today'); // Default to 'today' if no range is selected

// Determine date range based on filter
switch ($range) {
    case 'today':
        $startDate = Carbon::today();
        $endDate = Carbon::today();
        // Comparison to yesterday
        $previousStartDate = Carbon::yesterday()->startOfDay();
        $previousEndDate = Carbon::yesterday()->endOfDay();
        
        break;

    case 'yesterday':
        $startDate = Carbon::yesterday()->startOfDay();
        $endDate = Carbon::yesterday()->endOfDay();
        // Comparison to the day before yesterday
        $previousStartDate = Carbon::yesterday()->subDay()->startOfDay();
        $previousEndDate = Carbon::yesterday()->subDay()->endOfDay();
        break;

    case '7':
        $startDate = Carbon::now()->subDays(7);
        $endDate = Carbon::now();
        $previousStartDate = $startDate->copy()->subDays(7);
        $previousEndDate = $endDate->copy()->subDays(7);
        break;

    case '30':
        $startDate = Carbon::now()->subDays(30);
        $endDate = Carbon::now();
        $previousStartDate = $startDate->copy()->subDays(30);
        $previousEndDate = $endDate->copy()->subDays(30);
        break;

    case '365':
        $startDate = Carbon::now()->subDays(365);
        $endDate = Carbon::now();
        $previousStartDate = $startDate->copy()->subDays(365);
        $previousEndDate = $endDate->copy()->subDays(365);
        break;

    case 'this_month':
        $startDate = Carbon::now()->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();
        $previousStartDate = $startDate->copy()->subMonth()->startOfMonth();
        $previousEndDate = $startDate->copy()->subMonth()->endOfMonth();
        break;

    case 'last_month':
        $startDate = Carbon::now()->subMonth()->startOfMonth();
        $endDate = Carbon::now()->subMonth()->endOfMonth();
        $previousStartDate = $startDate->copy()->subMonth()->startOfMonth();
        $previousEndDate = $startDate->copy()->subMonth()->endOfMonth();
        break;

    case 'last_3_months':
        $startDate = Carbon::now()->subMonths(3)->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();
        $previousStartDate = $startDate->copy()->subMonths(3)->startOfMonth();
        $previousEndDate = $startDate->copy()->subMonths(3)->endOfMonth();
        break;

    default:
        $startDate = Carbon::now()->subDays(7); // Default to last 7 days
        $endDate = Carbon::now();
        $previousStartDate = $startDate->copy()->subDays(7);
        $previousEndDate = $endDate->copy()->subDays(7);
        break;
}

$usersThisPeriod = User::whereDate('created_at', '>=', $startDate)
    ->whereDate('created_at', '<=', $endDate)
    ->count();

$usersPreviousPeriod = User::whereDate('created_at', '>=', $previousStartDate)
    ->whereDate('created_at', '<=', $previousEndDate)
    ->count();

// Fetch data for enrollments (paid members) in the selected period
$enrollmentsThisPeriod = CourseEnrollment::where('hasPaid', 1)
    ->whereDate('paidAt', '>=', $startDate)
    ->whereDate('paidAt', '<=', $endDate)
    ->count();

    $enrollmentsDetailsThisPeriod = CourseEnrollment::where('hasPaid', 1)
    ->whereDate('paidAt', '>=', $startDate)
    ->whereDate('paidAt', '<=', $endDate)->latest()->get();

$enrollmentsPreviousPeriod = CourseEnrollment::where('hasPaid', 1)
    ->whereDate('paidAt', '>=', $previousStartDate)
    ->whereDate('paidAt', '<=', $previousEndDate)
    ->count();

// Total revenue for the selected period
$totalThisPeriod = CourseEnrollment::where('hasPaid', 1)
    ->whereDate('paidAt', '>=', $startDate)
    ->whereDate('paidAt', '<=', $endDate)
    ->sum('amountPaid') / 100;

$totalPreviousPeriod = CourseEnrollment::where('hasPaid', 1)
    ->whereDate('paidAt', '>=', $previousStartDate)
    ->whereDate('paidAt', '<=', $previousEndDate)
    ->sum('amountPaid') / 100;

// Calculate percentage change for users, enrollments, and revenue
$userChangePercent = $usersPreviousPeriod > 0 ? (($usersThisPeriod - $usersPreviousPeriod) / $usersPreviousPeriod) * 100 : ($usersThisPeriod > 0 ? 100 : 0);
$enrollmentChangePercent = $enrollmentsPreviousPeriod > 0 ? (($enrollmentsThisPeriod - $enrollmentsPreviousPeriod) / $enrollmentsPreviousPeriod) * 100 : ($enrollmentsThisPeriod > 0 ? 100 : 0);
$revenueChangePercent = $totalPreviousPeriod > 0 ? (($totalThisPeriod - $totalPreviousPeriod) / $totalPreviousPeriod) * 100 : ($totalThisPeriod > 0 ? 100 : 0);

// Fetch total learning time in the selected period (in minutes)
$totalLearningTimeThisPeriod = CourseProgress::whereDate('firstAccess', '>=', $startDate)
    ->whereDate('firstAccess', '<=', $endDate)
    ->sum('timeSpent') / 60; // Assuming timeSpent is stored in minutes, adjust if needed

// Fetch total learning time in the previous period
$totalLearningTimePreviousPeriod = CourseProgress::whereDate('firstAccess', '>=', $previousStartDate)
    ->whereDate('firstAccess', '<=', $previousEndDate)
    ->sum('timeSpent') / 60;

// Round learning time to the nearest whole hour
$totalLearningTimeThisPeriod = floor($totalLearningTimeThisPeriod);
$totalLearningTimePreviousPeriod = floor($totalLearningTimePreviousPeriod);

// Calculate percentage change in learning time
$learningTimeChangePercent = $totalLearningTimePreviousPeriod > 0
    ? (($totalLearningTimeThisPeriod - $totalLearningTimePreviousPeriod) / $totalLearningTimePreviousPeriod) * 100
    : ($totalLearningTimeThisPeriod > 0 ? 100 : 0);
    // dd($enrollmentsDetailsThisPeriod);
return view('admin.index', compact(
    'usersThisPeriod', 'usersPreviousPeriod', 
    'enrollmentsThisPeriod', 'enrollmentsPreviousPeriod',
    'totalThisPeriod', 'totalPreviousPeriod',
    'userChangePercent', 'enrollmentChangePercent', 'revenueChangePercent',
    'totalLearningTimeThisPeriod', 'totalLearningTimePreviousPeriod', 'learningTimeChangePercent',
    'range', 'startDate', 'endDate', 'enrollmentsDetailsThisPeriod'
));  


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
