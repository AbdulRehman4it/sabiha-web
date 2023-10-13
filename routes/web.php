<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LangController;



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

// path for homepage
route::get('/',[HomeController::class,'index']);



// path for courses
route::get('/courses',[HomeController::class,'courses']);

// path for FAQ_page
route::get('/FAQ_page',[HomeController::class,'FAQ_page']);

// path for about_sabiha_page
route::get('/about_sabiha_page',[HomeController::class,'about_sabiha_page']);


// path for abut_sabiha_abdulkader_detail_page
route::get('/abut_sabiha_abdulkader_detail_page',[HomeController::class,'abut_sabiha_abdulkader_detail_page']);


route::get('/course_detail_review_page/{id}',[HomeController::class,'course_detail_review_page']);



// path for contact_us_page
route::get('/contact_us_page',[HomeController::class,'contact_us_page']);


route::get('/payment_method_page',[HomeController::class,'payment_method_page']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// route for redirect admin to new dashboard
route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');




// Homapage Routing
// path  for course_overview_page 
route::get('/course_overview_page/{id}',[HomeController::class,'course_overview_page']);
Auth::routes();

route::get('/about_sabiha_page',[HomeController::class,'about_sabiha_page']);

route::get('/news_detail/{id}',[HomeController::class,'news_detail']);


// free-courses-page
route::get('/free-courses-page/{id}',[HomeController::class,'freeCourses']);

// cart
route::get('/add_cart/{id}',[HomeController::class,'add_cart']);

// path to show cart page
route::get('/show_cart',[HomeController::class,'show_cart']);

route::delete('/remove_cart',[HomeController::class,'remove_cart']);

route::get('/checkoutpage',[HomeController::class,'checkoutpage']);

route::get('/review_your_order_page',[HomeController::class,'review_your_order_page']);
route::get('/userpanel',[HomeController::class,'userpanel']);




Route::get('/login', [CustomAuthController::class, 'login'])->middleware('AlreadyLoggedIn');

Route::get('/register', [CustomAuthController::class, 'register'])->middleware('AlreadyLoggedIn');

Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');

Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');

Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->middleware('isLoggedIn');

Route::get('/logout', [CustomAuthController::class, 'logout']);




// adminpanel
route::get('/dashboard',[AdminController::class,'dashboard'])->middleware('isLoggedIn');
route::get('/admin_course',[AdminController::class,'admin_course']);
route::get('/admin_finance',[AdminController::class,'admin_finance']);
route::get('/admin_dashboard_account_page',[AdminController::class,'admin_dashboard_account_page']);
route::get('/admin_dashboard_setting',[AdminController::class,'admin_dashboard_setting']);
route::get('/admin_dashboard_setting_password_page',[AdminController::class,'admin_dashboard_setting_password_page']);
route::get('/admin_dashboard_setting_notification_page',[AdminController::class,'admin_dashboard_setting_notification_page']);
route::get('/aadmin_dashboard_notification_page',[AdminController::class,'aadmin_dashboard_notification_page']);
route::get('/admin_dashboard_course_payout_page',[AdminController::class,'admin_dashboard_course_payout_page']);
route::get('/admin_dashboard_upload_course',[AdminController::class,'admin_dashboard_upload_course']);
route::get('/admin_course_detail_all_student_page',[AdminController::class,'admin_course_detail_all_student_page']);




// userpanel
route::get('/user_dashboard_page',[UserController::class,'user_dashboard_page']);
route::get('/teacher_detail_page_userpanel',[UserController::class,'teacher_detail_page_userpanel']);
route::get('/user_penal_courses_page',[UserController::class,'user_penal_courses_page']);
route::get('/course_explore_about/{id}',[UserController::class,'course_explore_about']);
route::get('/explore_course_page_assingment_page/{id}',[UserController::class,'explore_course_page_assingment_page']);
route::get('/explore_courses_review_page_userpanel/{id}',[UserController::class,'explore_courses_review_page_userpanel']);
route::get('/confirm_enroll_userpanel_page',[UserController::class,'confirm_enroll_userpanel_page']);
route::get('/user_penal_payment_method_page',[UserController::class,'user_penal_payment_method_page']);
route::get('/user_penal_review_your_order_page',[UserController::class,'user_penal_review_your_order_page']);
route::get('/enroll_course_page_userpanel',[UserController::class,'enroll_course_page_userpanel']);
route::get('/favorties_page_userpenal',[UserController::class,'favorties_page_userpenal']);
route::get('/user_profile_page',[UserController::class,'user_profile_page']);



//  routes for language translate 
Route::get("lang/home",[LangController::class,'index']);
Route::get("lang/change",[LangController::class,'change'])->name('changeLang');
