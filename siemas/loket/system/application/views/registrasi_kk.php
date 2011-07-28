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
<div class="container_12">
    <div>
        <div class="grid_6" style="width: 49%">
            <div class="module">
                <h2><span>Kepala Keluarga (KK)</span></h2>
                <div class="module-body">
                    <form action="" method="post">
                        <table class="noborder" style="width: 98%">
                            <strong>PENDAFTARAN KK BARU</strong>
                            <tr>
                                <td style="width: 5%">Tgl. Pendaftaran</td>
                                <td style="width: 15%"><input id="datepicker" type="text" class="input-medium" name="tanggal_pendaftaran"/></td>
                            </tr>
                            <tr class="odd">
                                <td>Nama KK</td>
                                <td><input style="width: 80%" type="text" name="nama_kk" maxlength="255" size="25" class="input-medium"/></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <input type="radio" name="jk_kk" value="L"/>Laki-laki
                                    <input type="radio" name="jk_kk" value="P" />Perempuan
                                </td>
                            </tr>
                            <tr class="odd">
                                <td>Alamat</td>
                                <td>
                                    <textarea cols="26" rows="2" name="alamat_kk"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>

                                    <table style="width: 100%" class="noborder" >
                                        <tr>
                                            <td width="15%">Kecamatan</td>
                                            <td><input type="text" name="kecamatan_kk" class="input-medium"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td>Kelurahan </td>
                                            <td><input type="text" name="kelurahan_kk" class="input-medium"/></td>
                                        </tr>
                                        <tr>
                                            <td>Kab / Kota </td>
                                            <td><input type="text" name="kab_kota_kk" class="input-medium"/></td>
                                        </tr>
                                        <tr  class="odd">
                                            <td colspan="2"><i><b>Keterangan Tambahan (diisi bila perlu)</b></i></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="radio" name="status_wil_kk" value="Luar Wilayah"/>
                                                Luar Wilayah &nbsp;&nbsp;<input type="radio" name="status_wil_kk" value="Luar Kota Bogor"/>
                                                Luar Kota</td>
                                        </tr>
                                        <tr>
                                            <td height="29"></td>
                                            <td><div align="right">
                                                    <input class="submit-green" type="submit" value="Daftar" name="submit"/>
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
</div>
</body>
</html>
