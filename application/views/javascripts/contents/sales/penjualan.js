$(function () {

	list_produk()
    
    $('#list-paket').on('change', function() {
        $.ajax({
            method: 'get',
            url: url+'sales/dashboard/list_paket',
            data: {
                key: value_key,
                id: $(this).val()
            }
        }).done((data) => { 
            let qty = $("#qty").val()
            let harga_default = 0 
            harga_default = data.data[0].harga
            let total_harga = parseInt(qty)*parseInt(harga_default)
            $("#harga").val(harga_default)
            $("#total_harga").val(total_harga)
        }).fail(($xhr) => {

        })
    });

    $('#qty').on('change', function() {
        let qty = $("#qty").val()
        let harga = $("#harga").val()
        let total_harga = parseInt(qty)*parseInt(harga)
        $("#total_harga").val(total_harga)
    });

    $('#dibayar').on('change', function() {
        let dibayar = $("#dibayar").val()
        let total_harga = $("#total_harga").val()
        let sisa = parseInt(total_harga)-parseInt(dibayar)
        $("#sisa").val(sisa)
    });

    $('#list-produk').on('change', function() {
        list_paket()
    });

	// for menu penjualan
	function list_produk(){
	    $.ajax({
	        method: 'get',
	        url: url+'sales/dashboard/list_produk',
	        data: {
	            key: value_key
	        }
	    }).done((data) => { 
	        $("#list-produk").empty()
	        $("#list-produk").append('<option value="">--Pilih Produk--</option>');
	        for (var i = data.data.length - 1; i >= 0; i--) {
	            $("#list-produk").append('<option value="'+data.data[i].id+'">'+data.data[i].text+'</option>');
	        }       
	        
	    }).fail(($xhr) => {

	    })
	}        
	function list_paket(){
	    $.ajax({
	        method: 'get',
	        url: url+'sales/dashboard/list_paket',
	        data: {
	            key: value_key,
	            id_produk: $("#list-produk").val()
	        }
	    }).done((data) => { 
	        $("#list-paket").empty()
	        $("#list-paket").append('<option value="">--Pilih Paket Harga--</option>');
	        for (var i = data.data.length - 1; i >= 0; i--) {
	            $("#list-paket").append('<option value="'+data.data[i].id+'">'+data.data[i].text+'</option>');
	        }       
	        
	    }).fail(($xhr) => {

	    })
	}
	// end menu penjualan
})

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

function simpanPenjualan(){
	let id_stok_keluar = getUrlParameter('id_stok_keluar')
	let id_warung = getUrlParameter('id_warung')
	let id_produk = $("#list-produk").val()
	let id_satuan_harga = $("#list-paket").val()
	let qty = $("#qty").val()
	let harga = $("#harga").val()
	let total_harga = $("#total_harga").val()
	let dibayar = $("#dibayar").val()
	let sisa = $("#sisa").val()
	let status = $("#jenis").val()
	let key = value_key

	$.ajax({
        method: 'post',
        url: url+'sales/dashboard/beli',
        data: {
        	id_stok_keluar: id_stok_keluar,
        	id_warung: id_warung,
        	id_produk: id_produk,
        	id_satuan_harga: id_satuan_harga,
        	qty: qty,
        	harga: harga,
        	total_harga: total_harga,
        	dibayar: dibayar,
        	sisa: sisa,
        	status: status,
            key: value_key
        }
    }).done((data) => { 
    	console.log(data)
    }).fail(($xhr) => {

    })

}