<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 * @property string $email
 * @property string $password
 */

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $user = $this->route('user');

        return [
            'name'=>'required',
            'email'=>'required|email|unique:users,email,'.($user ? $user->id : null),
            'password'=>'required_if:password,!=,null|min:6'
        ];
    }

    public function messages():array{
        return[
            'name.required'=>"O campo nome é obrigatório!",
            'email.required'=>"O campo E-mail é obrigatório!",
            'email.email'=>"insira um e-mail válido",
            'email.unique'=>"E-mail já cadastrado",
            'password.min'=>"A senha tem que ter o mínimo :min caracteres",
            'password.required_if'=>"O campo senha é obrigatório!",
        ];
    }
}
