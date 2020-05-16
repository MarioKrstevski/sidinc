<?php

namespace App\Http\Middleware;

use App\Role;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthGates
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user) {
            $roles            = Role::with('permissions')->get();
            $permissionsArray = [];

            if (! $user->hasAnyRole()) {
                abort(401, 'This action is unauthorized.');
            }

            foreach ($roles as $role) {
                foreach ($role->permissions as $permissions) {
                    $permissionsArray[$permissions->title][] = $role->id;
                }
            }

            foreach ($permissionsArray as $title => $roles) {
                Gate::define($title, function (\App\User $user) use ($roles) {
                    return count(array_intersect($user->roles->pluck('id')->toArray(), $roles)) > 0;
                });
            }
        }

        if (Auth::check() && Auth::user()->role=='admin')
            return redirect('/admin');

        elseif (Auth::check() && Auth::user()->role=='user')
            return redirect('/user');

        return $next($request);

    }

}
