<?php $this->load->view('header');?>
<!-- SUBNAV -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>
<!-- END SUBNAV -->
<script type="text/javascript">

    function load_pembayaran() {
        $('#pembayaran').load("index.php/pembayaran/data_pembayaran");
        setTimeout("load_pembayaran()", 1000);
    }
    $(document).ready(function(){
        load_pembayaran();

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
                delay: 0
            });
        });
    });
</script>

<div>
    <div class="grid_6" style="width: 78%">
        <div class="module">
            <h2><span>PEMBAYARAN</span></h2>
            <div class="module-body">
                <h4>Cari Pasien </h4>
                <form method="post" action="">
                    <table class="noborder" style="width: 28%">
                        <tr>
                            <td width="137">Nama</td>
                            <td width="16">:</td>
                            <td width="216"><input id="nama-autocomplete" name="nama" type="text" class="input-medium" value="<?php if(isset($_POST['nama'])) echo $_POST['nama'] ?>"/></td>
                            <td><input name="cari" class="submit-green" type="submit" value="Cari" /></td>
                            <?php if($this->input->post('cari')) { ?>
                            <td><input class="submit-green" type="button" value="Tampilkan semua" onclick="location.href = 'index.php/pembayaran'" /></td>
                            <?php } ?>
                        </tr>
                    </table>
                </form>
                <br/>
                <hr/>
                <br/>
                <a class="button float-left" align="left" href="index.php/pembayaran" ><span>Perbaharui Data</span></a>
                <div>
                    <h3  class="float-right" style="margin-right: 0">Total: <?php echo count($pembayaran) ?> orang</h3>
                    <br/>
                    <table  style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="header" style="width: 1%;">No</th>
                                <th class="header" style="width: 3%;">Poli</th>
                                <th class="header" style="width: 1%;">No. Kunjungan</th>
                                <th class="header" style="width: 20%;">Pasien</th>
                                <th colspan="3" class="header" style="width: 15%;">Total Harga</th>
                                <th class="header" style="width: 10%;">Status Pembayaran</th>

                            </tr>
                        </thead>
                        <tbody>

                        
                        <?php $i=1;
                        foreach($pembayaran as $p) { ?>
                        <tr class="<?php if($i%2==0)echo "odd";else echo "even"?>">
                            <td><div align="center"><?php echo $i++?></div></td>
                            <td><?php echo $p['nama_poli']?></td>
                            <td align="center"><?php echo $p['no_kunjungan']?></td>
                            <td style="font-size: 14px !important"><a class="popup" id="profil_pasien" href="index.php/pasien/profil_pasien/<?php echo $p['id_kk']."/".$p['id_pasien']?>"><?php echo $p['nama_pasien']?></a>
                                <br/>
                                <small style="font-size: 12px; color: #777777; font-weight: normal"><?php echo $p['kelurahan_kk'].", ".$p['umur']." th, ".$p['jk_pasien']?></small>
                            </td>
                                <?php if($p['status_pembayaran'] == "Belum Lunas") {?>
                            <td colspan="3">
                                <div align="center">
                                    <a class="button" href="index.php/pembayaran/input_pembayaran/<?php echo $p['idkunjungan']?>">
                                        <span><img width="15" height="15" src="Template_files/tambah.png" alt="Tambah"/> Data Pembayaran</span>
                                    </a>
                                </div>
                            </td>
                                    <?php } else if($p['status_pembayaran'] == "Lunas") { ?>
                            <td class="noborder" style="width:1%">Rp </td>
                            <td class="noborder" width="2%"><div  align="right"><?php echo number_format($p['total']);?></div></td>&nbsp;&nbsp;&nbsp;
                            <td width="2%"><a class="button" href="index.php/pembayaran/rincian/<?php echo $p['idkunjungan']?>/rincian"><span>Rincian</span></a></td>
                                    <?php }?>

                            <td><?php if($p['status_pembayaran'] == "Lunas") {?>
                                <img src="Template_files/tick-on.gif" alt="Lunas"/>
                                Lunas
                                        <?php } else if($p['status_pembayaran'] == "Belum Lunas") {?>
                                <img src="Template_files/cross-on.gif" alt="Belum Lunas"/>
                                Belum Lunas
                                        <?php }?>
                            </td>
                        </tr>
                            <?php }?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>





