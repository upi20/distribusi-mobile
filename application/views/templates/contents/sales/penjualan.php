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
                                <a onclick="simpanPenjualan()" target="_self" class="btn btn-xs btn-default mt-3" style="background-color: rgb(37 75 239 / 95%);"><i class="bi bi-save-fill"></i> Simpan</a>
                            </td>
                        </tr>
                    </table>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" placeholder="Kode" value="WR-001" id="kode">
                            <label for="pemilik">Kode</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" value="Soni Setiawan" id="pemilik">
                            <label for="pemilik">Pemilik</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-floating">
                            <textarea class="form-control" id="alamat" readonly="">Jl. Lebon Kopi</textarea>
                            <label for="alamat">Alamat</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group form-floating">
                            <select class="form-control" id="list-produk">
                            </select>
                            <label for="paket-harga">Produk</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group form-floating">
                            <select class="form-control" id="list-paket">
                            </select>
                            <label for="list-paket">Paket Harga</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group form-floating">
                            <input type="number" class="form-control" value="1" placeholder="Jumlah Renceng" id="qty">
                            <label for="qty">Qty</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group form-floating">
                            <select class="form-control" id="jenis">
                                <option selected value="2">Lunas</option>
                                <option value="1">Kredit</option>
                            </select>
                            <label for="jenis">Jenis</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group form-floating">
                            <input type="number" class="form-control" placeholder="Harga Renceng" id="harga">
                            <label for="harga">Harga (Renceng)</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group form-floating">
                            <input type="number" class="form-control" placeholder="Total Harga Renceng" id="total_harga">
                            <label for="total_harga">T.Harga (Renceng)</label>
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