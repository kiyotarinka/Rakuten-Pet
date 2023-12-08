<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankutenController extends Controller
{
    public function search() {
        $datas = [
            'title' => "テスト",
            'search_text' => "バッグ",
        ];
        return view('search', $datas);
    }

    public function result() {
        return view('welcome');
    }
}
