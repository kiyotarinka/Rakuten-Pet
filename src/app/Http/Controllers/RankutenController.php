<?php

namespace App\Http\Controllers;

use App\Enums\ManeyTypes;
use Illuminate\Http\Request;
use RakutenRws_Client;

class RankutenController extends Controller
{
    public function search()
    {
        $datas = [
            'title' => "        ペット商品検索ページ",
            'search_text' => "   検索",
            'small_text' => "   絞り込み",
            'pet' => [
                'title' => "   動物",
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
                'many' => [
                    'title' => "金額",
                    'list1' => ManeyTypes::cases(),
                ],
            ],
        ];
        return view('search', $datas);
    }

    public function result()
    {
        $client = new RakutenRws_Client();
        define("RAKUTEN_APPLICATION_ID", config('app.rakuten_id'));

        $client->setApplicationId(RAKUTEN_APPLICATION_ID);
        $response = $client->execute('IchibaItemSearch',array(
            'keyword' => '任意のキーワードを入れてください'
        ));


        $items = [];
        if(!$response->isOk()){
            abort(500);

        } else {
            foreach($response as $key => $rakutenItem){
                $items[$key]['title'] = $rakutenItem['itemName'];
                $items[$key]['price'] = $rakutenItem['itemPrice'];
                $items[$key]['url'] = $rakutenItem['itemUrl'];
                $items[$key]['count'] = $rakutenItem['count'];

                if($rakutenItem['imageFlag']){
                    $imgSrc = $rakutenItem['mediumImageUrls'][0]['imageUrl'];
                    $items[$key]['img'] = $imgSrc;
                }
            }
        }

        $datas = [
            'title' => "検索結果",
            'users' => [],
            'items' => $items,
        ];

        return view('result', $datas);
    }
}
