<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Transaksi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/AdminLTE/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="public/adminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Kantor</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php?move=barang" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Barang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?move=pelanggan" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?move=transaksi" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Transaksi</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TOKO WILDAN JAYA</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        <h1 class="text-success">Data Transaksi</h1>
        </div>
    
        <div class="card-body" style="overflow-y: auto; max-height: 400px;">
        <a href="index.php?&action_trs=tambah" class="btn btn-success btn-sm m-1">Tambah Transaksi</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th> 
                    <th scope="col">ID TRANSAKSI</th>
                    <th scope="col">KODE BARANG</th>
                    <th scope="col">ID PELANGGAN</th>
                    <th scope="col">JUMLAH</th>
                    <th scope="col">BAYAR</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($transaksi)): // Cek apakah ada pengguna ?>
                    <?php $nomor = 1; ?>
                    <?php foreach ($transaksi as $transaksi): ?>
                        <tr>
                            <th scope="row"><?php echo $nomor++; ?></th> 
                            <td><?php echo $transaksi['id']; ?></td>
                            <td><?php echo $transaksi['kode_barang']; ?></td>
                            <td><?php echo $transaksi['id_pelanggan']; ?></td>
                            <td><?php echo $transaksi['jumlah']; ?></td>
                            <td><?php echo number_format($transaksi['bayar'],0, '.','.')?></td>
                            <td><?php echo $transaksi['tanggal']; ?></td>
                            <td>
                                <a href="index.php?id=<?php echo $transaksi['id']; ?>&action_trs=edit" class="btn btn-warning btn-sm m-1">Edit</a>
                                <a href="index.php?id=<?php echo $transaksi['id']; ?>&action_trs=hapus" class="btn btn-danger btn-sm m-1" onclick="return confirm('Apakah ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">Pelanggan kosong</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        </div>

        <!-- /.card-body -->
        <div class="card-footer">
            
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <a href="../Pertemuan6_lte">
        <i class="fa fa-home"></i> Home
      </a>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
