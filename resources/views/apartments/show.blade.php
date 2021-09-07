@extends('layouts.main')

@section('content')
    <h1>
        Apartment 
        <span class="text-lg">{{ $apartment->name }}</span>
    </h1>

    <h2></h2>

    <p>จำนวนชั้น {{ $apartment->floors }} ชั้น</p>

    <hr>

    <a href="{{ route('apartments.edit', ['apartment' => $apartment->id]) }}">
        Edit this apartment
    </a>
@endsection