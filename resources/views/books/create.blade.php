@extends('layouts.app')

@section('content')
<h2>Tambah Buku Baru</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div>
        <label>Judul Buku</label>
        <input type="text" name="title" placeholder="Masukkan Judul Buku" required>
    </div>

    <div>
        <label>Penulis</label>
        <input type="text" name="author" placeholder="Masukkan Nama Penulis" required>
    </div>

    <div>
        <label>Kategori</label>
        <select name="category_id" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Tahun Terbit</label>
        <input type="text" name="year" placeholder="Masukkan Tahun Terbit (opsional)">
    </div>

    <button type="submit" class="btn btn-add">Simpan</button>
    <a href="{{ route('books.index') }}" class="btn btn-delete">Batal</a>
</form>
@endsection
