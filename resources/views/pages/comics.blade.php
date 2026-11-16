@extends('layouts.master')

@php
    $comics = config('comics');
@endphp

@section('content')
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron" id="jumbotron">

    <div class="container">
        
        <div id="cards-container">
            
            <span id="series-badge">CURRENT SERIES</span>

            @foreach ($comics as $comic)
                <x-comic-card>
                    <x-slot:img>{{ $comic['thumb'] }}</x-slot-img>
                        <x-slot:title>{{ $comic['series'] }}</x-slot-img>
                </x-comic-card>
            @endforeach

        </div>

        <button>LOAD MORE</button>
    </div>
@endsection
