$(function () {
    profil()
    // for menu profile
    function profil() {
        $.ajax({
            method: 'get',
            url: url + 'profile',
            data: {
                key: value_key
            }
        }).done((datas) => {
            const data = datas.data;
            $("#profile-image").attr('src', `${url}../files/profile/${data.profile.foto}`)
            $("#nprofile-image").val(data.profile.nama)
            $("#nama-lengkap").val(data.profile.nama)
            $("#profile-name").val(data.profile.nama)
            // $("#jenis-kelamin").val(data.profile.jenis_kelamin)
            $("#tanggal-lahir").val(data.profile.tanggal_lahir)
            $("#nomor-hp").val(data.profile.no_hp)
            $("#email").val(data.profile.email)

            $("#warung-total").text(data.warung.warung)
            $("#warung-karton").text(data.warung.karton)
            $("#warung-renceng").text(data.warung.renceng)

            $("#warung-total").text(data.warung.total);
            $("#warung-karton").text(data.warung.karton);
            $("#warung-renceng").text(data.warung.renceng);

        }).fail(($xhr) => {

        })
    }
    // end menu profile
})

function editProfile() {
    let base_url = "<?=base_url()?>"
    let nama = $("#nama-lengkap").val()
    let tanggal_lahir = $("#tanggal-lahir").val()
    let jenis_kelamin = $("#jenis-kelamin").val()
    let no_hp = $("#nomor-hp").val()
    let foto = ''
    let email = $("#email").val()
    let password = $("#password").val()
    let password_2 = $("#password_2").val()
    // console.log($("#upload-file").val());

    if (password != '') {
        if (password_2 != password) {
            alert('Mohon maaf, periksa kembali passwordnya. terimakasih')
        } else {

        }
    } else {
        $.ajax({
            method: 'post',
            url: url + 'profile/update',
            data: {
                key: value_key,
                nama: nama,
                tanggal_lahir: tanggal_lahir,
                jenis_kelamin: jenis_kelamin,
                no_hp: no_hp,
                email: email,
                password: password,
            }
        }).done((data) => {
            if ($("#upload-file").val() != '') {
                const datas = new FormData(document.getElementById('form-file'));
                datas.append('key', value_key);
                $.ajax({
                    method: 'post',
                    url: url + 'profile/uploadProfile',
                    data: datas,
                    processData: false,
                    contentType: false,
                }).done((data) => {
                    alert('profile berhasil diubah')
                    window.location = base_url + 'profil';
                }).fail(($xhr) => {

                })
            } else {
                alert('profile berhasil diubah')
                window.location = base_url + 'profil';
            }
        }).fail(($xhr) => {
            const response = JSON.parse($xhr.responseText);
            alert(response.message);
        })
    }

}
