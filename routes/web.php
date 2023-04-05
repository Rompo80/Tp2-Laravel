<?php
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ForumPostController;
use App\Http\Controllers\LocalizationController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('forum', [EtudiantController::class, 'index'])->name('forum.index');
Route::get('forum/{student_id}/show', [EtudiantController::class, 'show'])->name('etudiants.show');
Route::get('forum/{student_id}/edit', [EtudiantController::class, 'edit'])->name('etudiants.edit');
Route::put('forum/{student_id}/edit', [EtudiantController::class, 'update'])->name('etudiants.update');
Route::get('forum/search/{query}', [EtudiantController::class, 'search'])->name('etudiants.search');



Route::middleware('auth')->group(function () {
Route::get('forum/create', [EtudiantController::class, 'create'])->name('etudiants.create');
Route::post('forum/store', [EtudiantController::class, 'store'])->name('etudiants.store');
Route::delete('forum/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.delete');
});


Route::get('registration', [CustomAuthController::class, 'create'])->name('user.registration');
Route::post('registration', [CustomAuthController::class, 'store']);

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('login', [CustomAuthController::class, 'authentication']);
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout')->middleware('auth');



Route::get('forum/post', [ForumPostController::class, 'index'])->name('posts.index');
Route::get('forum/post/{id}', [ForumPostController::class, 'show'])->name('post.show');



Route::prefix('forum')->middleware('auth')->group(function () {
    Route::get('post-create', [ForumPostController::class, 'create'])->name('post.create');
    Route::post('post-create', [ForumPostController::class, 'store'])->name('post.create');
    Route::get('post-edit/{id}', [ForumPostController::class, 'edit'])->name('post.edit');
    Route::put('post-edit/{id}', [ForumPostController::class, 'update'])->name('post.update');
    Route::delete('post/{id}/{user_id}', [ForumPostController::class, 'deletePost'])->name('post.delete');
});
    
   

Route::prefix('forum')->middleware('auth')->group(function () {
    // Route::get('/{id}', [DocumentController::class, 'show'])->name('document.show');
    Route::get('documents/create', [DocumentController::class, 'create'])->name('document.create');
    Route::post('documents/create', [DocumentController::class, 'store'])->name('document.store');
    Route::delete('documents/{id}/{user_id}', [DocumentController::class, 'destroy'])->name('document.delete');
    Route::get('documents/{id}/edit', [DocumentController::class, 'edit'])->name('document.edit');
    Route::put('documents/{id}/edit', [DocumentController::class, 'update'])->name('document.update');
});



//lang
Route::get('lang/{locale}', [LocalizationController::class, 'index'])->name('lang');
