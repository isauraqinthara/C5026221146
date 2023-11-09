<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Responsive Web</title>

    <script src="operasi.js"></script>

<script>
function validateForm() {
  //let x = document.forms["myForm"]["fname"].value;
  var x = document.getElementById("fname");
  var nrp = document.getElementById("nrp");
  // yang dicek cukup yang invalid
  // lakukan per jenis validasi, supaya user ragy salahnya apa
  if (x.value == "") { //isian kosong berarti text box tidak diisi apa-apa
    alert("Nama harus diisi");
    x.focus();
    return false; //function ini ada return valuenya, bukan void
    //stop, ga jadi dikirim ke server
  }

  if (nrp.value == "") { //isian kosong berarti text box tidak diisi apa-apa
    alert("NRP harus diisi");
    nrp.focus();
    return false; //function ini ada return valuenya, bukan void
    //stop, ga jadi dikirim ke server
  }

  if (isNaN(nrp.value) == true) { //NaN = Not a Number
    alert("NRP harus berupa angka.");
    nrp.value = "";
    nrp.focus();
    return false; //function ini ada return value, bukan void
  }

  //console.log(nrp.value.length);
  if (nrp.value.length != 10) { //NaN = Not a Number
    alert("Jumlah digit harus 10," + "Anda memasukkan " + nrp.value.length + " digit!");
    nrp.focus();
    return false; //function ini ada return value, bukan void
  }

  if (nrp.value.substring(0,4) != 5026) { //NaN = Not a Number
    alert("Pendaftaran Asisten Dosen Matkul PWEB harus mahasiswa Sistem Informasi");
    nrp.focus();
    return false; //function ini ada return value, bukan void
  }

  if (nrp.value.substring(4,6) != 22 && nrp.value.substring(4,6) != 21) { //NaN = Not a Number
    alert("Pendaftaran Asisten Dosen Matkul PWEB harus mahasiswa Sistem Informasi angkatan 21 atau 22");
    nrp.focus();
    return false; //function ini ada return value, bukan void
  }

  return true; //ga ngecek karena default function adalah true. pencegahan nilai ke false berfungsi supaya tidak jadi dikirimkan
}
</script>
</head>
<body>

<h2>Pendaftaran Asisten Dosen PWEB</h2>

<form name="myForm" action="https://www.google.com/" onsubmit="return validateForm()" method="post">
  <label for="fname">Name:</label>
  <input type="text" id="fname" name="fname" class="form-control"> <!--required itu harus diisi-->
  <label for="nrp">NRP:</label>
  <input type="text" id="nrp" name="nrp" class="form-control">

  <input type="submit" value="Submit" class="btn btn-primary">
  <input type="reset" value="Kosongi" class="btn btn-warning">
</form>
<!--onsubmit tidak akan ngefek kalo input typenya submit. onclick ga cocok-->
</body>
</html>
