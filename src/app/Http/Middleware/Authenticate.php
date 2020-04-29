<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */

    protected $user_route = 'pc.front.user.auth.login';
    protected $admin_route = 'pc.admin.auth.login';
    protected $member_route  = 'pc.front.member.auth.login';

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if (Route::is('user.*')) {
                return route($this->user_route);
            } elseif (Route::is('admin.*')) {
                return route($this->admin_route);
            } elseif (Route::is('member.*')) {
                return route($this->member_route);
            }
        }
    }
}
