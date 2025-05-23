@extends('layout.admin')

@section('content')
<h1>Edit Produk</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf @method('PUT')

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
    </div>

    <div class="mb-3">
        <label>Kategori</label>
        <select name="category" class="form-control" required>
            <option value="">-- Pilih Kategori --</option>
            <option value="Clothing" {{ $product->category == 'Clothing' ? 'selected' : '' }}>Clothing</option>
            <option value="Accessories" {{ $product->category == 'Accessories' ? 'selected' : '' }}>Accessories</option>
            <option value="Footwear" {{ $product->category == 'Footwear' ? 'selected' : '' }}>Footwear</option>
            <option value="Outerwear" {{ $product->category == 'Outerwear' ? 'selected' : '' }}>Outerwear</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
    </div>

    <div class="mb-3">
        <label>Gambar (URL)</label>
        <input type="text" name="image" class="form-control" value="{{ $product->image }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection