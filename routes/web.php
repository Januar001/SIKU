<?php

use App\Livewire\MapPage;
use App\Livewire\UserPage;
use App\Livewire\Dashboard;
use App\Livewire\ReportPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('template.app');
// });
Route::get('/', Dashboard::class);
Route::get('/user', UserPage::class);
Route::get('/report', ReportPage::class);
Route::get('/map', MapPage::class);
// Route::get('/pegawai', PegawaiPage::class);
// Route::get('/settings/pendidikan', PendidikanPage::class);
// Route::get('/settings/jabatan', JabatanPage::class);
// Route::get('/settings/sub-jabatan', SubjabatanPage::class);
