<?php

use App\Http\Controllers\DateController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MpinController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\RechargeController;

Auth::routes();

Route::middleware(['web', 'auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/company', [CompanyController::class, 'index'])->name('company.edit');
    Route::get('/change-password', [CompanyController::class, 'change_password'])->name('change.password');
    Route::post('/change-password-save', [CompanyController::class, 'change_password_save'])->name('changepassword.save');

    Route::put('/company/update/{company}', [CompanyController::class, 'update'])->name('company.update');

    Route::get('/user/reset-password/{id}', [UserController::class, 'reset_password'])->name('user.reset_password');

    Route::get('user/{id}/changePassword', [UserController::class, 'changePassword'])->name('user.change.password');
    Route::post('/user/{id}/password/update', [UserController::class, 'updatePassword'])->name('user.password.update');
    Route::post('user/{id}/block', [UserController::class, 'block'])->name('user.block');
    Route::post('user/{id}/unblock', [UserController::class, 'unblock'])->name('user.unblock');

    Route::resource('/user', UserController::class);

    Route::get('dealer', [DealerController::class, 'index'])->name('dealer.index');
    Route::get('dealer/create', [DealerController::class, 'create'])->name('dealer.create');
    Route::post('dealer/create/save', [DealerController::class, 'store'])->name('dealer.store');
    Route::get('dealer/{id}/edit', [DealerController::class, 'edit'])->name('dealer.edit');
    Route::get('dealer/{id}/update', [DealerController::class, 'update'])->name('dealer.update');
    Route::get('dealer/{id}/delete', [DealerController::class, 'destory'])->name('dealer.delete');

    Route::get('game', [GameController::class, 'index'])->name('game.index');


    Route::get('/results', [ResultController::class, 'index'])->name('results.index');
    Route::post('/results/store', [ResultController::class, 'store'])->name('results.store');
    Route::post('/results/openSave', [ResultController::class, 'storeOpenTimeResult'])->name('results.openSave');
    Route::post('/results/closeSave', [ResultController::class, 'storecloseTimeResult'])->name('results.closeSave');
    Route::post('/results/create', [ResultController::class, 'create'])->name('results.create');

    Route::put('dealer/{id}/update', [DealerController::class, 'update'])->name('dealer.update');
    Route::delete('dealer/{id}/delete', [DealerController::class, 'destroy'])->name('dealer.destroy');

    Route::get('recharge',[RechargeController::class,'index'])->name('recharge.index');
    Route::get('recharge/create',[RechargeController::class,'create'])->name('recharge.create');
    Route::post('recharge/create/save',[RechargeController::class,'store'])->name('recharge.store');
    Route::get('recharge/{id}/edit',[RechargeController::class,'edit'])->name('recharge.edit');
    Route::put('recharge/{id}/update',[RechargeController::class,'update'])->name('recharge.update');
    Route::delete('recharge/{id}/delete',[RechargeController::class,'destroy'])->name('recharge.destroy');




    Route::get('date/change', [DateController::class, 'change_date'])->name('date.change');
    Route::get('date', [DateController::class, 'index']);
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
});
