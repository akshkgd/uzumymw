<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Batch;
use App\Workshop;
use App\User;
use App\Feedback;
use App\CourseEnrollment;
use App\Http\Controllers\CodekaroController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ChatbotController;
use Telegram\Bot\Laravel\Facades\Telegram;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;


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
Route::view('/internship-certificate/8be76c72dffcb7c5', 'clgInternship.himanshu');
Route::view('/internship-certificate/8be76c72dffcb7c6', 'clgInternship.ashish');
Route::view('/internship-certificate/8be76c72dffcb7c7', 'clgInternship.vivek');

Route::view('/complete', 'students.completeProfile');
Route::get('/webhook', 'TelegramController@webhook');
Route::view('/contact-us', 'contact');
Route::view('/game', 'game');
Route::view('/himanshu', 'team.himanshu');
Route::view('/ashish', 'team.ashish');
Route::view('/arpit', 'team.arpit');
Route::view('/privacy', 'privacy');
Route::view('/terms', 'terms');
Route::view('/refund-policy', 'refund');
Route::view('/learn-git-and-github', 'git');
Route::view('/instagram-live-masterclass', 'js');
Route::view('/bootcamp-demo', 'wd');
Route::view('/wd', 'wdSunday');
Route::view('/cwr-live-masterclass', 'cwr');
Route::view('/web-development-masterclass', 'instawd');
Route::view('/python-masterclass', 'python');
Route::view('/web-development-bootcamp', 'wdm');
Route::view('/wdt', 'wdt');
// Route::view('/love','love');
Route::view('/teach', 'teach');
// Route::view('/how-to-css','css');
Route::view('/start-css', 'css1');
Route::view('/start-javascript', 'js5');
Route::view('/start-webdev', 'wdStarter');
Route::view('/join-mern', 'fsd');
Route::view('/join-fsd', 'fsdc');
Route::view('/css-success', 'students/cssSuccess1');
Route::view('/css-replay', 'students/cssReplay');
Route::view('/demo-success', 'students/demoSuccess');
Route::view('/frontend-cohort', 'frontend');
Route::view('/join-frontend', 'joinFrontend');
Route::view('/t', 'students/learn');
Route::view('/c', 'students/certificatePdf');
Route::view('/js-editor', 'jsEditor');
Route::view('/start-fc', 'jsc');
Route::view('/banned', 'banned');
Route::view('/crash-course-schedule', 'ccSchedule');
Route::view('/ai1', 'genAi');
Route::view('/genai-for-developers', 'genAi1');
Route::view('/frontend-with-genai', 'frGenAi');
Route::view('/css-exclusive', 'cssEx');
Route::view('/lop', 'cssNew');








// Route::view('/plinth','plinth');
// Route::view('/start-react','react');
// Route::view('/react-success','/students/reactSuccess');

Route::get('/reviews', function () {
    $feedbacks = Feedback::where('status', 0)->latest()->paginate(200);
    return view('l', compact('feedbacks'));
});
Route::get('/i', function () {
    $enrollment = CourseEnrollment::first();
    return view('admin/invoicePdf', compact('enrollment'));
});
Route::get('/it', function () {
    $users = Feedback::where('status', 1)->take(25)->get();
    return view('internship', compact('users'));
    // $enrollment = CourseEnrollment::find(13);
    // $batch = Batch::find($enrollment->batchId);
    // // $user = User::find($enrollment->userId);
    // // $this->successMail($batch, $user);
    // return view('students.PaymentComplete', compact('enrollment', 'batch'));
});

Route::get('/', function () {

    // $batches = Workshop::where('status',1)->latest()->take(3)->get();
    // $courses = Batch::where('status',1)->latest()->take(2)->get();
    return view('welcome');
});



Route::get('/batch', function () {
    return view('students.batchDetails');
});
Route::get('/about', function () {
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
Route::get('/recording-sessions/{batchId}/{cId?}', 'StudentController@recordings')->name('recordings');
// Route::get('/recording-sessions/{id}/{key?}', 'StudentController@recordings');
Route::get('workshop-enrollment-success/{id}', 'StudentController@workshopEnrollmentSuccess');
Route::get('next-steps/{id}', 'StudentController@workshopEnrollmentSuccessNS');
Route::get('/how-to-css', 'CodekaroController@css');
Route::get('/join-css', 'CodekaroController@cssOne');

Route::get('/bootcamp-success', 'CodekaroController@bootcampSuccess');
Route::get('/css-upgrade', 'CodekaroController@upgradeCss');
Route::post('/css-upgrade-checkout', 'CodekaroController@upgradeCssCheckout')->name('cssUpgrade');
Route::get('/gpt', function () {
    return view('students.gpt');
});


Route::get('/fff', 'StudentController@fff');
Route::get('/hi', 'ChatbotController@index');
Route::post('/chat', 'ChatbotController@chat');



// In routes/web.php
Route::get('/test-api', function () {
    try {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://openrouter.ai/api/v1/models');
        $models = json_decode($response->getBody(), true);
        $freeModels = array_filter($models['data'], function ($model) {
            return strpos($model['id'], ':free') !== false || $model['pricing']['prompt'] == 0;
        });
        return response()->json(['free_models' => array_values($freeModels)]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()]);
    }
});
//student routes end
Route::get('/event', 'WorkshopController@index');
Route::resource('/faq', 'FaqController');
Route::resource('/course', 'BatchController');
Route::resource('/feedback', 'FeedbackController');
Route::get('/sessions', 'StudentController@sessions');
Route::get('/delete-session/{sessionId}', 'StudentController@deleteSession')->name('delete.session');
Auth::routes(['verify' => true]);
Route::get('/redirect', 'googlelogin@redirectToProvider');
Route::get('/callback', 'googlelogin@handleProviderCallback');
Route::get('autocomplete', 'ProfileController@locationAutoComplete');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/my-account', 'ProfileController@editProfile');
route::post('/edit-profile', 'ProfileController@updateStudentsProfile')->name('updateStudentsProfile');
route::post('/complete-profile', 'ProfileController@completeStudentsProfile')->name('completeStudentsProfile');
Route::get('/complete-profile', 'ProfileController@completeProfile')->name('profile.complete');

Route::get('/enroll/{id}', 'CourseEnrollmentController@checkEnroll');
Route::get('/join/{id}', 'CourseEnrollmentController@checkEnroll');
Route::get('/workshop-enroll/{id}', 'WorkshopEnrollmentController@checkEnroll')->middleware('auth');
Route::get('/checkout/{id}', 'CourseEnrollmentController@checkout');
Route::post('payment', 'CourseEnrollmentController@payment')->name('payment');
Route::get('invoice/{id}', 'CourseEnrollmentController@invoice');
// Route::get('/my-course', 'CourseEnrollmentController@myCourse');
Route::get('/batch/{id}', 'BatchController@batchDetails')->name('details');
Route::get('/workshop/{id}', 'WorkshopController@details');
Route::get('/workshop-details/{id}', 'WorkshopController@workshopDetails');
Route::get('/workshop-certificate/{id}', 'WorkshopEnrollmentController@certificate');
Route::get('/course-certificate/{id}', 'BatchController@certificate');
Route::get('/download-certificate/{certificateId}', 'StudentController@certificate')->name('student.certificate');
Route::get('/explore-course/{id}', 'BatchController@details');
Route::post('payment-success', 'CodekaroController@coursePayment')->name('payment-success');
Route::get('/bootcamp-success', 'CodekaroController@bootcampSuccess')->name('bootcamp-success');
Route::get('/mastermind-success', 'CodekaroController@javascriptSuccess')->name('javascript-success');
Route::get('/mern-success', 'CodekaroController@mernSuccess')->name('mern-success');
Route::post('workshop-enrollment-auto', 'CodekaroController@workshopEnrollemnt')->name('workshop-enrollment-auto');
Route::post('course-enrollment-auto', 'CodekaroController@courseEnrollmentAuto')->name('course-enrollment-auto');

Route::get('/test', 'CodekaroController@test');
Route::post('/grant-access', 'WebhookController@grantAccess');
Route::post('/start-subscription', 'SubscriptionController@startSubscriptionWebhook');
Route::get('/join-class/{id}', 'StudentController@joinClass');
Route::get('/certificate', function () {
    $certificate = CourseEnrollment::first();
    // $students = CourseEnrollment::where('teacher_id', $ck_user->id)->count();
    $batch = Batch::first();

    return view('students.certificate', compact('certificate', 'batch'));
});
Route::post('/update-time-spent', 'StudentController@updateTimeSpent')->name('update.timeSpent');
Route::get('/invoice/download/{enrollmentId}', 'StudentController@downloadInvoice')->name('invoice.download');

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
// Route::get('/addContent/{id}', 'TeacherController@addContent');
Route::get('/search-batch-content', 'TeacherController@searchBatchContent')->name('searchBatchContent');
Route::post('/store-content', 'TeacherController@storeContent')->name('addContent');
Route::post('/store-section', 'TeacherController@storeSection')->name('addSection');
Route::post('/update-batch-status', 'TeacherController@updateBatchStatus')->name('updateBatchStatus');
Route::post('/update-workshop', 'TeacherController@updateWorkshop')->name('updateWorkshop');
Route::get('/generate-all-cetificates/{id}', 'TeacherController@generateAllCertificate')->name('generateAllCertificate');
Route::get('/addContent/{id}/{contentId?}/{sectionId?}', 'TeacherController@addContent')->name('addCourseContent');
Route::post('/update-content', 'TeacherController@updateContent')->name('updateContent');
Route::get('/section-delete/{id}', 'TeacherController@deleteSection')->name('deleteSection');
Route::get('/content-delete/{id}', 'TeacherController@deleteContent')->name('deleteContent');

Route::post('/section/update', 'TeacherController@updateSection')->name('updateSection');


Route::get('/css-enrollments', 'TeacherController@cssEnrollments');
// Route::post('/update-course-content-order', 'TeacherController@updateCourseContentOrder');
Route::post('/update-sort-order', 'TeacherController@updateSortOrder')->name('updateSortOrder');
Route::get('/progress/{enrollmentId}', 'TeacherController@courseprogress');

Route::post('/search-user', 'TeacherController@searchUser')->name('users.search');
Route::get('/user/{id}/enrollments', 'TeacherController@showEnrollments')->name('user.enrollments');



//admin
Route::get('/admin/students', 'AdminController@students')->name('admin.students');
;
Route::get('/admin/css-enrollments', 'AdminController@cssEnrollments');
Route::get('/admin/js-enrollments', 'AdminController@jsEnrollments');
Route::get('/admin/react-enrollments', 'AdminController@reactEnrollments');
Route::get('/admin/students/{id}', 'AdminController@studentDetails');
Route::post('/search', 'AdminController@search')->name('search');
Route::get('/admin/ban-student/{id}', 'AdminController@banStudent');
Route::get('/admin/activate-student/{id}', 'AdminController@activateStudent');
Route::get('/admin/make-teacher/{id}', 'AdminController@makeTeacher');
Route::get('/admin/downgrade-teacher/{id}', 'AdminController@downgradeTeacher');
Route::get('/admin/batches', 'AdminController@liveBatches');
Route::get('/admin/create/batch', 'AdminController@createBatch');
Route::get('/admin/edit/batch/{id}', 'AdminController@editBatch')->name('editBatch');
Route::put('/admin/update/batch/{id}', 'AdminController@updateBatch')->name('updateBatch');


Route::get('/admin/create/batch/topics/{id}', 'AdminController@addTopics');
Route::post('/storeTopic', 'AdminController@storeTopic')->name('storeTopic');
Route::get('/delete-topic/{id}', 'AdminController@deleteTopic');
Route::get('/create-workshop', 'AdminController@createWorkshop');
Route::post('/storeWorkshop', 'AdminController@addWorkshop')->name('storeWorkshop');
Route::get('/admin/batch-enrollment/{id}', 'AdminController@batchEnrollment')->name('adminBatchEnrollment');
Route::get('/admin/payment-received/{id}', 'AdminController@paymentReceived');
Route::post('/updatePaymentStatus', 'AdminController@updatePaymentStatus')->name('updatePaymentStatus');
Route::get('/admin/users', 'AdminController@getUsers');
Route::get('/admin/workshops', 'AdminController@workshops');
Route::get('/admin/feedbacks', 'AdminController@feedbacks');
Route::get('/admin/remove-feedback/{id}', 'AdminController@removeFeedback');
Route::get('/admin/add-feedback/{id}', 'AdminController@addFeedback');
Route::get('/admin/add-access', 'AdminController@addAccess');
Route::post('/get-email-suggestions', 'AdminController@getUser')->name('getUser');
Route::post('/add-access', 'AdminController@addCourseAccess')->name('addAccess');
Route::get('/admin/course-progress', 'AdminController@fetchCourseProgress');
Route::get('/admin/batch-suggestions', 'AdminController@batchSuggestions')->name('getBatchSuggestions');
;
Route::get('/admin/update-live-class/{id}', 'AdminController@addLiveClass');
Route::post('/admin/update-live-class', 'AdminController@updateLiveClass')->name('updateLiveClass');
Route::get('/api/students/{id}/sessions', 'AdminController@getStudentSessions')->name('students.sessions');
Route::get('/admin-progress/{enrollmentId}', 'AdminController@courseProgress');
Route::get('/admin/reports', 'AdminController@reports')->name('admin.reports');
Route::get('/admin/reports-data', 'AdminController@getReportsData')->middleware(['auth', 'isAdmin']);
// admin manage invoices
Route::get('/admin/invoices', 'AdminController@listInvoices')->name('admin.invoices.list');
Route::get('/admin/invoices/download/{invoiceId}', 'AdminController@downloadInvoices')->name('admin.invoices.download');
Route::get('/admin/wf', 'AdminController@wf');





// whatsApp test
Route::get('/msg', 'AdminController@wam');


Route::get('/start-fsd', function () {
    return view('startFsd');
});
Route::get('/membership', function () {
    return view('membership');
});
Route::post('/create-subscription', 'SubscriptionController@create')->name('create-subscription');
Route::post('/store-subscription', 'SubscriptionController@payment')->name('store-subscription');

// Add this new route
Route::post('/admin/batch/update-all-progress/{batchId}', 'AdminController@updateAllProgress')->name('admin.updateAllProgress');
Route::post('/mark-video-complete', 'StudentController@markVideoComplete')->name('mark.video.complete');
Route::post('/admin/update-user-profile/{id}', 'AdminController@updateUserProfile')->name('admin.updateUserProfile');
Route::get('/api/check-email', 'AdminController@checkEmail')->name('admin.checkEmail');

Route::post('/update-section', [TeacherController::class, 'updateSection'])->name('updateSection');
Route::get('/api/batch/{hashId}', 'CodekaroController@BatchStreamDetails')->name('admin.streamDetails');
Route::get('/api/user/{email}', 'CodekaroController@userDetailsApi');
Route::get('/api/certificate/{id}', 'CodekaroController@certificateDetailsApi');

// laravel log view
// Route::get('log-viewer', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware(['auth', 'isAdmin']);