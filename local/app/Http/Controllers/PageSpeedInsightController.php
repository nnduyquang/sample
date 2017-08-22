<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PageSpeedInsightController extends Controller
{
    public function resultAnalytics(){
        $client=new Client(['verify'=> false]);
//        $res = $client->request('GET', 'https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=http://smartlinks.vn&strategy=mobile&key=AIzaSyBgs4pfBrI0cGQlAmCKqNd-bRcH4zBICHs');
//        https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=http://smartlinks.vn&strategy=mobile&key=AIzaSyBgs4pfBrI0cGQlAmCKqNd-bRcH4zBICHs

//        echo $res->getBody();
        $data='';
        //$data=$res->getBody();

        return response()->json([
            'success' => true,
            'data'=>$data
        ]);
    }
}
