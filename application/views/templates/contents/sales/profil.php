<!-- main page content -->
<div class="main-container container pt-0">
    <!-- profile picture -->
    <div class="row" style="margin-top: -7px;">
        <div class="col-12 text-center bg-primary text-white position-relative py-4">
            <div class="coverimg position-absolute top-0 start-0 h-100 w-100 opacity-4">
                <img src="<?= base_url() ?>assets/bg.jpg" alt="">
            </div>
            <figure class="avatar avatar-160 rounded-circle mb-4 mx-auto">
                <img src="" alt="Profile image" id="profile-image">
            </figure>
            <div class="clearfix"></div>
            <h5 class="position-relative" id="profile-name"></h5>
        </div>
    </div>

    <!-- followers and connections -->
    <div class="row mb-4 text-center bg-whiter py-4">
        <div class="" style="margin-bottom: 10px; margin-top: -10px;">
            <p class="text-muted small">Periode: <b><?= date("01 M Y") ?></b> - <b><?= date("d M Y") ?></b></p>
        </div>
        <div class="col">
            <h6 class="mb-0" id="warung-total"></h6>
            <p class="text-muted small">Warung</p>
        </div>
        <div class="col">
            <h6 class="mb-0" id="warung-karton"></h6>
            <p class="text-muted small">Karton</p>
        </div>
        <div class="col">
            <h6 class="mb-0" id="warung-renceng"></h6>
            <p class="text-muted small">Renceng</p>
        </div>
    </div>

    <!-- experience -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="my-1">Biodata Diri</h6>
                        <a onclick="editProfile()" target="_self" class="btn btn-xs btn-default" style="background-color: rgb(37 75 239 / 95%);"><i class="bi bi-save-fill"></i> Simpan</a>
                    </div>
                </div>
                <div class="form-group form-floating">
                    <input type="text" class="form-control" placeholder="Nama Lengkap" value="Soni Setiawan" id="nama-lengkap">
                    <label for="nama-lengkap">Nama Lengkap</label>
                </div>
                <div class="form-floating">
                    <select class="form-control" id="jenis-kelamin">
                        <option selected value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <label for="jk">Jenis Kelamin</label>
                </div>
                <div class="form-group form-floating">
                    <input type="date" class="form-control" placeholder="Tanggal Lahir" value="16/10/1997" id="tanggal-lahir">
                    <label for="tanggal-lahir">Tanggal Lahir</label>
                </div>
                <div class="form-group form-floating">
                    <input type="text" class="form-control" value="" placeholder="Nomor HP" id="nomor-hp">
                    <label for="emailphone">Nomor HP</label>
                </div>
                <hr>
                <form action="" id="form-file" enctype="multipart/form-data">
                    <div class="form-group form-floating">
                        <input type="file" name="file" class="form-control" value="" id="upload-file">
                        <label for="tanggal-lahir">Upload Profile</label>
                    </div>
                </form>
                <hr>
                <div class="form-group form-floating is-valid">
                    <input type="text" class="form-control" value="soni.bobotoh@gmail.com" placeholder="Email" id="email">
                    <label for="email">Email</label>
                </div>

                <div class="form-floating is-valid">
                    <input type="password" class="form-control" value="" placeholder="Password" id="password">
                    <label for="password">Password (isi jika ingin diubah)</label>
                </div>
                <div class="form-floating is-invalid">
                    <input type="password" class="form-control" placeholder="Confirm Password" id="password_2">
                    <label for="confirmpassword">Confirm Password</label>
                    <button type="button" class="btn btn-link text-danger tooltip-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Enter valid Password" id="passworderror">
                        <i class="bi bi-info-circle"></i>
                    </button>
                </div>
            </div>
            <a onclick="logout()" target="_self" style="float: right;margin-bottom: 20px; background-color: #fb737c !important;" class="btn btn-xs btn-default"><i class="bi bi-door-closed-fill"></i> Keluar Aplikasi</a>
        </div>
    </div>


</div>
<!-- main page content ends -->