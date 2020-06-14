<?php

use Illuminate\Support\Facades\Route;

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

Route::namespace('user')->group(function(){
    //home
    Route::get('/' , 'HomePageController@index')->name('user.homepage');
    //courses
    Route::get('/category/{id}' , 'CourseController@category')->name('user.category');
    Route::get('/category/{id}/course/{c_id}' , 'CourseController@show')->name('user.show');
    //contact
    Route::get('/contact' , 'ContactController@index')->name('user.contact');
    //contact
    Route::post('/message/newsletter' , 'MessageController@newsletter')->name('user.message.newsletter');
    Route::post('/message/contact' , 'MessageController@contact')->name('user.message.contact');
    Route::post('/message/enroll' , 'MessageController@enroll')->name('user.message.enroll');
});

Route::namespace('admin')->prefix('dashboard')->group(function(){
    //login
    Route::get('/login' , 'AuthController@login')->name('admin.login');
    Route::post('/do-login' , 'AuthController@doLogin')->name('admin.doLogin');

    Route::middleware('adminAuth:admin')->group(function(){
         //logout
        Route::get('/logout' , 'AuthController@logout')->name('admin.logout');
        //home
        Route::get('/' , 'HomeController@index')->name('admin.home');
        //category
        Route::get('/category' , 'CategoryController@index')->name('admin.category.index');
        Route::get('/category/create' , 'CategoryController@create')->name('admin.category.create');
        Route::post('/category/store' , 'CategoryController@store')->name('admin.category.store');
        Route::get('/category/edit/{id}' , 'CategoryController@edit')->name('admin.category.edit');
        Route::post('/category/update' , 'CategoryController@update')->name('admin.category.update');
        Route::get('/category/delete/{id}' , 'CategoryController@delete')->name('admin.category.delete');
        //trainer
        Route::get('/trainer' , 'TrainerController@index')->name('admin.trainer.index');
        Route::get('/trainer/create' , 'TrainerController@create')->name('admin.trainer.create');
        Route::post('/trainer/store' , 'TrainerController@store')->name('admin.trainer.store');
        Route::get('/trainer/edit/{id}' , 'TrainerController@edit')->name('admin.trainer.edit');
        Route::post('/trainer/update' , 'TrainerController@update')->name('admin.trainer.update');
        Route::get('/trainer/delete/{id}' , 'TrainerController@delete')->name('admin.trainer.delete');
         //courses
         Route::get('/course' , 'CourseController@index')->name('admin.course.index');
         Route::get('/course/create' , 'CourseController@create')->name('admin.course.create');
         Route::post('/course/store' , 'CourseController@store')->name('admin.course.store');
         Route::get('/course/edit/{id}' , 'CourseController@edit')->name('admin.course.edit');
         Route::post('/course/update' , 'CourseController@update')->name('admin.course.update');
         Route::get('/course/delete/{id}' , 'CourseController@delete')->name('admin.course.delete');
         Route::get('/course/show/{id}' , 'CourseController@show')->name('admin.course.show');
        //students
         Route::get('/student' , 'StudentController@index')->name('admin.student.index');
         Route::get('/student/create' , 'StudentController@create')->name('admin.student.create');
         Route::post('/student/store' , 'StudentController@store')->name('admin.student.store');
         Route::get('/student/edit/{id}' , 'StudentController@edit')->name('admin.student.edit');
         Route::post('/student/update' , 'StudentController@update')->name('admin.student.update');
         Route::get('/student/delete/{id}' , 'StudentController@delete')->name('admin.student.delete');
         Route::get('/student/show/{id}' , 'StudentController@show')->name('admin.student.show');
         Route::get('/student/{id}/addCourse' , 'StudentController@addCourse')->name('admin.student.addCourse');
         Route::post('/student/{id}/storeCourse' , 'StudentController@storeCourse')->name('admin.student.storeCourse');
         Route::get('/student/{id}/course/{c_id}/approve' , 'StudentController@approve')->name('admin.student.approve');
         Route::get('/student/{id}/course/{c_id}/reject' , 'StudentController@reject')->name('admin.student.reject');
    });
});
