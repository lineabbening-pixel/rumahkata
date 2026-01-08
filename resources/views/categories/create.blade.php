@extends('layouts.app')

@section('content')
<h3>Tambah Kategori</h3>

<form method="POST" action="/categories">
    @csrf
    <input type="text" name="name" placeholder="Nama kategori" required>
    <button type="submit">Simpan</button>
</form>
@endsection
