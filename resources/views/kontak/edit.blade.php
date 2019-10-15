@extends('base')

@section('body')
<form method="post" action="{{ route('kontakUpdate', ['id'=>$kontak->id]) }}">
    @csrf
    <div>
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $kontak->nama }}">
    </div>
    <div>
        <label>Telepon:</label>
        <input type="text" name="telepon" value="{{ $kontak->telepon }}">
    </div>
    <div>
        <label>Email:</label>
        <input type="text" name="email" value="{{ $kontak->email }}">
    </div>
    <div>
        <label>Alamat:</label>
        <input type="text" name="alamat" value="{{ $kontak->alamat }}">
    </div>
    <div>
        <input type="submit">
    </div>
</form>
@endsection