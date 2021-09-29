$(function () {

})

function simpanNewOutlet(){
	let nama_pemilik = $("#nama-pemilik").val()
	let nama_warung = $("#nama-warung").val()
	let alamat = $("#alamat").val()
	let no_hp = $("#no-hp").val()
	let patokan = $("#patokan").val()

	$.ajax({
        method: 'post',
        url: url+'sales/outlet/simpan',
        data: {
        	pemilik: nama_pemilik,
        	warung: nama_warung,
        	alamat: alamat,
        	no_hp: no_hp,
        	patokan: patokan,
            key: value_key
        }
    }).done((data) => { 
    	window.location = base_url+'home'
    }).fail(($xhr) => {

    })

}