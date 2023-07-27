<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
Route::get('/', function () {
    return view('welcome');
})->name('home');
// Route to the dashboard
// ,'role:admin'


//pag Authorized ha dashboard
Route::middleware('auth')->group(function(){
    Route::get('/admin/dashboard',[DashboardController::class,'AdminDashboard'])->name('dashboard');
    Route::get('/admin/collection',[DashboardController::class,'collection'])->name('collection');
    Route::get('/admin/cheque',[DashboardController::class,'cheque'])->name('cheque');
    Route::get('/admin/reporting',[DashboardController::class,'reporting'])->name('reporting'); 
    Route::get('/admin/disbursement',[DashboardController::class,'disbursement'])->name('disbursement');
    Route::get('/admin/users',[UserController::class,'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});
//Login ngadi
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');







