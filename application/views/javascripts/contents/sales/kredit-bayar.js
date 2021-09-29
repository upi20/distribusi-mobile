let global_dibayar = 0;
let global_total_harga = 0;
let global_total_harga_harus_dibayar = 0;
$(function () {
	data_detail()
	$('#dibayar').on('change', function () {
		let dibayar = $("#dibayar").val()
		let total_harga = $("#total_harga_harus_dibayar").val()
		let sisa = Number(total_harga) - Number(dibayar)
		if (sisa < 0) {
			sisa = 0;
			$("#dibayar").val(global_total_harga_harus_dibayar);
		}

		if (sisa > global_total_harga_harus_dibayar) {
			sisa = global_total_harga_harus_dibayar;
			$("#dibayar").val(0);
		}

		$("#sisa").val(sisa);
	});


	// for menu penjualan
	function data_detail() {
		$.ajax({
			method: 'get',
			url: url + 'sales/kredit',
			data: {
				key: value_key,
				id: getUrlParameter('id_penjualan')
			}
		}).done((datas) => {
			const data = datas.data;
			$("#Kode").val(data.kode)
			$("#warung").val(data.nama)
			$("#alamat").val(data.alamat)
			$("#produk").val(data.nama_produk)
			$("#qty-renceng").val(data.jumlah_renceng)
			$("#qty-karton").val(data.jumlah_karton)
			$("#list-paket-karton").val(data.nama_karton)
			$("#list-paket-renceng").val(data.nama_renceng)
			$("#harga-karton").val(data.harga_karton)
			$("#harga-renceng").val(data.harga_renceng)
			$("#total_harga").val(data.total_harga)
			$("#sisa").val(data.sisa)
			$("#dibayar").val('')
			global_dibayar = data.dibayar;
			global_total_harga = data.total_harga;
			global_total_harga_harus_dibayar = data.dibayar == '0' ? data.total_harga : data.sisa;
			$("#total_harga_harus_dibayar").val(global_total_harga_harus_dibayar);
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

function simpanPenjualan(element) {
	$(element).attr('disabled', '');
	if ($(element).text() == 'Loading...') {
		return;
	}
	$(element).text('Loading...');

	$.ajax({
		method: 'post',
		url: url + 'sales/kredit/bayar',
		data: {
			id_penjualan: getUrlParameter('id_penjualan'),
			total_harga: global_total_harga,
			dibayar: $("#dibayar").val(),
			key: value_key
		}
	}).done((data) => {
		alert('Pembayaran berhasil');
		window.location = base_url + 'kredit';
	}).fail(($xhr) => {

	})

}