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
            'many' => "金額",
            'pet' => [
                'title' => "動物" ,
                'list' => [
                    'dog' => "犬",
                    'cat' => "猫",
                    'bird' => "鳥類",
                    'rabit' => "兎",
                    'hamusuta' => "ハムスター",
                ],
            ],
            'genre' => [
               'title1' => "商品ジャンル",
               'list1' => [ 
                    'bed' => "寝具",
                    'toy' => "おもちゃ",
                    'feed' => "えさ",
                    'toilet' => "トイレ",
                    'collar' => "首輪",
                    'lead' => "リード",
               ],
            ],
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