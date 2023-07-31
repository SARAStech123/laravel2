<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\UploadFile;
use App\Http\Controllers\UploadController;
//use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\school;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\NoticeController;
use App\Models\Notice;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\DashboardController;
use App\Models\Information;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/', function () {
//    return view('create');
//})->name('/');

//Route::post('/school/create', 'ContactController@create');

Route::post('/school', [Controller::class, 'store']);

Route::post('schools', [SchoolController::class, 'schools']);

Route::get('public', [Controller::class, 'show']);

Route::get('Dashboard', [Controller::class, 'name']);

Route::get('public', [Controller::class, 'search'])->name('public');

Route::get('/fetch-data', [Controller::class, 'fetchData'])->name('fetch-data');

Route::get('/download/{id}', [Controller::class, 'download']);

Route::get('file/{id}', [Controller::class, 'file']);
Route::get('files/{id}', [Controller::class, 'files']);
Route::get('down/{id}', [Controller::class, 'download']);
Route::get('download/{id}', [Controller::class, 'down']);
Route::get('download/{id}', [Controller::class, 'downloadfile']);

Route::get('/notices', [NoticeController::class, 'index'])->name('notices.index');
Route::get('/notices/create', [NoticeController::class, 'create'])->name('notices.create');
Route::post('/notices', [NoticeController::class, 'store'])->name('notices.store');
Route::get('admin', [Controller::class, 'admin']);

Route::get('/file/{id}',[FileController::class, 'show']);
Route::post('/file/{id}/approve',[FileController::class, 'approve']);
Route::post('/file/{id}/decline',[FileController::class, 'decline']);


Route::get('/approvals', [ApprovalController::class, 'index'])->name('approvals.index');
Route::put('/approvals/{approval}', [ApprovalController::class, 'update'])->name('approvals.update');

Route::get('/admin/home', [AdminController::class, 'editHome'])->name('admin.home.edit');
Route::put('/admin/home', [AdminController::class,'updateHome'])->name('admin.home.update');
Route::get('/admin/about', [AdminController::class,'editAbout'])->name('admin.about.edit');
Route::put('/admin/about', [AdminController::class,'updateAbout'])->name('admin.about.update');

Route::get('/AdminHome', [AdminHomeController::class, 'create']);
Route::get('/AdminHome', [AdminHomeController::class, 'store'])->name('AdminHome');
Route::get('/Dashboard', [AdminHomeController::class, 'show']);

Route::post('/admin/addUser', [AdminController::class, 'addUser']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);


Route::get('/admin/AdminDashboard',[DashboardController::class,'graph']);
Route::get('/admin/update_home', [AdminController::class, 'update_home']);
Route::post('/admin/update_home', [AdminController::class, 'updatehomeAD']);
Route::post('key', [AdminController::class, 'key']);

Route::get('/key', function () {
    return view('admin.home.reg');
});

//Route::post('/school', [Controller::class, 'create']);

//Route::post('school',[Controller::class,'Sclstore']);

//Route::post('/school',[Controller::class,'send'])->name('school');


Route::get('/index', function () {
    return view('index');
});
Route::get('/show', function () {
    return view('show');
});
/*
Route::get('/notices.notice', function () {
    return view('notices.notice');
});

Route::get('/notices.create', function () {
    return view('notices.create');
});
*/
Route::get('/emails.SclMail', function () {
    return view('emails.SclMail');
});



Route::get('/upload', function () {
    return view('upload');
});

Route::get('/home', function () {
    return view('home');
});

//Routes for header
Route::get('/', function () {
    return view('play');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/plans&pricing', function () {
    return view('plans&pricing');
});

//Route::get('/tools&tips', function () {
//    return view('tools&tips');
//});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/signin', function () {
    return view('signin');
});

//For Registration
Route::get('/create',function(){
    return view('create');
});

Route::get('/message', function () {
    return view('message');
});
/*
Route::get('/Dashboard', function () {
    return view('Dashboard');
});
*/
Route::get('/scllogin', function () {
    return view('scllogin');
});


Route::post('scllogin', [Controller::class, 'scllogin']);

//Route::post('upload', [Controller::class, 'upload']);

Route::post('index', [Controller::class, 'upload']);

Route::get('upload', [UploadController::class, 'index'])->name('upload.index');
Route::post('upload', [UploadController::class, 'store'])->name('upload.store');


//Route::post('upload', [Controller::class, 'fileUpload']);


/*
Route::get('/message',function(){
    if(session()->has('Email') || session()->has('SEmail')){
        return view('message');
    }
    return view('/create');
});


Route::get('/back',function(){
    if(session()->has('Email') || session()->has('SEmail')){
        session()->pull('FName','SEmail',null);
    }
    return view('create');
});
*/
//Route::post('create',[Controller::class,'add']);

//Route::post('create',[Controller::class,'subtract']);


/*
Route::get('/back',function(){
    if(session()->has('SEmail')){
        session()->pull('SEmail',null);
    }
    return view('create');
});
*/

Route::post('/create',function(){
    User::create([
        'FName' => request('FName'),
        'LName' => request('LName'),
        'Class' => request('Class'),
        'Email' => request('Email'),
        'Password' => request('Password'),
        'roll' => request('roll'),
        'SName' => request('SName'),
        'SEmail' => request('SEmail'),
        'SPassword' => request('SPassword'),
        'roll2' => request('roll2')

    ]);
    return redirect('/message');
});



// for school registration
/*
Route::post('/create',function(){
   $validate_data = validator::make(request()->all(),[
        'schoolname' => 'required',
        'schoolemail' => 'required',
        'schoolpassword' => 'required|min:6'
],[ 'schoolname.required' => 'The FName field is required',
    'schoolemail.required' => 'The LName field is required',
    'schoolpassword.required' => 'The Password field is required'

   ])->validated();
    School::create([
        'schoolname' =>$validate_data['schoolname'],
        'schoolemail' =>$validate_data['schoolemail'],
        'schoolpassword' =>$validate_data['schoolpassword']
    ]);
    return redirect('/message');
});*/


/*Route::post('/signin',function(){
   $validate_data = validator::make(request()->all(),[
        'Email' => 'required',
        'Password' => 'required|min:6'
],[ 'Email.required' => 'The Class field is required',
    'Password.required' => 'The Password field is required'

   ])->validated();
    Article::create([
        'Email' =>$validate_data['Email'],
        'Password' =>$validate_data['Password']
    ]);
    return redirect('/Dashboard');
});*/




// for Login
/*Route::group(['middleware'=>"web"],function(){
    
Route::get('create', [ContactController::class, 'index']);
Route::post('message', [ContactController::class, 'store'])->name('contact.us.store');
Route::post('signin', [ContactController::class, 'login']);
});
*/

//Route::view("signin","signin");
//Route::view("Dashboard","Dashboard");

//Routes for signin to Dashboard

Route::get("/signin",function(){
    if(session()->has('Email')){
        return view('/Dashboard');
    }
    return view("/signin");
});


Route::post('signin',[Controller::class,'login']);

//Route::post('signin',[Controller::class,'schoollogin']);

// this is for destroy session
Route::get("/logout",function(){
    if(session()->has('Email') || session()->has('SEmail')){
        session()->pull('Email',null);
        session()->pull('SEmail',null);
        session()->pull('AN',null);
        session()->pull('SN',null);

    }
    return view("/play");
});

/*
Route::get('/', function() {
    return view('signin');
})->middleware('RedirectIfNotAuthenticated');
*/
Route::post('/Dashboard', function(){
    if(Session()->has(null)){
        return redirect('/signin');
    }
    return view('/Dashboard');
});

//Routes for create to message
Route::post('/message', function(){
    if(!Session()->has('FName')){
        return redirect('/create');
    }
    return view('/message');
});

Route::get("/create",function(){
    if(session()->has('FName')){
        return redirect('/message');
    }
    return view("/create");
});

Route::get("/log",function(){
    if(session()->has('FName')){
        session()->pull('FName');
    }
    return view("/create");
});

Route::post('update', [ContactController::class, 'update']);

Route::get('project', [ContactController::class, 'project']);
