@extends('layouts.app')

@section('metaTitle', 'Home Page')

@section('content')
<ul>
    @forelse($trains as $train)

    <li>
        <h1>{{ $train['company'] }}</h1> 
        <p>{{ $train['departure_station'] }}</p>
        <p>{{ $train['arrival_station']}}</p>
        <p>{{ $train['departure_time'] }}</p>
        <p>{{ $train['arrival_time'] }}</p>
        <p>{{  $train['train_code'] }}</p>
        <p>{{  $train['train_length'] }}</p>
        <p>{{  $train['in_time'] }}</p>
        <p>{{  $train['deleted'] }}</p>
    </li>


    @empty
    <p>NO TRAINS FOR TODAY</p>
    @endforelse
</ul>
    
@endsection