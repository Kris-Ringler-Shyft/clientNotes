<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $clients = Client::all();




        return view('layouts.app', [
            'clients' => $clients
        ]);
    }
}
