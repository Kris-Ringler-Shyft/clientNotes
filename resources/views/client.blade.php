@extends('layouts.app')

@section('note')

<div class="wrapper">

    <div class="container">

        <div id="content">
            @foreach($notes as $note)
            <div class="title">
            <h2>{{$note->note_title}}</h2>
            </div>
            <br />
            <p>
                {{$note->note_content}}
            </p>

            @endforeach
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
