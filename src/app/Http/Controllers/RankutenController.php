<?php

namespace App\Http\Controllers;

use App\Enums\ManeyTypes;
use App\Enums\GenruTypes;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use RakutenRws_Client;

class RankutenController extends Controller
{
    public function search()
    {
        $datas = [
            'title' => "        ペット商品検索ページ",
            'search_text' => "   検索",
            'small_text' => "   絞り込み",
            'genre' => [
                'title1' => "商品ジャンル",
                'list1' => GenruTypes::cases(),
                'many' => [
                    'title' => "金額",
                    'list1' => ManeyTypes::cases(),
                ],
            ],
        ];
        return view('search', $datas);
    }

    public function result(Request $request)
    {
        $client = new RakutenRws_Client();
        define("RAKUTEN_APPLICATION_ID", config('app.rakuten_id'));

        // 
        $maneyKey = $request->input("");
        $maney = ManeyTypes::from($maneyKey);
        $manyRange = $maney->getParams();

        $client->setApplicationId(RAKUTEN_APPLICATION_ID);
        $response = $client->execute('IchibaItemSearch', [
            'keyword' => 'ねこ',
            'minPrice' => $manyRange['minPrice'],
            'maxPrice' => 10000,
        ]);

        $items = [];
        $datas = [];
        if(!$response->isOk()){
            abort(500);

        } else {
            $datas = $response->getData();

            foreach($response as $key => $rakutenItem){
                $items[$key]['title'] = $rakutenItem['itemName'];
                $items[$key]['price'] = $rakutenItem['itemPrice'];
                $items[$key]['url'] = $rakutenItem['itemUrl'];
                $items[$key]['count'] = $rakutenItem['count'];
                $items[$key]['taxFlag'] = $rakutenItem['taxFlag'];
                $items[$key]['postageFlag'] = $rakutenItem['postageFlag'];

                if($rakutenItem['imageFlag']){
                    $imgSrc = $rakutenItem['mediumImageUrls'][0]['imageUrl'];
                    $items[$key]['img'] = $imgSrc;
                }
            }
        }

        $datas = [
            'title' => "検索結果",
            'small_text' => "検索結果",
            'users' => [],
            'result_summary' => $datas,
            'items' => $items,
        ];

        return view('result', $datas);
    }
}
