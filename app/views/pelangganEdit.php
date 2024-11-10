<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit</h1>
        <?php if (!$pelanggan): ?>
                    <div class="alert alert-danger">
                         Tidak ada data pelanggan
                    </div>
        <?php else: ?>
        <form method="post">
            <div class="mb-3">
                <label for="id" class="form-label">ID PELANGGAN</label>
                <input type="text" class="form-control" name="id"  value="<?php echo $pelanggan['id']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">NAMA PELANGGAN</label>
                <input type="text" class="form-control" name="nama"  value="<?php echo $pelanggan['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">ALAMAT</label>
                <input type="text" class="form-control" name="alamat"  value="<?php echo $pelanggan['alamat']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php?move=pelanggan" class="btn btn-secondary">Batal</a>
        </form>
        <?php endif; ?>
    </div>
</body>
</html>
