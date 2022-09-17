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
        /* try{
            $user = User::findOrFail($id);
            $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users,email,'.$user->id_user.',id_user'
            ]);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            $this->createRecentActivity("Editou seu cadastro", $user);
            return $this->sendResponse('[]','Usuário alterado com sucesso');
        } catch (ModelNotFoundException $e) {
            return $this->sendError('Usuário não encontrado', 404);
        } */
         //if ($request->hasFile('url_image')) {

            $file = $request->file('file');
            $name = time() . $file->hashName();
            $filePath = "users/$id/profile/$name";

            $success = Storage::disk('s3')->put($filePath, file_get_contents($file), 'public');
            if ($success) {
                $url_image  = Storage::disk('s3')->url($filePath);
                return $url_image;
            }
        //} else {
        //    $url_image = '';
        //    return $url_image;
        //}
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
