<?php

use Illuminate\Support\Facades\Route;
use App\Batch;
use App\User;
use App\CourseEnrollment;
 use Telegram\Bot\Laravel\Facades\Telegram;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/video','students.content1');

Route::view('/complete','students.completeProfile');
Route::get('/webhook', 'TelegramController@webhook');
Route::view('/contact-us','contact');
Route::view('/privacy','privacy');
Route::view('/event','event');
Route::view('/eventd','eventDetails');

Route::get('/', function () {
    
    $batches = Batch::where('status',1)->get();
    return view('welcome', compact('batches'));
});



Route::get('/batch', function () {
    return view('students.batchDetails');
});
Route::get('/about',  function(){
    return view('about');
});
// Route::get('/course',  function(){
//     return view('course');
// });

Route::get('/logged-in-devices', 'ProfileController@index')
		->name('logged-in-devices.list')
		->middleware('auth');

Route::get('/logout/all', 'ProfileController@logoutAllDevices')
		->name('logged-in-devices.logoutAll')
		->middleware('auth');

Route::get('/logout/{device_id}', 'ProfileController@logoutDevice')
		->name('logged-in-devices.logoutSpecific')
		->middleware('auth');

Route::get('/updated-activity', 'TelegramBotController@updatedActivity');
Route::get('set-hook', 'TelegramBotController@setWebHook');
Route::get('get-me', 'TelegramBotController@getMe');

Route::post(env('TELEGRAM_BOT_TOKEN') . '/webhook', 'TelegramBotController@handleRequest');
Route::get('/bot', function() {
    $updates = Telegram::getUpdates();
    return (json_encode($updates));
    dd($updates);
});

// student routes start
Route::get('/notes/{id}', 'StudentController@notes');
Route::get('/recording-sessions/{id}/{key?}', 'StudentController@recordings');

//student routes end

Route::resource('/faq', 'FaqController');
Route::resource('/course', 'BatchController');
Route::resource('/feedback', 'FeedbackController');

Auth::routes(['verify' => true]);
Route::get('/redirect', 'googlelogin@redirectToProvider');
Route::get('/callback', 'googlelogin@handleProviderCallback');
Route::get('autocomplete','ProfileController@locationAutoComplete');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/my-account', 'ProfileController@editProfile');
route::post('/edit-profile', 'ProfileController@updateStudentsProfile')->name('updateStudentsProfile');
route::post('/complete-profile', 'ProfileController@completeStudentsProfile')->name('completeStudentsProfile');

Route::get('/enroll/{id}', 'CourseEnrollmentController@checkEnroll');
Route::get('/checkout/{id}', 'CourseEnrollmentController@checkout');
Route::post('payment', 'CourseEnrollmentController@payment')->name('payment');
Route::get('/my-course', 'CourseEnrollmentController@myCourse');
Route::get('/batch/{id}', 'BatchController@batchDetails');
Route::get('/explore-course/{id}', 'BatchController@details');



Route::get('/certificate', function(){
    $certificate = CourseEnrollment::first();
    // $students = CourseEnrollment::where('teacher_id', $ck_user->id)->count();
    $batch = Batch::first();

    return view('students.certificate', compact('certificate', 'batch'));
});


// Route::get('payment-razorpay', 'PaymentController@create')->name('paywithrazorpay');


// teachers
route::post('/update-class', 'BatchController@updateClass')->name('updateClass');
Route::get('/my-classes', 'BatchController@myClasses');
Route::get('/class-details/{id}', 'BatchController@classDetails');
Route::get('/enrollments/{id}', 'TeacherController@enrollments');
Route::get('/generate-certificate/{id}', 'TeacherController@generateCertificate');
Route::get('/addContent/{id}', 'TeacherController@addContent');
Route::post('/store-content', 'TeacherController@storeContent')->name('addContent');




//admin
Route::get('/admin/students', 'AdminController@students');
Route::get('/admin/students/{id}', 'AdminController@studentDetails');
Route::post('/search', 'AdminController@search')->name('search');
Route::get('/admin/ban-student/{id}', 'AdminController@banStudent');
Route::get('/admin/activate-student/{id}', 'AdminController@activateStudent');
Route::get('/admin/make-teacher/{id}', 'AdminController@makeTeacher');
Route::get('/admin/downgrade-teacher/{id}', 'AdminController@downgradeTeacher');
Route::get('/admin/batches', 'AdminController@liveBatches');
Route::get('/admin/create/batch', 'AdminController@createBatch');
Route::get('/admin/create/batch/topics/{id}', 'AdminController@addTopics');
Route::post('/storeTopic', 'AdminController@storeTopic')->name('storeTopic');
Route::get('/delete-topic/{id}', 'AdminController@deleteTopic');


