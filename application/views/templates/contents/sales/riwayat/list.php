<div class="main-container container">
    <div class="row mb-4 h-190 position-relative bg-dark text-white pb-1 align-items-end pt-3" style="margin-top: -22px; height: 150px;">
        <div class="position-absolute start-0 top-0 coverimg h-100 w-100 opacity-5" style="background-image: url('<?= base_url() ?>assets/img/banner1.jpg');">
            <img src="<?= base_url() ?>assets/img/banner1.jpg" alt="" style="display: none;">
        </div>
        <div class="col-12 col-md-6 col-lg-4 mx-auto align-self-center mb-2 ">
            <h4 class="text-center mb-2">Riwayat Penjualan</h4>
            <p class="text-center text-muted small">Semangat dan Berikan Yang Terbaik.</p>
        </div>
    </div>
    <form id="form-search">
        <table style="border:0; width: 100%;">
            <tr>
                <td>
                    <div class="form-group">
                        <label for="date-start" class="small text-secondary:">Tanggal Dari</label>
                        <input type="date" id="date-start" class="from-control border-0 my-1" style=" width: 100%; font-size: 0.8rem; padding: 8px; border-radius: 0.25rem;" placeholder="Dari Tanggal" title="Dari Tanggal">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label for="date-end" class="small text-secondary:">Tanggal Sampai</label>
                        <input type="date" id="date-end" class="from-control border-0 my-1" style=" width: 100%; font-size: 0.8rem; padding: 8px; border-radius: 0.25rem;" placeholder="Sampai Tanggal" title="Sampai Tanggal">
                    </div>
                </td>
            </tr>
        </table>


        <div class="form-group">
            <label for="status" class="small text-secondary:">Status</label>
            <select name="status" id="status" class="from-control border-0 my-1" style=" width: 100%; font-size: 0.8rem; padding: 8px; border-radius: 0.25rem;" placeholder="Status" title="Status">
                <option value="">Pilih Status</option>
                <option value="2">Lunas</option>
                <option value="1">Kredit</option>
            </select>
        </div>
        <div class="form-group">
            <label for="keyword" class="small text-secondary:">Kata Kunci</label>
            <input type="text" id="keyword" class="from-control border-0 my-1" style=" width: 100%; font-size: 0.8rem; padding: 8px; border-radius: 0.25rem;" placeholder="Cari berdasarkan nama, alamat atau kode warung" title="Kata Kunci">
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-sm" style="width: 100%;">
            <i class="bi bi-search"></i> Cari
        </button>
    </form>
    <p class="small my-x">Keterangan: <span class="text-primary">Total Harga</span> | <span class="text-success">Dibayar</span> | <span class="text-danger">Sisa</span></p>

    <div class="row mb-4" id="list-warung">
    </div>
</div>