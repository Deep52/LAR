<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\homecontroller;
use App\Models\rooms;


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
/*
Route::get('/', function () {
    return view('home.index');
});*/

Route:: get('/', [homecontroller::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        //return view('dashboard');
        $list_rooms = DB::table('rooms')->get();
        return view('dashboard', ['list_rooms' => $list_rooms]);
    })->name('dashboard');
});

Route:: get('/rooms', function(){
    $list_rooms = DB::table('rooms')->get();
    return view('dashboard', ['list_rooms' => $list_rooms]);
//return view('dashboard');

});
Route:: post('/rooms', function(){
$rooms= new rooms();
$rooms -> number = request('r_n');
$rooms -> r_type = request('r_t');
$rooms -> r_cat = request('r_c');
$rooms -> r_price = request('r_p');

$rooms -> save();
return redirect('/rooms')->with('success', 'Record inserted successfully');
//return redirect('/rooms');

});
Route::get('list_rooms', function () {

    $list_rooms = DB::table('rooms')->get();

    return view('dashboard', ['list_rooms' => $list_rooms]);
});
