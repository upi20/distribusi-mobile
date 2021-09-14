$(function () {
    profil()
    // for menu profile
    function profil(){
        $.ajax({
            method: 'get',
            url: url+'profile',
            data: {
                key: value_key
            }
        }).done((data) => {
            console.log(data)                
            $("#nama-lengkap").val(data.data.profile.nama)
            // $("#jenis-kelamin").val(data.data.profile.jenis_kelamin)
            $("#tanggal-lahir").val(data.data.profile.tanggal_lahir)
            $("#nomor-hp").val(data.data.profile.no_hp)
            $("#email").val(data.data.profile.email)
            
        }).fail(($xhr) => {

        })
    }
    // end menu profile
})

function editProfile(){
    let base_url = "<?=base_url()?>"
    let nama = $("#nama-lengkap").val()
    let tanggal_lahir = $("#tanggal-lahir").val()
    let jenis_kelamin = $("#jenis-kelamin").val()
    let no_hp = $("#nomor-hp").val()
    let foto = ''
    let email = $("#email").val()
    let password = $("#password").val()
    let password_2 = $("#password_2").val()
    if(password != ''){
        if(password_2 != password)
        {
            alert('Mohon maaf, periksa kembali passwordnya. terimakasih')            
        }else{

        }
    }else{
        $.ajax({
            method: 'post',
            url: url+'profile/update',
            data: {
                key: value_key,
                nama: nama,
                tanggal_lahir: tanggal_lahir,
                jenis_kelamin: jenis_kelamin,
                no_hp: no_hp,
                foto: '',
                email: email,
                password: password
            }
        }).done((data) => {
            alert('profile berhasil diubah')
            window.location = base_url+'profil';
        }).fail(($xhr) => {

        })    
    }
    
}   
