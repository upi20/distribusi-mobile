const global_paket_harga = new Map();
$(function () {

	list_produk()
	data_warung()



	// qty change
	$('#qty-karton').on('change', function () {
		const now = ($(this).val());
		if (now < 0) {
			$(this).val(0);
		}
		refreshTotalHarga();
	});

	$('#qty-renceng').on('change', function () {
		const now = ($(this).val());
		if (now < 0) {
			$(this).val(0);
		}
		refreshTotalHarga();
	});

	// qty list paket
	$('#list-paket-karton').on('change', function () {
		refreshHargaKarton();
		refreshTotalHarga();
	});

	$('#list-paket-renceng').on('change', function () {
		refreshHargaRenceng();
		refreshTotalHarga();
	});

	// dibayar
	$('#dibayar').on('change', function () {
		refreshTotalHarga();
	});

	$('#jenis').on('change', function () {
		refreshTotalHarga(false);
	});

	$('#list-produk').on('change', function () {
		list_paket()
	});

	// for menu penjualan
	function data_warung() {
		$.ajax({
			method: 'get',
			url: url + 'sales/dashboard/warung_detail',
			data: {
				key: value_key,
				id: getUrlParameter('id_warung')
			}
		}).done((data) => {
			$("#kode").val(data.data.kode)
			$("#pemilik").val(data.data.nama_pemilik)
			$("#alamat").val(data.data.alamat)
		}).fail(($xhr) => {
			const response = JSON.parse($xhr.responseText);
			setToast({
				fill: response.message,
				background: "bg-danger"
			})
		})
	}

	function list_produk() {
		$.ajax({
			method: 'get',
			url: url + 'sales/dashboard/list_produk',
			data: {
				key: value_key
			}
		}).done((data) => {
			$("#list-produk").empty()
			for (var i = data.data.length - 1; i >= 0; i--) {
				$("#list-produk").append('<option value="' + data.data[i].id + '">' + data.data[i].text + '</option>');
			}
			list_paket();
		}).fail(($xhr) => {
			const response = JSON.parse($xhr.responseText);
			setToast({
				fill: response.message,
				background: "bg-danger"
			})
		})
	}

	function list_paket() {
		$.ajax({
			method: 'get',
			url: url + 'sales/dashboard/list_paket',
			data: {
				key: value_key,
				id_produk: $("#list-produk").val()
			}
		}).done((data) => {
			global_paket_harga.clear();
			$("#list-paket-karton").empty();
			$("#list-paket-renceng").empty();
			if (data.length > 0) {
				// cek apakah ada satuan harga tidak jika tidak maka akan di disabled
				let karton = false;
				let renceng = false;
				data.data.forEach((e) => {
					if (e.jenis == 1) {
						karton = true;
						$("#list-paket-karton").append(`<option value="${e.id}">${e.text}</option>`);
					} else if (e.jenis == 2) {
						$("#list-paket-renceng").append(`<option value="${e.id}">${e.text}</option>`);
						renceng = true;
					}
					global_paket_harga.set(e.id, e);
					refreshHargaKarton();
					refreshHargaRenceng();
					refreshTotalHarga();
				})

				if (!karton) {
					$("#list-paket-karton").attr('disabled', '');
					$("#qty-karton").attr('disabled', '');
					$("#qty-renceng").focus();
				}

				if (!renceng) {
					$("#list-paket-renceng").attr('disabled', '');
					$("#qty-renceng").attr('disabled', '');
				}

				if (!(karton || renceng)) {
					$('#btn-kirim').attr('hidden', '');
					setToast({
						fill: "Maaf Tidak bisa melakukan penjualan karena produk tidak memiliki paket harga karton maupun renceng.",
						background: "bg-danger"
					})
				}
			}
		}).fail(($xhr) => {
			const response = JSON.parse($xhr.responseText);
			setToast({
				fill: response.message,
				background: "bg-danger"
			})
		})
	}
	// end menu penjualan

	$("#qty-karton").focus();
	$("#qty-karton").val('');
	$("#qty-renceng").val('');
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
	let id_stok_keluar = getUrlParameter('id_stok_keluar')
	let id_warung = getUrlParameter('id_warung')
	let id_produk = $("#list-produk").val()
	let id_satuan_harga_karton = $("#list-paket-karton").val()
	let id_satuan_harga_renceng = $("#list-paket-renceng").val()
	let qty_karton = Number($("#qty-karton").val())
	let qty_renceng = Number($("#qty-renceng").val())
	let harga_karton = $("#harga-karton").val()
	let harga_renceng = $("#harga-renceng").val()
	let total_harga = $("#total_harga").val()
	let dibayar = $("#dibayar").val()
	let sisa = $("#sisa").val()
	let status = $("#jenis").val()
	if (total_harga == dibayar) {
		status = 2;
		$("#jenis").val(2);
	}

	if (qty_karton < 1 && qty_renceng < 1) {
		setToast({
			fill: "Qty penjualan minimal 1",
			background: "bg-danger"
		})
		return;
	}

	$(element).attr('disabled', '');
	if ($(element).text() == 'Loading...') {
		return;
	}
	$(element).text('Loading...');

	$.ajax({
		method: 'post',
		url: url + 'sales/dashboard/beli',
		data: {
			key: value_key,
			id_stok_keluar: id_stok_keluar,
			qty_karton: qty_karton,
			qty_renceng: qty_renceng,
			id_produk: id_produk,
			id_satuan_harga_karton: id_satuan_harga_karton,
			id_satuan_harga_renceng: id_satuan_harga_renceng,
			harga_karton: harga_karton,
			harga_renceng: harga_renceng,
			total_harga: total_harga,
			dibayar: dibayar,
			sisa: sisa,
			status: status,
			id_warung: id_warung
		}
	}).done((data) => {
		setToast({
			fill: "Data berhasil disimpan",
			background: "bg-success"
		})
		setTimeout(() => {

			window.location = base_url + 'home'
		}, 300);
	}).fail(($xhr) => {
		const response = JSON.parse($xhr.responseText);
		setToast({
			fill: response.message,
			background: "bg-danger"
		})
	})

}

function refreshTotalHarga(jenis = true) {
	const karton = Number(refreshHargaKarton());
	const renceng = Number(refreshHargaRenceng());
	const qty_karton = Number($("#qty-karton").val());
	const qty_renceng = Number($("#qty-renceng").val());
	const total = (karton * qty_karton) + (renceng * qty_renceng);
	const dibayar = $("#dibayar");
	$("#total_harga").val(total);
	if ($("#jenis").val() == 2) {
		dibayar.val(total);
		$("#sisa").val(0);
	} else {
		if (dibayar.val() < 0) {
			dibayar.val(0);
			$("#sisa").val(total);
			return total;
		}
		const dibayar_val = Number(dibayar.val()) > total ? total : Number(dibayar.val());
		const total_sisa = total - dibayar_val;
		$("#sisa").val(total_sisa);
		if (total_sisa == 0 && jenis) {
			$("#jenis").val(2);
			dibayar.val(dibayar_val);
		}
		if (!jenis) {
			dibayar.val(0);
			$("#sisa").val(total);
		}
	}
	return total;
}

function refreshHargaKarton() {
	const id = $('#list-paket-karton').val();
	const paket = global_paket_harga.get(id);
	if (paket) {
		$("#harga-karton").val(paket.harga);
		return paket.harga;
	}
	return 0;
}

function refreshHargaRenceng() {
	const id = $('#list-paket-renceng').val();
	const paket = global_paket_harga.get(id);
	if (paket) {
		$("#harga-renceng").val(paket.harga);
		return paket.harga;
	}
	return 0;
}