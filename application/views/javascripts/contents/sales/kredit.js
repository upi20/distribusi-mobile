$(function () {
    kredit_warung()
    // for menu kredit
    function kredit_warung() {
        $.ajax({
            method: 'get',
            url: url + 'sales/kredit',
            data: {
                key: value_key
            }
        }).done((data) => {
            data.data.forEach(e => {
                $("#list-warung").append(`
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm mb-3">
                        <a href="${base_url}kredit/bayar?id_stok_keluar=${e.id_stok_keluar}&id_penjualan=${e.id}" class="card-body">
                            <div class="row gx-3">
                                <div class="col align-self-center">
                                    <h6>${e.nama}</h6>
                                    <p class="small mb-0">
                                        <span>${e.alamat}</span>
                                    </p>
                                    <p class="small">
                                        <span style="font-weight:bold">${e.nama_produk} Rp. ${format_rupiah(e.sisa, false)}</span>
                                    </p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <i class="text-muted bi bi-chevron-right"></i>  Bayar
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                `);
            });
        }).fail(($xhr) => {

        })
    }
    // end menu kredit
})

function cari_kredit_warung() {
    $("#list-warung").empty()
    $.ajax({
        method: 'get',
        url: url + 'sales/kredit',
        data: {
            key: value_key,
            cari: $("#value-cari").val()
        }
    }).done((data) => {
        data.data.forEach(e => {
            $("#list-warung").append(`
                    <div class="card shadow-sm mb-3">
                        <a href="${base_url}kredit/bayar?id_stok_keluar=${e.id_stok_keluar}&id_penjualan=${e.id}" class="card-body">
                            <div class="row gx-3">
                                <div class="col align-self-center">
                                    <h6>${e.nama}</h6>
                                    <p class="small mb-0">
                                        <span>${e.alamat}</span>
                                    </p>
                                    <p class="small">
                                        <span style="font-weight:bold">${e.nama_produk} Rp. ${format_rupiah(e.sisa, false)}</span>
                                    </p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <i class="text-muted bi bi-chevron-right"></i>  Bayar
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            `);
        });

    }).fail(($xhr) => {
        const response = JSON.parse($xhr.responseText);

    })
}