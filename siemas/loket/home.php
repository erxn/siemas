<h2>PENDAFTARAN PASIEN</h2>

<div style="width: 49%; float: left;border: 1px black solid ">
    <h3>KK</h3>
    <div style="border: 1px black solid">
        <h5>CARI KK</h5>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Cari"></td>
            </tr>
        </table>
    </div>
    <div style=";border: 1px black solid ">
        <h5>HASIL PENCARIAN</h5>
        <table width="500" border="1">
          <tr>
            <td width="28"><strong>No.</strong></td>
            <td width="138"><div align="center"><strong>Nama</strong> <strong>KK</strong></div></td>
            <td width="200"><div align="center"><strong>Alamat</strong></div></td>
            <td width="200"><div align="center"><strong>Anggota KK</strong></div></td>
          </tr>
          <tr>
            <td>1</td>
            <td><a href="#">Annisa Anastasia</a></td>
            <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
            <td>&nbsp;</td>
          </tr>
        </table>
      <p>&nbsp;</p>
      </div>
    <div>
<table width="964">
    <h5>TAMBAH KK BARU</h5>
    <tr>
        <td width="5%">Tgl. Pendaftaran</td>
        <td width="29%">date Picker</td>
      </tr>
      <tr>
        <td>Nama KK</td>
        <td><input type="text" name="nama_kk" maxlength="255" size="25"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><input type="radio" name="jk_kk" value="L">
          Laki-laki
          <input type="radio" name="jk_kk" value="P" />
          Perempuan </td>
      </tr>
      <tr>
        <td></td>
      <td width="29%">      </tr>
      <tr>
        <td>Alamat</td>
        <td><textarea name="textarea" cols="25" rows="2"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td><table>
            <tr>
              <td>Kecamatan</td>
              <td><input type="text" name="kecamatan"></td>
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
              <td><input type="radio" name="status_wil" value="L">
                Luar Wilayah</td>
              <td><input type="radio" name="status_wil" value="P" />
                Luar Kota</td>
            </tr>
            <tr>
              <td height="29"></td>
              <td><input type="submit" name="daftar_pasien" value="Daftar"></td>
            </tr>
        </table>        </td></tr></table>
        </div>
        <div style="border: 1px black solid">
          <p><strong>PENDAFTARAN KK BERHASIL</strong></p>
          <table width="500">
            <tr>
              <td width="5%">Tgl. Pendaftaran</td>
              <td width="29%"><strong>Selasa, 18 Januari 2011</strong></td>
            </tr>
            <tr>
              <td>Nama KK</td>
              <td><strong>Meri Marlina</strong></td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td><strong>Perempuan </strong></td>
            </tr>
            <tr>
              <td></td>
              <td width="29%">&nbsp;</td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td><strong>Jl. Bara IV No. 13 Kecamatan Pabaton, Kelurahan Bogor Tengah, Bogor</strong></td>
            </tr>
          </table>
          <p>
            <input type="submit" name="daftar_pasien3" value="Tambah Data Anggota" />
          </p>
        </div>
</div>
<div style="width: 49%; float: left; border: 1px black solid">
    <h3>PASIEN</h3>
<table width="509">
      <tr>
        <td width="35%">Tgl. Pendaftaran</td>
        <td>date Picker</td>
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
            <input type="text" name="tahun_pasien2" size="3" maxlength="4">        </td>
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
          </select>        </td>
      </tr>
      <tr>
        <td>Status Pelayanan</td>
        <td><select name="status_pelayanan">
            <option value="umum">Umum</option>
            <option value="askes">Askes</option>
            <option value="jamkesmas">Jamkesmas</option>
            <option value="lain">Lain-lain</option>
          </select>        </td>
      </tr>
      <tr>
        <td>No. Kartu</td>
        <td><input type="text" name="no_kartu"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="daftar_pasien2" value="Daftar"></td>
      </tr>
    </table>
    <div style="border:1px solid black">
      <p><strong>PENDAFTARAN PASIEN BERHASIL</strong></p>
      <table width="509">
        <tr>
          <td width="35%">Tgl. Pendaftaran</td>
          <td><strong>date Picker</strong></td>
        </tr>
        <tr>
          <td>No. Index</td>
          <td><strong>M-23443242</strong></td>
        </tr>
        <tr>
          <td>Nama Pasien</td>
          <td><strong>Meri Marlina</strong></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td><strong>            Perempuan </strong></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td><strong>8 Juli 2011</strong></td>
        </tr>
        <tr>
          <td>Status dlm Keluarga</td>
          <td><strong>Ibu </strong></td>
        </tr>
        <tr>
          <td>Status Pelayanan</td>
          <td><strong>ASKES</strong></td>
        </tr>
        <tr>
          <td>No. Kartu</td>
          <td><strong>3212234343311</strong></td>
        </tr>
        <tr>
          <td></td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </div>
</div>
