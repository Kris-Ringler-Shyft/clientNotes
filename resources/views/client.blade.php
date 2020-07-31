@extends('layouts.app')

@section('note')

<div class="wrapper">

    <div class="container">

        <div id="content">
            @forelse($notes as $note)
            <div class="title">
            <h2>{{$note->note_title}}</h2>
            </div>
            <br />
            <p>
                {{$note->note_content}}
            </p>
            @empty
            <p>No Notes Added Yet</p>
            @endforeach
        </div>
    </div>
</div>


@endsection
