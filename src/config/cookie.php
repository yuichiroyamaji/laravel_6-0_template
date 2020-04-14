<?php

// ドメインの調整
$request_domain = $_SERVER["HTTP_HOST"];
$env_domain = env('SESSION_DOMAIN', null);

// 実際のドメインと設定値のドメインが違う場合は書き換え(管理画面用のドメインの場合、フロントのドメインに書き換え)
if(strpos($request_domain, $env_domain) === false){
  $domain = $request_domain;
}else{
  $domain = $env_domain;
}

return [

    // クッキーの共通設定
    'path'          => '/',
    'domain'        => $domain,
    'expire_minute' => 2628000, // 5年 = 60*24*365*5 分
    'secure'        => env('SESSION_SECURE_COOKIE', false),
    'http_only'     => true,

];
