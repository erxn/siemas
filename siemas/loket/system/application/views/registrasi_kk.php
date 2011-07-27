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
        <script>
            $(function() {
                $( "#datepicker" ).datepicker({
                    changeMonth: true,
                    changeYear: true
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#test").colorbox({initialHeight: "900px", initialWidth: "900px", width: "55%", height: "75%"})
            });
        </script>

        <div class="container_12">
            <div>
                <div class="grid_6" style="width: 49%">
                    <div class="module">
                        <h2><span>Kepala Keluarga (KK)</span></h2>
                        <div class="module-body">
                            <form action="index.php/kk/register_kk_proses">
                                <table class="noborder" style="width: 98%">
                                    <strong>PENDAFTARAN KK BARU</strong>
                                    <tr>
                                        <td style="width: 5%">Tgl. Pendaftaran</td>
                                        <td style="width: 15%"><input id="datepicker" type="text" class="input-medium"/></td>
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
        </div>
    </body>
</html>
