<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CinemaController;

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

//Route::get('/', function () { 
//    // return view('welcome');
//    return view('view_items');
//});

Route::get('/', [ CinemaController::class, 'index' ] 
        )->name('index');

Route::get('/show/{id}', [ CinemaController::class, 'show' ] 
        )->where('id', '[0-9]+')->name('show');

Route::get('/loading/', [ CinemaController::class, 'loading' ] 
        )->name('loading');

//Route::get('/222/', function () { 
//    
////   $a = [];
////    for( $ee = 0; $ee <= 10; $ee++ ){
////        $a[] = 
////    }
//    
//    
//// $post = new Post;
//
//// Post::insert(
////$post->title = 'Laravel - замечателен!';
////$post->author = 'Джейсон';
////$post->body = 'Laravel очень удобен - используйте его, если вы ещё этого не делаете!';
////
////$post->save();    
//    $kinos = App\Models\kino::add();
//    return view('kinos.index', compact('kinos') );
//});
