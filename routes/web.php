<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return 'hello!';
// });

Route::get('/', 'App\Http\Controllers\ItemController@index');


Route::get('/comments/{a}', function ($a) {
    if ($a == 'morning') {
        echo "<h1>朝のあいさつ</h1>". '<br>'. "<h2>おはようございます</h2>" ;
    }elseif ($a == 'afternoon') {
        echo "<h1>昼のあいさつ</h1>". '<br>'. "<h2>こんにちは</h2>" ;
    }elseif ($a == 'evening') {
        echo "<h1>夕方のあいさつ</h1>". '<br>'. "<h2>こんばんは</h2>" ;
    }elseif ($a == 'night') {
        echo "<h1>夜のあいさつ</h1>". '<br>'. "<h2>おやすみ</h2>" ;
    }elseif ($a == 'ramdon'){
        srand((float) microtime() * 10000000);
$input = array("<h2>おはよう</h2>", "<h2>こんにちは</h2>", "<h2>こんばんは</h2>", "<h2>おやすみなさい</h2>");
$rand_keys = array_rand($input, 2);
echo "<h1>ランダムなメッセージ</h1>". "<br>". $input[$rand_keys[0]] . "\n";
    }
    else{
        echo "<h1>スペルが間違ってませんか？</h2>";
    }
});

Route::get('/comments/{a}/{b}', function($a, $b){
    if ($a == 'freeword') {
        echo "<h1>自由なメッセージ</h1>". '<br>'.
            "<h2>$b</h2>";
    }
});
