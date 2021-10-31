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

use App\Http\Controllers\ConfigurationController;

require 'subcategories.php';
Route::get('/', function () {
    return view('welcome');
});

//Route::get('{any}', function () {
//    return view('home');
//})->where('any', '.*');


Auth::routes();





Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/{anypath}', 'HomeController@index')->where('path','.*');
Route::post('/addcategory', 'CategoriesController@store')->name('addcategory');
Route::get('/getcategories', 'CategoriesController@index')->name('getcategories');
Route::get('/showcategories/{id}', 'CategoriesController@show')->name('showcategories');
Route::post('/updateCategory', 'CategoriesController@update')->name('updateCategory');
Route::get('/deletecategories/{id}', 'CategoriesController@destroy')->name('deletecategories');
Route::get('/CategoryStatus/{id}', 'CategoriesController@CatStatus')->name('CategoryStatus');
Route::post('/selectedCategories/removeitems', 'CategoriesController@Remove')->name('removeitems');
Route::post('/categories/changestatus', 'CategoriesController@ChangStatus')->name('ChangStatus');











Route::group(['as'=>'admin/','prefix'=>'admin','namespace'=>'backend\Admin','middleware'=>['auth','admin']],
    function (){

        Route::get('dashboard','dashboardcontroller@index')->name('home');

    });
Route::group(['as'=>'author/','prefix'=>'author','namespace'=>'backend\Author','middleware'=>['auth','author']],
    function (){

        Route::get('dashboard','dashboardcontroller@index')->name('home');

    });

Route::group(['as'=>'editor/','prefix'=>'editor','namespace'=>'backend\Editor','middleware'=>['auth','editor']],
    function (){

        Route::get('dashboard','dashboardcontroller@index')->name('home');

    });

Route::group(['as'=>'moderator/','prefix'=>'moderator','namespace'=>'backend\Moderator','middleware'=>['auth','moderator']],
    function (){

        Route::get('dashboard','dashboardcontroller@index')->name('home');

    });


Route::group(['as'=>'advertiser/','prefix'=>'advertiser','namespace'=>'backend\Advertiser','middleware'=>['auth','advertiser']],
    function (){

        Route::get('dashboard','dashboardcontroller@index')->name('home');

    });


Route::group(['as'=>'analyst/','prefix'=>'analyst','namespace'=>'backend\Analyst','middleware'=>['auth','analyst']],
    function (){

        Route::get('dashboard','dashboardcontroller@index')->name('home');

    });
//Route::resource('/addconfiguration',ConfigurationController::class);
Route::post('/addconfiguration', 'ConfigurationController@add')->name('add');

//employee_information
//Route::post('/addconfiguration', 'ConfigurationController@add')->name('add');






