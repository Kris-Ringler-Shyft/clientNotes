<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Note;
use App\ClientNote;

class HomeController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $notes = Note::all();
        $client_notes = ClientNote::all();


        return view('layouts.app', [
            'clients' => $clients,
            'notes' => $notes,
            'client_notes' => $client_notes
        ]);
    }

    public function client()
    {
        $clients = Client::all();
        $notes = Note::all();
        $client_notes = ClientNote::all();



        return view('client', [
            'clients' => $clients,
            'notes' => $notes,
            'client_notes' => $client_notes
        ]);
    }
}
