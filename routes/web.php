<?php


use App\Http\Livewire\EditEnquete;
use App\Http\Livewire\ListEnquete;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViveController;
use App\Http\Livewire\UpdateEnqueteComponent;
use App\Http\Controllers\Admin\UploadsController;


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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::get('/dashboard','Admin\FrontendController@index');
    Route::view('add-enquete','livewire.show');
    
    Route::get('Attachement/{id}', 'Admin\UploadsController@index');
    Route::get('download/{Nom}/{file_name}', 'Admin\UploadsController@download');
    Route::post('delete', 'Admin\UploadsController@delete')->name('delete');
    Route::get('view/{Nom}/{file_name}', 'Admin\UploadsController@view');
    Route::get('open/{N_Pension}', 'Admin\UploadsController@open');

    
    Route::get('instances-revision','Admin\InstancesController@index');
    Route::get('Ajouter-revision','Admin\InstancesController@add');
    Route::post('insert-revision','Admin\InstancesController@insert');

    Route::post('/Enquete_update/{id}', 'Admin\InstancesController@Enquete_update')->name('Enquete_update');
    Route::post('/Revisions_destroy/{id}', 'Admin\InstancesController@Revisions_destroy')->name('Revisions_destroy');

    Route::get('demande-enquete', 'Admin\DemandesController@index');
    Route::get('ajouter-enquete', 'Admin\DemandesController@add');
    Route::post('insert-enquete', 'Admin\DemandesController@insert');

    Route::post('/Enquetes_update/{id}', 'Admin\DemandesController@Enquetes_update')->name('Enquetes_update');
    Route::post('/Premier_destroy/{id}', 'Admin\DemandesController@Premier_destroy')->name('Premier_destroy');

    Route::get('/loogin', function () {
        return view('loogin');
    });
    
    







 

