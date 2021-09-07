@extends('layouts.main')

@section('content')
    <h1 class="text-lg">Add new Apartment</h1>

    <form action="{{ route('apartments.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Apartment name</label>
            <input type="text" name="name"
                   class=""
                   placeholder="Apartment name" autucomplete="off">
        </div>

        <div>
            <label for="floors">Floors</label>
            <input type="number" min="1" name="floors">
        </div>

        <div>
            <button type="submit" class="bg-blue-300">Add new Apartment</button>
        </div>
    </form>
@endsection