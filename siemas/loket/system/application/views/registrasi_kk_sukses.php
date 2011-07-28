<?php $this->load->view('header');?>
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
        <div style="clear: both;"></div>
    </div>
</div>
<!-- END SUBNAV -->
<br/>
<script type="text/javascript">
    $(document).ready(function(){
        $("#test").colorbox({initialHeight: "200px", initialWidth: "200px", width: "50%", height: "65%"})
    });
</script>

<div class="container_12">
    <div>
        <div class="grid_6" style="width: 48%">
            <div class="module">
                <h2><span>Kepala Keluarga (KK)</span></h2>
                <div class="module-body">
                    <div>
                        <span class="notification n-success" style="height: 5px">PENDAFTARAN KK BERHASIL</span>
                    </div>
                    <table class="noborder" style="width: 100%">
                        <tbody>
                            <tr class="odd">
                                <td colspan="2"><strong>Profil KK</strong></td>
                            </tr>
                            <tr>
                                <td  style="width: 25%;" >Tgl. Pendaftaran</td>
                                <td><?php echo tgl_indo($kk[0]['tanggal_pendaftaran'])?></td>
                            </tr>
                            <tr  class="odd">
                                <td>Nama KK</td>
                                <td><span style="color: #24cc57; font-weight: bold"><?php echo $kk[0]['nama_kk']?></span></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><?php echo $kk[0]['jk_kk']?></td>
                            </tr>
                            <tr class="odd">
                                <td>Alamat</td>
                                <td><?php echo $kk[0]['alamat_kk']." Kec. ".$kk[0]['kecamatan_kk'].", Kel. ".$kk[0]['kelurahan_kk'].", Kab/Kota ".$kk[0]['kota_kab_kk']?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="grid_6" style="width: 48%">
            <div class="module">
                <h2><span>Anggota Keluarga</span></h2>
                
                <div id="daftar_pasien">
                <div class="module-body">
                    <h4>Masukkan Identitas Pasien</h4><br/>
                    <form action="index.php/pasien/registrasi_pasien_baru/" method="post" id="pasien_baru">
                    <table class="noborder">
                        <tr>
                            <td>ID KK</td>
                            <td><strong><input name="id_kk" type="hidden" value="<?php echo $kk[0]['id_kk']?>"><?php echo $kk[0]['id_kk']?></strong></td>
                        </tr>
                        <tr>
                            <td>Tgl. Pendaftaran</td>
                            <td style="width: 65%"><input name="tanggal_pendaftaran" id="datepicker" type="text" class="input-medium"/></td>
                        </tr>
                        <tr class="odd">
                            <td>Nama Pasien</td>
                            <td><input name="nama_pasien" class="input-medium" type="text"  size="25" maxlength="255"/></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><input type="radio" name="jk_pasien" value="L"/>Laki-laki &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="jk_pasien" value="P" />Perempuan
                            </td>
                        </tr>

                        <tr  class="odd">
                            <td>Tanggal Lahir</td>
                            <td><input class="input-short" style="width: 6%" type="text" name="tanggal_lahir" size="1" maxlength="2"/>
                                <?php $bulan = array('','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sept','Okt','Nov','Des'); ?>
                                <select name="bulan_pasien" style="width: 25%">
                                    <?php for($i=1;$i<=12;$i++) {?>
                                    <option value="<?php echo $bulan[$i]; ?>"><?php echo $bulan[$i]; ?></option>
                                        <?php } ?>
                                </select>
                                <input name="tahun_pasien" class="input-short"  style="width: 11%" type="text" size="3" maxlength="4"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Status dlm Keluarga</td>
                            <td>
                                <select name="status_keluarga">
                                    <option value="00">Kepala Keluarga</option>
                                    <option value="01">Ibu</option>
                                    <option value="02">Anak</option>
                                    <option value="03">Keponakan</option>
                                    <option value="04">Kakek</option>
                                    <option value="05">Nenek</option>
                                    <option value="06">Tinggal Sementara</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td>Status Pelayanan</td>
                            <td>
                                <select name="status_pelayanan">
                                    <option value="umum">Umum</option>
                                    <option value="askes">Askes</option>
                                    <option value="jamkesmas">Jamkesmas</option>
                                    <option value="lain-lain">Lain-lain</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>No. Kartu</td>
                            <td><input name="no_kartu" class="input-medium" type="text"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><br/><strong>Pilih salah satu Poli:</strong></td>
                        </tr>
                        <tr>
                            <td colspan="2"><?php $this->load->view('pilih_poli');?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="hidden" value="" id="poli" name="poli"/></td>
                        </tr>
                    </table>
                    </form>
                </div>
                </div>
                <div id="pasien_sukses">
                    <div class="module-body">
                    <h4>Masukkan Identitas Pasien</h4><br/>
                    <form action="" method="post">
                    <table class="noborder">
                        <tr>
                            <td>ID KK</td>
                            <td><strong><input name="id_kk" type="hidden" value="<?php echo $kk[0]['id_kk']?>"><?php echo $kk[0]['id_kk']?></strong></td>
                        </tr>
                        <tr>
                            <td>Tgl. Pendaftaran</td>
                            <td style="width: 65%"><?php echo tgl_indo($pasien[0]['tanggal_pendaftaran'])?></td>
                        </tr>
                        <tr class="odd">
                            <td>Nama Pasien</td>
                            <td><input name="nama_pasien" class="input-medium" type="text"  size="25" maxlength="255"/></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><input type="radio" name="jk_pasien" value="L"/>Laki-laki &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="jk_pasien" value="P" />Perempuan
                            </td>
                        </tr>

                        <tr  class="odd">
                            <td>Tanggal Lahir</td>
                            <td><input class="input-short" style="width: 6%" type="text" name="tanggal_lahir" size="1" maxlength="2"/>
                                <?php $bulan = array('','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sept','Okt','Nov','Des'); ?>
                                <select name="bulan_pasien" style="width: 25%">
                                    <?php for($i=1;$i<=12;$i++) {?>
                                    <option value="<?php echo $bulan[$i]; ?>"><?php echo $bulan[$i]; ?></option>
                                        <?php } ?>
                                </select>
                                <input name="tahun_pasien" class="input-short"  style="width: 11%" type="text" size="3" maxlength="4"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Status dlm Keluarga</td>
                            <td>
                                <select name="status_keluarga">
                                    <option value="00">Kepala Keluarga</option>
                                    <option value="01">Ibu</option>
                                    <option value="02">Anak</option>
                                    <option value="03">Keponakan</option>
                                    <option value="04">Kakek</option>
                                    <option value="05">Nenek</option>
                                    <option value="06">Tinggal Sementara</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td>Status Pelayanan</td>
                            <td>
                                <select name="status_pelayanan">
                                    <option value="Umum">Umum</option>
                                    <option value="Askes">Askes</option>
                                    <option value="Jamkesmas">Jamkesmas</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>No. Kartu</td>
                            <td><input name="no_kartu" class="input-medium" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><div align="right">
                                    <input name="submit" class="submit-green" type="submit" value="Daftar" onclick="" />
                                </div>
                            </td>

                        </tr>
                    </table>
                    </form>
                </div>
                </div>


                </div>


        </div>
    </div>
</div>
</body>
</html>
