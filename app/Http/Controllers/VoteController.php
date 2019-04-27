<?php

namespace App\Http\Controllers;

use App\Events\VoteCasted;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index(){
        return view('voting.home');
    }

    /**
     * @param Request $request
     */
    public function cast(Request $request):void {

        event(new VoteCasted($request->input('name'), $request->input('award')));

    }
}
