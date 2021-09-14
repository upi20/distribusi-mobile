<!-- main page content -->
<div class="main-container container pt-0">
    <!-- profile picture -->
    <div class="row" style="margin-top: -5px;">
        <div class="col-12 text-center bg-primary text-white position-relative py-4">
            <div class="coverimg position-absolute top-0 start-0 h-100 w-100 opacity-4">
                <img src="<?=base_url()?>assets/mobile/img/soni-bg.png" alt="">
            </div>
            <figure class="avatar avatar-160 rounded-circle mb-4 mx-auto">
                <img src="<?=base_url()?>assets/mobile/img/soni.png" alt="">
            </figure>
            <div class="clearfix"></div>
            <h5 class="position-relative">Soni Setiawan</h5>
            <p class="text-muted">Bandung, Urang Sunda Asli</p>
        </div>
    </div>

    <!-- followers and connections -->
    <div class="row mb-4 text-center bg-whiter py-4">
        <div class="col">
            <h6 class="mb-0">+254</h6>
            <p class="text-muted small">Warung</p>
        </div>
        <div class="col">
            <h6 class="mb-0">+300</h6>
            <p class="text-muted small">Renceng</p>
        </div>
        <div class="col">
            <h6 class="mb-0">+18.300.000</h6>
            <p class="text-muted small">Bonus</p>
        </div>
    </div>

    <!-- experience -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                <h6 class="my-1">Biodata Diri</h6>
                            </td>
                            <td style="float: right; margin-top: -20px;">
                                <a onclick="editProfile()" target="_self" class="btn btn-xs btn-default mt-3" style="background-color: rgb(37 75 239 / 95%);"><i class="bi bi-save-fill"></i> Simpan</a>
                            </td>
                        </tr>
                    </table>
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
                    <button type="button" class="btn btn-link text-danger tooltip-btn" data-bs-toggle="tooltip"
                        data-bs-placement="left" title="Enter valid Password" id="passworderror">
                        <i class="bi bi-info-circle"></i>
                    </button>
                </div>
            </div>
            <a onclick="logout()" target="_self" style="float: right;margin-bottom: 20px; background-color: #fb737c !important;" class="btn btn-xs btn-default"><i class="bi bi-door-closed-fill"></i> Keluar Aplikasi</a>
        </div>
    </div>

    
</div>
<!-- main page content ends -->