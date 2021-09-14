<div class="main-container container">
    <!-- Appreaciation banner with chart -->
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h6>Stok Dibawa: <span id="stok-dibawa-karton"></span> <span id="stok-dibawa-renceng"></span></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <p style="font-size: 14px;">Terjual<br><small class="text-muted" id="terjual-karton"></small> <small class="text-muted" id="terjual-renceng"></small>  </p>
                        </div>
                        <div class="col-auto">
                            <p style="font-size: 14px;">Sisa<br><small class="text-muted" id="sisa-karton"></small> <small class="text-muted" id="sisa-renceng"></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4 h-190 position-relative bg-dark text-white">
        <div class="position-absolute start-0 top-0 coverimg h-100 w-100 opacity-5" style="background-image: url(&quot;assets/img/banner1.jpg&quot;);">
            <img src="assets/img/banner1.jpg" alt="" style="display: none;">
        </div>
        <div class="col-12 col-md-6 col-lg-4 mx-auto align-self-center">
            <h4 class="text-center mb-2">Outlet </h4>
            <p class="text-center text-muted small">Semangat dan Berikan Yang Terbaik.</p>
            <div class="form-group search-header">
                <input class="form-control border-0" id="value-cari" placeholder="Cari berdasarkan nama, alamat atau kode warung" style="font-size: 0.8rem;">
                <button type="button" class="btn btn-link tooltip-btn" onclick="cari_dashboard_warung()">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="row mb-4" id="list-warung">
    </div>
</div>

