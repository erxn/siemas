 <div id="daftar_pasien">
                <div class="module-body">
                    <h4>Masukkan Identitas Pasien</h4><br/>
                    <form action="index.php/pasien/registrasi_pasien_baru/<?php echo $kk[0]['id_kk']."/".$status?>" method="post" id="pasien_baru">
                    <table class="noborder">
                        <tr>
                            <td></td>
                            <td><strong><input name="id_kk" type="hidden" value="<?php echo $kk[0]['id_kk']?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Tgl. Pendaftaran</td>
                            <td style="width: 65%"><input name="tanggal_pendaftaran" id="datepicker" type="text" class="input-medium" value="<?php echo date("d-m-Y"); ?>"/></td>
                        </tr>
                        <tr class="odd">
                            <td>Nama Pasien</td>
                            <td><input name="nama_pasien" class="input-medium" type="text"  size="25" maxlength="255"/></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><input type="radio" name="jk_pasien" value="Laki-laki"/>Laki-laki &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="jk_pasien" value="Perempuan" />Perempuan
                            </td>
                        </tr>

                        <tr  class="odd">
                            <td>Tanggal Lahir</td>
                            <td><input class="input-short" style="width: 6%" type="text" name="tanggal_lahir" size="1" maxlength="2"/>
                                <?php $bulan = array('','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sept','Okt','Nov','Des'); ?>
                                <select name="bulan_pasien" style="width: 25%">
                                    <?php for($i=1;$i<=12;$i++) {?>
                                    <option value="<?php echo $i; ?>"><?php echo $bulan[$i]; ?></option>
                                        <?php } ?>
                                </select>
                                <input name="tahun_pasien" class="input-short"  style="width: 11%" type="text" size="3" maxlength="4"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Status dlm Keluarga</td>
                            <td>
                                <select name="status_keluarga">
                                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                                    <option value="Ibu">Ibu</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Keponakan">Keponakan</option>
                                    <option value="Kakek">Kakek</option>
                                    <option value="Nenek">Nenek</option>
                                    <option value="Tinggal Sementara">Tinggal Sementara</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td>Status Pelayanan</td>
                            <td>
                                <select name="status_pelayanan" onchange="if($(this).val() == 'askes' || $(this).val() == 'jamkesmas') $('#nomer_kartu').show(); else $('#nomer_kartu').hide()">
                                    <option value="umum">Umum</option>
                                    <option value="askes">Askes</option>
                                    <option value="jamkesmas">Jamkesmas</option>
                                    <option value="lain-lain">GR</option>
                                </select>
                            </td>
                        </tr>
                        <tr id="nomer_kartu" style="display: none">
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