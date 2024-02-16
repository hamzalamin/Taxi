<?php
use App\Http\Controllers\reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmineController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\CitiesModelController;
use App\Http\Controllers\Auth\RegisterController; // Import RegisterController

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

Route::get('/', [CitiesModelController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Route::resource('/chauffeur', ChauffeurController::class)
    
//     ->middleware(['auth', 'role:chauffeur']);
Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'role:admin'])->name('admin.index');



Route::get('/Passager', function () {
    return view('passager.index');
})->middleware(['auth', 'role:Passager'])->name('passager.index');
Route::post('/reserve/trajet', [reservation::class, 'store'])->middleware(['auth'])->name('reserve.trajet');

Route::get('/homePage', [CitiesModelController::class, 'index'])->name('homePage');

Route::post('/addTrajet', [TrajetController::class, 'addTrajet'])->middleware(['auth', 'role:chauffeur'])->name('addTrajet');
Route::get('/showForm', [TrajetController::class, 'index'])->middleware(['auth', 'role:chauffeur'])->name('Chaufeur.index');
Route::post('/driver_information_form', [ChauffeurController::class, 'informationOfDriver'])->middleware(['auth', 'role:chauffeur'])->name('driver_information_form');
// Route::get('/chauffeur', [ChauffeurController::class, 'index'])->middleware(['auth', 'role:chauffeur'])->name('chefor');





Route::post('/admin/add-user', [AdmineController::class, 'register'])->name('admin.addUser');
Route::get('/searchPage', [SearchController::class, 'search'])->name('searchPage');
// Route::middleware('auth')->match(['get', 'post'], '/driver_information_form', [ChauffeurController::class, 'informationOfDriver'])->name('driver_information_form');
Route::get('/binary/ticket', [reservation::class, 'ticketOfReservation'])->middleware(['auth'])->name('binary.ticket');
// Route::get('/binary/ticket', [reservation::class, 'TicketForRating'])->middleware(['auth'])->name('binary.ticket');

Route::post('/RateHere/{reservation}', [reservation::class, 'showRatingForm'])->middleware(['auth'])->name('RateHere');

Route::post('/Addrating', [reservation::class, 'add_rating'])->middleware(['auth'])->name('Addrating');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
