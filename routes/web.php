<?php


// Route::get('/','PagesController@home');
// Route::get('/kontak','PagesController@kontak');
// Route::get('/about','PagesController@about');
use App\Repositories\UserRepository;
use App\Services\Twitter;


Route::get('/', function(Twitter $twitter){
    dd($twitter);

    return view('welcome');
});

Route::post('/projects/{project}/task','ProjectTaskController@store');

Route::post('/completed-tasks/{task}','CompletedTaskController@store');

Route::delete('/completed-tasks/{task}','CompletedTaskController@destroy');

Route::resource('projects','ProjectController');


