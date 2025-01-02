<?php

use App\Http\Controllers\Reg_Controller;
use App\Http\Controllers\testingController;
use Illuminate\Support\Facades\Route;
use  Illuminate\Http\Request;


//  Using session Route:
Route::get('/session', function () {
    $session =session()->all();
    ($session);
});
Route::get('/testing' , [testingController::class , 'testing']);
Route::get('/group' ,    [testingController::class , 'group']);
//   Creating costum Session data

Route::get('/set', function (Request  $ruquest) {
    $ruquest -> session()->put('User Name' , 'Hassan Baloch');
    $ruquest -> session()->put('User Id' , '123');
    return redirect('/session');
});
    //   Destroy session()
    Route::get('/logout', function () {
       session()->forget(['User Name' , 'User Id']);

       return redirect('/session');
    });
Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/file', function () {
    return view('file');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/Register' , [Reg_Controller::class , 'Insert'])->name('Register');

Route::get('/Student' , [Reg_Controller::class , 'Studentsdata']);

Route::get('/Alldata' , [Reg_Controller::class , 'Registerdata']);
Route::get('/Del_Records/{id}', [Reg_Controller::class , 'Delete'])->name('Student.Destroy');
Route::get('/trash', [Reg_Controller::class , 'Stu_trash'])->name('Student.trash');
Route::get('/restore/{id}',  [Reg_Controller::class , 'Trash'])->name('Student.restore');
Route::get('/delete/{id}', [Reg_Controller::class , 'forcedelete'])->name('Student.delete');
Route::post('/upload', [Reg_Controller::class , 'file'])->name('save');
