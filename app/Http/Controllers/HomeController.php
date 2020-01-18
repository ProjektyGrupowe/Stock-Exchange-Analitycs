<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\json_decode;
use Illuminate\Http\Request;

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
        $publicKey = 'pk_8936f153936f4ee3b77122727d80bead';
        $client = new Client();

        $name = $request->input('name');

        $nameEndpoint = "https://cloud.iexapis.com/stable/stock/"
        . $name . "/batch?types=quote,news,chart&range=1m&last=10&"
        . "token=" . $publicKey;

        $nameResponse = $client->request('GET', $nameEndpoint);
        $nameResponseBody = $nameResponse->getBody();
        $nameResponseJSON = json_decode($nameResponseBody);

        $chart = $nameResponseJSON->chart[0];
        

        $result = view('dashboard')
            -> with('chart', $chart);

        return $result;

    }
}
