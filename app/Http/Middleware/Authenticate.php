<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) { //dd($request->subdomain());
        if($request->route()->action['domain']=='admin.prithwi.com')
            return route('admin.login');
        else if($request->route()->action['domain']=='dealer.prithwi.com')
            return route('dealer.login');
        else
            return route('login');
        }
    }
}
