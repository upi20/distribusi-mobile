$(function () {
	data_detail()
	// for menu penjualan
	function data_detail() {
		$.ajax({
			method: 'get',
			url: url + 'sales/penjualan',
			data: {
				key: value_key,
				id: getUrlParameter('id_penjualan')
			}
		}).done((datas) => {
			const data = datas.data;

			$("#kode").val(data.kode);
			$("#pemilik").val(data.nama_pemilik)
			$("#warung").val(data.nama_warung)
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
			$("#status").text(data.status_str)
			$("#tanggal").text(data.tanggal)
			$("#status").addClass(`text-${data.status == 1 ? 'danger' : 'success'}`);
		}).fail(($xhr) => {
			const response = JSON.parse($xhr.responseText);
			setToast({
				fill: response.message,
				background: "bg-danger"
			})
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


function isUbah(datas) {
	const ubah = $(datas).data('isubah') == 1;
	const container_btn = $('.card-footer');
	const btn = $('#btn-ubah');
	if (ubah) {
		btn.data('isubah', 0);
		btn.addClass('btn-info');
		btn.removeClass('btn-danger');
		btn.text('Batal');
		container_btn.fadeIn();
	} else {
		btn.data('isubah', 1);
		container_btn.fadeOut();
		btn.addClass('btn-danger');
		btn.removeClass('btn-info');
		btn.text('Ubah');
	}
}

isUbah();