<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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
    return Inertia::render('Home');
});

Route::get('/contacto', function() {
    return inertia::render('Contact');
});

Route::get('/nosotros', function() {
    return inertia::render('Nosotros');
});

Route::get('/usuarios', function() {
    return inertia::render('Users', [
        'usuarios' => User::all()->makeHidden([
            'id',
            'created_at',
            'updated_at',
            'email_verified_at',
        ]),
    ]);
});