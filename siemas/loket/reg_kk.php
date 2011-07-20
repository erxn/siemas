<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Daftar KK</title>
    </head>
    <body>
        <h3>REGISTRASI KEPALA KELUARGA (KK)</h3>
        <table>
            <tr>
                <td width="35%">Tgl. Pendaftaran</td>
                <td>date Picker</td>
            </tr>
            <tr>
                <td>Nama KK</td>
                <td><input type="text" name="nama_kk" maxlength="255" size="25"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jk_kk" value="L">Laki-laki
                    <input type="radio" name="jk_kk" value="P" />Perempuan
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="text" name="jk_pasien" size="1" maxlength="2">
                    <?php $bulan = array('','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sept','Okt','Nov','Des'); ?>
                        <select name="bulan_pasien">
                            <?php  for($i=1;$i<=12;$i++) {?>
                            <option value="<?php echo $bulan[$i]; ?>"><?php echo $bulan[$i]; ?></option>
                            <?php } ?>
                        </select>
                    <input type="text" name="tahun_pasien" size="3" maxlength="4">
                 </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea rows="2" cols="25"></textarea></td>
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
                            <td></td>
                            <td><input type="submit" name="daftar_pasien" value="Daftar"></td>
                        </tr>
                   </table>
                </td>
            </tr>
        </table>
    </body>
</html>
