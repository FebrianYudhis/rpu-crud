var cari = document.getElementById('cari');
var isi = document.getElementById('bungkus');
cari.addEventListener('keyup', function () {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    isi.innerHTML = xhr.responseText;
  }
  xhr.open('GET', 'ajax/php/mapel.php?cari=' + cari.value, true);
  xhr.send();
})
