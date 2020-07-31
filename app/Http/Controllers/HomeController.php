<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Note;

class HomeController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $notes = Note::all();



        return view('layouts.app', [
            'clients' => $clients,
            'notes' => $notes
        ]);
    }

    public function client()
    {
        $clients = Client::all();
        $notes = Note::all();



        return view('client', [
            'clients' => $clients,
            'notes' => $notes
        ]);
    }
}
