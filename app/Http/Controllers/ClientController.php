<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Note;
use App\ClientNote;

class ClientController extends Controller
{
    public function create(Request $request)
    {
        $client = new Client();
        $client->name = $request->name;

        $client->save();

        return redirect('/');
    }

    public function show($clientId)
    {
        $clients = Client::all();
        $notes = Note::all();
        $client_notes = ClientNote::all();
        $client = Client::find($clientId);



        return view('client', [
            'clients' => $clients,
            'notes' => $notes,
            'client_notes' => $client_notes,
            'client' => $client
        ]);
    }
}
