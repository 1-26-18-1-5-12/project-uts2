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
                    <h1>From Produk</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    
                    <form >
                        <div class="form-group row">
                            <label for="kode" class="col-4 col-form-label">kode</label>
                            <div class="col-8">
                                <input id="kode" name="kode" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama Produk</label>
                            <div class="col-8">
                                <input id="nama" name="nama" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hb" class="col-4 col-form-label">Harga Beli</label>
                            <div class="col-8">
                                <input id="hb" name="hb" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hj" class="col-4 col-form-label">Harga Jual</label>
                            <div class="col-8">
                                <input id="hj" name="hj" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stok" class="col-4 col-form-label">Stok</label>
                            <div class="col-8">
                                <input id="stok" name="stok" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label>
                            <div class="col-8">
                                <input id="min_stok" name="min_stok" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                            <div class="col-8">
                                <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kategori" class="col-4 col-form-label">Kategori Produk</label>
                            <div class="col-8">
                                <select id="kategori" name="kategori" class="custom-select">
                                    <option value="elektronik">Elektronik</option>
                                    <option value="furniture">Furniture</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
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