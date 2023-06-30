<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "username" => ["required" , "unique:users,username", "min:2" , "max:15"],
            "name" => "required | min:2 | max:30",
            "surname" => "required | min:2 |max:60",
            "email" => ["required" , "email:rfc" , "unique:users,email"],
            "password" => ["required" , Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols() ],
            "passwordConfirm" => "required|same:password",
           
        ];
    }

    /**
     * Custom error messages for validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'passwordConfirm.same' => 'Las 2 contraseñas no son iguales.',
        ];
    }

    /* Get custom attributes for validator errors.
    *
    * @return array<string, string>
    */
   public function attributes(): array
   {
       return [
           'username' => 'usuario',
           'name' => 'nombre',
           'surname' => 'apellido',
           'password' => 'contraseña',
           'passwordConfirm' => 'confirmar password',
       ];
   }
}
