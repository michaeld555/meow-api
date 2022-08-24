<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Metric;
use App\Models\Mylist;
use App\Models\Title;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TitleController extends BaseController
{
    /**
     * Retorna od dados de um titulo em especifico.
     *
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Request
     */
    public function singleTitle($id = null)
    {
        if(empty($id))
            return $this->sendError("Necessario informar um id",404);
        $title = Title::where('id', $id)->with('episodes')->get();

        //$user = Auth::user();
        //dd($user);
        //$this->createMetric(2, $user->id, $title->id);
        return $this->sendResponse($title);
    }

    /**
     * Faz a busca de titulos de acordo com o que o usuario pesquisar.
     *
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Request
     */
    public function searchTitles($name = null)
    {
        if(empty($name))
            return $this->sendError("Necessario informar um titulo",404);
        $titles = Title::where('name', 'like', '%'.$name.'%')->limit(20)->get();
        return $this->sendResponse($titles);
    }

    /**
     * Retorna a lista parcial de titulos do usuario.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myList($id)
    {
        $mylist = DB::table('mylist')
                ->join('titles', 'titles.id', '=', 'mylist.title_id')
                ->where('mylist.user_id', '=', $id)
                ->limit(10)
                ->get();
        return $this->sendResponse($mylist);
    }

    /**
     * Seleciona os Titulos Para Voc
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function titles(Request $request)
    {
        $type = $request->query("type");

        if($type == "forYou"){
            $titles = DB::table('titles')->inRandomOrder()->limit(15)->get();
            return $this->sendResponse($titles);
        }
        else if($type == "random"){
            $titles = DB::table('titles')->inRandomOrder()->limit(10)->get();
            return $this->sendResponse($titles);
        }
        else if($type == "header"){
            $title = DB::table('titles')->inRandomOrder()->limit(1)->get();
            return $this->sendResponse($title);
        }
        else if($type == "movies"){
            $title = DB::table('titles')->where('type_title', '=', 2)->inRandomOrder()->limit(10)->get();
            return $this->sendResponse($title);
        }
        else if($type == "painel"){
            $title = DB::table('titles')->inRandomOrder()->limit(1)->get();
            return $this->sendResponse($title);
        }
        else if($type == "recent"){
            $titles = Title::orderBy('created_at', 'desc')->take(10)->get();
            return $this->sendResponse($titles);
        }
        else if($type == "more_week_watched"){
            $top_10_titles = DB::table('metrics')
                ->select('title_id', DB::raw('count(*) as total'))
                ->where('type_action', '=', 3)
                ->whereBetween('created_at', [Carbon::now()->subWeek(), Carbon::now()])
                ->groupBy('title_id')
                ->orderBy('total', 'desc')
                ->take(10)
                ->get();

                $array = json_decode(json_encode($top_10_titles), true);
                $titles = array();
                foreach($array as $top){
                $titles[] = Title::find($top["title_id"]);
                }

            return $this->sendResponse($titles);
        }
        else if($type == "more_watched_all"){
            $more_watched_all = DB::table('metrics')
                ->select('title_id', DB::raw('count(*) as total'))
                ->where('type_action', '!=', 5)
                ->groupBy('title_id')
                ->orderBy('total', 'desc')
                ->take(10)
                ->get();

                $array = json_decode(json_encode($more_watched_all), true);
                $titles = array();
                foreach($array as $top){
                $titles[] = Title::find($top["title_id"]);
                }

            return $this->sendResponse($titles);
        }
        else if($type == "more_reviwed"){
            $stars = DB::table('stars')
            ->select(DB::raw('title_id, sum(star_number) as star_number'))
            ->groupBy('title_id')
            ->take(10)
            ->get();

            $array = json_decode(json_encode($stars), true);
                $titles = array();
                foreach($array as $top){
                $titles[] = Title::find($top["title_id"]);
                }

            return $this->sendResponse($titles);
        }



    }

}
