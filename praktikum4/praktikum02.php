<?php
require_once 'header.php';
require_once 'sidebar.php';
if (isset($_POST['submit'])) {
    // Menangkap data input
    $name = $_POST['name'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $TV = 4200000 * $jumlah;
    $KULKAS = 3100000 * $jumlah;
    $MESIN_CUCI = 3000000 * $jumlah;

    echo "<br>Nama Customer : " . $name;
    echo "<br>Produk Pilihan : " . $produk;
    echo "<br>Jumlah Produk : " . $jumlah;

    switch ($produk) {
        case "TV" : 
            echo "<br>Total Belanja : " . $TV;
            break;
        case "KULKAS" : 
            echo "<br>Total Belanja : " . $KULKAS;
            break;
        case "MESIN_CUCI" : 
            echo "<br>Total Belanja : " . $MESIN_CUCI;
            break;
    }
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tugas Praktikum</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum 02</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <div class="container">
        <h2>Form Produk Barang</h2>
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Customer :</label> 
                        <div class="col-8">
                            <input id="name" name="name" placeholder="Nama Customer" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS" required="required"> 
                                <label for="produk_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN_CUCI" required="required"> 
                                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah Produk</label> 
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah Produk" type="number" class="form-control" required="required">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="harga-list">
                    <h4>Daftar Harga</h4>
                    <ul>
                        <li>TV - Rp. 4.200.000</li>
                        <li>KULKAS - Rp. 3.100.000</li>
                        <li>MESIN CUCI- Rp. 3000.000  </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
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