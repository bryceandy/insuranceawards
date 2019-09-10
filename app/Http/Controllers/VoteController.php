<?php

namespace App\Http\Controllers;

use App\Events\VoteCasted;
use App\Vote;
use App\Voters;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index(){

        $voteNames = Vote::all()->pluck('name');

        $icoya = Vote::all()->pluck('icoya');
        $miip = Vote::all()->pluck('miip');

        return view('voting.home', compact('voteNames', 'icoya', 'miip' ));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function cast(Request $request) {

        $awardName = $request->input('award');

        $voter = Voters::where('ip', $request->ip())->first();

        if(!$voter)
        {
            Voters::create([
               'ip' => $request->ip(),
                $awardName => 1
            ]);
        }
        else{
            if($voter->$awardName === 1){
                return response('Error: Invalid vote!', 406);
            }
            $voter->$awardName = 1;
            $voter->update();
        }

        Vote::where('name', $request->input('name'))->increment($request->input('award'));
        $updatedVotes = Vote::all()->pluck($request->input('award'));
        $updatedNames = Vote::all()->pluck('name');

        event(new VoteCasted($request->input('award'), $updatedVotes, $updatedNames));

    }

}
