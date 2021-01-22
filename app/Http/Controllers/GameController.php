<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use DB;

class GameController extends Controller
{
    public function play(){
        return view('game');
    }

    function gameboard(Request $request){
        $level = $request->input('level');

        $pcards = $this->generate_deck($level);

        return view('gameboard')->with('pcards', $pcards);
    }
}
