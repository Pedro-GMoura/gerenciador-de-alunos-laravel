<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @method mixed route()
 */
class PasswordRequest extends FormRequest
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
     * 
     */
    public function rules(): array
    {
        
        $user = $this->route('user');

        return [
            'password'=>'required_if:password,!=,null|min:6'
        ];
    }

    public function messages():array{
        return[
            'password.min'=>"A senha tem que ter o mínimo :min caracteres",
            'password.required_if'=>"O campo senha é obrigatório!",
        ];
    }
}

?>