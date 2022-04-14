<?php


use Carbon\Carbon;
use App\Mail\FirstMail;
use App\Http\Livewire\EditEnquete;
use App\Http\Livewire\ListEnquete;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViveController;
use App\Http\Livewire\UpdateEnqueteComponent;
use App\Http\Controllers\Admin\UploadsController;
use App\Http\Controllers\Admin\UploadsWilayaController;

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

    Route::view('add-wilaya','livewire.wilaya');
    Route::get('Attachement-wilaya/{id}', 'Admin\UploadsWilayaController@index');
    Route::get('download/{Nom}/{file_name}', 'Admin\UploadsWilayaController@download');
    Route::post('delete', 'Admin\UploadsWilayaController@delete')->name('delete');
    Route::get('view/{Nom}/{file_name}', 'Admin\UploadsWilayaController@view');



    Route::get('enquete_report', 'Admin\ReportController@index');
    Route::post('/Search_invoices', 'Admin\ReportController@Search_invoices');



    Route::get('wilaya_report', 'Admin\WilayaReportController@index');
    Route::post('/Search_invoices', 'Admin\WilayaReportController@Search_invoices');

    Route::group(['middleware' => ['auth']], function() {
        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('posts', PostController::class);
    });
    

    



    Route::get('/loogin', function () {
        return view('loogin');
    });
    
    
    







 

