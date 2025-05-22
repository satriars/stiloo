<!DOCTYPE html>
<html>
<head>
    <title>Stilo - Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk Stilo</h1>

    <a href="/admin/create">+ Tambah Produk</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($products as $product)
            <li>
                <h3><a href="/product/{{ $product->id }}">{{ $product->name }}</a></h3>
                <p>Kategori: {{ $product->category }}</p>
                <p>Harga: Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" width="100">
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>
