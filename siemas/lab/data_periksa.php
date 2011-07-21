<?php include 'header.php';?>
<div class="module">
                	<h2><span>Daftar Kunjungan Laboratorium</span></h2>

<div class="module-table-body">
    <fieldset>
    <form>
        <p><strong>Cari Pasien</strong></p>
<table>
            <tr><td>Jenis Pemeriksaan</td> <td><input type="text" class="input-short" name="jenis_periksa"></td></tr>
            <tr>
<td>Tanggal Pemeriksaan </td><td><input type="text" class="input-short" name="jenis_periksa"></td></tr>
            <tr><td>Nama Pasien </td> <td><input type="text" class="input-short" name="jenis_periksa"></td></tr>
            <tr><td></td><td><div align="right">
              <input type="submit" value="Cari" class="submit-green">
            </div></td></tr>
        </table>
        <p>&nbsp;</p>
    </form>
    <strong>Hasil Pencarian:</strong> Jenis Pemeriksaan: <strong>Urin</strong>
    Tanggal Pemeriksaan: - 
    </fieldset>
<!--<form action="">
    <fieldset>
        <strong>Cari Pasien</strong><br/>
        Nama <input type="text" class="input-short" name="nama_pasien">&nbsp;&nbsp;<input type="submit" value="Cari" class="submit-green">
        Umur <input type="text" class="input-short" name="umur_pasien">&nbsp;&nbsp;<input type="submit" value="Cari" class="submit-green">
    </fieldset>
</form> -->
    <form action="">
                        <table width="745" class="tablesorter" id="myTable">
           	  <thead>
                                <tr>
                                    <th width="7%" style="width:5%">No</th>
                                  <th width="27%" style="width:20%">Nama Pasien</th>
                                  <th width="11%" style="width:13%">Umur</th>
                                  <th width="17%" style="width:13%">Tgl Kunjungan</th>
                                  <th width="15%" style="width:13%">Dokter Pengirim</th>
                                  <th width="23%" style="width:20%">Jenis Pemeriksaan</th>
                                  <th width="23%" style="width:20%">Status Hasil Pemeriksaan</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="pasien.php">Don Quixote</a></td>
                                    <td>23 th</td>
                                    <td>15 Juli 2011</td>
                                    <td>Dr. Dindin</td>
                                    <td><a href="#">Urin, Gol. Darah, Hb</td>
                                    <td><a href="#"></a></td>
                                </tr>
                                <tr>
                                    <td class="align-center">2</td>
                                    <td><a href="">Lord Jim</a></td>
                                    <td>18 th</td>
                                    <td>16 Juli 2011</td>
                                    <td>Dr. Ilham</td>
                                    <td>Hb, Gol. Darah,Urin</td>
                                    <td>Hb, Gol. Darah,Urin</td>
                                </tr>
                            </tbody>
                        </table>
    </form>
    <div id="pager" class="pager">
    <form action="">
        <div>
        <img alt="first" src="Template_files/arrow-st.gif" class="first">
        <img alt="prev" src="Template_files/arrow-18.gif" class="prev">
        <input type="text" class="pagedisplay input-short align-center">
        <img alt="next" src="Template_files/arrow000.gif" class="next">
        <img alt="last" src="Template_files/arrow-su.gif" class="last">
        <select class="pagesize input-short align-center">
            <option selected="selected" value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
        </select>
        </div>
    </form>
</div>
</div>
</div>
