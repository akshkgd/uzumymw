<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'feedback'=> 'required|min:20'
            
            
        ]);
        if ($validator->fails()) {
            Session()->flash('alert-danger', $validator->messages()->first());
            return redirect()->back()->withInput();
       }
        if($request->batchId !='')
        {
            $checkFeedback = Feedback::where('batchId', $request->batchId)->where('userId', Auth::user()->id)->get();
        }
        if($request->workshopId !='')
        {
            $checkFeedback = Feedback::where('batchId', $request->workshopId)->where('userId', Auth::user()->id)->get();
        }
        if($checkFeedback->count()==0){
        $a = new Feedback();
        $a->batchId = $request->batchId;
        $a->workshopId = $request->workshopId;
        $a->topicId = $request->topicId;
        $a->userId = Auth::user()->id;
        $a->feedback = $request->feedback;
        $a->save();
        session()->flash('alert-success', 'Thanks for the Feedback');
        return redirect()->back();}
        else{
            session()->flash('alert-warning', 'Feedback Already Recorded!');
        return redirect()->back();
    }
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
        $validator = Validator::make($request->all(), [
            
            'feedback'=> 'required|min:20'
            
            
        ]);
        if ($validator->fails()) {
            Session()->flash('alert-danger', $validator->messages()->first());
            return redirect()->back()->withInput();
       }
        $a= Feedback::findorFail($id);
        $a->feedback = $request->feedback;
        $a->save();
        session()->flash('alert-warning', 'Feedback Updated!');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
