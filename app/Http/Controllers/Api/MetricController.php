<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MetricController extends Controller
{
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
