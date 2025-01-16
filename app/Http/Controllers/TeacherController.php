<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CourseEnrollment;
use App\WorkshopEnrollment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Notification;
use App\Batch;
use App\User;
use App\CourseProgress;
use App\Workshop;
use App\BatchContent;
use App\BatchTopics;
use App\BatchSection;
use App\Feedback;
use App\Notifications\recordingAdded;

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
    public function cssEnrollments(){
        $enrollments = CourseEnrollment::join('batches', 'course_enrollments.batchId', '=', 'batches.id')
    ->where('batches.topicId', 100)
    ->where('course_enrollments.hasPaid', 1)
    ->select('course_enrollments.*')->latest() 
    ->paginate(100); 
    return view('admin.cssEnrollment', compact('enrollments'))->with('i', (request()->input('page', 1) - 1) * 100);
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
        return view('teachers.enrollments', compact('enrollments', 'batch'))->with('i');
        }
        else{
            return redirect()->back();
        }
    }

    public function searchUser(Request $request){
        
        // Get the search query from the request
        $query = $request->input('query');

        // Search users by name, email, or phone number
        $users = User::where(function($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'like', "%{$query}%")
                         ->orWhere('email', 'like', "%{$query}%")
                         ->orWhere('mobile', 'like', "%{$query}%");
        })
        ->where('role', 0)
        ->orderBy('created_at', 'desc') // Order by the latest created users first
        ->get();


        // Return view with the search results
        return view('teachers.userResult', compact('users', 'query'));

    }
    public function showEnrollments($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);
        
        $enrollments = CourseEnrollment::where('userId', $id)
                                ->where('hasPaid', 1)
                                ->orderBy('created_at', 'desc') // or 'updated_at' if you prefer
                                ->get();


        // Pass the user and enrollments to the view
        return view('teachers.userEnrollments', compact('user', 'enrollments'));
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

    public function courseProgress($enrollmentId){
        $enrollment = CourseEnrollment::findorFail($enrollmentId);
        $courseProgress = CourseProgress::where('userId', $enrollment->userId)->where('batchId', $enrollment->batchId)->get();
        return view('teachers.progress', compact('courseProgress', 'enrollment'));
    }

    public function generateCertificate($id)
    {
        $enrollment = CourseEnrollment::findorFail($id);
        if(!$enrollment->certificateId)
        {
            $enrollment->certificateId = $enrollment->id . '-' . mt_rand(1000, 9999);
            $enrollment->save();
            session()->flash('alert-success', 'Certificate Generated Successfully!');
        }
        return back();
    }

    public function addContentOld($id, $contentId = null)
    {
        
        if($contentId){
            $currentContent = BatchContent::findorFail($contentId);
            $batch = Batch::findorFail($id);
            $sections = BatchSection::where('batchId', $batch->id)->orderBy('order')->get();
            $batchContent = BatchContent::where('batchId', $batch->id)->get();
            // $sortedBatchContent = $batchContent->when(
            //     $batchContent->isNotEmpty() && $batchContent->every(fn($item) => is_numeric($item->field1)),
            //     function ($collection) {
            //         return $collection->sortBy('field1');
            //     },
            //     function ($collection) {
            //         return $collection;
            //     }
            // );
            $sortedBatchContent = $batchContent->isNotEmpty() ? $batchContent->sortBy('order') : $batchContent;

            if($currentContent->batchId != $id){
                $currentContent = BatchContent::where('batchId', $batch->id)->get()->first();
            }
            if($batch->teacherId == Auth::user()->id)
            return view('teachers.addContent', compact('batch','sections', 'sortedBatchContent', 'batchContent', 'currentContent'));
        }
        else{
            $batch = Batch::findorFail($id);
            $sections = BatchSection::where('batchId', $batch->id)->get();
            $batchContent = BatchContent::where('batchId', $batch->id)->get();
            $sortedBatchContent = $batchContent->when(
                $batchContent->isNotEmpty() && $batchContent->every(fn($item) => is_numeric($item->field1)),
                function ($collection) {
                    return $collection->sortBy('field1');
                },
                function ($collection) {
                    return $collection;
                }
            );
            $currentContent = BatchContent::where('batchId', $batch->id)->get()->first();
            if($batch->teacherId == Auth::user()->id)
            return view('teachers.addContent', compact('batch', 'sections', 'sortedBatchContent' , 'batchContent', 'currentContent'));
        }
        
    }
    public function addContent($id, $contentId = null, $sectionId = null)
{
    $batch = Batch::findorFail($id);

    if ($batch->teacherId == Auth::user()->id || Auth::user()->role == 100) {
        $sections = BatchSection::where('batchId', $batch->id)->orderBy('order')->get();
        $batchContent = BatchContent::where('batchId', $batch->id)->get();

        // Sort batch content by 'order' or leave as-is if empty
        $sortedBatchContent = $batchContent->isNotEmpty() ? $batchContent->sortBy('order') : $batchContent;

        $currentContent = null;
        $currentSection = null;

        // If sectionId is provided
        if ($sectionId) {
            $currentSection = BatchSection::findorFail($sectionId);

            if ($contentId) {
                // Edit content within the given section
                $currentContent = BatchContent::where('batchId', $batch->id)
                    ->where('id', $contentId)
                    ->first();
            } else {
                // No contentId passed, handle section editing only
                $currentContent = BatchContent::where('batchId', $batch->id)
                    ->where('sectionId', $sectionId)
                    ->first();
            }
        } else { 
            // Default behavior without sectionId
            if ($contentId) {
                $currentContent = BatchContent::find($contentId);
                if (!$currentContent || $currentContent->batchId != $id) {
                    $currentContent = BatchContent::where('batchId', $batch->id)->first();
                }
            } else {
                $currentContent = BatchContent::where('batchId', $batch->id)->first();
            }
        }

        // Handle no content scenario
        if (!$currentContent) {
            $currentContent = (object)[
                'id' => 0,
                'title' => 'No Content',
                'desc' => '',
                'type' => 1,
                'accessOn' => 0,
                'videoLink' => '',
                'sectionId' => $sectionId,
                'batchId' => $batch->id,
                'order' => 0
            ];
        }

        return view('teachers.addContent', compact('batch', 'sections', 'sortedBatchContent', 'batchContent', 'currentContent', 'currentSection'));
    } else {
        abort(403, 'Unauthorized action.');
    }
}


    public function updateBatchStatus(Request $request)
    {
        $batch = Batch::findorFail($request->batchId);
        $batch->status = $request->status;
        $batch->payable = $request->payable;
        $batch->save();
        session()->flash('alert-success',  'Status Updated!');
        return back();

    }

    public function updateWorkshop(Request $request)
    {
        $batch = Workshop::findorFail($request->batchId);
        if($batch->teacherId == Auth::user()->id)
        {
        $batch->name = $request->name;
        $batch->description = $request->description;
        $batch->limit = $request->limit;
        $batch->schedule = $request->schedule;
        $batch->startDate = $request->startDate;
        $batch->endDate = $request->endDate;
        $batch->groupLink = $request->groupLink;
        $batch->status = $request->status;

        $batch->save();
        session()->flash('alert-success',  'Status Updated!');
        return back();
        }
        else{
            session()->flash('alert-danger',  'You can not update this workshop!');
            return back();
        }

    }

    public function generateAllCertificate($id)
{
    $batch = Batch::findOrFail($id);

    if ($batch->teacherId == Auth::user()->id) {
        $enrollments = CourseEnrollment::where('batchId', $id)
            ->where('hasPaid', 1)
            ->get();

        foreach ($enrollments as $enrollment) {
            $this->generateCertificate($enrollment->id);
        }

        session()->flash('alert-success', 'Certificates Generated Successfully!');
        return redirect()->back();
    } else {
        return redirect()->back();
    }
}

public function updateContent( Request $request)
    {
        // dd($request);
    $batch = Batch::findorFail($request->batchId);
    $a = BatchContent::findorFail($request->contentId);
    if($batch->teacherId == Auth::user()->id || Auth::user()->role == 100) {
        $a->title = $request->title;
        $a->type = $request->type;
        $a->desc  = $request->desc;
        $a->videoLink = $request->videoLink;
        $a->batchId = $batch->id;
        $a->teacherId = Auth::user()->id;
        $a->accessOn = $request->accessOn;
        $a->save();
        return redirect()->back();
    }
    else{
        return redirect()->back();
    }
}
public function deleteContent($id)
{
    $content = BatchContent::findOrFail($id);
    $batch = Batch::findOrFail($content->batchId);
    if ($batch->teacherId == Auth::user()->id || Auth::user()->role == 100 ) {
        $content->delete();
        return redirect()->route('addCourseContent', [
            'id' => $batch->id, // Match the required 'id' parameter
            'contentId' => null, // Optional, set to null if not applicable
            'sectionId' => null  // Optional, set to null if not applicable
        ])->with('success', 'Section and its content deleted successfully!');
        
        } else {
        // Redirect to addContent/{batchId} with an error message
        return redirect()->route('addCourseContent', ['batchId' => $batch->id])
        ->with('error', 'You are not authorized to delete this section.');
        }
    }

    public function storeSection(Request $request){
        $batch = Batch::findorFail($request->batchId);
        $sectionCount = BatchSection::where('batchID', $request->batchId)->get()->count();
        if($batch->teacherId == Auth::user()->id || Auth::user()->role == 100) {
            $a = new BatchSection();
            $a->name = $request->name;
            $a->batchid = $batch->id;
            $a->order = $sectionCount + 1;
            $a->save();
            return redirect()->back();
        }
    }
    public function deleteSection($id)
{
    $section = BatchSection::findOrFail($id);
    $batch = Batch::findOrFail($section->batchId);
   
    if ($batch->teacherId == Auth::user()->id || Auth::user()->role == 100) {
        // Delete all content associated with the section
        BatchContent::where('sectionId', $section->id)->delete();

        // Delete the section itself
        $section->delete();

        return redirect()->route('addCourseContent', [
            'id' => $batch->id, // Match the required 'id' parameter
            'contentId' => null, // Optional, set to null if not applicable
            'sectionId' => null  // Optional, set to null if not applicable
        ])->with('success', 'Section and its content deleted successfully!');
        
        } else {
        // Redirect to addContent/{batchId} with an error message
        return redirect()->route('addCourseContent', ['batchId' => $batch->id])
        ->with('error', 'You are not authorized to delete this section.');
        }
    }
public function updateSection(Request $request)
{
    $batch = Batch::findOrFail($request->batchId);
    $section = BatchSection::findOrFail($request->sectionId);

    if ($batch->teacherId == Auth::user()->id || Auth::user()->role == 100) {
        $section->name = $request->name; // Update only the name
        $section->save();

        return redirect()->back()->with('success', 'Section name updated successfully!');
    } else {
        return redirect()->back()->with('error', 'You are not authorized to update this section.');
    }
}


    public function searchBatchContent(Request $request)
    {
    $query = $request->input('query');
    $results = BatchContent::where('title', 'LIKE', "%{$query}%")
                ->get();
                $results->each(function ($item) {
                    $item->batchName = $item->batch->name ?? null; // Add batch name if available
                });
            
                return response()->json($results);

    return response()->json($results);
    }

    public function storeContent( Request $request)
    {
    $batch = Batch::findorFail($request->batchId);
    $contentCount = BatchContent::where('sectionID', $request->sectionId)->get()->count();
    if($batch->teacherId == Auth::user()->id || Auth::user()->role == 100) {

        $a = new BatchContent();
        $a->title = $request->title;
        $a->type = $request->has('type') ? $request->input('type') : 1;
        $a->desc = ($request->has('desc') && !empty($request->desc)) ? $request->desc : $a->desc;
        $a->videoLink = ($request->has('videoLink') && !empty($request->videoLink)) ? $request->videoLink : $a->videoLink;
        $a->batchId = $batch->id;
        $a->sectionId = $request->sectionId;
        $a->order = $contentCount + 1;
        $a->teacherId = Auth::user()->id;
        $a->accessOn = $request->accessOn;
        // Save the BatchContent instance
        $saveResult = $a->save();
        return redirect()->back();
        // Check if save was successful


        // $a->save();
        // $users = CourseEnrollment::where('batchId', $batch->id)->where('hasPaid', 1)->select('userId')->get();
        // $usersList = array();
        // foreach($users as $user){
        //     $emailData = array(
        //         'title' => $request['title'],
        //         'name' =>  strtok($user->students->name, ' ')
        //     );
        //     $email = array($user->students->email);
        // Notification::route('mail', $email)->notify(new recordingAdded($emailData) );
        // $user->email = $user->students->email;
        // $name = $user->students->name;
        // $email = $user->students->email;
        // array_push($usersList,  );
        // $usersList = $user->students->email;
        // }
        // $this->notifyRecordingAdded($request->title, $users);

        // session()->flash('alert-success',  'Content added Successfully!');


    }
}
    

    private function notifyRecordingAdded($title, $users){
        Notification::route('mail', $users)->notify(new recordingAdded() );
    }
    public function workshopDetails($id){
        $batch = Workshop::findorFail($id);

        return view('teachers.workshopDetails', compact('batch'));
    }
    public function myWorkshops()
    {
        $workshops = Workshop::where('teacherId', Auth::User()->id)->get();
        foreach($workshops as $workshop){
            $enrollments = WorkshopEnrollment::where('workshopId',$workshop->id);
            $totalEnrollments = $enrollments->count();
            $workshop->totalEnrollments = $totalEnrollments;
        }
        // dd($batches);
        return view('teachers.myWorkshops',compact('workshops'));
        
    }

    public function updateCourseContentOrder(Request $request)
    {
        $order = $request->input('order');

        foreach ($order as $index => $value) {
            BatchContent::where('id', $value)->update(['field1' => $index + 1]);
        }
        
            
        return response()->json(['message' => 'Order updated successfully']);
    }

//     public function updateSortOrder(Request $request)
//     {
//         $type = $request->input('type');
//         $sortedOrder = $request->input('sortedOrder');

//         if ($type === 'section') {
//             $this->updateSectionOrder($sortedOrder);
//         } elseif ($type === 'content') {
//             $this->updateContentOrder($sortedOrder);
//         }

//         return response()->json(['success' => true, $type]);
//     }

//     private function updateSectionOrder($sortedOrder)
//     {
//         foreach ($sortedOrder as $index => $order) {
//             BatchSection::where('batchId', $order['batchId'])
//                 ->where('id', $order['sectionId'])
//                 ->update(['order' => $index]);
//         }
//     }

//     private function updateContentOrder($sortedOrder)
// {
//     foreach ($sortedOrder as $sectionId => $contentOrder) {
//         foreach ($contentOrder as $index => $contentId) {
//             echo "<script>console.log('Updating Content Order - Section ID: $sectionId, Content ID: $contentId, Order: $index');</script>";

            
//             $content = BatchContent::where('section_id', $sectionId)->find($contentId);

//             if ($content) {
//                 echo "<script>console.log('Updating Order for Content ID: $contentId, New Order: $index');</script>";

                
//                 $content->update(['order' => $index]);

//                 echo "<script>console.log('Order Updated for Content ID: $contentId, New Order: $index');</script>";
//             }
//         }
//     }
// }


public function updateSortOrder(Request $request)
    {
        $sortedOrder = $request->input('sortedOrder');
        $type = $request->input('type');

        try {
            \DB::beginTransaction();

            if ($type === 'section') {
                $this->updateSectionOrder($sortedOrder);
            } elseif ($type === 'content') {
                $this->updateContentOrder($sortedOrder);
            }

            \DB::commit();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            \DB::rollback();

            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    private function updateSectionOrder($sortedOrder)
    {
        foreach ($sortedOrder as $index => $sectionData) {
            $sectionId = $sectionData['sectionId'];

            BatchSection::where('id', $sectionId)->update(['order' => $index + 1]);
        }
    }

    private function updateContentOrder($sortedOrder)
    {
        foreach ($sortedOrder as $index => $contentId) {
            BatchContent::where('id', $contentId)->update(['order' => $index + 1]);
        }
    }
    
}

