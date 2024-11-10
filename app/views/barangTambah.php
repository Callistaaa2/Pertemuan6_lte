<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah</h1>
        <form method="post">
            <div class="mb-3">
                <label for="kode" class="form-label">KODE BARANG</label>
                <input type="text" class="form-control" name="kode">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">NAMA BARANG</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">HARGA BARANG</label>
                <input type="number" class="form-control" name="harga">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">STOK BARANG</label>
                <input type="number" class="form-control" name="stok">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="index.php?move=barang" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
