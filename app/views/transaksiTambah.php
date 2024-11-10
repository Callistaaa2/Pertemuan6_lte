<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah</h1>
        <form method="post">
            <div class="mb-3">
                <label for="id" class="form-label">ID TRANSAKSI</label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="mb-3">
                <label for="kode_barang" class="form-label">KODE BARANG</label>
                <input type="text" class="form-control" name="kode_barang">
            </div>
            <div class="mb-3">
                <label for="id_pelanggan" class="form-label">ID_PELANGGAN</label>
                <input type="text" class="form-control" name="id_pelanggan">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">JUMLAH</label>
                <input type="number" class="form-control" name="jumlah">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="index.php?move=transaksi" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
