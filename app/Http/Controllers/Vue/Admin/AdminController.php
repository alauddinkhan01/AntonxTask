<?php

namespace App\Http\Controllers\Vue\Admin;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Admin;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class AdminController extends Controller
{


    public function dashboard(Request $request)
    {
        $permissions = Permission::whereHas('roles', function($q) {
            $q->where('name', 'Admin');
        })->withCount('users')->orderBy('name', 'asc')->get();
  
       $users = User::whereHas('roles', function($q) {
            $q->where('name', 'Editor');
        })->orderBy('last_name','asc')->select('first_name','last_name','email')->paginate(10);

       $roles = Role::whereHas('permissions', function($q) {
            $q->where('name', 'create post');
        })->with('permissions')->withCount('permissions')->orderBy('name', 'asc')->get();

        return Inertia::render("Home", compact(
            'users',
            'permissions',
            'roles'
        ));
    }


    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return response()->json(['logout' => true]);
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
