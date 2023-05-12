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
                    <h1>Dashboard Website</h1>
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
                                    Meja Belajar
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Harga</strong>
                                </td>
                                <td>
                                    2000000
                                </td>
                            </tr>
                            <tr class="table-active">
                                <td>
                                    <strong>Stok</strong>
                                </td>
                                <td>
                                    6
                                </td>
                            </tr>
                            <tr class="table-success">
                                <td>
                                    <strong>Deskripsi</strong>
                                </td>
                                <td>
                                    Meja yang difungsikan untuk membaca, dan menulis
                                </td>
                            </tr>
                            <tr class="table-warning">
                                <td>
                                    <strong>Kategori</strong>
                                </td>
                                <td>
                                    Furniture
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