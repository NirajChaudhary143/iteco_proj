<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// UserController Route

Route::get('/',[UserController::class,'index'])->name('home');
Route::get('/iteco/about-us',[UserController::class,'aboutUs'])->name('aboutUs');
Route::get('/iteco/background',[UserController::class,'background'])->name('background');
Route::get('/iteco/company-profile',[UserController::class,'companyProfile'])->name('company.profile');
Route::get('/iteco/biography',[UserController::class,'biography'])->name('biography');
Route::get('/iteco/oraganization',[UserController::class,'oraganization'])->name('oraganization');
Route::get('/iteco/contact-us',[UserController::class,'contactUs'])->name('contact.us');
Route::get('/iteco/extension-number',[UserController::class,'extensionNumber'])->name('extensionNumber');
Route::get('/iteco/holiday',[UserController::class,'holiday'])->name('holiday');
Route::get('/iteco/projects',[UserController::class,'projects'])->name('projects');
Route::get('/iteco/services',[UserController::class,'services'])->name('services');
Route::get('/iteco/page1',[UserController::class,'page1'])->name('page1');
Route::get('/iteco/page2',[UserController::class,'page2'])->name('page2');
Route::get('/iteco/page3',[UserController::class,'page3'])->name('page3');
Route::get('/iteco/page4',[UserController::class,'page4'])->name('page4');
Route::get('/iteco/page5',[UserController::class,'page5'])->name('page5');
Route::get('/iteco/page6',[UserController::class,'page6'])->name('page6');
Route::get('/iteco/ongoingProjects',[AdminController::class,'ongoingProjects'])->name('ongoingProjects');
Route::get('/iteco/completedProjects',[AdminController::class,'completedProjects'])->name('completedProjects');


// News

Route::get('/iteco/news/{id}',[UserController::class,'news'])->name('details.news');

// Admin COntroller Route
Route::middleware(['admin'])->group( function () {
    Route::get('/admin-panel',[AdminController::class,'index'])->name('admin.panel');

    // Project
    Route::get('/add-project',[AdminController::class,'project'])->name('project.form');
    Route::post('/add-project',[AdminController::class,'addProject'])->name('add.project');
    Route::get('/view-project',[AdminController::class,'viewProject'])->name('view.project');
    Route::get('/delete-project/{id}',[AdminController::class,'deleteProject'])->name('delete.project');
    Route::get('/edit-project/{id}',[AdminController::class,'editProjectForm'])->name('edit.project.form');
    Route::post('/edit-project/{id}',[AdminController::class,'updateProject'])->name('update.project');


    // News
    Route::get('/add-news',[AdminController::class,'news'])->name('news.form');
    Route::post('/add-news',[AdminController::class,'addNews'])->name('add.news');
    Route::get('/view-news',[AdminController::class,'viewNews'])->name('view.news');
    Route::get('/delete-news/{id}',[AdminController::class,'deleteNews'])->name('delete.news');
    Route::get('/edit-news/{id}',[AdminController::class,'editNewsForm'])->name('edit.news.form');
    Route::post('/edit-news/{id}',[AdminController::class,'updateNews'])->name('update.news');


});
Route::get('/iteco/ongoing-projects',[AdminController::class,'ongoingProjects'])->name('ongoing.projects');
Route::get('/iteco/completed-projects',[AdminController::class,'completedProjects'])->name('completed.projects');


require __DIR__.'/auth.php';
