<?php

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

Route::get('/', function () {
<<<<<<< HEAD

    return view('auth.login');

=======
    return view('auth.login');
>>>>>>> c4a153a88c7629c9b3ff6d1659167a1721ac2077
});


Route::resource('cycles', 'CycleController');
Route::resource('enterprises', 'EnterpriseController');

Route::resource('users', 'UserController');
Auth::routes();

Route::resource('worksheets', 'WorksheetController');
Route::resource('assistances', 'AssistanceController');
Route::resource('menuAlumno', 'menuAlumnoController');
Route::resource('admin', 'AdminController');
Route::resource('menuTutorE', 'menuTutorEController');


Route::resource('tasks', 'TaskController');
Route::resource('modules', 'ModuleController');

Route::resource('cce', 'CeController');


Route::get('/home', 'HomeController@index')->name('home');