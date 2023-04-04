$(document).ready(function(){
    $('#platform').select2();
    $('.bankSelector').select2();
    accountChanger()
});

function accountValueChanger(label,type,placeholder,helper){
    $('#labelAkun').html(label);
    $('#username').attr('type',type);
    $('#username').attr('placeholder',placeholder);
    $('#helperAkun').html(helper);
}

function accountChanger(){
    if ($('#platform').val() == 'Whatsapp'){
        accountValueChanger('Nomor Whatsapp*','number','contoh: 089531503505','Harap masukan nomor telepon kamu yang terhubung dengan whatsapp')
    } else if ($('#platform').val() == 'Email'){
        accountValueChanger('Alamat Email*','email','Contoh: aradenta@gmail.com','harap masukan email kamu yang sesuai')
    } else {
        accountValueChanger('Akun Instagram*','text','Contoh: aradenta_fareast09','Harap masukan username Instagram')
    }
}
$('#platform').change(function(){
    accountChanger()
})
$("#konfirmasi_data").click(function (e) {
    e.preventDefault();
        Swal.fire({
            title: "Apakah Data Yang Diisi Sudah Sesuai?",
            text: "Ketidaksesuaian data dengan bukti transaksi terlampir akan mengakibatkan permintaan refund ditolak.",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Sudah, Lanjutkan",
            cancelButtonText: "Batal, Cek Kembali",
            buttons: !0,
            dangerMode: !0,
        }).then((e) => {
            e.isConfirmed && $("#data_form").submit();
        });
    })