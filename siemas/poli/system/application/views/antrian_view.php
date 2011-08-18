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

            </ul>

        </div>
    </div>
    <div style="clear: both;"></div>
</div>

<div  class="tabs" style="margin-right: 200px; margin-left: 200px">
    <ul>
        <li><a href="#tabs-a">Antrian Poli Gigi</a></li>
    </ul>
    <div id="tabs-a" >

        <?php if (count($a)<=5) {?>
        <div class="container_12" >
            <div style="margin-top: 80px; margin-left: 200px ">

                <?php for($i=0;$i<=count($a)-1;$i++) {?>
                <a href="index.php/pasien/data_pasien_remed/<?php echo $a[$i]['id_kunjungan'];?>"
                    <?php if ($a[$i]['status']=='ANTRI') {?>
                                class="kotak">
                    <?php } else if($a[$i]['status']=='SEDANG DIPROSES') { ?>
                                class="periksa">
                    <?php } else {?>
                                class="selesai">
                    <?php }?>
                        <?php if ($a[$i]['jk_pasien']=='Laki-laki') {?>
                            <img src="Template_files/male.gif" border="0"/>
                        <?php } else { ?>
                            <img src="Template_files/femaleK.png" border="0"/>
                        <?php } echo $a[$i]['no_kunjungan'];?>

                        <?php echo $a[$i]['nama_pasien'];?></a>
                <?php } ?>
            </div> <!-- End .container_12 -->
        </div>

        <br />
        <br />
        <br />

        <?php } else {?>

        <div class="container_12" >
            <div style="margin-top: 80px; margin-left: 200px ; width:100%">

                <?php for($i=0;$i<=5-1;$i++) {?>
                <a href="index.php/pasien/data_pasien_remed/<?php echo $a[$i]['id_kunjungan'];?>"
                    <?php if ($a[$i]['status']=='ANTRI') {?>
                                class="kotak">
                    <?php } else if($a[$i]['status']=='SEDANG DIPROSES') { ?>
                                class="periksa">
                    <?php } else {?>
                                class="selesai">
                    <?php }?>
                        <?php if ($a[$i]['jk_pasien']=='Laki-laki') {?>
                            <img src="Template_files/male.gif" border="0"/>
                        <?php } else { ?>
                            <img src="Template_files/femaleK.png" border="0"/>
                        <?php } echo $a[$i]['no_kunjungan'];?>

                        <?php echo $a[$i]['nama_pasien'];?></a>
                <?php } ?>
            </div> <!-- End .container_12 -->
        </div>

        <br />
        <br />
        <br />
        <div class="module" style="background:none; float: none; margin-left: 100px">
    
            <table id="myTable" class="tablesorter" border="8" style=" margin-left: 5%;width:60%">
                    <thead>
                        <tr>
                            <th style="width:10%">No. Kunjungan</th>
                            <th style="width:21%">Nama Pasien</th>
                            <th style="width:13%">Status</th>
                        </tr>
                    </thead>

                     <tbody>
                    <?php for ($i=5; $i<=count($a)-1; $i++) {?>

                        <tr class="odd">
                            <td class="align-center"><?php echo $a[$i]['no_kunjungan']?></td>
                            <td><a href="" class="pop"><?php echo $a[$i]['nama_pasien']; ?></a></td>
                         <td><?php echo  $a[$i]['status'];?></td>
                        </tr>
                   <?php }?>
                         </tbody>
                </table>
    </div>
             </div>
    </div>
<?php }?>
