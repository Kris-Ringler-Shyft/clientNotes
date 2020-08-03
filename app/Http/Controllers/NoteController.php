<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function create(Request $request)
    {

        if ($request) {



            $note = new Note();
            $note->author_id = Auth::id();
            $note->client_id = $request->clients_select;
            $note->note_title = $request->note_title;
            $note->note_content = $request->note_content;

            $note->save();

            return redirect('/');
        }
    }
}
