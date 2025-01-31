<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\Auth\LoginRegisterController;

//--------------------------------------------------------------------------
//                          AUTH ROUTE
//--------------------------------------------------------------------------
    Route::controller(LoginRegisterController::class)->group(function() {
        // Route::get('/register', 'register')->name('register'); // No Need
        Route::post('/store', 'store')->name('store');
        Route::get('/login', 'login')->name('login');
        Route::post('/authenticate', 'authenticate')->name('authenticate');
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::post('/logout', 'logout')->name('logout');
    });


    Route::get('/', function () {
        return view('welcome');
    });






    // Main Code

    Route::get('home',                          [MachineController::class, 'index'])->name('machine.home');

    // DEVICE SETTING
    Route::get('/device-restart',               [MachineController::class, 'device_restart'])->name('machine.devicerestart');
    Route::get('/device-shutdown',              [MachineController::class, 'device_shutdown'])->name('machine.deviceshutdown');
    Route::get('/device-sleep',                 [MachineController::class, 'device_sleep'])->name('machine.devicesleep');
    Route::get('/test-sound',                   [MachineController::class, 'test_sound'])->name('machine.testsound');
    Route::get('/device-resume',                [MachineController::class, 'device_resume'])->name('machine.deviceresume');
    Route::get('/device-settime',               [MachineController::class, 'device_settime'])->name('machine.devicesettime');

     // DEVICE DATA

    Route::get('/device-information',           [MachineController::class, 'device_information'])->name('machine.deviceinformation');
    Route::get('/device-data',                  [MachineController::class, 'device_data'])->name('machine.devicedata');
    Route::get('/device-attendance',            [MachineController::class, 'device_attendance'])->name('machine.attendance');
    Route::get('/device-data/clear-attendance', [MachineController::class, 'device_data_clear_attendance'])->name('machine.devicedata.clear.attendance');


    Route::get('/devices',                      [DevicesController::class, 'devices'])->name('devices');
    Route::get('/device_add',                   [DevicesController::class, 'device_add'])->name('device_add');
    Route::post('/devices_Add',                 [DevicesController::class, 'devicesAdd'])->name('machine.device_add');

    // integration
    Route::get('/integration-add',              [MachineController::class, 'integration_add'])->name('integration.add');

    Route::post('/device-setip',                [MachineController::class, 'device_setip'])->name('machine.devicesetip');
    Route::get('/device-adduser',               [MachineController::class, 'device_adduser'])->name('machine.deviceadduser');
    Route::post('/device-setuser',              [MachineController::class, 'device_setuser'])->name('machine.devicesetuser');
    Route::get('/device-removeuser-all',        [MachineController::class, 'device_removeuser_all'])->name('machine.deviceremoveuserall');
    Route::get('/device-removeuser-single/{id}',[MachineController::class, 'device_removeuser_single'])->name('machine.deviceremoveusersingle');
    Route::get('/device-viewuser-single/[id]',  [MachineController::class, 'device_viewuser_single'])->name('machine.deviceviewusersingle');



    // Data Push Route

    Route::get('/setting',                      [DevicesController::class, 'setting'])->name('setting');
    Route::get('/addSetting',                   [DevicesController::class, 'addSetting'])->name('add.setting');
    Route::post('/SettingConfig',                   [DevicesController::class, 'SettingConfig'])->name('SettingConfig');


    Route::get('home', function () {
        return view('device.welcome');
    });

