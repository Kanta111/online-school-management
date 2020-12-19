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

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/','Frontend\FrontenController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'auth'],function(){

  Route::prefix('users')->group(function(){
	   Route::get('/view','Backend\UserController@view')->name('users.view');
	   Route::get('/add','Backend\UserController@add')->name('users.add');
	   Route::get('/store','Backend\UserController@store')->name('users.store');
	   Route::get('/edit/{id}','Backend\UserController@edit')->name('users.edit');
	   Route::post('/update/{id}','Backend\UserController@update')->name('users.update');
	   Route::get('/delete/{id}','Backend\UserController@delete')->name('users.delete');



});


  Route::prefix('profiles')->group(function(){
	Route::get('/view','Backend\ProfileController@view')->name('profiles.view');
	Route::get('/add','Backend\ProfileController@edit')->name('profiles.add');
	Route::post('/store','Backend\ProfileController@update')->name('profiles.update');
	Route::get('/password/view','Backend\ProfileController@passwordView')->name('profiles.password.view');
	Route::get('/password/update','Backend\ProfileController@passwordUpdate')->name('profiles.password.update');


});

  Route::prefix('setups')->group(function(){
	   Route::get('/student/class/view','Backend\Setup\StudentClassController@view')->name('setups.student.class.view');
	   Route::get('/student/class/add','Backend\Setup\StudentClassController@add')->name('setups.student.class.add');
	   Route::post('/student/class/store','Backend\Setup\StudentClassController@store')->name('setups.student.class.store');
	   Route::get('/student/class/edit/{id}','Backend\Setup\StudentClassController@edit')->name('setups.student.class.edit');
	   Route::post('/student/class/update/{id}','Backend\Setup\StudentClassController@update')->name('setups.student.class.update');
	   Route::get('/student/class/delete/','Backend\Setup\StudentClassController@delete')->name('setups.student.class.delete');
  //subjects
  Route::get('/subject/view','Backend\Setup\SubjectController@view')->name('setups.subject.view');
	   Route::get('/subject/add','Backend\Setup\SubjectController@add')->name('setups.subject.add');
	   Route::post('/subject/store','Backend\Setup\SubjectController@store')->name('setups.subject.store');
	   Route::get('/subject/edit/{id}','Backend\Setup\SubjectController@edit')->name('setups.subject.edit');
	   Route::post('/subject/update/{id}','Backend\Setup\SubjectController@update')->name('setups.subject.update');
	   Route::get('/subject/delete/','Backend\Setup\SubjectController@delete')->name('setups.subject.delete');




});
  //assign subjects
       Route::get('/assign/subject/view','Backend\Setup\AssignSubjectController@view')->name('setups.assign.subject.view');
	   Route::get('/assign/subject/add','Backend\Setup\AssignSubjectController@add')->name('setups.assign.subject.add');
	   Route::post('/assign/subject/store','Backend\Setup\AssignSubjectController@store')->name('setups.assign.subject.store');
	   Route::get('/assign/subject/edit/{class_id}','Backend\Setup\AssignSubjectController@edit')->name('setups.assign.subject.edit');
	   Route::post('/assign/subject/update/{class_id}','Backend\Setup\AssignSubjectController@update')->name('setups.assign.subject.update');
	   Route::get('/assign/subject/delete/','Backend\Setup\AssignSubjectController@delete')->name('setups.assign.subject.delete');
	   Route::get('assign/subjects/details/{class_id}','Backend\Setup\AssignSubjectController@details')->name('setups.assign.subject.details');

	   //videos1
	    Route::get('/assign/files/create','Backend\Setup\DocumentController@create')->name('setups.assign.files.create');
	    Route::post('/files','Backend\Setup\DocumentController@store')->name('setups.assign.files.store');
	    
	    Route::get('/files','Backend\Setup\DocumentController@index')->name('setups.assign.files.index');
	    Route::get('/files/view','Backend\Setup\DocumentController@view')->name('setups.assign.files.view');

        Route::get('/files/{id}','Backend\Setup\DocumentController@show')->name('setups.assign.files.show');
	    Route::get('/file/download/{file}','Backend\Setup\DocumentController@download')->name('setups.assign.files.download');

	    //videos2

	    Route::get('/assign2/twos/create','Backend\Setup\DocumentControllertwo@create')->name('setups.assign.twos.create');
	    Route::post('/twos','Backend\Setup\DocumentControllertwo@store')->name('setups.assign.twos.store');
	    
	    Route::get('/twos','Backend\Setup\DocumentControllertwo@index')->name('setups.assign.twos.index');
	    Route::get('/twos/view','Backend\Setup\DocumentControllertwo@view')->name('setups.assign.twos.view');

        Route::get('/twos/{id}','Backend\Setup\DocumentControllertwo@show')->name('setups.assign.twos.show');
	    Route::get('/two/download/{two}','Backend\Setup\DocumentControllertwo@download')->name('setups.assign.twos.download');

	    //videos3

	    Route::get('/assign2/threes/create','Backend\Setup\DocumentControllerthree@create')->name('setups.assign.threes.create');
	    Route::post('/threes','Backend\Setup\DocumentControllerthree@store')->name('setups.assign.thres.store');
	    
	    Route::get('/threes','Backend\Setup\DocumentControllerthree@index')->name('setups.assign.threes.index');
	    Route::get('/threes/view','Backend\Setup\DocumentControllerthree@view')->name('setups.assign.threes.view');

        Route::get('/threes/{id}','Backend\Setup\DocumentControllerthree@show')->name('setups.assign.threes.show');
	    Route::get('/three/download/{three}','Backend\Setup\DocumentControllerthree@download')->name('setups.assign.threes.download');

	   

	  
       

       




});


  







  




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
