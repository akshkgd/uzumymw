<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseEnrollment;
use App\BatchContent;
use App\BatchSection;
use App\WorkshopEnrollment;
use Carbon\Carbon;
use App\Workshop;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Batch;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;

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

    // public function recordings($id, $videoLink = null)
    // {
    //     try {
    //         $batchId = $id;
    //         $id = decrypt($id);
    //         $chapterId = decrypt($videoLink);
    //     } catch (DecryptException $e) {
    //     }
        
    //     $enrollment = CourseEnrollment::findorFail($id);
    //     if(Auth::User()->id == $enrollment->userId){
    //     if ($enrollment->hasPaid == 1) {
    //         if ($videoLink) {
    //             $video = BatchContent::find($chapterId);
    //             // $video = BatchContent::where('batchId', $enrollment->batchId)->where('videoLink', $videoLink)->first();
    //             $content = BatchContent::where('batchId', $enrollment->batchId)->latest()->get();
    //             return view('students.recordings', compact('content', 'batchId', 'video', 'enrollment'));
    //         } else {
    //             $content = BatchContent::where('batchId', $enrollment->batchId)->latest()->get();
    //             $video = BatchContent::where('batchId', $enrollment->batchId)->latest()->first();
    //             return view('students.recordings', compact('content', 'batchId', 'video','enrollment'));
    //         }
    //     } else {
    //         session()->flash('alert-warning', 'Complete your payment to see notes and assignments');
    //         return redirect()->back();
    //     }
    //     }
    // else{
    //     session()->flash('alert-danger', 'You are not authorized to view the recordings');
    //     return redirect()->back();
    // }
    // }

    public function recordings($id, $videoLink = null)
    {
        try {
            // batchId is batchEnrollment Id
            $batchId = $id;
            $id = decrypt($id);
            $chapterId = decrypt($videoLink);
        } catch (DecryptException $e) {
            // Handle decryption exception if needed
        }
        
        $enrollment = CourseEnrollment::findOrFail($id);

        if (Auth::user()->id == $enrollment->userId) {
            if ($enrollment->hasPaid == 1) {
                $content = BatchContent::where('batchId', $enrollment->batchId)->latest()->get();
                $video = $videoLink ? BatchContent::find($chapterId) : $content->first();
                $accessTill = Carbon::now()->diffInDays(Carbon::parse($enrollment->paidAt));
                $sections = BatchSection::where('batchId', $enrollment->batchId)->orderBy('order')->get();

                if ($sections->isEmpty()) {
                    // No sections, pass contents directly
                    return view('students.recordings', compact('content', 'batchId', 'video', 'enrollment', 'accessTill'));
                } else {
                    // Pass sections and contents
                    return view('students.recordings', compact('sections', 'content', 'batchId', 'video', 'enrollment', 'accessTill'));
                }
            } else {
                session()->flash('alert-warning', 'Complete your payment to see notes and assignments');
                return redirect()->back();
            }
        } else {
            session()->flash('alert-danger', 'You are not authorized to view the recordings');
            return redirect()->back();
        }
    }

    public function sessions(){
        $devices = \DB::table('sessions')
    ->where('user_id', \Auth::user()->id)
    ->latest('last_activity')
    ->select('id', 'ip_address', 'user_agent', 'last_activity')
    ->get();
    foreach ($devices as $device) {
        $agent = new Agent();
        $agent->setUserAgent($device->user_agent);

        $device->browser = $agent->browser();
        $device->is_mobile = $agent->isMobile();
        $device->is_desktop = $agent->isDesktop();
        $device->device_name = $agent->device();
    }
    return view('students.sessions')
    ->with('devices', $devices)
    ->with('current_session_id', \Session::getId());
    }

    public function deleteSession(Request $request, $sessionId)
    {
        DB::table('sessions')->where('id', $sessionId)->delete();
        // Add your logic to check if the session should be deleted (e.g., based on user agent or any other condition)
        
        // Delete the session
        // Replace 'your_session_key' with the actual session key you want to delete
        session()->forget($sessionId);

        // Redirect back or to a specific page after deleting the session
        return redirect()->back()->with('success', 'Session deleted successfully');
    }

    public function recordingsTest($userId, $batchId)
    {
        // Fetch the relevant course enrollment record for the user and batch
        $courseEnrollment = CourseEnrollment::where('userId', $userId)
            ->where('batchId', $batchId)
            ->first();

        if ($courseEnrollment) {
            $paidAt = $courseEnrollment->paidAt;

            // Check if paidAt is set (i.e., the user has made a payment)
            if ($paidAt) {
                // Calculate the number of days since the payment was made
                $daysSincePayment = Carbon::now()->diffInDays(Carbon::parse($paidAt));

                // Get all content IDs in the batch
                $allContentIds = BatchContent::where('batchId', $batchId)->pluck('id')->toArray();

                // Initialize an array to store the unlocked content IDs
                $unlockedContentIds = [];

                // Loop through each content ID and check if it should be unlocked
                foreach ($allContentIds as $contentId) {
                    // Example: Unlock content every 2 days after the payment
                    // Adjust this logic based on your specific requirements
                    if ($daysSincePayment >= 2) {
                        $unlockedContentIds[] = $contentId;
                    }
                }

                // Get section IDs for the unlocked content
                $unlockedSectionIds = BatchContent::whereIn('id', $unlockedContentIds)
                    ->pluck('sectionId')
                    ->unique()
                    ->toArray();

                // Filter the visible sections based on the unlocked section IDs
                $visibleSections = BatchSection::whereIn('id', $unlockedSectionIds)->get();

                // Display or process the $visibleSections as needed
                return response()->json(['message' => 'Sections unlocked successfully', 'sections' => $visibleSections]);
            } else {
                return response()->json(['message' => 'User has not made a payment.']);
            }
        } else {
            return response()->json(['message' => 'Course enrollment not found.']);
        }
    }
}
