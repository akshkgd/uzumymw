@extends('layouts.app')
<style>

</style>
@section('content')
<div class="navbar-container ">
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-0" data-overlay>
        @include('layouts.header')
    </nav>
</div>
<section class="pt-5 mt-5">
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
                <div class="card  card-ico shadow-3">
                    <div class="card-body">
                        <div class="flex-grow-1 text-cente">


                            <p class="lea">
                                If necessary, you may logout of all of your other browser sessions across all of your
                                devices. Some of your recent sessions are listed below; however, this list may not be
                                exhaustive. If you feel your account has been compromised, you should also update your
                                password.
                            </p>
                            @foreach($devices as $device)
                            <div class=" d-flex align-items-center mb-1">
                                @if( (new \Jenssegers\Agent\Agent())->isMobile() )
                                <img src="{{asset('assets/img/icons/theme/devices/iphone-x.svg')}}"
                                    alt="{{Auth::User()->name}}'s avatar" class="avatar border-rounde mr-3 pb-3 p" data-inject-svg>
                                    @else
                                    <img src="{{asset('assets/img/icons/theme/devices/display-2.svg')}}"
                                    alt="{{Auth::User()->name}}'s avatar" class="avatar border-rounde mr-3 mb-3" data-inject-svg>
                                @endif
                                <div class="">
                                    <h6 class="mb-0 fw-400">{{(new \Jenssegers\Agent\Agent())->device()}} -
                                        {{(new \Jenssegers\Agent\Agent())->browser()}}
                                        @if ($current_session_id == $device->id)
                                        <span class="text-success ck-font">  <span class="text-muted">|</span>  This Device</span>
                                        
                            

                                        @endif
                                    </h6>
                                    <p class="text-secondary " style="font-weight: 400; " href="#">
                                        {{ $device->ip_address }} -  <span>Last Activity {{ Carbon\Carbon::parse($device->last_activity)->diffForHumans() }}</span>
                                        
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section style="padding-top: 10rem;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        Currently Logged In Devices
                        <a href="{{ count($devices) > 1 ? '/logout/all' : '#' }}"
                            class="btn btn-danger {{ count($devices) == 1 ? 'disabled' : '' }}">Remove All Devices</a>
                    </div>
                    <table class="table  table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Device</th>
                                <th>IP</th>
                                <th style="width:12%">Last Activity</th>
                                <th style="width:12%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($devices as $device)
                            <tr>
                                <td> {{(new \Jenssegers\Agent\Agent())->device()}}
                                    {{(new \Jenssegers\Agent\Agent())->platform()}}
                                    {{(new \Jenssegers\Agent\Agent())->isTablet()}}</td>
                                <td>{{ $device->ip_address }}</td>
                                <td>{{ Carbon\Carbon::parse($device->last_activity)->diffForHumans() }}</td>
                                @if ($current_session_id == $device->id)
                                <td><button type="button" :disabled="true" class="btn btn-primary">This Device</button>
                                </td>
                                @else
                                <td><a href="/logout/{{$device->id}}" class="btn btn-danger">Remove</a></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection