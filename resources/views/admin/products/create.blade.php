@extends('layout.admin')

@section('content')
<h1>Tambah Produk</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Kategori</label>
        <select name="category" class="form-control" required>
            <option value="">-- Pilih Kategori --</option>
            <option value="Clothing">Clothing</option>
            <option value="Accessories">Accessories</option>
            <option value="Footwear">Footwear</option>
            <option value="Outerwear">Outerwear</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Gambar (URL)</label>
        <input type="text" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection