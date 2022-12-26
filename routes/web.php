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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
//Auth 
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
//dashboard Routes
Route::get('/dashboardHome', 'AdminController@getHome')->middleware('auth');
Route::get('/dashboardTables', 'AdminController@getTables')->middleware('auth');

Route::get('/teamTable', 'AdminController@getTeamTable')->middleware('auth');
Route::get('/servicesTable', 'AdminController@getServicesTable')->middleware('auth');
Route::get('/clinetTable', 'AdminController@getClinetTable')->middleware('auth');

Route::get('/teamForm', 'AdminController@getTeamForm')->middleware('auth');
Route::get('/servicesForm', 'AdminController@getServicesForm')->middleware('auth');
Route::get('/clinetForm', 'AdminController@getClinetForm')->middleware('auth');

// Route::get('/teamEditForm', 'AdminController@getTeamEditForm')->middleware('auth');
// Route::get('/servicesEditForm', 'AdminController@getServicesEditForm')->middleware('auth');
// Route::get('/clinetEditForm', 'AdminController@getClinetEditForm')->middleware('auth');

//user Routes 
Route::get('/Index', 'UserController@getIndex');
Route::get('/Contact', 'UserController@getContact');
Route::get('/About', 'UserController@getAbout');
Route::get('/Clinet', 'UserController@getClinet');
Route::get('/Service', 'UserController@getService');
Route::get('/Team', 'UserController@getTeam');
//admin Routes 
//Services
Route::get('/showServices', 'ServiceController@showServices');
Route::post('/storeServices', 'ServiceController@storeServices');
Route::get('/createServices', 'ServiceController@createServices');
Route::get('/editServices/{id}', 'ServiceController@editServices');
Route::post('/updateServices', 'ServiceController@updateServices');
Route::get('/dropServices/{id}', 'ServiceController@dropeServices');
Route::get('/restoreServices/{id}', 'ServiceController@restoreServices');
//Team
Route::get('/teamTable', 'TeamController@showTeam');

Route::post('/storeTeam', 'TeamController@storeTeam');
Route::get('/createTeam', 'TeamController@createTeam');
Route::get('/editTeam/{id}', 'TeamController@editTeam');
Route::post('/updateTeam', 'TeamController@updateTeam');
Route::get('/dropTeam/{id}', 'TeamController@dropTeam');
Route::get('/restoreTeam/{id}', 'TeamController@restoreTeam');
//Clinet
Route::get('/showClinet', 'ClinetController@showClinet');
Route::post('/storeClinet', 'ClinetController@storeClinet');
Route::get('/createClinet', 'ClinetController@createClinet');
Route::get('/editClinet/{id}', 'ClinetController@editClinet');
Route::post('/updateClinet', 'ClinetController@updateClinet');
Route::get('/dropClinet/{id}', 'ClinetController@dropClinet');
Route::get('/restoreClinet/{id}', 'ClinetController@restoreClinet');

