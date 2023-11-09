<html>
    <head>
        <title>CSS</title>
        <link rel="stylesheet" href="mystyle.css">
        <style>
            body {
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                color: blueviolet;
            }
            p,div {
                text-align: center;
            }

            .salam {
                font-size: larger;
                text-align: right;
                font-weight: bold;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>
        <!-- Inline CSS, digunakan jika hanya 1 bagian di 1 halaman yang berbeda -->
        " Halo "
        <b style="
        color: red;
        text-decoration: underline;
        text-shadow: 2px 2px rgb(0, 0, 0)
        ">Apa</b>
        " Kabar? "
        <!-- Inpage CSS, digunakan jika yang berbeda hanya di 1 halaman -->
        <div class="garisbawah salam">Halo Apa Kabar?</div>
        <!-- External File, digunakan untuk global 1 situs -->
        <span class="sembunyi">Halo Apa Kabar?</span>
        <p>Halo Apa Kabar?</p>
    </body>
</html>
