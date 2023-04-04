idTarget = '';
function authToView(target){
    idTarget = target;
    $("#idTerkait").val(idTarget);
    $('#confirmToView').trigger('click')
}

$('#confirmToView').click(function (a){
    a.preventDefault()
        Swal.fire({
            title: "Otorisasi",
            html: '<label>Masukkan nama yang terdaftar pada transaksi untuk melihat detail transaksi</label><input id="namaSwal" class="swal2-input" type="text" placeholder="Masukkan nama terkait" style="margin:0;width:100%;margin-top:10px">',
            icon: "warning",
            showDenyButton: !0,
            confirmButtonText: "Konfirmasi",
            denyButtonText: "Batal",
            buttons: !0,
            dangerMode: !0,
        }).then((a) => {
            a.isConfirmed && $("#authToView_form").submit();
        });
        $("#namaSwal").change(function () {
            swalValue = $("#namaSwal").val();
            $("#realName").val(swalValue);
        });
});