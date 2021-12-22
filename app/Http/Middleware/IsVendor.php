<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsVendor {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (!Auth::guard('vendor')->Check() || Auth::guard('vendor')->User()->active != "yes" ||
            Auth::guard('vendor')->User()->type != "seller") {
            if (Auth::guard('vendor')->Check()) {
                Auth::guard('vendor')->logout();
            }
            return redirect('vendor/login');
        }
        return $next($request);
    }

}
