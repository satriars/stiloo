<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk - Stilo</title>
</head>
<body>
    <h1>Tambah Produk Baru</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/admin/store" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Nama Produk:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Deskripsi:</label><br>
    <textarea name="description" required></textarea><br><br>

    <label>Harga:</label><br>
    <input type="number" step="0.01" name="price" required><br><br>

    <label>Kategori:</label><br>
    <select name="category" required>
        <option value="">-- Pilih Kategori --</option>
        <option value="Fashion Perempuan">Fashion Perempuan</option>
        <option value="Fashion Laki-laki">Fashion Laki-laki</option>
    </select><br><br>

    <label>Gambar Produk (opsional):</label><br>
    <input type="file" name="image"><br><br>

    <button type="submit">Simpan Produk</button>
</form>
    <br>
    <a href="/">Kembali ke Beranda</a>
</body>
</html>
