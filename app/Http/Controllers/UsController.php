<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsController extends Controller {

    //
    public function listUser() {

        $users = \DB::table('users')
                // ->offset(10)
                // ->limit(10)
                ->get();

        return view('list-user', compact('users'));
    }

}
