<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CinemaController;

use Illuminate\Support\Facades\Auth;



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


Route::get(
        '/',
        [CinemaController::class, 'index']
)->name('index');

Route::get(
        '/aa/',
        [CinemaController::class, 'index']
)->name('index_user')->middleware('auth');

Route::get(
        '/di/',
        [CinemaController::class, 'index']
)->name('index_admin')->middleware('auth:admin');


Route::get(
        '/show/{id}',
        [CinemaController::class, 'show']
)->where('id', '[0-9]+')->name('show');


Auth::routes();









// Route::get(
//         '/loading/',
//         [CinemaController::class, 'loading']
// )->name('loading')->middleware('auth');
// Route::get('/logout/', function () {
//         Auth::logout();
//         return redirect()->route('index');
// })->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

        Route::get(
                '/loading/',
                [CinemaController::class, 'loading']
        )->name('loading');

        Route::get('/logout/', function () {
                Auth::logout();
                return redirect()->route('index');
        });

});














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
