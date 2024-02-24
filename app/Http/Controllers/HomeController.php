<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    function index () {

        $responseTeam = Http::withHeaders([
            'Authorization' => 'Bearer patQqOGwFwsM0prpt.fce269ceda1c9bb03cbbccbbc00fa3cb40937241a3d0315817d49997b5012b6b'
        ])->get('https://api.airtable.com/v0/app2OeydkfqPNn9gn/team');
        $teams = $responseTeam['records'];

        $responseTesti = Http::withHeaders([
            'Authorization' => 'Bearer patQqOGwFwsM0prpt.fce269ceda1c9bb03cbbccbbc00fa3cb40937241a3d0315817d49997b5012b6b'
        ])->get('https://api.airtable.com/v0/app2OeydkfqPNn9gn/testi');
        $testis = $responseTesti['records'];

        // dd($testis);

        return view('home',compact('teams','testis'));
    }
}
