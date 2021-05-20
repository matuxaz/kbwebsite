<?php

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

Route::view('/', 'pages.home');           //naršyklės lange įvedus svetainės adresą bus matomas vaizdas home, esantis kataloge pages
Route::view('/settings', 'pages.settings');
Route::view('/home', 'pages.home');       //naršyklės lange įvedus svetainės adresą + '/home' (pvz., http://localhost:8000/home) bus matomas vaizdas home
Route::view('/about', 'pages.about');     //naršyklės lange įvedus svetainės adresą + '/about' bus matomas vaizdas about
Route::view('/admin', 'admin.dashboard'); //naršyklės lange įvedus svetainės adresą + '/admin' bus matomas vaizdas dashboard

Route::get('/settings/posts', 'App\Http\Controllers\SettingsController@posts');

Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@index')->name('profile.show');
Route::get('/profile', 'App\Http\Controllers\MyProfileController@index')->name('myProfile.show');

Route::get('/p/create', 'App\Http\Controllers\PostsController@create');
Route::post('/p', 'App\Http\Controllers\PostsController@store');
Route::get('/p/{post}', 'App\Http\Controllers\PostsController@show');
Route::delete('/p/{post}', 'App\Http\Controllers\PostsController@delete');

Route::get('/search', 'App\Http\Controllers\HomeController@search');


/*
Route::get('/names', App\Http\Controllers\NamesController::class);
Route::get('/admin/names', [App\Http\Controllers\Admin\NamesController::class, 'index']);
Route::get('/admin/names/create', [App\Http\Controllers\Admin\NamesController::class, 'create']);
Route::post('/admin/names', [App\Http\Controllers\Admin\NamesController::class, 'store']);
Route::get('/admin/names/{id}/edit', [App\Http\Controllers\Admin\NamesController::class, 'edit']);
Route::get('/admin/names/{id}', [App\Http\Controllers\Admin\NamesController::class, 'show']);
Route::patch('/admin/names/{id}', [App\Http\Controllers\Admin\NamesController::class, 'update']);
Route::delete('/admin/names/{id}', [App\Http\Controllers\Admin\NamesController::class, 'destroy']);
*/
Route::resource('settings', App\Http\Controllers\SettingsController::class);

Route::get('redirects', App\Http\Controllers\HomeController::class);
Route::group(['middleware' => ['role:admin|librarian']], function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
    Route::resource('admin/names', App\Http\Controllers\Admin\NamesController::class);
    Route::resource('admin/roles', App\Http\Controllers\Admin\RolesController::class);
    Route::resource('admin/users', App\Http\Controllers\Admin\UsersController::class);
    Route::resource('admin/posts', App\Http\Controllers\Admin\postsController::class);
    Route::resource('admin/countries', App\Http\Controllers\Admin\CountriesController::class);
});
/*
Route::get('/admin/users', [App\Http\Controllers\Admin\UsersController::class, 'index']);
Route::get('/admin/users/create', [App\Http\Controllers\Admin\UsersController::class, 'create']);
Route::post('/admin/users', [App\Http\Controllers\Admin\UsersController::class, 'store']);
Route::get('/admin/users/{id}', [App\Http\Controllers\Admin\UsersController::class, 'show']);
Route::get('/admin/users/{id}/edit', [App\Http\Controllers\Admin\UsersController::class, 'edit']);
Route::patch('/admin/users/{id}', [App\Http\Controllers\Admin\UsersController::class, 'update']);
Route::delete('/admin/users/{id}', [App\Http\Controllers\Admin\UsersController::class, 'destroy']);

Route::get('/admin/roles', [App\Http\Controllers\Admin\RolesController::class, 'index']);
Route::get('/admin/roles/create', [App\Http\Controllers\Admin\RolesController::class, 'create']);
Route::post('/admin/roles', [App\Http\Controllers\Admin\RolesController::class, 'store']);
Route::get('/admin/roles/{id}', [App\Http\Controllers\Admin\RolesController::class, 'show']);
Route::get('/admin/roles/{id}/edit', [App\Http\Controllers\Admin\RolesController::class, 'edit']);
Route::patch('/admin/roles/{id}', [App\Http\Controllers\Admin\RolesController::class, 'update']);
Route::delete('/admin/roles/{id}', [App\Http\Controllers\Admin\RolesController::class, 'destroy']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
