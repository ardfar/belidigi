$("#cancelTrx").click(function (a) {
    a.preventDefault();
    Swal.fire({
        title: "Apakah Anda Yakin?",
        html: '<input id="sebabSwal" class="swal2-input" type="text" placeholder="Tuliskan sebab kamu membatalkan transaksi ini">',
        icon: "warning",
        showCancelButton: !0,
        confirmButtonText: "Iya, Batalkan",
        cancelButtonText: "Tidak",
        buttons: !0,
        dangerMode: !0,
    }).then((a) => {
        a.isConfirmed && $("#cancelRequest").submit();
    });
    $("#sebabSwal").change(function () {
        swalValue = $("#sebabSwal").val();
        $("#sebab").html(swalValue);
    });
});
