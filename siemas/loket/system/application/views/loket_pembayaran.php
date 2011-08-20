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
<br/>

    <div>
        <div class="grid_6" style="width: 98%">
            <div class="module">
                <h2><span>PEMBAYARAN</span></h2>
                <div class="module-body">
                    <h4>Cari Pasien </h4>
                    <form name="cari_pasien_pembayaran" method="post" action="">
                        <table class="noborder" style="width: 28%">
                            <tr>
                                <td width="137">Nama</td>
                                <td width="16">:</td>
                                <td width="216"><input name="nama" type="text" class="input-medium"/></td>
                            </tr>
                            <tr>
                                <td>Poli</td>
                                <td>:</td>
                                <td>
                                    <select namw="poli">
                                        <option>GIGI</option>
                                        <option>KIA</option>
                                        <option>LAB</option>
                                        <option>RADIOLOGI</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>
                                    <div align="right">
                                        <input name="cari" class="submit-green" type="submit" value="Cari" />
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <a class="button float-left" align="left" href="index.php/pembayaran" ><span>Perbaharui Data</span></a>
                    <br/>
                    <div>
                        <h4  class="float-right" style="margin-right: 100px">Total: <?php echo count($pembayaran) ?> orang</h4>
                        <br/>
                        <table  class="tablesorter" style="width: 85%;">
                            <thead>
                                <tr>
                                    <th class="header" style="width: 1%;">No</th>
                                    <th class="header" style="width: 5%;">Poli</th>
                                    <th class="header" style="width: 3%;">No. Kunjungan</th>
                                    <th class="header" style="width: 10%;">Nama</th>
                                    <th class="header" style="width: 4%;">Umur</th>
                                    <th class="header" style="width: 10%;">Alamat</th>
                                    <th colspan="3" class="header" style="width: 10%;">Total Harga</th>
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
                                    <td><a class="popup" id="profil_pasien" href="index.php/pasien/profil_pasien/<?php echo $p['id_kk']."/".$p['id_pasien']?>"><?php echo $p['nama_pasien']?></a></td>
                                    <td align="center"><?php echo $p['umur']?> tahun</td>
                                    <td><?php echo $p['kecamatan_kk']?></td>
                                    
    <?php if($p['status_pembayaran'] == "Belum Lunas") {?>
                                    <td colspan="3">
                                        <div >
                                            <a align="right" class="button" href="index.php/pembayaran/input_pembayaran/<?php echo $p['idkunjungan']?>">
                                                <span><img width="15" height="15" src="Template_files/tambah.png" alt="Tambah"/> Data Pembayaran</span>
                                            </a>
                                        </div>
                                    </td>
        <?php } else if($p['status_pembayaran'] == "Lunas") { ?>
                                    <td class="noborder" style="width:1%">Rp </td>
                                    <td width="2%"><div  align="right"><?php echo number_format($p['total']);?></div></td>&nbsp;&nbsp;&nbsp;
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





