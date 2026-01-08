@extends('layouts.app')

@section('content')
<h2>Daftar Buku</h2>

@if(session('success'))
    <div class="success">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('books.create') }}" class="btn btn-add">+ Tambah Buku</a>

<table>
    <tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </tr>

    @foreach($books as $book)
    <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->year }}</td>
        <td>{{ $book->category->name }}</td>
        <td>
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-edit">Edit</a>

            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-delete" onclick="return confirm('Yakin mau hapus buku ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
