<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit</h1>
        <?php if (!$barang): ?>
                    <div class="alert alert-danger">
                         Tidak ada data barang
                    </div>
        <?php else: ?>
        <form method="post">
            <div class="mb-3">
                <label for="kode" class="form-label">KODE BARANG</label>
                <input type="text" class="form-control" name="kode"  value="<?php echo $barang['kode']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">NAMA BARANG</label>
                <input type="text" class="form-control" name="nama"  value="<?php echo $barang['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">HARGA BARANG</label>
                <input type="number" class="form-control" name="harga"  value="<?php echo $barang['harga']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">STOK BARANG</label>
                <input type="number" class="form-control" name="stok"  value="<?php echo $barang['stok']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php?move=barang" class="btn btn-secondary">Batal</a>
        </form>
        <?php endif; ?>
    </div>
</body>
</html>
