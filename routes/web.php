<?php 

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admin;
use  App\Http\Controllers\brandcontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\edit_profile;
use App\Http\Controllers\mechaniccontroller;
use App\Http\Controllers\mechanic\mechaniccontroller as clientmechaniccontroller;
use App\Http\Controllers\email;
use App\Http\Controllers\editproAdmin;
use App\Http\Controllers\cityajaxcontroller;
use App\Http\Controllers\servicecontroller;
use App\Models\db_services;



// ------------------------------------------------------------------------------------------------------------------
//client side

Route::get('/',[Homecontroller::class,'Home'])->name('/');
Route::post('/',[Homecontroller::class,'Home'])->name('/');


Route::get('login',[Homecontroller::class,'login'])->name('login');
Route::post('/login',[Homecontroller::class,'login'])->name('login');

Route::get('/logout',[Homecontroller::class,'logout'])->name('logout');


Route::get('/signup',[Homecontroller::class,'signup'])->name('signup');
Route::post('/signup',[Homecontroller::class,'signup'])->name('signup');

// client Contact us route client side & feedback
Route::get('admin/Admincontact',[Admin::class,'Admincontact'])->name('Admincontact');

// services 

Route::get('/services',[servicecontroller::class,'Home'])->name('service');

Route::get('/servicemenu',[servicecontroller::class,'servicemenu'])->name('servicemenu');

Route::get('/selectsevice/{servicename}',[servicecontroller::class,'selectservice'])->name('selectsevice');



Route::get('/services/Exterior',[servicecontroller::class,'ExteriorWashing'])->name('ExteriorWashing');


// about

Route::get('/about',[Homecontroller::class,'about'])->name('about');


Route::get('admin/clientfeedback',[mechaniccontroller::class,'clientfeedback'])->name('clientfeedback');
Route::post('admin/clientfeedback',[mechaniccontroller::class,'clientfeedback'])->name('clientfeedback');

// inner profile in client side
Route::get('/innerprofile/{id}',[Homecontroller::class,'innerprofile'])->name('innerprofile');

Route::get('admin/privatepolicy',[Admin::class,'privatepolicy'])->name('privatepolicy');

Route::get('/pay',[Homecontroller::class,'payment'])->name('payment');
Route::post('/pay',[Homecontroller::class,'payment'])->name('payment');


// edit profile client side
// Route::resource('editprofile',edit_profile::class);
Route::get('/edtpr/{id}',[Homecontroller::class,'editprofile'])->name('editprofile');

Route::get('/updtpr/{id}',[Homecontroller::class,'updateprofile'])->name('updateprofile');
Route::post('/updtpr/{id}',[Homecontroller::class,'updateprofile'])->name('updateprofile');


// Email
Route::get('/email',[email::class,'Home'])->name('email');
Route::post('/email',[email::class,'Home'])->name('email');

Route::get('/otp/{otp}/{email}',[email::class,'otp'])->name('sendotp');
Route::post('/otp/{otp}/{email}',[email::class,'otp'])->name('sendotp');


Route::get('/sendemailstatus/{id}',[email::class,'StatusEmail'])->name('sendemailstatus');

Route::get('/mechanic/time/email/{email}/{date}',[email::class,'time'])->name('emailtime');



Route::get('/Email/formemail',[email::class,'otp'])->name('fromemail');
Route::post('/Email/formemail',[email::class,'otp'])->name('fromemail');

// -------------------------------------------------------------------------------------------------------------------

// mechanic feedback in mechanic panel

Route::get('admin/mechanicfeedback',[mechaniccontroller::class,'mechanicfeedback'])->name('mechanicfeedback');
Route::post('admin/mechanicfeedback',[mechaniccontroller::class,'mechanicfeedback'])->name('mechanicfeedback');


//manage profile mechanic
Route::get('/mechanic',[clientmechaniccontroller::class,'Home'])->name('mechanic');

Route::get('/mechanic/manageprofile',[clientmechaniccontroller::class,'profile'])->name('manageprofile');
Route::post('/mechanic/manageprofile',[clientmechaniccontroller::class,'profile'])->name('manageprofile');


// about us
Route::get('/mechanic/abut',[mechaniccontroller::class,'Aboutmechanic'])->name('Aboutmechanic');


// private policy
Route::get('/mechanic/prvtplcy',[mechaniccontroller::class,'privatepolicymechanic'])->name('privatepolicymechanic');

//contact Us
Route::get('/mechanic/cntus',[mechaniccontroller::class,'contactusmechanic'])->name('contactusmechanic');


// manage city in admin side
Route::get('/mechanic/cityajax',[cityajaxcontroller::class,'Home'])->name('cityajax');
Route::get('/mechanic/addcityajax',[cityajaxcontroller::class,'addcityajax'])->name('addcityajax');
Route::get('/mechanic/editcityajax',[cityajaxcontroller::class,'editcityajax'])->name('editcityajax');
Route::get('/mechanic/deletecityajax',[cityajaxcontroller::class,'deletecityajax'])->name('deletecityajax');


// manage state in admin panel
Route::get('/mechanic/addstateajax',[cityajaxcontroller::class,'addstateajax'])->name('addstateajax');
Route::get('/mechanic/viewstateajax',[cityajaxcontroller::class,'viewstate'])->name('viewstateajax');
Route::get('/mechanic/editstateajax',[cityajaxcontroller::class,'editstate'])->name('editstateajax');
Route::get('/mechanic/deletestateajax',[cityajaxcontroller::class,'deletestate'])->name('deletestateajax');
Route::get('/mechanic/tushal',[cityajaxcontroller::class,'tushal'])->name('tushal');

// Route::get('/mechanic/addcityareaajax',[cityajaxcontroller::class,'addcityarea'])->name('addcityareaajax');


// view payment details
Route::get('/mechanic/viewpayment/{id}',[Homecontroller::class,'viewpayment'])->name('viewpayment');



// -------------------------------------------------------------------------------------------------------------------


// ADMIN Route's
Route::get('admin/',[Admin::class,'Home'])->name('admin');


// Add mechanic
Route::get('/admin/addmechanic',[mechaniccontroller::class,'add'])->name('addmechanic');
Route::post('/admin/addmechanic',[mechaniccontroller::class,'add'])->name('addmechanic');

// View mechnaic

Route::get('admin/viewmechanic',[mechaniccontroller::class,'view'])->name('viewmechanic');


Route::get('admin/viewmechaniccity',[mechaniccontroller::class,'city'])->name('viewmechaniccity');


// Route::post('admin/Editmechanic/{id}',[mechaniccontroller::class,'edit'])->name('editmechanic');


Route::get('admin/editmechanic/{id}',[mechaniccontroller::class,'edit'])->name('editmechanic');
Route::post('admin/editmechanic/{id}',[mechaniccontroller::class,'edit'])->name('editmechanic');


// admin manage profile
Route::resource('/admin/editproAdmin',editproAdmin::class);

// delete mechanic
Route::get('admin/deletemechanic{id}',[mechaniccontroller::class,'delete'])->name('deletemechanic');


// delete client
Route::get('admin/dltclient{id}',[admin::class,'deleteclient'])->name('deleteclient');


Route::post('admin/update_mechanic/{id}',[mechaniccontroller::class,'update'])->name('update_mechanic');

// enable & disable
Route::get('admin/enable_desable/{id}',[mechaniccontroller::class,'status'])->name('enable_desable');

Route::resource('/admin/brand',brandcontroller::class);

// notifications

Route::get('admin/notification/',[Homecontroller::class,'notificationstatus'])->name('notification');

Route::get('admin/serviceajax/',[admin::class,'serviceajax'])->name('serviceajax');
Route::post('admin/serviceajax/',[admin::class,'serviceajax'])->name('serviceajax');

Route::get('/mechanic/cityajax/jd',[cityajaxcontroller::class,'Ajax'])->name('cityajaxjd');

//time allocation

Route::get('mechanic/timeallocation',[mechaniccontroller::class,'timeallocation'])->name('timeallocation');
Route::post('mechanic/timeallocation',[mechaniccontroller::class,'timeallocation'])->name('timeallocation');

Route::get('mechanic/time/{id}',[mechaniccontroller::class,'time'])->name('time');
Route::post('mechanic/time/{id}',[mechaniccontroller::class,'time'])->name('time');

//feedbacks
Route::get('amdin/cntfd',[admin::class,'adminclient'])->name('adminclientfeed');
Route::get('mechanic/ursfd',[admin::class,'adminmechanic'])->name('adminmechanicfeed');


Route::get('amdin/dltfd/{id}',[admin::class,'deletefeedback'])->name('deletefeedback');
Route::get('amdin/dltfdmcs/{id}',[admin::class,'deletefeedbackmechanic'])->name('deletefeedbackmechanic');

// viewpayment
Route::get('admin/viepymt/',[admin::class,'viewpaymentadmin'])->name('viewpaymentadmin');


Route::get('admin/vct',[admin::class,'viewclient'])->name('viewclient');


Route::get('admin/notification/enable/{id}',[Homecontroller::class,'PendingEnable'])->name('pending_enable');
Route::get('admin/notification/disable/{id}',[Homecontroller::class,'PendingDisable'])->name('pending_disable');



// Route::get('mechanic');



Route::get('/jd/{id}/{sid}',[Homecontroller::class,'Extra'])->name('jenishdayani');
Route::post('/jd/{id}/{sid}',[Homecontroller::class,'Extra'])->name('jenishdayani');




?>
