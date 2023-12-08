<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function create()
    {
        $roles = Role::all()->whereNotIn('id', 1);
        return view('admin.user.create', ['roles' => $roles]);
    }
    public function index()
    {

        $users = User::orderBy('id', 'DESC')->paginate(20);
        return view('admin.user.index', ['users' => $users]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        $decryptedId = decrypt($request->role_id);

        if ($decryptedId == 1) {
            $user->addRole('admin');
        } elseif ($decryptedId == 2) {
            $user->addRole('warehouse_staff');
        } else if ($decryptedId == 3) {
            $user->addRole('waiter');
        } else {
            $user->addRole('user');
        }
        $users = User::orderBy('id', 'DESC')->paginate(20);
        return view('admin.user.index', compact('users'));
    }
}
