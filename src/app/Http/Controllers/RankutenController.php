<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankutenController extends Controller
{
    public function search() {
        $datas = [
            'title' => "ペット商品検索ページ",
            'search_text' => "検索",
            'small_text' => "絞り込み",
            'pet' => "動物",
            'genre' => "商品ジャンル",
            'many' => "金額",
        ];
        return view('search', $datas);
    }

    public function result() {
        $datas = [
            'title' => "検索結果",
            'users' => [],
        ];

        return view('result', $datas);
    }
}