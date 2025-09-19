<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\PasswordRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {

        $user = User::orderByDesc('id')->paginate(10);

        return view('users.index', ['users' => $user]);
    }

    public function show(User $user){
        return view('users.show', ['user' => $user]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        
        try {
            $user = User::Create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            
            return redirect()->route('user.show',['user' => $user->id])->with('success', "Usuário cadastrado com sucesso!");
        } catch (Exception $e) {
            return back()->withInput()->with('error', "Usuário não cadastrado!");
        }
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }
    public function editPassword(User $user)
    {
        return view('users.edit-password', ['users' => $user]);
    }
    public function update(UserRequest $request, User $user)
    {
        try {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            return redirect()->route('user.show',['user'=>$user->id])->with('success', "Usuário editado com sucesso!");
        } catch (Exception $e) {
            return back()->withInput()->with('error', "Usuário não editado!");
        }
    }
    public function updatePassword(PasswordRequest $request, User $user)
    {
        $data = $request->validated();

        try {
            $user->update([
                'password' => $data['password'],
            ]);
            return redirect()->route('user.show',['user'=>$user->id])->with('success', "Senha editada com sucesso!");
        } catch (Exception $e) {
            return back()->withInput()->with('error', "Senha não alterada!");
        }
    }
}
