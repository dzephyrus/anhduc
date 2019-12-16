
function tinhtien(SoLuong, Dongia, TongTien) {
    var table = document.getElementById("bang");
    var thanhtien = document.getElementById(TongTien);
    var Tong = 0;
    thanhtien.innerHTML = Number(SoLuong.value) * Number(Dongia);
    for (var i = 1; i < table.rows.length - 1; i++) {
        if (table.rows[i].cells[4].innerHTML != "") {
            Tong = Tong + parseInt(table.rows[i].cells[4].innerHTML);
        }
    }
    document.getElementById("tong").innerHTML = Tong;
}// JavaScript Document