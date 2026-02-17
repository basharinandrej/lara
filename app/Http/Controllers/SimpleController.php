<?php

namespace App\Http\Controllers;

class SimpleController extends Controller
{
    public function get_home() {
        return view('home', [
            'name' => 'Andrej'
        ]);
    }
}
