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

Route::get('/', 'HomeCT@login')->name("login");
Route::post('/login', 'AuthCT@login');
Route::get('/logout', 'AuthCT@logout');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('dashboard', "AdminCT@dashboard");
    Route::get('computer-asset', "ComputerAssetCT@index");
    Route::get('computer-asset/add', "ComputerAssetCT@add");
    Route::post('computer-asset/store', "ComputerAssetCT@store");
    Route::get('computer-asset/edit/{id}', "ComputerAssetCT@edit");
    Route::post('computer-asset/updated/{id}', "ComputerAssetCT@updated");
    Route::get('computer-asset/delete/{id}', "ComputerAssetCT@delete");
    Route::get('computer-asset/detail/{id}', "ComputerAssetCT@detail");
    
    Route::get('peripheral-asset', "PeripheralAssetCT@index");
    Route::get('peripheral-asset/add', "PeripheralAssetCT@add");
    Route::post('peripheral-asset/store', "PeripheralAssetCT@store");
    Route::get('peripheral-asset/edit/{id}', "PeripheralAssetCT@edit");
    Route::post('peripheral-asset/updated/{id}', "PeripheralAssetCT@updated");
    Route::get('peripheral-asset/delete/{id}', "PeripheralAssetCT@delete");
    Route::get('peripheral-asset/detail/{id}', "PeripheralAssetCT@detail");

    Route::get('software-asset', "SoftwareAssetCT@index");
    Route::get('software-asset/add', "SoftwareAssetCT@add");
    Route::post('software-asset/store', "SoftwareAssetCT@store");
    Route::get('software-asset/edit/{id}', "SoftwareAssetCT@edit");
    Route::post('software-asset/updated/{id}', "SoftwareAssetCT@updated");
    Route::get('software-asset/delete/{id}', "SoftwareAssetCT@delete");
    Route::get('software-asset/detail/{id}', "SoftwareAssetCT@detail");

    Route::get('client-information', "ClientInformationCT@index");
    Route::get('client-information/add', "ClientInformationCT@add");
    Route::post('client-information/store', "ClientInformationCT@store");
    Route::get('client-information/edit/{id}', "ClientInformationCT@edit");
    Route::post('client-information/updated/{id}', "ClientInformationCT@updated");
    Route::get('client-information/delete/{id}', "ClientInformationCT@delete");
    Route::get('client-information/detail/{id}', "ClientInformationCT@detail");


    
});
