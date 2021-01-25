<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use \App\Models\Cinema;



class CinemaController extends Controller {

    //
    public function index() {

        // $cinemas = \App\Models\Cinema::all();

        //$users = DB::table('users')
        $cinemas = \DB::table('cinemas')
                // ->offset(10)
                ->limit(10)
                ->get();        
        
        // echo '<pre>'; print_r($kinos); echo '</pre>';
        // return view('cinema.index' );  

        return view('cinema.index', compact('cinemas'));
    }


    public function show($id) {
        
        // echo '<h3>'; print_r($id); echo '</h3>';
        
        // $show = \App\Models\Cinema::where( 'id' , '=' , $id )->get();
        $show = \App\Models\Cinema::find($id);

        // dd($show->items->0);
        // echo '<pre>'; print_r($show); echo '</pre>';
        
        //$users = DB::table('users')
//        $cinemas = \DB::table('cinemas')
//                // ->offset(10)
//                // ->limit(10)
//                ->get();        
        
        // echo '<pre>'; print_r($kinos); echo '</pre>';
        // return view('cinema.index' );  

        // return view('cinema.show', compact('show'));
        // return view('cinema.show', [ 'show' => $show ] );
        return view('cinema.index', [ 'id' => $id, 'info' => $show ] );
    }

    //
    public function loading() {

        // добавить 1 запись
        if (1 == 2) {
            $post = new \App\Models\Cinema;
            $post->header = 'Laravel - замечателен!';
            $post->link = 'Джейсон';
            $post->opis = 'Laravel очень удобен - используйте его, если вы ещё этого не делаете!';
            $post->save();
        }
        // добавляем несколько записей
        elseif (1 == 2) {

            $a = [];

            for ($i = 0; $i <= 5; $i++) {
                $a[] = ['header' => 'Laravel ' . rand() . ' - замечателен!',
                    'link' => 'Джейсон',
                    'opis' => 'Laravel очень удобен - используйте его, если вы ещё этого не делаете!'
                ];
            }

            \App\Models\Cinema::insert($a);
        }
        // смотрим что в rss ( чистим базу и добавляем если есть что )
        elseif (1 == 1) {

            /**
             * Адрес до RSS-ленты
             */
            $url = 'https://trailers.apple.com/trailers/home/rss/newtrailers.rss';
            $cinemas = $rss = simplexml_load_file($url);

            // echo '<pre>'; print_r($rss); echo '</pre>';

            $in_db = [];
            $n = 1;

            foreach ($rss->channel->item as $i) {
                $in_db[] = [
                    'header' => $i->title,
                    'link' => $i->link,
                    'opis' => $i->description
                ];

                if ($n == 10)
                    break;

                $n++;
            }

            if (!empty($in_db)) {
                \DB::table('cinemas')->delete();
                \App\Models\Cinema::insert($in_db);
            }
        }

        return view('cinema.index', [ 'warning' => 'Данные обновлены' ] );
    }

}
