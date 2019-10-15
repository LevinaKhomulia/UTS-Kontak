@extends('base')

@section('body')
<dl>
    <dt>Nama</dt>
    <dd>{{ $kontak->nama }}</dd>
    <dt>Telepon</dt>
    <dd>{{ $kontak->telepon }}</dd>
    <dt>Email</dt>
    <dd>{{ $kontak->email }}</dd>
    <dt>Alamat</dt>
    <dd>{{ $kontak->alamat }}</dd>
</dl>
@endsection