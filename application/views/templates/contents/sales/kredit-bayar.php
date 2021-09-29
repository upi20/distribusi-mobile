<!-- main page content -->
<div class="main-container container pt-0">
    <br>
    <!-- experience -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                <h6 class="my-1">Penjualan</h6>
                            </td>
                            <td style="float: right; margin-top: -20px;">
                                <a onclick="simpanPenjualan(this)" target="_self" class="btn btn-xs btn-default mt-3" style="background-color: rgb(37 75 239 / 95%);"><i class="bi bi-save-fill"></i> Simpan</a>
                            </td>
                        </tr>
                    </table>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" placeholder="Kode" value="" id="kode" readonly>
                            <label for="pemilik">Kode</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" value="Soni Setiawan" id="pemilik" readonly>
                            <label for="pemilik">Pemilik</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-floating">
                            <textarea class="form-control" id="alamat" readonly=""></textarea>
                            <label for="alamat">Alamat</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" placeholder="" value="" id="produk" readonly>
                            <label for="produk">Produk</label>
                        </div>
                    </div>
                    <div class="container">
                        <table style="border:0">
                            <tr>
                                <td>
                                    <div class="form-group form-floating">
                                        <input type="text" class="form-control" placeholder="" value="" id="list-paket-karton" readonly>
                                        <label for="list-paket-karton">Paket Harga Karton</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group form-floating">
                                        <input type="text" class="form-control" placeholder="" value="" id="list-paket-renceng" readonly>
                                        <label for="list-paket-renceng">Paket Harga Renceng</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group form-floating">
                                        <input type="number" class="form-control" placeholder="Harga Karton" id="harga-karton" disabled>
                                        <label for="harga-karton">Harga Karton</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group form-floating">
                                        <input type="number" class="form-control" placeholder="Harga Renceng" id="harga-renceng" disabled>
                                        <label for="harga-renceng">Harga Renceng</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group form-floating">
                                        <input type="number" class="form-control" value="1" placeholder="Jumlah Renceng" id="qty-karton" disabled>
                                        <label for="qty-karton">Qty Karton</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group form-floating">
                                        <input type="number" class="form-control" value="" placeholder="Jumlah Renceng" id="qty-renceng" disabled>
                                        <label for="qty-renceng">Qty Renceng</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-6">
                        <div class="form-group form-floating">
                            <input type="number" class="form-control" placeholder="Total Harga " id="total_harga" disabled>
                            <label for="total_harga">Total Harga</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group form-floating">
                            <input type="number" class="form-control" placeholder="Total Harga Harus dibayar" id="total_harga_harus_dibayar" disabled>
                            <label for="total_harga_harus_dibayar">Total harga yang harus dibayar</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group form-floating">
                            <input type="number" class="form-control" placeholder="Dibayar" id="dibayar">
                            <label for="dibayar">Dibayar</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-floating">
                            <input type="number" class="form-control" placeholder="Sisa" id="sisa" readonly>
                            <label for="sisa">Sisa</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- main page content ends -->