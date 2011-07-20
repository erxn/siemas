<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Daftar Pasien Baru</title>
    </head>
    <body>
        <h3>REGISTRASI PASIEN</h3>
        <table>
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
                <td><input type="radio" name="jk_pasien" value="L">Laki-laki
                    <input type="radio" name="jk_pasien" value="P" />Perempuan
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
            <tr>
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
                <td><input type="text" name="no_kartu"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="daftar_pasien" value="Daftar"></td>
            </tr>
        </table>
    </body>
</html>
