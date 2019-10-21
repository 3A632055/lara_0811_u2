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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

// 練習 1：設定 Route 反應
//1. 設定 Route 回傳字串
/*
Route::get('/', function() {
  return 'welcome';
});
*/

//2. 設定 Route 回傳 view
/*
Route::get('/', function() {
    return view('welcome');
});
*/

//3. 設定 Route 跳轉頁面
/*
 Route::get('/', function() {
    return redirect('welcome');
});
*/

//練習 2：設定 Route 接收參數
/*
//1. 修改 Route 接受參數
Route::get( 'hello/{name}', function($name) {
    return 'Hello, '.$name;
});

//3. 修改參數成選擇性
Route::get( 'hello/{name?}', function($name = 'Everybody') {
    return 'Hello, '.$name;
});
*/

//練習 3：使用 artisan 指令了解目前 route 內容
//3. 增加新的 Route
/*
Route::get( 'hello/{name?}', function($name = 'JiaXing') {
    return 'Hello, '.$name;
});
*/

//練習 4：為 Route 命名
//1. 將 Route 取名為 hello.index
/*
Route::get( 'hello/{name?}' , [ 'as' => 'hello.index' , function($name = 'Everybody') {
    return 'Hello, '.$name;
}]);
*/

//2. 修改 resources/views/welcome.blade.php的內容，增加一個連結
/*
Route::get('/', function () {
    return view('welcome');
});

//3. 修改 Route 裡的路徑
Route::get('say/{name?}',['as'=>'hello.index', function($name = 'Everybody'){
    return view('welcome');
}]);
*/

//練習 5：設定 Route 前置
//1. 設定 dashboard路徑的 Route
/*
Route::get('dashboard',function(){
    return 'dashboard';
});
*/

//2. 設定另一個 Route 以群組包起來設定 prefix
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return 'admin dashboard';
    });
});