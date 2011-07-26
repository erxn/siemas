<?php include 'header.php';?>            
<div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
</div>
        <div>
            <!-- KIRI -->
            <div class="grid_6" style="width: 45%">
                <div class="module">
                    <h2><span>Kepala Keluarga (KK)</span></h2>
                    <div class="module-body">
                        <div id="daftar_kk">
                            <h5>Cari KK</h5>
                            <table style="width:60% " class="noborder" >
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td style="width:50%"><input type="text" class="input-medium"/></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><input type="text" class="input-medium"/></td>
                                    <td><div align="right">
                                            <input class="submit-green" type="submit" value="Cari"/>
                                        </div></td>
                                </tr>
                            </table>
                            <hr style="width: 100%; border: 1px solid #cccccc"></hr>
                            <br/>
                            <h4 class="float-right">Hasil Pencarian: 5 orang</h4>

                            
                            <table id="myTable" class="tablesorter" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th class="header" style="width: 3%;">No</th>
                                        <th class="header" style="width: 10%;">KK</th>
                                        <th class="header" style="width: 16%;">Alamat</th>
                                        <th class="header" style="width: 9%;">Anggota</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="even">
                                        <td class="align-center">1</td>
                                        <td><a href="loket_profil_kk.php">Dimas Putera</a></td>
                                        <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                        <td><a href="">Annisa</a>, <a href="">Adit</a>, <a href="">Adnan</a></td>
                                    </tr>
                                    <tr class="even">
                                        <td class="align-center">2</td>
                                        <td><a href="">Meri Marlina</a></td>
                                        <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                        <td><a href="">Annisa</a>, <a href="">Adit</a>, <a href="">Adnan</a></td>
                                    </tr>
                                    <tr class="even">
                                        <td class="align-center">3</td>
                                        <td><a href="">Meri Marlina</a></td>
                                        <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                        <td><a href="">Annisa</a>, <a href="">Adit</a>, <a href="">Adnan</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div id="pager" class="pager">
                                <form action="">
                                    <div>
                                        <img alt="first" src="Template_files/arrow-st.gif" class="first"/>
                                        <img alt="prev" src="Template_files/arrow-18.gif" class="prev"/>
                                        <input type="text" class="pagedisplay input-short align-center"/>
                                        <img alt="next" src="Template_files/arrow000.gif" class="next"/>
                                        <img alt="last" src="Template_files/arrow-su.gif" class="last"/>
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
                        <br/>
                        <div style="clear: both;"></div>



                    </div>
                </div>
            </div>
            <!-- KANAN -->
        <div class="grid_6" style="width: 49%">
            <div class="module">
                <h2><span>Registrasi KK Baru</span></h2>
                <div class="module-body">
                    <form action="loket_kk_sukses.php">
                        <table class="noborder" style="width: 98%">
                            <span style="font-size: 15px; color: #138d39;"><strong>MASUKKAN DATA KK</strong></span>
                            
                            
                            <tr>
                                <td style="width: 5%">Tgl. Pendaftaran</td>
                                <td style="width: 15%"><input id="datepicker" type="text" class="input-medium"/></td>
                            </tr>
                            <tr class="odd">
                                <td>Nama KK</td>
                                <td><input style="width: 55%" type="text" name="nama_kk" maxlength="255" size="25" class="input-short"/></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <input type="radio" name="jk_kk" value="L"/>Laki-laki &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="jk_kk" value="P" />Perempuan
                                </td>
                            </tr>
                            <tr class="odd">
                                <td>Alamat</td>
                                <td>
                                    <textarea name="textarea" cols="26" rows="2"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>

                                    <table style="width: 100%"  class="noborder" >
                                        <tr>
                                            <td width="15%">Kecamatan</td>
                                            <td><input type="text" name="kecamatan" class="input-medium"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td>Kelurahan </td>
                                            <td><input type="text" name="kelurahan" class="input-medium"/></td>
                                        </tr>
                                        <tr>
                                            <td>Kab / Kota </td>
                                            <td><input type="text" name="kab_kota" class="input-medium"/></td>
                                        </tr>
                                        <tr  class="odd">
                                            <td colspan="2"><i><b>Keterangan Tambahan</b></i></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="radio" name="status_wil" value="luar_wil"/>
                                                Luar Wilayah &nbsp;&nbsp;<input type="radio" name="status_wil" value="luar_kota"/>
                                                Luar Kota</td>
                                        </tr>
                                        <tr>
                                            <td height="29"></td>
                                            <td><div align="right">
                                                    <input class="submit-green" type="submit" value="Daftar" />
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div style="clear: both;"></div>
    </body>
</html>