document.getElementById('jumlah').addEventListener('click', function(){
    var colom1 = parseFloat(document.getElementById('angka1').value);
    var colom2 = parseFloat(document.getElementById('angka2').value);

    var hasil = colom1 + colom2;
    alert("Hasil Penjumlahan = " + hasil);

});

document.getElementById('Reset').addEventListener('click', function(){
    document.getElementById('angka1').value = '';
    document.getElementById('angka2').value = '';

});