$(document).ready(function () {
    // initialize the select2 form 
    $("#ewallet").select2();
    $("#metodeBayar").select2();
    // Change the minimum limit of transaction 
    topupValChange();
});

// Change the minimum limit of transaction 
function topupValChange() {
    if ($("#ovo").is(":selected")) {
        $("#minTop").html("Minimal nominal Top Up Rp. 20.000");
        $("#nominalTopup").val("20000");
        $("#nominalTopup").attr("min", "20000");
    } else {
        $("#minTop").html("Minimal nominal Top Up Rp. 10.000");
        $("#nominalTopup").val("10000");
        $("#nominalTopup").attr("min", "10000");
    }
}

// Change the minimum limit of transaction if the ewallet was changed
$("#ewallet").change(function () {
    topupValChange();
});

//Fire the confirmation dialog with some validation 
$("#konfirmasi_data").click(function (n) {
    if (
        (1 == $("#ovo").is(":selected") && 2e4 <= $("#nominalTopup").val()) ||
        (($("#gopay").is(":selected") ||
            $("#dana").is(":selected") ||
            $("#linkaja").is(":selected")) &&
            1e4 <= $("#nominalTopup").val())
    ) {
        n.preventDefault();
        Swal.fire({
            title: "Apakah Data Yang Diisi Sudah Sesuai?",
            text: "Harap periksa kembali data yang sudah diisi",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Sudah, Lanjutkan",
            cancelButtonText: "Batal, Cek Kembali",
            buttons: !0,
            dangerMode: !0,
        }).then((n) => {
            n.isConfirmed && $("#topup_form").submit();
        });
    } else {
        textWarning = $("#ovo").is(":selected")
            ? "Minimal Top Up Rp. 20.000"
            : "Minimal Top Up Rp. 10.000";
        n.preventDefault();
        Swal.fire({
            title: "Perhatian!",
            text: textWarning,
            icon: "warning",
            showDenyButton: !0,
            showConfirmButton: !1,
            denyButtonText: "Kembali",
            buttons: !0,
            dangerMode: !0,
        });
    }
});
