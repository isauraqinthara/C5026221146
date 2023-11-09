<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Responsive Web</title>

    <script src="operasi.js"></script>
</head>

<script>
    function showalert(){
        alert("Selamat! Anda mendapatkan 100 juta!");
    }
    function changeText() {
        // var tulisanLama = document.getElementById("");
        var span = document.getElementById("output");
        var textBox = document.getElementById("textbox");
        textBox.style.color = "red"; // mengubah warna font dari text box menjadi merah
        span.innerHTML = textBox.value;
        //innerHTML = mengubah text secara runtime
        //.value = membaca isi komponen form
        console.log("Horee sudah di sini");
        console.log("isinya text box adalah" + textBox.value);
    }
</script>

<body>
    <div class="container">
        <center><button class="btn btn-primary" onclick="showalert();">Klik di sini</button></center>
        <br>
        <button onclick="changeText();" class="btn btn-success">Click me!</button>
        <span id="output">replace me</span><br>
        <input id="textbox" type="text" class="form-control"/>
        <br>
        <div class="form-group">
            <label for="bil1">Bilangan 1</label>
            <input type="number" id="bil1" placeholder="Masukkan Bilangan Pertama" class="form-control">
        </div>
        <div class="form-group">
            <label for="bil2">Bilangan 2</label>
            <input type="number" id="bil2" placeholder="Masukkan Bilangan Kedua" class="form-control">
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-primary" onclick="tambah();">Tambah</button>
            <button type="button" class="btn btn-primary" onclick="kurang();">Kurang</button>
            <button type="button" class="btn btn-primary" onclick="kali();">Perkalian</button>
          </div>
          <h3>Hasil Operasi: <div id="hasil"></div></h3>
    </div>
</body>

</html>
