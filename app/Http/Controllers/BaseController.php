<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    /**
     * Retorna sucesso na requisição.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($data, $message)
    {
        $response = [
            'code' => 200,
            'success' => true,
            'data'    => $data,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

    /**
     * Retorna erro na requisição.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $code, $errorMessages = [])
    {
        $response = [
            'code' => $code,
            'success' => false,
            'message' => $error,
        ];

        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }


    public function createRecentActivity(string $message, Title $title){
        DB::table('recent_activity')->insert([
            'description' => $message,
            'title_id' => $title->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }

    /**
     * Cria uma nova metrica para um determinado titulo
     */

    public function createMetric($action, $user, $title, $episode){
        DB::table('metrics')->insert([
            'type_action' => $action,
            'user_id' => $user,
            'title_id' => $title,
            'episode_id' => $episode,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
