$(function () {
    // for menu home
    dashboard_info()
    dashboard_warung()
    function dashboard_info(){
        $.ajax({
            method: 'get',
            url: url+'sales/dashboard',
            data: {
                key: value_key
            }
        }).done((data) => {
            $("#stok-dibawa-karton").text(data.data.stok_dibawa.karton+' Karton')
            $("#stok-dibawa-renceng").text(', '+data.data.stok_dibawa.renceng+' Renceng')

            $("#sisa-karton").text(''+data.data.sisa.karton+' Karton')
            $("#sisa-renceng").text(', '+data.data.sisa.renceng+' Renceng')

            $("#terjual-karton").text(''+data.data.terjual.karton+' Karton')
            $("#terjual-renceng").text(', '+data.data.terjual.renceng+' Renceng')
            
        }).fail(($xhr) => {

        })
    }

    function dashboard_warung(){
        let base_url = '<?php echo base_url();?>'

        $.ajax({
            method: 'get',
            url: url+'sales/dashboard/warung',
            data: {
                key: value_key
            }
        }).done((data) => {
            for (var i = data.data.length - 1; i >= 0; i--) {
                $("#list-warung").append(''+
                    '<div class="col-12 col-md-6 col-lg-4">'+
                        '<div class="card shadow-sm mb-3">'+
                            '<a href="'+base_url+'penjualan/index?id_stok_keluar='+data.data[i].id_stok_keluar+'&id_warung='+data.data[i].id+'" class="card-body">'+
                                '<div class="row gx-3">'+
                                    '<div class="col align-self-center">'+
                                        '<h6>'+data.data[i].nama+'</h6>'+
                                        '<p class="small">'+
                                            '<span>'+data.data[i].alamat+'</span>'+
                                        '</p>'+
                                    '</div>'+
                                    '<div class="col-auto align-self-center">'+
                                        '<i class="text-muted bi bi-chevron-right"></i>  Beli'+
                                    '</div>'+
                                '</div>'+
                            '</a>'+
                        '</div>'+
                    '</div>'+           
                '');
            }
            
        }).fail(($xhr) => {

        })
    }
    // end menu home
})
function cari_dashboard_warung(){
    let base_url = '<?php echo base_url();?>'
    $("#list-warung").empty()
    $.ajax({
        method: 'get',
        url: url+'sales/dashboard/warung',
        data: {
            key: value_key,
            cari: $("#value-cari").val()
        }
    }).done((data) => {
        for (var i = data.data.length - 1; i >= 0; i--) {
            $("#list-warung").append(''+
                '<div class="col-12 col-md-6 col-lg-4">'+
                    '<div class="card shadow-sm mb-3">'+
                            '<a href="'+base_url+'penjualan/index?id_stok_keluar='+data.data[i].id_stok_keluar+'&id_warung='+data.data[i].id+'" class="card-body">'+
                            '<div class="row gx-3">'+
                                '<div class="col align-self-center">'+
                                    '<h6>'+data.data[i].nama+'</h6>'+
                                    '<p class="small">'+
                                        '<span>'+data.data[i].alamat+'</span>'+
                                    '</p>'+
                                '</div>'+
                                '<div class="col-auto align-self-center">'+
                                    '<i class="text-muted bi bi-chevron-right"></i>  Beli'+
                                '</div>'+
                            '</div>'+
                        '</a>'+
                    '</div>'+
                '</div>'+           
            '');
        }
        
    }).fail(($xhr) => {

    })
}