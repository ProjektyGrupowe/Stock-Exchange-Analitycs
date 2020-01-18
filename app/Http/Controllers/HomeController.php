<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\json_decode;
<<<<<<< HEAD
use Illuminate\Http\Request;
=======
<<<<<<< HEAD
use Illuminate\Http\Request;
=======
>>>>>>> 44405b86b5f6b83fd907cd4956bd8cffece0bed1
>>>>>>> 4087e0dda492bdde46baf62fb8201aa999112faf

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }

    public function getCompany(Request $request){
<<<<<<< HEAD
        $publicKey = 'pk_8936f153936f4ee3b77122727d80bead';
=======
<<<<<<< HEAD
        $publicKey = 'pk_8936f153936f4ee3b77122727d80bead';
=======
>>>>>>> 44405b86b5f6b83fd907cd4956bd8cffece0bed1
>>>>>>> 4087e0dda492bdde46baf62fb8201aa999112faf
        $client = new Client();

        $name = $request->input('name');

        $nameEndpoint = "https://cloud.iexapis.com/stable/stock/"
<<<<<<< HEAD
        . $name . "/batch?types=quote,news,chart&range=1m&last=10&"
        . "token=" . $publicKey;
=======
<<<<<<< HEAD
        . $name . "/batch?types=quote,news,chart&range=1m&last=10&"
        . "token=" . $publicKey;
=======
        . $name . "/batch?types=quote,news,chart&range=1m&last=10?"
        . "token=" . env(IEX_CLOUD_PUBLIC_KEY);
>>>>>>> 44405b86b5f6b83fd907cd4956bd8cffece0bed1
>>>>>>> 4087e0dda492bdde46baf62fb8201aa999112faf

        $nameResponse = $client->request('GET', $nameEndpoint);
        $nameResponseBody = $nameResponse->getBody();
        $nameResponseJSON = json_decode($nameResponseBody);

<<<<<<< HEAD
        $chart = $nameResponseJSON->chart[0];
        
=======
<<<<<<< HEAD
        $chart = $nameResponseJSON->chart[0];
        
=======
        $chart = $nameResponseJSON->chart->open;
>>>>>>> 44405b86b5f6b83fd907cd4956bd8cffece0bed1
>>>>>>> 4087e0dda492bdde46baf62fb8201aa999112faf

        $result = view('dashboard')
            -> with('chart', $chart);

        return $result;

    }
}
