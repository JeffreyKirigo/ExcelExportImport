<?php

use App\Http\Controllers\ExcelController;
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

Route::get('importExportView', [ExcelController::class, 'importExportView'])->name('importExportView');

// Route for export/download table_data to .csv, .xls or .xlsx formats
Route::get('exportExcel/{type}', [ExcelController::class, 'exportExcel'])->name('exportExcel');
// Route for importing excel data to database.
Route::post('/importExcel', [ExcelController::class, 'importExcel'])->name('importExcel');
