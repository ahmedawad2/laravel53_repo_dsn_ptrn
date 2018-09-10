<?php

namespace App\Http\Controllers\Admin;

use App\AgentDetail;
use App\MongoModels\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MongoTryoutsController extends Controller
{
    public function index()
    {
//        return'asdasdas';
        $games = Game::first()->toArray();
        print_r($games);
        $agentDetails = AgentDetail::first()->toArray();
        print_r($agentDetails);
    }
}
