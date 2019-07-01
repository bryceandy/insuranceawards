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
        $yaa1 = Vote::all()->pluck('yaa1');
        $yaa2 = Vote::all()->pluck('yaa2');
        $iboya = Vote::all()->pluck('iboya');
        $iacoya = Vote::all()->pluck('iacoya');
        $csra = Vote::all()->pluck('csra');

        return view('voting.home', compact('voteNames', 'icoya', 'miip', 'yaa1', 'yaa2', 'iboya', 'iacoya', 'csra' ));
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
