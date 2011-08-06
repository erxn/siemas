<?php $this->load->view('header');?>

<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />
<link rel="stylesheet" type="text/css" href="Template_files/colorbox.css" />                <!--java script buat pop up-->
<script type="text/javascript" src="Template_files/jquery.colorbox-min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $(".pop").colorbox({initialHeight: "900px", initialWidth: "900px", width: "70%", height: "85%"})
    });
</script>


<script>
    $(function() {

        $( ".tabs" ).tabs();
    });
</script>


<div id="subnav">
    <div class="container_12">
        <div class="grid_12">
            <ul>
                <li><a href="">Medical Record</a></li>
                <li><a href="">Data Pasien</a></li>
            </ul>

        </div>
    </div>
    <div style="clear: both;"></div>
</div> 

<div  class="tabs">
    <ul>
        <li><a href="#tabs-a">Data Pasien</a></li>
    </ul>
    <div id="tabs-a">
        <h4>Cari Pasien</h4>
        <table class="noborder" style="width: 50%">
            <tr>
                <td>No. Index</td>
                <td>:</td>
                <td><input type="text" class="input-long"/></td>
                <td>&nbsp;</td>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" class="input-long"/></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" class="input-long"/></td>
                <td>&nbsp;</td>
                <td>Umur</td>
                <td>:</td>
                <td><input type="text" class="input-long"/></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><div align="right">
                        <input class="submit-green" type="submit" value="Cari" />
                    </div></td>
            </tr>
        </table>
        <table id="myTable" class="tablesorter" style="width: 98%" >

            <thead>
                <tr>
                    <th style="width:2%">No</th>
                    <th style="width:10%">Tgl Pendaftaran</th>
                    <th style="width:8%">Id Pasien</th>
                    <th style="width:10%">Nama KK</th>
                    <th style="width:10%">Nama Pasien</th>
                    <th style="width:2%">JK</th>
                    <th style="width:8%">Tanggal Lahir</th>
                    <th style="width:10%">Status Pelayan</th>
                    <th style="width:10%">No Kartu</th>
                </tr>
            </thead>


            <tbody>

                <?php foreach ($pasien as $p) { ?>
                <tr >
                    <th style="width:2%"><?php echo "no" ?></th>
                    <th style="width:10%"><?php echo $p['tanggal_pendaftaran'];?></th>
                    <th style="width:8%"><?php echo $p['id_pasien'];?></th>
                    <th style="width:10%"><?php echo $p['nama_kk'];?></th>
                    <th style="width:10%"><?php echo $p['nama_pasien'];?></th>
                    <th style="width:2%"><?php echo $p['jk_pasien'];?></th>
                    <th style="width:8%"><?php echo $p['tanggal_lahir'];?></th>
                    <th style="width:10%"><?php echo $p['status_pelayanan'];?></th>
                    <th style="width:10%"><?php echo $p['no_kartu_layanan'];?></th>
                </tr>
    <?php }?>
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

        <div style="clear: both"></div>

    </div>
</div>
