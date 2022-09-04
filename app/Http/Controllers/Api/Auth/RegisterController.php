<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends BaseController
{
    /**
     * Cria um novo usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ],[
            'email.unique' => 'Este email já está cadastrado!',
            'email.email' => 'Insira um email correto!',
            'email.required' => 'É obrigatorio inserir um email!',
            'password.required' => 'É obrigatorio inserir a senha!',
            'password.min' => 'A senha deve ter no minimo 8 caracteres',
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors(), 400);
        }

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $user->save();
        $login = new LoginController;
        return $login->login($request)->original;
    }
}
