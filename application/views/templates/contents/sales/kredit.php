<div class="main-container container">
    <div class="row mb-4 h-190 position-relative bg-dark text-white" style="margin-top: -22px;">
        <div class="position-absolute start-0 top-0 coverimg h-100 w-100 opacity-5" style="background-image: url('<?=base_url()?>assets/img/banner1.jpg');">
            <img src="<?=base_url()?>assets/img/banner1.jpg" alt="" style="display: none;">
        </div>
        <div class="col-12 col-md-6 col-lg-4 mx-auto align-self-center">
            <h4 class="text-center mb-2">Outlet </h4>
            <p class="text-center text-muted small">Semangat dan Berikan Yang Terbaik.</p>
            <div class="form-group search-header">
                <input class="form-control border-0" id="value-cari" placeholder="Cari berdasarkan nama, alamat atau kode warung" style="font-size: 0.8rem;">
                <button type="button" class="btn btn-link tooltip-btn" onclick="cari_kredit_warung()">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="row mb-4" id="list-warung">
    </div>
</div>