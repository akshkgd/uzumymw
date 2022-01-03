<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use App\CourseEnrollment;
use App\Observers\UserObserver;
use App\Observers\CourseEnrollmentObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        CourseEnrollment::observe(CourseEnrollmentObserver::class);
    }
}
