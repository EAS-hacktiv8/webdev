<?php

namespace App\Http\Middleware;

use App\Models\Role;
use App\Models\UserRole;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect('/login');
        }
        $user_id = auth()->user()->id;
        $user_role_id = UserRole::where('user_id', $user_id)->first()->role_id;
        $user_role = Role::where('id', $user_role_id)->first()->name;
        if ($user_role == 'admin') {
            return $next($request);
        } else {
            return redirect('/restricted');
        }
    }
}
