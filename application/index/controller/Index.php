<?php
namespace app\index\controller;


use xtype\Ethereum\Client;
use xtype\Ethereum\Utils;

class Index
{
    public function index()
    {
//        dump(124);die;
        $Client = new Client("https://mainnet.infura.io/v3/0ecc3584199b4bdeb1c98d5c6e781818");
        list($address, $privateKey) = $Client->newAccount();

        var_dump($address, $privateKey);
        echo 'net_version: ' . $Client->net_version() . PHP_EOL;
//        var_dump($Client->eth_getBlockByNumber(Utils::decToHex(2), false));

//        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    public function eth()
    {
        dump(124);die;
        $Client = new Client("https://mainnet.infura.io/v3/0ecc3584199b4bdeb1c98d5c6e781818");
        list($address, $privateKey) = $Client->newAccount();

        var_dump($address, $privateKey);

    }
}
