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
                                        <td>Selasa, 18 Januari 2011</td>
                                    </tr>
                                    <tr  class="odd">
                                        <td>Nama KK</td>
                                        <td><span style="color: #24cc57; font-weight: bold">Dimas Putera</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>Laki-laki</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Alamat</td>
                                        <td>Jl. Bara IV No. 13 Kecamatan Pabaton, Kelurahan Bogor Tengah, Bogor</td>
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
                        <div class="module-body">
                              <table class="noborder">
                    <tr>
                        <td>Tgl. Pendaftaran</td>
                        <td style="width: 65%"><input id="datepicker" type="text" class="input-medium"/></td>
                    </tr>
                    <tr class="odd">
                        <td>Nama Pasien</td>
                        <td><input class="input-medium" type="text" name="nama_pasien" size="25" maxlength="255"/></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="radio" name="jk_pasien" value="L"/>Laki-laki &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jk_pasien" value="P" />Perempuan
                        </td>
                    </tr>

                    <tr  class="odd">
                        <td>Tanggal Lahir</td>
                        <td><input class="input-short" style="width: 6%" type="text" name="jk_pasien" size="1" maxlength="2"/>
                            <?php $bulan = array('','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sept','Okt','Nov','Des'); ?>
                            <select name="bulan_pasien" style="width: 25%">
                                <?php for($i=1;$i<=12;$i++) {?>
                                <option value="<?php echo $bulan[$i]; ?>"><?php echo $bulan[$i]; ?></option>
                                    <?php } ?>
                            </select>
                            <input class="input-short"  style="width: 11%" type="text" name="tahun_pasien" size="3" maxlength="4"/>
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
                                <option value="lain">Lain-lain</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>No. Kartu</td>
                        <td><input class="input-medium" type="text" name="no_kartu"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><div align="right">
                                <input class="submit-green" type="submit" value="Daftar" />
                            </div>
                        </td>

                    </tr>
                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
