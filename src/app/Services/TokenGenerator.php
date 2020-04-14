<?php

namespace App\Services;

use Carbon\Carbon;

class TokenGenerator {

     /**
      * トークンの生成
      * ランダム値を生成しハッシュ化する
      * @return 40 文字の 16 進数
      */
    public static function token() {
        return sha1(uniqid(mt_rand(), true));
    }

    /**
     * 有効期限を設定する
     * @return 現在から24時間後の日時
     */
    public static function expiration(){
        return Carbon::now()->addHour(24);
    }

}
