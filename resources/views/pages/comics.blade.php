@extends('layouts.master')

@php
    $comics = config('comics');
@endphp

@section('content')
    <div id="cards-container">

        @foreach ($comics as $comic)

            <x-comic-card>
                <x-slot:img>{{ $comic['thumb'] }}</x-slot-img>
                    <x-slot:title>{{ $comic['series'] }}</x-slot-img>
            </x-comic-card>

        @endforeach

    </div>
@endsection
