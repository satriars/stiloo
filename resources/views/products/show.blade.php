<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $product->name }} - Stilo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <a href="/" class="text-blue-500 underline mb-4 inline-block">← Kembali ke produk</a>
    <div class="flex flex-col md:flex-row gap-6">
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full md:w-1/2 h-auto object-cover rounded">
        <div>
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <p>Harga: Rp {{ number_format($product->price) }}</p>
        </div>
    </div>
</body>
</html>
