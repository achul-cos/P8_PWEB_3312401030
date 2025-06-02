<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>

    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Produk</label><br>
        <input type="text" name="nama" value="{{ $produk->nama }}" required><br><br>

        <label>Deskripsi</label><br>
        <textarea name="deskripsi" required>{{ $produk->deskripsi }}</textarea><br><br>

        <label>Harga</label><br>
        <input type="number" name="harga" value="{{ $produk->harga }}" required><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('produk.list') }}">Kembali ke Daftar Produk</a>
</body>
</html>
