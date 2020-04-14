<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CookieManageService;

class CookieController extends Controller
{
    public function index(Request $request)
    {
	    $cookie = CookieManageService::generateCookie('test', 'test', true);
	    $response = response()->view('welcome');
	    $response->headers->setCookie($cookie);

	    return $response;
	}
}
