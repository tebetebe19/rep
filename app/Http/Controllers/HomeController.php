<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    function index () {

        $token = "Bearer patNYCefWWjQibU6W.e2201096bf00714b79cd86ed60840926cbe8e69e3c29ba8b03becc3d390c6069";
        $responseTeam = Http::withHeaders([
            'Authorization' => $token
        ])->get('https://api.airtable.com/v0/appNNNZJNjqNrOPAE/team');
        $teams = $responseTeam['records'];

        $responseTesti = Http::withHeaders([
            'Authorization' => $token
        ])->get('https://api.airtable.com/v0/appNNNZJNjqNrOPAE/testi');
        $testis = $responseTesti['records'];

        // dd($testis);

        return view('home',compact('teams','testis'));
    }
}
