<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use stdClass;

class LoginController extends BaseController
{
    /**
     * Faz login do usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ],[
            'email.email' => 'Insira um email correto!',
            'email.required' => 'É obrigatorio inserir um email!',
            'password.required' => 'É obrigatorio inserir a senha!',
            'password.min' => 'A senha deve ter no minimo 8 caracteres',
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors(), 400);
        }
        $credentials = request(['email', 'password']);

        if(!Auth::attempt($credentials))
            return $this->sendError('Credenciais inválidas', 401);

        $user = $request->user();
        $token = $user->createToken('Personal Access Token');

        $data = $this->getData($user, $token);
        return $this->sendResponse($data, 'Login efetuado com sucesso!');
    }



    /**
     * Login por redes sociais.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function loginSocial(Request $request)
    {
        // Em implementacao
    }

    /**
     * Retorna os dados da requisição.
     */

    public function getData($user, $token) {
        $data = new stdClass;
        $data->id = $user->id;
        $data->email = $user->email;
        $data->token = $token->plainTextToken;
        return $data;
    }
}
