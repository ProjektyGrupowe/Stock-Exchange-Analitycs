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
        return view('input');
    }

    public function getCompany(Request $request){

        $publicKey = 'pk_d648abdcb291433392e2a00bc9d20ca8';

        $client = new Client();

        $name = $request->input('name');

        $nameEndpoint = "https://cloud.iexapis.com/stable/stock/"

        . $name . "/batch?types=quote,news,chart&range=1m&last=10&"
        . "token=" . $publicKey;



        $nameResponse = $client->request('GET', $nameEndpoint);
        $nameResponseBody = $nameResponse->getBody();
        $nameResponseJSON = json_decode($nameResponseBody);

        $apiData = $nameResponseJSON->quote;
        
        $result = view('dashboard')
            -> with('apiData', $apiData);

        print_r($apiData);
        
        return $result;
    }
}

