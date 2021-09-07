@extends('layouts.main')

@section('content')
    <h1 class="text-lg">Edit Apartment</h1>

    <form action="{{ route('apartments.update', ['apartment' => $apartment->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Apartment name</label>
            <input type="text" name="name"
                   class=""
                   value="{{ $apartment->name }}"
                   placeholder="Apartment name" autucomplete="off">
        </div>

        <div>
            <label for="floors">Floors</label>
            <input type="number" min="1" name="floors"
                   value="{{ $apartment->floors }}">
        </div>

        <div>
            <button type="submit" class="bg-blue-300">Edit new Apartment</button>
        </div>
    </form>

    <hr>

    <div>
        <h1>Danger Zone</h1>

        <h2>Delete this apartment</h2>
        <p>การลบข้อมูลนี้ ไม่สามารถเรียกกลับคืนได้</p>
        <form action="{{ route('apartments.destroy', ['apartment' => $apartment->id]) }}" method="POST">
            @method('DELETE')
            @csrf

            <label for="destroy">ใส่ชื่ออพาร์ตเมนต์ เพื่อยืนยันว่าจะลบ</label>
            <input type="text" placeholder="ใส่ชื่ออพาร์ตเมนต์ เพื่อยืนยันว่าจะลบ">

            <button type="submit">ลบ</button>
        </form>
        
    </div>
@endsection