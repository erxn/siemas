<div class="grid_6" style="width: 98%">
    <div class="module">
        <h2><span>Pendaftaran Pasien Lama</span></h2>
        <div class="module-body">
            <form name="reg_kunjungan" method="post" action="#">
                <table class="noborder">
                    <tr class="odd">
                        <td style="width: 30%">Tgl. Pendaftaran</td>
                        <td style="width: 68%"><input id="datepicker" type="text" class="input-medium" value="hari ini"/></td>
                    </tr>
                    <tr>
                        <td>ID Pasien</td>
                        <td>M-12340902</td>
                    </tr>
                    <tr class="odd">
                        <td>Nama Pasien</td>
                        <td><span style="color: #2ba234; font-weight: bold"> Annisa Anastasia</span></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>Perempuan</td>
                    </tr>
                    <tr class="odd">
                        <td>Tanggal Lahir</td>
                        <td>15 Januari 2011 <span style="color: #2ba234">(19 tahun)</span></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>Jl. Bara IV No. 15. Kec. Bogor Tengah Kel. Bogor</td>
                    </tr>
                    <tr class="odd">
                        <td>Status Pelayanan</td>
                        <td>ASKES</td>
                    </tr>
                    <tr>
                        <td>No. Kartu</td>
                        <td>3335252431413</td>
                    </tr>
                    <tr class="odd">
                        <td>&nbsp;</td>
                        <td><form name="form1" method="post" action="">
                                <input type="radio" name="radio" id="radio" value="radio">
                                Bawa kartu
                                &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="radio" id="radio2" value="radio">
                                Tidak Bawa
                            </form>              </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php $this->load->view('pilih_poli_pasien_lama');?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><div align="right">
                                <input class="submit-green" type="submit" value="tambah" />
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>
