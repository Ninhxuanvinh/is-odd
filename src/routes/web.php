<?php

use XuanVinh\Isodd\Http\Controller\CheckOddController;

Route::get('check-odd',[CheckOddController::class,'index'])->name('odd.index');
Route::post('check-odd',[CheckOddController::class,'checkOdd'])->name('odd.check');
