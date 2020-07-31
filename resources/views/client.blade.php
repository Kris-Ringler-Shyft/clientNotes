@extends('layouts.app')

@section('note')

<div class="wrapper">

    <div class="container">

        <div id="content">
            <h2>Client Name: {{$client->name}}</h2>
            {{-- @foreach($notes as $note)
            <div class="title">
            <h3>{{$note->note_title}}</h3>
            </div>
            <br />
            <p>
                {{$note->note_content}}
            </p>

            @endforeach --}}
            INDIVIDUAL CLIENT NOTES WILL GO HERE
        </div>
        <h3>create note</h3>
        <form action="/create-note" method="post">
            <input type="text" name="note_title" placeholder="Title">
            <input type="text" name="note_content" placeholder="Content">
            {{csrf_field()}}
            <button type="submit">Create Note</button>
        </form>
    </div>



</div>


@endsection
