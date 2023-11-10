<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankutenController extends Controller
{
    public function search() {
        return view('search');
    }

    public function result() {
        return view('welcome');
    }
}
