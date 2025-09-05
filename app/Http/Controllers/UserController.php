<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index() {

        $users = User::orderByDesc('id')->paginate(10);

        return view('users.index',['users'=>$users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        //dd($request);

        try {
            user::Create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);

            return redirect()->route('user.create')->with('success', "Usuário cadastrado com sucesso!");
        } catch (Exception $e) {
            return back()->withInput()->with('error', "Usuário não cadastrado!");
        }
    }
}
