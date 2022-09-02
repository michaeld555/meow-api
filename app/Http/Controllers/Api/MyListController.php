<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Mylist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyListController extends BaseController
{
    /**
     * Retorna a lista parcial de titulos do usuario.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Request
     */
    public function addRemoveIsMyList(Request $request)
    {
        if($request->type == 'add'){

            $mylist = Mylist::create([
                'user_id' => $request->user_id,
                'title_id' => $request->title_id,
            ]);

            return $this->sendResponse([]);

        } else if($request->type == 'remove'){

            Mylist::where('user_id', $request->user_id)->where('title_id', $request->title_id)->delete();
            return $this->sendResponse([]);

        } else if($request->type == 'is'){
            $mylist = Mylist::where('user_id', $request->user_id)->where('title_id', $request->title_id)->get();
            return $this->sendResponse($mylist);
        }
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
