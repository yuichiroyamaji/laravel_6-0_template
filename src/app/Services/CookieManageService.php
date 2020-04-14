<?php

namespace App\Services;

use Cookie;

class CookieManageService {

    // クッキー名
    const ID          = 'cookie_id';        // 検索URL

    /**
     * 引数に指定した値のクッキーを生成する
     * @param  string $name     クッキー名
     * @param  string $value    セットする値
     * @param  bool   $httpOnly HTTPのみにするかどうか   ※JSで使う場合はfalseにすること。defaultはtrue
     * @return Cookie
     */
    public static function generateCookie($name, $value, $httpOnly = null){

        // クッキーの設定
        $name       = $name;
        $minutes    = config('setting.cookie.expire_minute');
        $path       = config('setting.cookie.path');
        $domain     = config('setting.cookie.domain');
        $secure     = config('setting.cookie.secure');
        $httpOnly   = $httpOnly !== null ? $httpOnly : config('setting.cookie.http_only');

        // クッキーを生成
        $cookie     = Cookie::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);

        return $cookie;
    }

    /**
     * 期限切れクッキーの生成
     * （明示的にクッキーを削除するためのクッキー）
     * @param  string $name     クッキー名
     * @param  bool   $httpOnly HTTPのみにするかどうか   ※JSで使う場合はfalseにすること。defaultはtrue
     * @return Cookie
     */
    public static function generateRemoveCookie($name, $httpOnly = null){

        // クッキーの設定
        $value      = null;
        $name       = $name;
        $minutes    = -100;
        $path       = config('setting.cookie.path');
        $domain     = config('setting.cookie.domain');
        $secure     = config('setting.cookie.secure');
        $httpOnly   = $httpOnly !== null ? $httpOnly : config('setting.cookie.http_only');

        // クッキーを生成
        $cookie     = Cookie::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);

        return $cookie;
    }

    /**
     * CookieManagerで生成されたCookieを削除する
     * @return 
     */
    public static function removeAll(){

        $targets = array(
            self::ID,
        );

        foreach($targets as $target){
            self::remove($target);
        }

    }

    /**
     * 指定されたkeyの値を削除する
     * @param  $name Key
     * @return
     */
     public static function remove($key){
         $cookie = self::generateRemoveCookie($key);
         Cookie::queue($cookie);
     }

}
