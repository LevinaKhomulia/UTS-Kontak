@extends('base')

@section('body')
<button ><a href="{{ route('kontakNewForm') }}">Add New</a></button>
<br><br>
<form method="GET" action ="{{ route('kontakFilter') }}">
<input type="text" name="nama"/>
<input type="submit" value="Filter"/>
</form>
<br><br>
<table border =1>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Alamat</th>
    </tr>
    @foreach ($kontaks as $kontak)
    <tr>
        <td><a href="{{ route('kontakDetail', ['id' => $kontak->id]) }}">{{ $kontak->id }}</a></td>
        <td><a href="">{{ $kontak->nama }}</a></td>
        <td><a href="">{{ $kontak->telepon }}</a></td>
        <td><a href="">{{ $kontak->email }}</a></td>
        <td><a href="">{{ $kontak->alamat }}</a></td>
        <td><a href="{{ route('kontakDelete', ['id' => $kontak->id]) }}"
            onclick="return confirm('Are you sure?')">Delete</a>
            <a href="{{ route('kontakEditForm', ['id'=>$kontak->id]) }}">Edit</a>
        </td>
    </tr>
    </div>
    @endforeach
</table>


@endsection  