<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Batch;
use App\Workshop;
use App\User;
use App\Feedback;
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
Route::view('/internship-certificate/8be76c72dffcb7c5','clgInternship.himanshu');
Route::view('/internship-certificate/8be76c72dffcb7c6','clgInternship.ashish');
Route::view('/internship-certificate/8be76c72dffcb7c7','clgInternship.vivek');

Route::view('/complete','students.completeProfile');
Route::get('/webhook', 'TelegramController@webhook');
Route::view('/contact-us','contact');
Route::view('/game','game');
Route::view('/himanshu','team.himanshu');
Route::view('/ashish','team.ashish');
Route::view('/arpit','team.arpit');
Route::view('/privacy','privacy');
Route::view('/terms','terms');
Route::view('/refund-policy','refund');
Route::view('/learn-git-and-github','git');
Route::view('/instagram-live-masterclass','js');
Route::view('/web-development-live-masterclass','wd');
Route::view('/wd','wdSunday');
Route::view('/cwr-live-masterclass','cwr');
Route::view('/web-development-masterclass','instawd');
Route::view('/python-masterclass','python');
Route::view('/web-development-bootcamp','wdm');
Route::view('/wdt','wdt');
Route::view('/love','love');
Route::view('/teach','teach');
Route::view('/how-to-css','7wd');

Route::get('/l', function () {
    $feedbacks = Feedback::all()->where('status',0);
    return view('l',compact('feedbacks'));
});
Route::get('/it', function () {
    $users = Feedback::where('status', 1)->take(25)->get();
    return view('internship',compact('users'));
            // $enrollment = CourseEnrollment::find(13);
            // $batch = Batch::find($enrollment->batchId);
            // // $user = User::find($enrollment->userId);
            // // $this->successMail($batch, $user);
            // return view('students.PaymentComplete', compact('enrollment', 'batch'));
});

Route::get('/', function () {
    
    $batches = Workshop::where('status',1)->latest()->take(3)->get();
    $courses = Batch::where('status',1)->latest()->take(2)->get();
    return view('welcome', compact('batches', 'courses'));
});



Route::get('/batch', function () {
    return view('students.batchDetails');
});
Route::get('/about',  function(){
    return view('about');
});

Route::get('/logged-in-devices', 'ProfileController@index')
		->name('logged-in-devices.list')
		->middleware('auth');

Route::get('/logout/all', 'ProfileController@logoutAllDevices')
		->name('logged-in-devices.logoutAll')
		->middleware('auth');

Route::get('/logout/{device_id}', 'ProfileController@logoutDevice')
		->name('logged-in-devices.logoutSpecific')
		->middleware('auth');
// student routes start
Route::get('/notes/{id}', 'StudentController@notes');
Route::get('/recording-sessions/{id}/{key?}', 'StudentController@recordings');
Route::get('workshop-enrollment-success/{id}', 'StudentController@workshopEnrollmentSuccess');
Route::get('next-steps/{id}', 'StudentController@workshopEnrollmentSuccessNS');
Route::get('bootcamp-success', 'CodekaroController@bootcampSuccess');
//student routes end
Route::get('/event', 'WorkshopController@index');
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
Route::get('/workshop-enroll/{id}', 'WorkshopEnrollmentController@checkEnroll')->middleware('auth');
Route::get('/checkout/{id}', 'CourseEnrollmentController@checkout');
Route::post('payment', 'CourseEnrollmentController@payment')->name('payment');
Route::get('invoice/{id}', 'CourseEnrollmentController@invoice');
Route::get('/my-course', 'CourseEnrollmentController@myCourse');
Route::get('/batch/{id}', 'BatchController@batchDetails');
Route::get('/workshop/{id}', 'WorkshopController@details');
Route::get('/workshop-details/{id}', 'WorkshopController@workshopDetails');
Route::get('/workshop-certificate/{id}', 'WorkshopEnrollmentController@certificate');
Route::get('/course-certificate/{id}', 'BatchController@certificate');
Route::get('/explore-course/{id}', 'BatchController@details');
Route::post('payment-success', 'CodekaroController@coursePayment')->name('payment-success');
Route::post('workshop-enrollment-auto', 'CodekaroController@workshopEnrollemnt')->name('workshop-enrollment-auto');




Route::get('/certificate', function(){
    $certificate = CourseEnrollment::first();
    // $students = CourseEnrollment::where('teacher_id', $ck_user->id)->count();
    $batch = Batch::first();

    return view('students.certificate', compact('certificate', 'batch'));
});


// Route::get('payment-razorpay', 'PaymentController@create')->name('paywithrazorpay');


// teachers
route::post('/update-class', 'BatchController@updateClass')->name('updateClass');
route::post('/update-workshop/timings', 'TeacherController@updateWorkshopClass')->name('updateWorkshopClass');
Route::get('/my-classes', 'BatchController@myClasses');
Route::get('/my-workshops', 'TeacherController@myWorkshops');
Route::get('/class-details/{id}', 'BatchController@classDetails');
Route::get('teacher/workshop-details/{id}', 'TeacherController@workshopDetails');
Route::get('/enrollments/{id}', 'TeacherController@enrollments');
Route::get('/workshop-enrollments/{id}', 'TeacherController@workshopEnrollments');
Route::get('/generate-certificate/{id}', 'TeacherController@generateCertificate');
Route::get('/addContent/{id}', 'TeacherController@addContent');
Route::post('/store-content', 'TeacherController@storeContent')->name('addContent');
Route::post('/update-batch-status', 'TeacherController@updateBatchStatus')->name('updateBatchStatus');
Route::post('/update-workshop', 'TeacherController@updateWorkshop')->name('updateWorkshop');




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
Route::get('/create-workshop', 'AdminController@createWorkshop');
Route::post('/storeWorkshop', 'AdminController@addWorkshop')->name('storeWorkshop');
Route::get('/admin/batch-enrollment/{id}', 'AdminController@batchEnrollment');
Route::get('/admin/payment-received/{id}', 'AdminController@paymentReceived');
Route::post('/updatePaymentStatus', 'AdminController@updatePaymentStatus')->name('updatePaymentStatus');
Route::get('/admin/users', 'AdminController@getUsers');
Route::get('/admin/workshops', 'AdminController@workshops');
Route::get('/admin/feedbacks', 'AdminController@feedbacks');
Route::get('/admin/remove-feedback/{id}', 'AdminController@removeFeedback');
Route::get('/admin/add-feedback/{id}', 'AdminController@addFeedback');








// whatsApp test
Route::get('/msg', 'AdminController@wam');