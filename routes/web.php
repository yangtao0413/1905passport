<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test/pay','Testcontroller@alipay');        //去支付
// Route::get('/goods','Testcontroller@goods');
// Route::get('/goods2','Testcontroller@goods2');
// Route::get('/test/grab','Testcontroller@grab');
// Route::get('/test/alipay/return','Alipay\PayController@aliReturn');
// Route::post('/test/alipay/notify','Alipay\PayController@notify');
// // 接口
// // Route::get('/api/test','Api\Testcontroller@test');
// // Route::post('/api/user/regist','Api\KekeController@regist');//用户注册
// // Route::post('/api/user/login','Api\KekeController@login'); //用户登录
// Route::get('/api/user/list','Api\Testcontroller@userList')->middleware('filter');      //用户列表

// Route::get('/test/abc','Testcontroller@abc');
// Route::get('/test/cba','Testcontroller@cba');





// // 用户管理
// // Route::get('/user/addkey','User\IndexController@addSSHKey1');
// // Route::post('/user/addkey','User\IndexController@addSSHKey2');
// //解密数据
// Route::get('/user/decrypt/data','User\IndexController@decrypt1');
// Route::post('/user/decrypt/data','User\IndexController@decrypt2');
// //签名测试
// Route::get('/sign1','Testcontroller@sign1');
// Route::get('/test/get/signonlie','Sign\IndexController@signOnline');
// Route::post('/test/post/signonlie','Sign\IndexController@signOnline1');
// Route::get('/test/get/sign1','Sign\IndexController@sign1');
// Route::post('/test/post/sign2','Sign\IndexController@sign2');





// Auth::routes();

// // Route::get('/home', 'HomeController@index')->name('home');



Route::post('/reg','Users\IndexController@reg');  //注册
Route::post('/login','Users\IndexController@login');//登录
Route::any('/info','Users\IndexController@info');//查看配置
Route::any('/time','Users\IndexController@showTime');//获取数据

Route::any('/auth','Users\IndexController@auth');//鉴权接口



Route::get('/test/check','QianmingController@md5test');//注册
Route::post('/test/postqm2','QianmingController@postqm2');//验证签名
Route::get('/decrypt2','QianmingController@decrypt2');//非对称加密