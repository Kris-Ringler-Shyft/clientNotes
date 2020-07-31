<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create(Request $request)
    {
        $client = new Client();
        $client->name = $request->name;

        $client->save();

        return redirect('/');
    }
}
