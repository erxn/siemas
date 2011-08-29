<?php $this->load->view('header');?>
<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />

<script>
    $(function() {

        $( ".tabs" ).tabs();
    });
</script>
<script type="text/javascript">

$(document).ready(function() {
	$(function() {
		$( "#nama-autocomplete" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url: "index.php/autocomplete/nama_pasien",
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
<!-- SUBNAV -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>
<!-- END SUBNAV -->
<div class="grid_6" style="width: 98%">
    <div class="module">
        <h2><span>DATA PASIEN</span></h2>
        <div class="module-body">
            <form name="cari_data_pasien" method="post" action="index.php/pasien/cari_pasien">
                <table class="noborder" style="width: 50%">
                    <tr>
                        <td>No. Index</td>
                        <td>:</td>
                        <td><input name="kode_pasien" type="text" class="input-medium" placeholder="ID Pasien"/></td>
                        <td>&nbsp;</td>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input name="alamat" type="text" class="input-medium" placeholder="Alamat Pasien"/></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input name="nama_pasien" type="text" class="input-medium" placeholder="Nama Pasien" id="nama-autocomplete"/></td>
                        <td>&nbsp;</td>
                        <td>Umur</td>
                        <td>:</td>
                        <td><input name="umur_pasien" type="text" class="input-medium" placeholder="Umur Pasien"/></td>
                        <td><div align="right">
                                <input name="submit" class="submit-green" type="submit" value="Cari" />
                            </div></td>
                    </tr>
                </table>
            </form>
            <hr/><br/>
            <table style="width: 99%" >
                <thead>
                    <tr>
                        <th style="width:2%">No</th>
                        <th style="width:8%">Tgl Pendaftaran</th>
                        <th style="width:7%">Id Pasien</th>
                        <th style="width:13%">Nama Pasien</th>
                        <th style="width:8%">Tgl Lahir</th>
                        <th style="width:11%">Nama KK</th>
                        <th style="width:20%">Alamat</th>
                        <th style="width:10%">Status Pelayan</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; if(isset($hasil_cari_pasien)) { foreach ($hasil_cari_pasien as $hasil) {?>
                    <tr class="<?if($i%2==0) echo "odd"; else echo "even";?>">
                        <td class="align-center"><?php echo $i++; ?></td>
                        <td class="align-center"><?php echo$hasil['tanggal_pendaftaran']?></td>
                        <td class="align-center"><?php echo $hasil['kode_pasien'];?></td>
                        <td><a class="popup" href="index.php/pasien/profil_pasien/<?php echo $hasil['id_kk']."/".$hasil['id_pasien'];?>"><?php echo $hasil['nama_pasien'];?></a>
                        <br/>
                        <small style="font-size: 11px; color: #777777; font-weight: normal"><?php echo $hasil['jk_pasien'].", ".$hasil['umur']." th";?></small>
                        </td>
                        <td><?php echo $hasil['tanggal_lahir']?></td>
                        <td><a class="popup" href="index.php/kk/profil_kk/<?php echo $hasil['id_kk']."/".$hasil['id_pasien']?>"><?php echo $hasil['nama_kk'];?></a></td>
                        <td><?php echo $hasil['alamat_kk']." kel. ".$hasil['kelurahan_kk']." Kec. ".$hasil['kecamatan_kk'].", ".$hasil['kota_kab_kk'];?></td>
                        <td><?php echo $hasil['status_pelayanan'];?><br/>
                            <small style="font-size: 11px; color: #777777; font-weight: normal"><?php echo $hasil['no_kartu_layanan'];?></small>
                        </td>
                        
                    </tr>
                    <?php }}else { ?>
                            <tr>
                                <td></td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>


<div style="clear: both"></div>

