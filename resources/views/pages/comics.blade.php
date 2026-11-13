@extends('layouts.master')

@php
$comics = config('comics');
@endphp

@section('content')
<p>This is the page for the comics!</p>

<ul>
    
    @foreach ($comics as $comic)
    
        <li>
            <x-comic-card>
                <x-slot:img>{{ $comic['thumb'] }}</x-slot-img>
                <x-slot:title>{{ $comic['series'] }}</x-slot-img>
            </x-comic-card>
        </li>

    @endforeach

</ul>



@endsection