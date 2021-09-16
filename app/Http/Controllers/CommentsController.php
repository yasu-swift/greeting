<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function greeting($greeting)
    {
        if ($greeting == 'morning') {
            $time = '朝のあいさつ';
            $greet = 'おはようございます' ;
        } elseif ($greeting == 'afternoon') {
            $time = '昼のあいさつ';
            $greet = 'こんにちは';
        } elseif ($greeting == 'evening') {
            $time = '夕方のあいさつ';
            $greet = 'こんばんは';
        } elseif ($greeting == 'night') {
            $time = '夜のあいさつ';
            $greet = 'おやすみなさい';
        } elseif ($greeting == 'ramdon'){
            srand((float) microtime() * 10000000);
            $input = array("おはよう", "こんにちは", "こんばんは","おやすみなさい");
            $rand_keys = array_rand($input, 2);
            $time = 'ランダムなメッセージ';
            $greet = $input[$rand_keys[0]];
        } else {
            $time = 'スペルが間違ってませんか？';
            $greet = '';
        }
        return view('message.comments', [
            'time' => $time,
            'greet' => $greet
        ]);
    }

    public function free($freeword)
    {
        $free = $freeword;

        return view('message.freeword', [
            'free' => $free
        ]);
    }
}
