@extends('layouts.app')

@section('content')
<h2>Edit Buku</h2>

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Judul</label>
        <input type="text" name="title" value="{{ $book->title }}" required>
    </div>

    <div>
        <label>Penulis</label>
        <input type="text" name="author" value="{{ $book->author }}" required>
    </div>

    <div>
        <label>Kategori</label>
        <select name="category_id" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-edit">Update</button>
    <a href="{{ route('books.index') }}" class="btn btn-delete">Batal</a>
</form>
@endsection
