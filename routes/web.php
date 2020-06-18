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
//============================== FrontEnd ==========================================//
Route::get('/', 'front\FrontController@index')->name('front.index');
Route::get('/download', 'front\FrontController@download_cv')->name('front.download');
Route::post('/message', 'front\FrontController@message')->name('front.message');

//============================= Backend ===========================================//

Auth::routes();

Route::group(['prefix'=>'administrator', 'middleware' =>'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::resource('about', 'AboutController')->except(['create','show']);
    Route::resource('/services', 'ServicesController')->except([
        'create', 'show']);   
    Route::group(['prefix' => 'services'], function()
    {
        Route::get('/','ServicesController@index')->name('services.index');
        Route::get('/create','ServicesController@create')->name('services.create');
        Route::post('/store','ServicesController@store')->name('services.store');
        Route::delete('/{$id}','ServicesController@destroy')->name('services.destroy');
        Route::get('/{$id}/edit','ServicesController@edit')->name('services.edit');
        Route::put('/{$id}','ServicesController@update')->name('services.update');    
    });

    Route::resource('/skills', 'SkillController')->except([
        'create', 'show']);   
    Route::group(['prefix' => 'skills'], function()
    {
        Route::get('/','SkillController@index')->name('skills.index');
        Route::get('/create','SkillController@create')->name('skills.create');
        Route::post('/store','SkillController@store')->name('skills.store');
        Route::delete('/{$id}','SkillController@destroy')->name('skills.destroy');
        Route::get('/{$id}/edit','SkillController@edit')->name('skills.edit');
        Route::put('/{$id}','SkillController@update')->name('skills.update');    
    });

    Route::resource('/education', 'EducationController')->except([
        'create', 'show']);   
    Route::group(['prefix' => 'education'], function()
    {
        Route::get('/','EducationController@index')->name('education.index');
        Route::get('/create','EducationController@create')->name('education.create');
        Route::post('/store','EducationController@store')->name('education.store');
        Route::delete('/{$id}','EducationController@destroy')->name('education.destroy');
        Route::get('/{$id}/edit','EducationController@edit')->name('education.edit');
        Route::put('/{$id}','EducationController@update')->name('education.update');    
    });

    Route::resource('/experience', 'ExperienceController')->except([
        'create', 'show']);   
    Route::group(['prefix' => 'experience'], function()
    {
        Route::get('/','ExperienceController@index')->name('experience.index');
        Route::get('/create','ExperienceController@create')->name('experience.create');
        Route::post('/store','ExperienceController@store')->name('experience.store');
        Route::delete('/{$id}','ExperienceController@destroy')->name('experience.destroy');
        Route::get('/{$id}/edit','ExperienceController@edit')->name('experience.edit');
        Route::put('/{$id}','ExperienceController@update')->name('experience.update');    
    });

    Route::resource('/uploads', 'UploadController')->except([
        'create','show']);   
    Route::group(['prefix' => 'uploads'], function()
    {
        Route::get('/','UploadController@index')->name('uploads.index');
        Route::get('/create','UploadController@create')->name('uploads.create');
        Route::post('/store','UploadController@store')->name('uploads.store');
        Route::delete('/{$id}','UploadController@destroy')->name('uploads.destroy');
        Route::get('/{$id}/edit','UploadController@edit')->name('uploads.edit');
        Route::put('/{$id}','UploadController@update')->name('uploads.update');  
        Route::get('/{$id}','UploadController@show')->name('uploads.show');    
    });

    Route::resource('/message', 'MessageController')->except([
        'reply']);   
    Route::group(['prefix' => 'message'], function()
    {
        Route::get('/','MessageController@index')->name('message.index');
        Route::get('/reply/{id}','MessageController@reply')->name('message.reply');
        Route::get('/{$id}','MessageController@show')->name('message.show');
        Route::post('/send','MessageController@shsend')->name('message.send');  
    });
});

