<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeatureRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FeatureRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required|string|min:10|max:2000',
        ]);

        if ($validator->fails()) {
            session()->flash('alert-danger', $validator->messages()->first());
            return redirect()->back()->withInput();
        }

        $featureRequest = new FeatureRequest();
        $featureRequest->userId = Auth::user()->id;
        $featureRequest->text = $request->text;
        $featureRequest->status = 0; // 0 = Pending
        $featureRequest->save();

        session()->flash('alert-success', 'Feature request submitted successfully!');
        return redirect()->back();
    }
}
