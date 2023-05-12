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
                                <th scope="col">Nama Kategorit</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Elektronik</td>
                                <td> 
                                    <a href="detailproduk1.php"><button type="button" class="btn btn-info">Detail</button></a>
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    <button type="button" class="btn btn-danger">Delete</button>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Furniture</td>
                                <td>
                                    <a href="detailproduk1.php"><button type="button" class="btn btn-info">Detail</button></a>
                                    <button type="button" class="btn btn-warning">Edit</button>
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