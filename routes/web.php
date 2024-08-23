<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// Rute umum tanpa autentikasi
Route::get('/', [LandingController::class, 'index']);
Route::get('/halproject', [LandingController::class, 'halproject'])->name('halproject');
// Route::get('/halblog', [LandingController::class, 'halblog'])->name('halblog');

Route::get('/haltentang', function () {
    return view('haltentang');
});
Route::get('/halcontact', function () {
    return view('halcontact');
});
Route::get('/halblog', function () {
    return view('halblog');
});
// Route::get('/haldetails', function () {
//     return view('haldetails');
// });


// Route::get('/projects/{id}', [ProjectDetailController::class, 'haldetails']);

// Rute login dan logout tanpa middleware
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk proyek tanpa autentikasi (untuk detail proyek)


// Rute dengan autentikasi
Route::middleware(['auth'])->group(function () {

    // Route::resource('/project', ProjectController::class)->except('index');
    // Route::resource('/education', EducationController::class)->except('index');

    // Rute untuk daftar proyek, membuat proyek, dan rute-rute lainnya
    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/project', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/project/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('/project/{project}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('/project/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');

    // Rute untuk daftar pendidikan, membuat pendidikan, dan rute-rute lainnya
    Route::get('/education', [EducationController::class, 'index'])->name('education.index');
    Route::get('/education/create', [EducationController::class, 'create'])->name('education.create');
    Route::post('/education', [EducationController::class, 'store'])->name('education.store');
    Route::get('/education/{education}/edit', [EducationController::class, 'edit'])->name('education.edit');
    Route::put('/education/{education}', [EducationController::class, 'update'])->name('education.update');
    Route::delete('/education/{education}', [EducationController::class, 'destroy'])->name('education.destroy');
});
Route::get('/project/{judul}', [ProjectController::class, 'show'])->name('project.show');
// Route::get('/education', [EducationController::class, 'index'])->name('education.index');
 