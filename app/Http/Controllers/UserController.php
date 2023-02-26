<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $users = DB::table('users')
            ->when($request->input('search'), function ($query, $search) {
                $query->where('name', 'like', "%" . $search . "%")
                    ->orwhere('email', 'like', "%" . $search . "%");
            })
            ->paginate(2);
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
