<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>CETAK LAPORAN DATA TRASAKSI PEMINJAMAN BUKU</h2>   
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />

        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Cetak Laporan Data Transaksi Peminjaman Buku
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="GET" action="laporan/laporanTransaksiPeriode.php">

                            <div class="form-group">
                                <label>Dari Tanggal</label>
                                <input type="date" class="form-control" name="tgl1" id="tgl1" />
                            </div>

                            <div class="form-group">
                                <label>Sampai Tanggal</label>
                                <input type="date" class="form-control" name="tgl2" id="tgl2" />
                            </div>

                            <div>
                                <input type="submit" name="simpan" value="Cetak" class="btn btn-primary">

                                <a href="laporan/laporanTransaksi.php" class="btn btn-success" target="_blank" > Cetak Semua</a>

                                <input type="reset" name="reset" value="Reset" class="btn btn-warning">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->

    </div>
    <!-- /. PAGE INNER  -->
</div>