@extends('layouts.app')

@section('content')
<h3>Data Kategori</h3>

<a href="/categories/create">Tambah Kategori</a>

<ul>
@foreach($categories as $category)
    <li>{{ $category->name }}</li>
@endforeach
</ul>
@endsection
