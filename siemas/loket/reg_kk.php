<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Daftar KK</title>
    </head>
    <body>
        <h3>PENDAFTARAN PASIEN</h3>
<table width="964">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="43%" rowspan="8"><table width="403">
          <tr>
            <td width="35%">Tgl. Pendaftaran</td>
            <td>date Picker</td>
          </tr>
          <tr>
            <td>ID KK</td>
            <td><strong>M-12340902</strong></td>
          </tr>
          <tr>
            <td>Nama Pasien</td>
            <td><input type="text" name="nama_pasien" size="25" maxlength="255"></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jk_pasien" value="L">
              Laki-laki
              <input type="radio" name="jk_pasien" value="P" />
              Perempuan </td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td><input type="text" name="jk_pasien2" size="1" maxlength="2">
                <?php $bulan = array('','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sept','Okt','Nov','Des'); ?>
                <select name="bulan_pasien2">
                  <?php  for($i=1;$i<=12;$i++) {?>
                  <option value="<?php echo $bulan[$i]; ?>"><?php echo $bulan[$i]; ?></option>
                  <?php } ?>
                </select>
                <input type="text" name="tahun_pasien2" size="3" maxlength="4">
            </td>
          </tr>
          <tr>
            <td>Status dlm Keluarga</td>
            <td><select name="status_keluarga">
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
          <tr>
            <td>Status Pelayanan</td>
            <td><select name="status_pelayanan">
                <option value="umum">Umum</option>
                <option value="askes">Askes</option>
                <option value="jamkesmas">Jamkesmas</option>
                <option value="lain">Lain-lain</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>No. Kartu</td>
            <td><input type="text" name="no_kartu"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="daftar_pasien2" value="Daftar"></td>
          </tr>
        </table>          <h3>&nbsp;</h3>
        </td>
      </tr>
  <tr>
                <td width="10%">Tgl. Pendaftaran</td>
    <td width="29%">date Picker</td>
  </tr>
            <tr>
                <td>Nama KK</td>
                <td><input type="text" name="nama_kk" maxlength="255" size="25"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jk_kk" value="L">Laki-laki
                    <input type="radio" name="jk_kk" value="P" />Perempuan                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td width="29%"><input type="text" name="jk_pasien" size="1" maxlength="2">
                  <select name="bulan_pasien">
                            <?php  for($i=1;$i<=12;$i++) {?>
                            <option value="<?php echo $bulan[$i]; ?>"><?php echo $bulan[$i]; ?></option>
                            <?php } ?>
                  </select>
                    <input type="text" name="tahun_pasien" size="2" maxlength="4">              </td>
  </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea rows="2" cols="25"></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <table>
                        <tr>
                            <td>Kecamatan</td>
                            <td> <input type="text" name="kecamatan"></td>
                        </tr>
                        <tr>
                            <td>Kelurahan </td>
                            <td><input type="text" name="kelurahan"></td>
                        </tr>
                        <tr>
                            <td>Kab / Kota </td>
                            <td><input type="text" name="kab_kota"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><i>Keterangan Tambahan</i></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="luar_wil" value="L">Luar Wilayah</td>
                            <td><input type="radio" name="luar_kota" value="P" />Luar Kota</td>
                        </tr>
                        <tr>
                            <td height="29"></td>
                            <td><input type="submit" name="daftar_pasien" value="Daftar"></td>
                        </tr>
                   </table>                </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
    </table>
</body>
</html>
