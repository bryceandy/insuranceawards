<?php

namespace App\Http\Controllers;

use App\Events\VoteCasted;
use App\Vote;
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

        //get the current values of the voted entity
        $currentPoll = Vote::where('name', $request->input('name'))->first();

        if(!$currentPoll){

            //store a new instance
            Vote::create([
                'name' => $request->input('name'),
                $request->input('award') => 1,
            ]);
        }
        Vote::where('name', $request->input('name'))
            ->update($request->input('award'), $currentPoll->$request->input('award') + $request->input('award'))
            ->save;

    }
}
