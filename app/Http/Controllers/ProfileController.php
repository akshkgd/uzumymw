<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Validator;
use Egulias\EmailValidator\EmailValidator;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editProfile(){
        // $devices = \DB::table('sessions')->where('user_id', \Auth::user()->id)->get()->reverse();
        // return view ('students.editProfile') ->with('devices', $devices)
        // ->with('current_session_id', \Session::getId());
        return view('students.editProfile');
    }

    public function updateStudentsProfile(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'nullable|email:rfc,dns,filter',
            'name'=> 'nullable|max:40', 
            'mobile'=> 'nullable|regex:/^[6-9]\d{9}$/',
            'college'=> 'nullable|min:2', 
            'course'=> 'nullable|min:2', 
        ]);

        if ($validator->fails()) {
            Session()->flash('alert-danger', $validator->messages()->first());
            return redirect()->back()->withInput();
        }

        $user = User::findorfail(Auth::user()->id);
        
        // Only update fields if they are provided in the request
        if ($request->filled('name')) {
            $user->name = $request->name;
        }
        if ($request->filled('email')) {
            $user->email = $request->email;
        }
        if ($request->filled('mobile')) {
            $user->mobile = $request->mobile;
        }
        if ($request->filled('college')) {
            $user->college = $request->college;
        }
        if ($request->filled('course')) {
            $user->course = $request->course;
        }
        if ($request->filled('bio')) {
            $user->bio = $request->bio;
        }

        $user->save();
        session()->flash('alert-success', 'Profile Successfully Updated!');
        return redirect()->back();
    }

    public function completeProfile()
    {
        $user = Auth::user();
        
       
        if ($user->mobile && $user->course && $user->college) {
            session()->flash('alert-success', 'Your profile is already complete!');
            return redirect('/home');
        }
        
        return view('students.completeProfile');
    }
    public function completeStudentsProfile(Request $request){
        $validator = Validator::make($request->all(), [
            
            
            'mobile'=> 'required|regex:/^[6-9]\d{9}$/',
            'college'=> 'required|min:10', 
            'course'=> 'required|min:2', 
            
        ]);
        if ($validator->fails()) {
            Session()->flash('alert-danger', $validator->messages()->first());
            return redirect()->back()->withInput();
       }
    
        $user = User::findorfail(Auth::user()->id);
        
        $user->mobile = $request->mobile;
        $user->college = $request->college;
        $user->course = $request->course;
        $user->save();
        session()->flash('alert-success', 'Details Added!');
        return redirect('/home');
    }

    
    public function index()
    {

        $devices = \DB::table('sessions')->where('user_id', \Auth::user()->id)->get()->reverse();
        // foreach($sessions as $session){
        //     $userAgent = $session->user_agent;
        //     $agent = new Agent();
        //     $agent = $agent->setUserAgent('$userAge');
        //     // $languages = $agent->languages();
        //     $device = $agent->device();
        //     $platform = $agent->platform();
        //     $browser = $agent->browser();
        //     $session->device = $device;
        //     $session->platform = $platform;
        //     $session->browser = $session->get_browser;
        //     dd($session);
        // }

        return view('loggedInDevices')
                ->with('devices', $devices)
                ->with('current_session_id', \Session::getId());
    }


 
    public function logoutDevice(Request $request, $device_id)
    {

        \DB::table('sessions')
            ->where('id', $device_id)->delete();

        return redirect('/logged-in-devices');
    }

    public function logoutAllDevices(Request $request)
    {
        \DB::table('sessions')
            ->where('user_id', \Auth::user()->id)
            ->where('id', '!=', \Session::getId())->delete();

        return redirect('/logged-in-devices');
    }
}
