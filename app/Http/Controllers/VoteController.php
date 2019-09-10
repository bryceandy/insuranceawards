<?php

namespace App\Http\Controllers;

use App\Events\VoteCasted;
use App\Vote;
use App\Voters;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index(){

        $icoyaNames = Vote::whereCategory('icoya')->pluck('name');
        $miipNames = Vote::whereCategory('miip')->pluck('name');

        $icoya = Vote::whereCategory('icoya')->pluck('icoya');
        $miip = Vote::whereCategory('miip')->pluck('miip');

        return view('voting.home', compact('icoyaNames', 'miipNames', 'icoya', 'miip' ));
    }

    /**
     * @param Request $request
     * @return array|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response|null
     */
    public function cast(Request $request) {

        $awardName = $request->input('award');

        $voter = Voters::where('ip', $request->ip())->first();

        if(!$voter)
        {
            // check if the user voting has their ip address was
            // not included in the voters table, then include

            Voters::create([
               'ip' => $request->ip(),
                $awardName => 1
            ]);
        }
        else{
            // if their ip address was included and they are
            // voting for a category they previously voted

            if($voter->$awardName === 1){
                return response('Invalid vote!', 406);
            }
            // if their ip address was included and they are voting for a
            // category they did not vote for, update the voters table

            $voter->$awardName = 1;
            $voter->update();
        }

        // update the votes
        Vote::where('name', $request->input('name'))->increment($request->input('award'));

        $updatedVotes = Vote::all()->pluck($request->input('award'));
        $updatedNames = Vote::all()->pluck('name');

        // broadcast voting event to all users that are online to see live polling
        return event(new VoteCasted($request->input('award'), $updatedVotes, $updatedNames));

    }

}
