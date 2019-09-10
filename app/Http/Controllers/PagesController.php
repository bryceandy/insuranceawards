<?php

namespace App\Http\Controllers;

use App\User;
use App\Vote;
use App\Role;
use App\Voters;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['dashboard']);
    }

    public function index(){
        //display the homepage
        return view('pages.home');
    }

    public function dashboard(){
        //display the dashboard
        $users = User::all();
        $voters = Voters::all();
        $votes = Vote::all();
        return view('dashboard')->with([
            'users' => $users,
            'voters' => $voters,
            'votes' => $votes
        ]);
    }

    public function steering(){
        //display the steering page
        return view('pages.steering');
    }

    public function judges(){
        //display the judges page
        return view('pages.judges');
    }

    public function secretariat(){
        //display the secretariat page
        return view('pages.secretariat');
    }

    public function shortlist(){
        //display the shortlist page
        return view('pages.shortlist');
    }

    public function sponsor(){
        //display the sponsor page
        return view('pages.sponsor');
    }

    public function sponsorship(){
        //display the sponsorship page
        return view('pages.sponsorship');
    }

    public function faqs(){
        //display the faqs page
        return view('pages.faqs');
    }

    public function about(){
        //display the about page
        return view('pages.about');
    }

    public function contact(){
        //display the contact page
        return view('pages.contact');
    }

    public function fillInDefaultNominees()
    {
        $votes = Vote::all();

        foreach ($votes as $vote)
        {
            $vote->delete();
        }

        $nom1 = Vote::create([
            'name' => 'Tanzania Insurance Regulatory Authority'
        ]);
        $nom1->save();

        $nom2 = Vote::create([
            'name' => 'Tanzania Insurance Brokers Association'
        ]);
        $nom2->save();

        $nom3 = Vote::create([
            'name' => 'Association of Tanzania Insurers'
        ]);
        $nom3->save();

        $nom4 = Vote::create([
            'name' => 'I.I.T'
        ]);
        $nom4->save();

        $vote = Vote::all();
        return response()->json($vote);
    }
}
