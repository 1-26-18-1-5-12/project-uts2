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
                    <h1>Data Kategori</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama </th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Email</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Althaf Sulistyo Wicaksono</td>
                                <td>2023-05-11 </td>
                                <td>Bogor</td>
                                <td>081288857153</td>
                                <td>alth@gmail.com</td>
                                <td>2</td>
                                <td>1</td>
                                <td>Pesanan Meja Belajar</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Azalia chandra</td>
                                <td>2023-05-11 </td>
                                <td>Bogor</td>
                                <td>081282357153</td>
                                <td>azalia@gmail.com</td>
                                <td>3</td>
                                <td>2</td>
                                <td>Pesanan AC</td>
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