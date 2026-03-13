<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UsersController extends Controller
{

    public function index()
    {

        $user = auth()->user();

        $users = User::where('status', 1)
        ->orderBy('created_at', 'desc')
        ->get();

        //dd('teste', $users);

        return Inertia::render('Admin/Users/Index', [
            'user' => $user,
            'users' => $users,
        ]);

    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

}