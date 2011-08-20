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
                <li><a href="">Isi Rekam Medik</a></li>
                <li><a href="#">Antrian</a></li>
            </ul>

        </div>
    </div>
    <div style="clear: both;"></div>
</div>



<div  class="tabs" style="margin-left: 50px; margin-top: 50px; float:left; width: 45%">
    <ul>
        <li><a href="#tabs-a">Antri</a></li>
    </ul>
    <div id="tabs-a" >


        <div class="module" style="background:none; float: none; margin-left: 10px; height:1000px">

            <table id="myTable" class="tablesorter" border="8" style=" margin-top: 50px;width:90%">
                <thead>
                    <tr>
                        <th style="width:10%">No. Kunjungan</th>
                        <th style="width:21%">Nama Pasien</th>
                        <th style="width:13%">Status</th>
                    </tr>
                </thead>

                <tbody>
            <?php for ($i=1; $i<=count($a)-1; $i++){?>
                    <tr class="odd">
                        <td class="align-center"><?php echo $a[$i]['no_kunjungan']?></td>
                        <td><a style=" text-decoration:none" href="index.php/pasien/data_pasien_remed/<?php echo $a[$i]['id_kunjungan'];?>"><?php echo $a[$i]['nama_pasien']; ?></a></td>
                        <td><?php echo  $a[$i]['status'];?></td>
                    </tr>
                        <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div  class="tabs" style="margin-right: 50px; margin-top: 50px;  float:right; width: 45%">
    <ul>
        <li><a href="#tabs-b">Sedang Diperiksa</a></li>
    </ul>
    <div id="tabs-b" >


        <div class="module" style="background:none; float: none; margin-left: 10px; height:1000px">

            <table id="myTable" class="tablesorter" border="8" style=" margin-top: 50px;width:90%">
                <thead>
                    <tr>
                        <th style="width:10%">No. Kunjungan</th>
                        <th style="width:21%">Nama Pasien</th>
                        <th style="width:13%">Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="odd">
                        <?php for ($i=0; $i<=count($s)-1; $i++){?>
                        <td class="align-center"><?php echo $s[$i]['no_kunjungan']?></td>
                        <td><a style=" text-decoration:none" href="" class="pop"><?php echo $s[$i]['nama_pasien']; ?></a></td>
                        <td><?php echo  $s[$i]['status'];?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
       
     </div>
</div>
