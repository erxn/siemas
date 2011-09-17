<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8;charset=utf-8" />
        <title>Puskesmas Bogor Tengah</title>

        <style type="text/css">
            
            body {
                font: 13px/1.5 "Segoe UI", "Arial", sans-serif;
                color: #444444;
                background-image: url(images/download.jpg)
            }

            .kotak {
                width: 100px;
                height: 80px;
                padding: 10px;
                display: inline-block;
                margin: 5px;
                -moz-border-radius: 6px;
                -moz-box-shadow: 1px 3px 10px #444444;
                text-decoration: none;
                background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE);
                color: blue;
                border: 1px solid #CCCCCC;
            }
            .kotak-disabled {
                width: 100px;
                height: 80px;
                padding: 10px;
                display: inline-block;
                margin: 5px;
                -moz-border-radius: 6px;
                -moz-box-shadow: 1px 3px 10px #444444;
                text-decoration: none;
                background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE);
                color: gray;
                cursor: default;
                border: 1px solid #CCCCCC;
                opacity: 0.8;
            }
            .kotak img, .kotak-disabled img {
                width: 50px;
                height: 50px;
            }
            .kotak:hover {
                background: -moz-linear-gradient(top, #e3effc, #b3e4fc);
                -moz-box-shadow: 0px 0px 10px #00FFFF;
                border: 1px solid #ffffff;
            }
            .kontainer {
                -moz-box-shadow: 1px 3px 10px rgba(0,0,0,0.4);
                width: 600px;
                height: auto;
                padding: 30px 2px;
                text-align: center;
                margin: 0 auto;
                background-color: rgba(0,0,0,0.5);
                border: 1px solid rgba(0,0,0,0.3);
                border-top: none;
                border-bottom: none;
            }
            .header {
                -moz-box-shadow: 1px 3px 10px rgba(0,0,0,0.4);
                width: 600px;
                height: auto;
                padding: 10px 2px;
                text-align: center;
                margin: 0 auto;
                margin-top: 30px;
                background-color: rgba(0,0,0,0.7);
                -moz-border-radius: 10px 10px 0px 0px;
                color: #FFFFFF;
                border: 1px solid rgba(0,0,0,0.3);
                border-bottom: none;
            }
            .footer {
                -moz-box-shadow: 1px 3px 10px rgba(0,0,0,0.4);
                width: 600px;
                height: auto;
                padding: 2px 2px;
                text-align: center;
                margin: 0 auto;
                background-color: rgba(245,245,245,0.8);
                -moz-border-radius: 0px 0px 6px 6px;
                border: 1px solid rgba(0,0,0,0.6);
                border-top: none;
            }
        </style>
    </head>
    <body>

        <div class="header">
            <h2>Sistem Informasi
                Puskesmas Bogor Tengah
            </h2>
            <p>
                Jl. Telepon No 1, Kelurahan Pabaton, Kecamatan Bogor Tengah, Bogor
            </p>
        </div>
        <div class="kontainer">
            <a href="loket" class="kotak"><img src="images/loket.png" border="0"/><br/>Loket</a>
            <a href="umum" class="kotak"><img src="images/umum.png" border="0"/><br/>Poli Umum</a>
            <a href="poli/index.php" class="kotak"><img src="images/gigi.png" border="0"/><br/>Poli Gigi</a>
            <a href="apotek" class="kotak"><img src="images/apotek.png" border="0"/><br/>Apotek</a>

            <a href="antrian/index.php/lab" class="kotak"><img src="images/lab.png" border="0"/><br/>Laboratorium</a>
            <a href="#" class="kotak-disabled" style="visibility: hidden"><img src="images/lab.png" border="0"/><br/>&nbsp;</a>
            <a href="#" class="kotak-disabled" style="visibility: hidden"><img src="images/lab.png" border="0"/><br/>&nbsp;</a>
            <a href="antrian/index.php/radiologi" class="kotak"><img src="images/radiologi.jpg" border="0"/><br/>Radiologi</a>

            <a href="antrian/index.php/kia" class="kotak"><img src="images/kia.png" border="0"/><br/>Poli KIA</a>
            <a href="antrian/index.php/sp_anak" class="kotak"><img src="images/sp_anak.png" border="0"/><br/>Sp. Anak</a>
            <a href="antrian/index.php/sp_dalam" class="kotak"><img src="images/sp_dalam.png" border="0"/><br/>Sp. Dalam</a>
            <a href="simpeg" class="kotak"><img src="images/pegawai.png" border="0"/><br/>Kepegawaian</a>
        </div>
        <div class="footer">
            <img src="loket/Template_files/logo0000.gif" style="height: 50px; float: left; margin: 6px 15px 0px 40px" alt=""/>
            <p style="text-align: left; float: left;">
                <strong>Kantor Komunikasi dan Informatika Kota Bogor</strong><br/>
                <small>Jl. Ir. H. Juanda No. 10 Kota Bogor</small>
            </p>
            <div style="clear: both"></div>
        </div>

    </body>
</html>