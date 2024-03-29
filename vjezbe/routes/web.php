<?php

use App\Http\Controllers\CourseController;
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

Route::get('/posts', function () {

    $posts = [
        1 => ["Naziv 1", "Opis"],
        2 => ["Guzva u BL", "Veliko je cekanje na Venecija mostu."],
        3 => ["Dolazi prija u BL", "U martu Aleksandra Prijevic ima koncert"],
        4 => ["          <script>alert('Cao! :)')      </script>", "---"]
    ];

    return view('posts', ['posts'=>$posts]);
});


Route::get('/post/{id}', function ($id) {

    $posts = [
        1 => ["Naziv 1", "Opis"],
        2 => ["Guzva u BL", "Veliko je cekanje na Venecija mostu."],
        3 => ["Dolazi prija u BL", "U martu Aleksandra Prijevic ima koncert"],
        4 => ["          <script>alert('Cao! :)')      </script>", "---"]
    ];

    // $id = Route::input('id');

    if(key_exists($id, $posts)){
        return view('post', ['post'=>$posts[$id]]);
    }else
        abort(404, "Ovaj članak ne postoji");

});

Route::resource('/course', CourseController::class);
