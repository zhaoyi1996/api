<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
    //curl方式获取
    public function getCurltoken(){
        $appid="wx4d62ce195d3535fb";
        $secret="feb4b5c996f0afd2eee7fc1c6127c5b8";
        $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$secret;
        //curl初始化
        $curl = curl_init();
        //设置要爬取的网页的网址
        curl_setopt($curl, CURLOPT_URL, $url);
        //将 curl_exec()获取的信息以文件流的形式返回，而不是直接输出。设置为0是直接输出
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        //如果你想把一个头包含在输出中，设置这个选项为一个非零值，我这里是不要输出，所以为 0
        curl_setopt($curl, CURLOPT_HEADER, 0);
        //执行curl,抓取内容
        $content = curl_exec($curl);
        //关闭会话
        curl_close($curl);
        dd($content);
    }
    //guzzle获取access_token
    public function getGuzzleToken(){
        $appid="wx4d62ce195d3535fb";
        $secret="feb4b5c996f0afd2eee7fc1c6127c5b8";
        $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$secret;
        $client= new Client();
        $response = $client->get($url);
        $body = $response->getBody();
        echo $body;
    }
    //调用api里面的access_token
    public function getapitoken(){
        $url="http://api.1911api.com/accesstoken";
        $data=file_get_contents($url);
        dd($data);
    }
    //用户信息，被调用接口
    public function userInfo(){
        echo  "大虾米";
    }




}
