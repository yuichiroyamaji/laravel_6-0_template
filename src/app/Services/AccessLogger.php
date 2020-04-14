<?php

namespace App\Services;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Auth;
use Log;
use Exception;

class AccessLogger  {

    /**
     * リクエストログ用のメッセージを返却
     */
    public static function frontRequestLogMessage (Request $request)
    {
        try{

            // リクエスト情報
            $url    = $request->url();
            $method = $request->method();
            $ip     = $request->ip();
            $params = json_encode($request->except('password','password_confirmation'), JSON_UNESCAPED_UNICODE); // パスワード関連のパラメータ情報は明示的に除外

            // フロントサイト用のアクセスログ
            $user = Auth::guard('member')->check() ?  Auth::guard('member')->id() : session()->getId(); // 初期ではログイン機能がないのでセッションIDをセット
            $message = "FRONT>>[{$method}] {$url} user:{$user} ip:{$ip} params:{$params}";
            return $message;

        }catch (Exception $e) {

            // 万が一例外が発生した場合にもエラーにしない
            Log::error($e);
            return null;

        }
    }

    /**
     * リクエストログ用のメッセージを返却
     */
    public static function adminRequestLogMessage (Request $request)
    {
        try{

            // リクエスト情報
            $url    = $request->url();
            $method = $request->method();
            $ip     = $request->ip();
            $params = json_encode($request->except('password','password_confirmation'), JSON_UNESCAPED_UNICODE); // パスワード関連のパラメータ情報は明示的に除外

            // 管理サイト用のアクセスログ
            $user = session()->getId(); // 初期ではログイン機能がないのでセッションIDをセット
            $message = "ADMIN>>[{$method}] {$url} user:{$user} ip:{$ip} params:{$params}";
            return $message;

        }catch (Exception $e) {

            // 万が一例外が発生した場合にもエラーにしない
            Log::error($e);
            return null;

        }
    }

    /**
     * リクエストログ用のメッセージを返却
     */
    public static function salesRequestLogMessage (Request $request)
    {
        try{

            // リクエスト情報
            $url    = $request->url();
            $method = $request->method();
            $ip     = $request->ip();
            $params = json_encode($request->except('password','password_confirmation'), JSON_UNESCAPED_UNICODE); // パスワード関連のパラメータ情報は明示的に除外

            // 営業閲覧サイト用のアクセスログ
            $user = session()->getId(); // 初期ではログイン機能がないのでセッションIDをセット
            $message = "SALES>>[{$method}] {$url} user:{$user} ip:{$ip} params:{$params}";
            return $message;

        }catch (Exception $e) {

            // 万が一例外が発生した場合にもエラーにしない
            Log::error($e);
            return null;

        }
    }

    /**
     * レスポンスログ用のメッセージを返却
     */
    public static function apiResponseLogMessage(Request $request, Response $response)
    {
        try{

            // リクエスト情報
            $url    = $request->url();
            $method = $request->method();
            $ip     = $request->ip();
            $params = json_encode($request->except('password','password_confirmation'), JSON_UNESCAPED_UNICODE); // パスワード関連のパラメータ情報は明示的に除外

            // レスポンス情報
            $status_code    = $response->getStatusCode();
            $content        = json_encode(json_decode($response->getContent()), JSON_UNESCAPED_UNICODE); // 日本語の文字化け防止

            if (strstr($url, url('api'))) {
                // API用のレスポンスログ
                $message = "API>>[{$method}] {$url} ip:{$ip} params:{$params} RESPONSE>>http_status:{$status_code} response:{$content}";
                return $message;
            }

            if (strstr($url, url('i-search-api'))) {
                // i-dearchのAPI用のレスポンスログ
                $message = "I-SEARCH_API>>[{$method}] {$url} ip:{$ip} params:{$params} RESPONSE>>http_status:{$status_code} response:{$content}";
                return $message;
            }

        } catch (Exception $e) {
            // 万が一例外が発生した場合にもエラーにしない
            Log::error($e);
            return null;
        }

    }

}
