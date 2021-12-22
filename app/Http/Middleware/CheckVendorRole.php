<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;

class CheckVendorRole {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$role) {

        $found = Permission::where('group_id', Auth::guard('vendor')->user()->group_id)->whereIn('permission', $role)->count();
        if ($found == 0) {
            return redirect('vendor/not_allow');
        }
        return $next($request);

    }

}
