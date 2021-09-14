$(function () {
    kredit_warung()
    // for menu kredit
    function kredit_warung(){
        $.ajax({
            method: 'get',
            url: url+'sales/kredit',
            data: {
                key: value_key
            }
        }).done((data) => {
            for (var i = data.data.length - 1; i >= 0; i--) {
                $("#list-warung").append(''+
                    '<div class="col-12 col-md-6 col-lg-4">'+
                        '<div class="card shadow-sm mb-3">'+
                            '<a href="#" class="card-body">'+
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
    // end menu kredit
})

function cari_kredit_warung(){
    $("#list-warung").empty()
    $.ajax({
        method: 'get',
        url: url+'sales/kredit',
        data: {
            key: value_key,
            cari: $("#value-cari").val()
        }
    }).done((data) => {
        for (var i = data.data.length - 1; i >= 0; i--) {
            $("#list-warung").append(''+
                '<div class="col-12 col-md-6 col-lg-4">'+
                    '<div class="card shadow-sm mb-3">'+
                        '<a href="#" class="card-body">'+
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