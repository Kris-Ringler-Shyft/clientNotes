@extends('layouts.app')

@section('note')

<div class="wrapper">

    <div class="container">

        <div id="content">
            <h2>Client Name: {{$client->name}}</h2>
            <pre>{{$client_notes}}</pre>

            <ul>
                 @foreach($notes as $note)
                <li>{{$note->note_content}}</li>

            </ul>

            @endforeach


        </div>


        <h3>create note</h3>
        <form action="/create-note" method="post">
            <input type="text" name="note_title" placeholder="Title">
            <select name="clients_select">
                @foreach($clients as $client)
                     <option value="{{$client->id}}">{{$client->name}}</option>
                @endforeach
            </select>
            <textarea type="text" name="note_content" placeholder="Content" ></textarea>
            {{csrf_field()}}
            <button type="submit">Create Note</button>
        </form>
    </div>



</div>


@endsection
