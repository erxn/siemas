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
		minLength: 2
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
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input name="nama_pasien" type="text" class="input-medium" placeholder="Nama Pasien" id="nama-autocomplete"/></td>
                        <td>&nbsp;</td>
                        <td>Umur</td>
                        <td>:</td>
                        <td><input name="umur_pasien" type="text" class="input-medium" placeholder="Umur Pasien"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><div align="right">
                                <input name="submit" class="submit-green" type="submit" value="Cari" />
                            </div></td>
                    </tr>
                </table>
            </form>
            <hr/><br/>
            <table id="myTable" class="tablesorter" style="width: 99%" >
                <thead>
                    <tr>
                        <th style="width:2%">No</th>
                        <th style="width:10%">Tgl Pendaftaran</th>
                        <th style="width:8%">Id Pasien</th>
                        <th style="width:13%">Nama KK</th>
                        <th style="width:13%">Nama Pasien</th>
                        <th style="width:3%">JK</th>
                        <th style="width:8%">Umur</th>
                        <th style="width:20%">Alamat</th>
                        <th style="width:10%">Status Pelayan</th>
                        <th style="width:10%">No Kartu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; if(isset($hasil_cari_pasien)) { foreach ($hasil_cari_pasien as $hasil) {?>
                    <tr>
                        <td class="align-center"><?php echo $i++; ?></td>
                        <td>10-04-2010</td>
                        <td><?php echo $hasil['kode_pasien'];?></td>
                        <td><a class="popup" href="index.php/kk/profil_kk"><?php echo $hasil['nama_kk'];?></a></td>
                        <td><a class="popup" href="index.php/pasien/profil_pasien"><?php echo $hasil['nama_pasien'];?></a></td>
                        <td><?php echo $hasil['jk_pasien'];?></td>
                        <td>20-05-1991</td>
                        <td><?php echo $hasil['alamat_kk'];?></td>
                        <td>Askes</td>
                        <td>0998889</td>
                    </tr>
                    <?php }}else { ?>
                            <tr>
                                <td></td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div class="pager" id="pager">
                <form action="">
                    <div>
                        <img class="first" src="Template_files/arrow-st.gif" alt="first"/>
                        <img class="prev" src="Template_files/arrow-18.gif" alt="prev"/>
                        <input type="text" class="pagedisplay input-short align-center"/>
                        <img class="next" src="Template_files/arrow000.gif" alt="next"/>
                        <img class="last" src="Template_files/arrow-su.gif" alt="last"/>
                        <select class="pagesize input-short align-center">
                            <option value="10" selected="selected">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div style="clear: both"></div>

