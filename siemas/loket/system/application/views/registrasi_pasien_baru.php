<?php $this->load->view('header');?>
<!-- SUBNAV -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
        <div style="clear: both;"></div>
    </div>
</div>
<!-- END SUBNAV -->
<br/>
<div>
    <div class="grid_6" style="width: 52%">
        <div class="module">
            <h2><span>Kepala Keluarga (KK)</span></h2>
            <div class="module-body">
                <h5>CARI KK</h5>
                <table class="noborder" style="width: 52%">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td colspan="2"><input type="text" class="input-medium"/></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" class="input-medium"/></td>
                        <td><div align="right">
                                <input class="submit-green" type="submit" value="Cari" />
                            </div>
                        </td>
                    </tr>
                </table>
                <hr/>
                <br/>
                <h4 class="float-right">Total KK: 5 orang</h4>
                <div class="float-left">

                    <a class="tambah" href="index.php/kk/registrasi_kk">
                        <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah"/> KK Baru
                    </a>
                </div>
                <table id="myTable" class="tablesorter" style="width: 100%">
                    <thead>
                        <tr>
                            <th class="header" style="width: 1%;">No</th>
                            <th class="header" style="width: 8%;">Nama KK</th>
                            <th class="header" style="width: 13%;">Alamat</th>
                            <th class="header" style="width: 10%;">Anggota KK</th>
                            <th class="header" style="width: 5%;">Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">1</td>
                            <td><a class="popup" href="index.php/kk/profil_kk">Dimas Putera</a></td>
                            <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                            <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a>,<a class="popup" href="index.php/pasien/profil_pasien"> Adnan Alghani</a></td>
                            <td class="float-right"><a class="button" href="">
                                    <span>Pilih</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td><a class="popup" href="index.php/kk/profil_kk">Raden Bagus</a></td>
                            <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                            <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a>,<a class="popup" href="index.php/pasien/profil_pasien"> Adnan Alghani</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>