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

    public function iptest(Request $request)
    {
        return $request->ip();
    }

    public function fillInDefaultNominees()
    {
        $votes = Vote::all();

        foreach ($votes as $vote)
        {
            $vote->delete();
        }

        $voters = Voters::all();

        foreach ($voters as $voter)
        {
            $voter->delete();
        }

        $nom1 = Vote::create([
            'name' => 'Sanlam Life Insurance Tanzania',
            'category' => 'icoya'
        ]);
        $nom1->save();

        $nom2 = Vote::create([
            'name' => 'Alliance Insurance Corporation Limited',
            'category' => 'icoya'
        ]);
        $nom2->save();

        $nom3 = Vote::create([
            'name' => 'Alliance Life Assurance Limited',
            'category' => 'icoya'
        ]);
        $nom3->save();

        $nom4 = Vote::create([
            'name' => 'Jubilee Insurance Limited Company',
            'category' => 'icoya'
        ]);
        $nom4->save();

        $nom5 = Vote::create([
            'name' => 'Jubilee Insurance Limited Company - Safari Voucher',
            'category' => 'miip'
        ]);
        $nom5->save();

        $nom6 = Vote::create([
            'name' => 'Milvik Tanzania Limited - Bima Mkononi',
            'category' => 'miip'
        ]);
        $nom6->save();

        $nom7 = Vote::create([
            'name' => 'Mgen Tanzania Insurance Company Limited - Multi-Peril Crop Insurance',
            'category' => 'miip'
        ]);
        $nom7->save();

        $nom8 = Vote::create([
            'name' => 'Acclavia Insurance Brokers - Boda Salama',
            'category' => 'miip'
        ]);
        $nom8->save();

        $vote = Vote::all();
        return response()->json($vote);
    }
}
