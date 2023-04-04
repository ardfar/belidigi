// Initialize the select2 form after all script were loaded 
$(document).ready(function () {
    $("#metodeBayar").select2();
    $("#lisensiDigital").select2();
});

// Add the confirmation dialog when user want to create the transaction 
$("#konfirmasi_data").click(function (a) {
    a.preventDefault();
    Swal.fire({
        title: "Apakah Data Yang Diisi Sudah Sesuai?",
        text: "Harap periksa kembali data yang sudah diisi",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonText: "Sudah, Lanjutkan",
        cancelButtonText: "Batal, Cek Kembali",
        buttons: !0,
        dangerMode: !0,
    }).then((a) => {
        // submit the form if user confirmed the action 
        a.isConfirmed && $("#lisensi_form").submit();
    });
});
