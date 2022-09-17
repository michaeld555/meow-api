<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $user = User::findOrFail($id);
            return $this->sendResponse($user, "");
        } catch (ModelNotFoundException $e) {
            return $this->sendError('Usuário não encontrado', 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
            try {
                $user = User::findOrFail($id);
                $name = time()."meowProfileImage$id.png";
                $filePath = "users/$id/profile/$name";
                $success = Storage::disk('s3')->put($filePath, file_get_contents("data:image/png;base64,$request->url_image"), 'public');
                if ($success) {
                    $url_image  = Storage::disk('s3')->url($filePath);
                    $user->photo_url = $url_image;
                    $user->save();
                    return $this->sendResponse($url_image);
                } else {
                    return $this->sendError('Erro ao Enviar Imagem', 400);
                }

            } catch(ModelNotFoundException){
                return $this->sendError('Usuário não encontrado', 400);
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
