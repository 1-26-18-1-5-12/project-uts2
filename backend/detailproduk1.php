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
                    <h1>Detail Produk</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Nama
                                </th>
                                <th>
                                    AC
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Harga</strong>
                                </td>
                                <td>
                                    4000000
                                </td>
                            </tr>
                            <tr class="table-active">
                                <td>
                                    <strong>Stok</strong>
                                </td>
                                <td>
                                    10
                                </td>
                            </tr>
                            <tr class="table-success">
                                <td>
                                    <strong>Deskripsi</strong>
                                </td>
                                <td>
                                    AC atau air conditioner merupakan perangkat elektronik yang berfungsi sebagai pendingin ruangan ini menjadi solusi jitu mengatasi udara yang panas.
                                </td>
                            </tr>
                            <tr class="table-warning">
                                <td>
                                    <strong>Kategori</strong>
                                </td>
                                <td>
                                    Elektronik
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