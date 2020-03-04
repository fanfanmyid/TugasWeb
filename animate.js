var tombol = document.querySelector(".btn");
tombol.addEventListener("click", function (e) {
    alert("Terima Kasih data sedang diproses ^_^ ");

});


function getInputValue() {
    var d = new Date();
    var inputVal = document.getElementById("myInput").value;
    var inputVal1 = document.getElementById("nama").value;
    var inputVal2 = document.getElementById("ktp").value;
    // var inputVal6 = document.getElementById("tanggal").value;
    var inputVal3 = document.getElementById("alamat").value;
    var inputVal4 = document.getElementById("agama").value;
    var inputVal5 = document.getElementById("email").value;


    alert(inputVal);
    alert(inputVal1);
    alert(inputVal2);
    //  alert(inputVal6);
    alert(inputVal3);
    alert(inputVal4);
    alert(inputVal5);
    alert(d);
}