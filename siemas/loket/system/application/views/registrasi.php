<?php $this->load->view('header');?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".popup_reg_kunjungan").colorbox({initialHeight: "900px", initialWidth: "900px", width: "65%", height: "85%", onComplete: function(){
                $( "#datepicker" ).datepicker({
                    changeMonth: true,
                    changeYear: true
                });
            }
        });
    });
</script>
<script type="text/javascript">
    $("#hasil_cari_kk").slideDown();
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
        <div style="clear: both;"></div>
    </div>
</div>
<!-- END SUBNAV -->
<br/>

<!-- ISI -->

<div>
    <!--KIRI -->
    <div>
        <div class="grid_6" style="width: 50%">
            <div class="module">
                <h2><span>Pendaftaran Pasien</span></h2>
                <div class="module-body">
                    <form id="cari_pasien" action="index.php/registrasi/index" method="post">
                        <table id="form_cari" class="noborder" style="width: 80%;">
                            <tr>
                                <td style="width: 30%;">ID Pasien</td>
                                <td style="width: 10%;">:</td>
                                <td style="width: 20%;"><input name="kode_pasien" type="text" class="input-medium" placeholder="ID Pasien"/></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><b><center>atau</center></b></i></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><input name="nama_pasien"type="text" class="input-medium" placeholder="Nama Pasien" id="nama-autocomplete"/></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td>:</td>
                                <td><input name="umur_pasien" type="text" class="input-medium" placeholder="Umur Pasien"/></td>
                                <td><div align="right">
                                        <input name="cari" class="submit-green" type="submit" value="Cari"/>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <hr style="width: 100%; border: 1px solid #cccccc"/>
                    
                    <div class="float-left">

                        <a class="tambah" href="index.php/kk/registrasi_kk">
                            <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah"/> Pasien Baru
                        </a>
                    </div><br/><br/>
                    <?php $i=1; if(isset($hasil_cari_pasien)) {?>
                    <div id="hasil_cari_kk">
                        <h4  class="float-right">Hasil Pencarian: <?php if(isset($hasil_cari_pasien)) echo count($hasil_cari_pasien) ?> orang</h4>
                    <br/>
                    <table id="myTable" class="tablesorter" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="header" style="width: 1%;">No</th>
                                <th class="header" style="width: 8%;">Nama</th>
                                <th class="header" style="width: 1%;">Umur</th>
                                <th class="header" style="width: 13%;">Alamat</th>
                                <th class="header" style="width: 8%;">KK</th>
                                <th class="header" style="width: 3%;">Antrian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($hasil_cari_pasien as $hasil) {?>
                            <tr class="even">
                                <td class="align-center"><?php echo $i++; ?></td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien/<?php echo $hasil['id_kk']."/".$hasil['id_pasien'];?>"><?php echo $hasil['nama_pasien'];?></a></td>
                                <td><?php echo $hasil['umur']." th";?></td>
                                <td><?php echo $hasil['alamat_kk'].", Kel. ".$hasil['kelurahan_kk']." Kec. ".$hasil['kecamatan_kk'].", Kab/Kota ".$hasil['kota_kab_kk']?></td>
                                <td><a class="popup" href="index.php/kk/profil_kk/<?php echo $hasil['id_kk'];?>"><?php echo $hasil['nama_kk'];?></a></td>
                                <td align="center">
                                    <a class="popup_reg_kunjungan" id="test" href="index.php/pasien/registrasi_kunjungan/<?php echo $hasil['id_kk']."/".$hasil['id_pasien'];?>">
                                        <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah"/>
                                    </a>
                                </td>
                            </tr>
                           <?php  }} else { ?>
                            <tr>
                                <td></td>
                            </tr>
                           <?php } ?>
                        </tbody>
                    </table>
                    <!--
                    <div id="pager" class="pager">
                        <form action="">
                            <div>
                                <img alt="first" src="Template_files/arrow-st.gif" class="first"/>
                                <img alt="prev" src="Template_files/arrow-18.gif" class="prev"/>
                                <input type="text" class="pagedisplay input-short align-center"/>
                                <img alt="next" src="Template_files/arrow000.gif" class="next"/>
                                <img alt="last" src="Template_files/arrow-su.gif" class="last"/>
                                <select class="pagesize input-short align-center">
                                    <option selected="selected" value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    -->
                    </div>
                    </div>
            </div>

        </div>
    </div>
</div>
<!--KIRI AKHIR -->


<!-- KANAN -->
<link type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" rel="stylesheet" />

    <script>
        $(function() {
            $( "#tabs1" ).tabs();
            $( "#tabs" ).tabs();
        });
    </script>
<div>
    <div class="grid_6" style="width: 45%">
        <div class="module">
            <h2><span>Antrian Sekarang</span></h2>
            <div style="clear: both"></div>

            <div id="tabs">
                <ul>
                    <li><a href="#tabs-a">Poli Gigi</a></li>
                    <li><a href="#tabs-b">Poli KIA</a></li>
                    <li><a href="#tabs-c">Poli Umum</a></li>
                    <li><a href="#tabs-d">Lab</a></li>
                    <li><a href="#tabs-e">Radiologi</a></li>
                </ul>
                <script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
                <link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />
                <script>
                    $(function() {
                        $( "#datepicker" ).datepicker({
                            changeMonth: true,
                            changeYear: true,
                            dateFormat: 'dd-mm-yy'
                        });
                    });
                </script>

                <!-- Example table -->
                <div id="tabs-a">
                    
                </div>
                <div id="tabs-b">
                    
                </div>
                <div id="tabs-c">
                    
                </div>
                <div id="tabs-d">
                    
                </div>
                <div id="tabs-e">
                    
                </div>



            </div>
            <div style="clear: both"></div>

        </div>

    </div>
</div>
<!--KANAN AKHIR -->







    



    <!-- End demo -->

</body>
</html>
