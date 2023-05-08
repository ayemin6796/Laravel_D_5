<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\StudentController;
use App\Models\Category;
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

// Route::prefix('user')->group(function () {
//     Route::prefix('category')->controller(CategoryController::class)->group(function () {
//         Route::get('/', 'index')->name('category.index');
//         Route::post('/', "store")->name('category.store');
//         Route::get('/create', 'create')->name('category.create');
//         Route::get('/{id}', "show")->name('category.show');
//         Route::get("/{id}/edit", "edit")->name("category.edit");
//         Route::put("/{id}", "update")->name('category.update');
//         Route::delete("/{id}", "destroy")->name('category.destroy');
//     });
// });

Route::resource('category', CategoryController::class);
Route::resource('student', StudentController::class);
