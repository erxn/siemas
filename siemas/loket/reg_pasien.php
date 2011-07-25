    
    <div class="grid_6" style="width: 98%">
        <div class="module">
            <h2><span>Registrasi Pasien Baru</span></h2>
            <div class="module-body">
                <table class="noborder">
                    <tr>
                        <td>Tgl. Pendaftaran</td>
                        <td style="width: 65%"><input id="datepicker" type="text" class="input-medium"/></td>
                    </tr>
                    <tr class="odd">
                        <td>Nama Pasien</td>
                        <td><input class="input-medium" type="text" name="nama_pasien" size="25" maxlength="255"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="radio" name="jk_pasien" value="L">Laki-laki &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jk_pasien" value="P" />Perempuan
                        </td>
                    </tr>

                    <tr  class="odd">
                        <td>Tanggal Lahir</td>
                        <td><input class="input-short" type="text" name="jk_pasien" size="1" maxlength="2"/>
                            <?php $bulan = array('','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sept','Okt','Nov','Des'); ?>
                            <select name="bulan_pasien">
                                <?php  for($i=1;$i<=12;$i++) {?>
                                <option value="<?php echo $bulan[$i]; ?>"><?php echo $bulan[$i]; ?></option>
                                    <?php } ?>
                            </select>
                            <input class="input-medium" type="text" name="tahun_pasien" size="3" maxlength="4"/>
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


