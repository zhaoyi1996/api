<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //测试获取微信公众号access_token
    public function getToken(){
        $appid="wx4d62ce195d3535fb";
        $secret="feb4b5c996f0afd2eee7fc1c6127c5b8";
        $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$secret;
        $cont=file_get_contents($url);
        echo $cont;
    }
}
