<?php

namespace App\Http\Controllers;

use App\Events\VoteCasted;
use App\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index(){

        $voteNames = Vote::all()->pluck('name');
        $icoya = Vote::all()->pluck('icoya');
        $miip = Vote::all()->pluck('miip');
        $mce = Vote::all()->pluck('mce');
        $mioya = Vote::all()->pluck('mioya');
        $ya = Vote::all()->pluck('ya');

        return view('voting.home', compact('voteNames', 'icoya', 'miip', 'mce', 'mioya', 'ya' ));
    }

    /**
     * @param Request $request
     */
    public function cast(Request $request):void {

        //get the current values of the voted entity
        $currentPoll = Vote::where('name', $request->input('name'))->first();

        if(!$currentPoll){

            //store a new instance
            Vote::create([ 'name' => $request->input('name'), $request->input('award') => 1 ]);

            //get all data
            Vote::all();
        }
        else{
            //instead update the existing
            Vote::where('name', $request->input('name'))->increment($request->input('award'));
            $updatedVotes = Vote::all()->pluck($request->input('award'));
            $updatedNames = Vote::all()->pluck('name');

            event(new VoteCasted($request->input('award'), $updatedVotes, $updatedNames));
        }

    }

}
