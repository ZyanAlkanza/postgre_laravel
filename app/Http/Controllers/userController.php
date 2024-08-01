<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('index', compact('user'));
    }

    public function add()
    {
        return view('add');
    }

    public function add_data(Request $request)
    {
        $request->validate([
            'name'      => 'required|min:3',
            'email'     => 'required|email',
            'address'   => 'required'
        ]);

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'address'   => $request->address
        ]);

        return redirect('/')->with('status', 'Create data successfully!');
    }

    public function detail($id)
    {
        $user = User::where('id', $id)->first();

        return view('detail', compact('user'));
    }
}
