<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QianmingController extends Controller
{
    public function md5test()
    {
        echo "接收端"; echo '</br>';
        echo '<pre>';print_r($_GET);echo '</pre>';

        $key = "1905";  
        //验签
        $data = $_GET['data'];  
        $signature = $_GET['signature'];    
        // 计算签名
        echo "接收到的签名：". $signature;echo '</br>';
        $s = md5($data.$key);
        echo '接收端计算的签名：'. $s;echo '</br>';
        //与接收到的签名 比对
        if($s == $signature)
        {
            echo "验签通过";
        }else{
            echo "验签失败";
        }
        echo '哈哈';
    }


    public function postqm2()
    {
        $key = "yangtao";     

        echo '<pre>';print_r($_POST);
        $json_data = $_POST['data'];
        $sign = $_POST['sign'];
        //计算签名
        $sign2 = md5($json_data.$key);
        echo "接收端计算的签名：".$sign2;echo "<br>";

        // 比较接收到的签名
        if($sign2==$sign){
            echo "验签成功";
        }else{
            echo "验签失败";
        }


    }


    public function decrypt2()
    {
        $enc_data_str=$_GET['data'];//接收数据
        echo "接收的base64密文".$enc_data_str;echo'</br>';
        $base64_decode_str=base64_decode($enc_data_str);
        echo "base64decode密文".$base64_decode_str;echo'</br>';
        echo '<hr>';
        //解密
        $pub_key=trim(file_get_contents(storage_path('keys/pub.key')));
        openssl_public_decrypt($base64_decode_str,$dec_data,$pub_key);
        echo "解密的数据".$dec_data;

    }
}
