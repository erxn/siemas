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
<script type="text/javascript">

$(document).ready(function() {
	$(function() {
		$( "#nama-autocomplete" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url: "index.php/autocomplete/nama_kk",
				data: { term: $("#nama-autocomplete").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 1,
                delay: 100
		});
	});
});


</script>
<br/>
    <div>
        

        <div class="grid_6" style="width: 37%">
            <div class="module">
                <h2><span>Pendaftaran Kepala Keluarga (KK)</span></h2>
                <div class="module-body">
                    <form action="" method="post">
                        <table class="noborder" style="width: 98%">
                            <strong>Masukkan Identitas KK</strong>
                            <tr>
                                <td style="width: 5%">Tgl. Pendaftaran</td>
                                <td style="width: 15%"><input id="datepicker" type="text" class="input-medium" name="tanggal_pendaftaran" value="<?php echo date("d-m-Y") ?>"/></td>
                            </tr>
                            <tr class="odd">
                                <td>Nama KK</td>
                                <td><input style="width: 80%" type="text" name="nama_kk" maxlength="255" size="25" class="input-medium"/></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <input type="radio" name="jk_kk" value="Laki-laki"/>Laki-laki
                                    <input type="radio" name="jk_kk" value="Perempuan" />Perempuan
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
                                            <td>Kelurahan </td>
                                            <td><input type="text" name="kelurahan_kk" class="input-medium"/></td>
                                        </tr>
                                        <tr  class="odd">
                                            <td width="15%">Kecamatan</td>
                                            <td><input type="text" name="kecamatan_kk" class="input-medium"/></td>
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
    <div class="grid_6" style="width: 59%">
            <div class="module">
                <h2><span>Cari Kepala Keluarga (KK)</span></h2>
                <div class="module-body">
                  <form id="cari_pasien" action="index.php/kk/cari_kk" method="post">
                        <table id="form_cari" class="noborder" style="width: 50%;">
                            <tr>
                                <td>Nama KK</td>
                                <td>:</td>
                                <td><input name="nama_kk" type="text" class="input-medium" placeholder="Nama Kepala Keluarga" id="nama-autocomplete"/></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><input name="alamat_kk" type="text" class="input-medium" placeholder="Alamat"/></td>
                                <td><div align="right">
                                        <input name="cari" class="submit-green" type="submit" value="Cari"/>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br/>
                    <?php if(isset($hasil_cari_kk)) {  ?>
                    <div id="hasil_cari_kk">
                        <h4  class="float-left">Hasil Pencarian: <?php echo count($hasil_cari_kk)?> orang</h4>
                    <br/>
                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="header" style="width: 1%;">No</th>
                                <th class="header" style="width: 7%;">KK</th>
                                <th class="header" style="width: 1%;">JK</th>
                                <th class="header" style="width: 10%;">Alamat</th>
                                <th class="header" style="width: 8%;">Anggota</th>
                                <th class="header" style="width: 3%;">Tambah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach($hasil_cari_kk as $kk) {?>
                            <tr class="even">
                                <td class="align-center"><?php echo $i++;?></td>
                                <td><a class="popup" href="index.php/kk/profil_kk/<?php echo $kk['id_kk']?>"><?php echo $kk['nama_kk'];?></a></td>
                                <td><?php echo substr($kk['jk_kk'],0,1)?></td>
                                <td><?php echo $kk['alamat_kk']."<br/> Kel. ".$kk['kelurahan_kk']."<br/> Kec. ".$kk['kecamatan_kk'].", ".$kk['kota_kab_kk'];?></td>
                                <td>
                                    <?php 
                                    
                                            $daftar_anggota = $this->M_kk->cari_pasien_by_kk($kk['id_kk']);

                                            echo "<ol>";
                                            foreach ($daftar_anggota as $anggota) {
                                                echo "<li>" . $anggota['nama_pasien'] . "</li>";
                                            }
                                            echo "</ol>";

                                    
                                        ?>
                                </td>
                                <td><a class="button" id="test" href="index.php/kk/tambah_anggota/<?php echo $kk['id_kk']?>">
                                        <span>
                                            <img width="15" height="15" src="Template_files/tambah.png" alt="Tambah" style="vertical-align: middle;"/>&nbsp;&nbsp; Anggota
                                        </span></a></td>
                            </tr>
                           <?php  }}//} else { ?>
                            <tr>
                                <td></td>
                            </tr>
                           <?php //} ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>