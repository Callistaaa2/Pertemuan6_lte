<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah</h1>
        <form method="post">
            <div class="mb-3">
                <label for="id" class="form-label">ID PELANGGAN</label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">NAMA PELANGGAN</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">ALAMAT</label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="index.php?move=pelanggan" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
