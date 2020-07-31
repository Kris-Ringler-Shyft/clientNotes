<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    public function create(Request $request)
    {
        $note = new Note();
        $note->note_title = $request->note_title;
        $note->note_content = $request->note_content;

        $note->save();

        return redirect('/');
    }
}
