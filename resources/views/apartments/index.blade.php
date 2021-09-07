@extends('layouts.main')

@section('content')
    <h1 class="text-lg">Apartment List</h1>

    <a href="{{ route('apartments.create') }}">
        + New Apartment
    </a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Floors</th>
                <th>Created at</th>
            </tr>
        </thead>

        <tbody>
            @foreach($apartments as $apartment)
                <tr>
                    <td>
                        <a href="{{ route('apartments.show', ['apartment'=>$apartment->id]) }}">
                        {{ $apartment->name }}
                        </a>
                        
                    </td>
                    <td>
                        {{ $apartment->floors }}
                    </td>
                    <td title="{{ $apartment->created_at }}">
                        {{ $apartment->created_at->diffForHumans() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection