$(function () {
    kredit_warung()
    // for menu kredit
    function kredit_warung(datas = { cari: null, date_start: null, date_end: null, status: null }) {
        $("#list-warung").html('<span class="small" style="text-align:center">Loading..</span>');
        $.ajax({
            method: 'get',
            url: url + 'sales/penjualan',
            data: {
                key: value_key,
                ...datas
            }
        }).done((data) => {
            $("#list-warung").empty();
            data.data.forEach(e => {
                let dibayar = `<span style="font-weight:bold">${e.nama_produk} <span class="text-primary">Rp. ${format_rupiah(e.total_harga, false)}</span></span>`;
                if (e.status == 1) {
                    dibayar = `<span style="font-weight:bold">${e.nama_produk} <br>
                    <span class="text-primary">Rp. ${format_rupiah(e.total_harga, false)}</span> |
                    <span class="text-success">Rp. ${format_rupiah(e.dibayar, false)}</span> |
                    <span class="text-danger">Rp. ${format_rupiah(e.sisa, false)}</span>
                    </span>`;
                }
                $("#list-warung").append(`
                    <div class="col-lg-6 col-xl-4 col-sm-12 mb-3">
                        <div class="card shadow-sm">
                            <a href="${base_url}riwayat/detail?id_penjualan=${e.id}" class="card-body">
                                <div class="row gx-3">
                                    <div class="col align-self-center">
                                    <h6>${e.nama}</h6>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <p class="small" style="text-align:right">
                                            ${e.tanggal}
                                        </p>
                                    </div>
                                </div>
                                <hr class="my-1">
                                <div class="row gx-3">
                                    <div class="col align-self-center">
                                        <p class="small mb-0">
                                            <span>${e.alamat}</span>
                                        </p>
                                        <p class="small">
                                            ${dibayar}
                                        </p>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <i class="text-muted bi bi-chevron-right"></i>  Detail
                                        <p class="small" class="mt-2" style="text-align:right">
                                            <span style="font-weight:bold" class="text-${e.status == 1 ? 'danger' : 'success'}">${e.status_str}</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                `);
            });

        }).fail(($xhr) => {
            if ($xhr.status == 404) {
                $("#list-warung").html('<span class="small text-waring" style="text-align:center">Pencarian Tidak Ditemukan</span>');
            } else {
                $("#list-warung").html('<span class="small text-danger" style="text-align:center">Server Error</span>');
            }
        })
    }

    $("#form-search").submit((ev) => {
        ev.preventDefault();
        kredit_warung({
            cari: $('#keyword').val(),
            status: $('#status').val(),
            date_start: $('#date-start').val(),
            date_end: $('#date-end').val(),
        });
    });
})