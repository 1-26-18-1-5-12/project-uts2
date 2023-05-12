<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Produk</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="frompesanan.php"><button type="button" class="btn btn-primary">Tambahkan Produk</button></a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama produk</th>
                                <th scope="col">Harga Jual</th>
                                <th scope="col">Harga Beli</th>
                                <th scope="col">Harga Stok</th>
                                <th scope="col">Harga Minimal Stok</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>AC01</td>
                                <td>AC</td>
                                <td>4000000</td>
                                <td>3500000</td>
                                <td>10</td>
                                <td>5</td>
                                <td>AC (Air Conditioner) merupakan perangkat elektronik yang berfungsi sebagai pendingin ruangan ini menjadi solusi jitu mengatasi udara yang panas</td>
                                <td>Elektonik</td>
                                <td>
                                    <a href="detailproduk1.php"><button type="button" class="btn btn-info">Detail</button></a>
                                    <br>
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    <br>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>MB01</td>
                                <td>Meja Belajar</td>
                                <td>2000000</td>
                                <td>1500000</td>
                                <td>6</td>
                                <td>2</td>
                                <td>Meja yang di fungsikan untuk membaca, menulis, dan yang pasti untuk belajar</td>
                                <td>Elektonik</td>
                                <td>
                                    <a href="detailproduk2.php"><button type="button" class="btn btn-info">Detail</button></a>
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    <br>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>