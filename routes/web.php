<?php

use Illuminate\Support\Facades\Route;
use App\Models\Barang;
use App\Http\Controllers\BarangController;


Route::get('/', [BarangController::class, "index"]);

Route::get("/tambah" , [BarangController::class , "create"]);
Route::get("/edit/{barang}" , [BarangController::class , "edit"]);
Route::put("/barang/{barang}" , [BarangController::class , "update"]);
Route::post("/tambah" , [BarangController::class , "store"]);
Route::delete("/barang/{barang}" , [BarangController::class , "destroy"])->name('menu.destroy');