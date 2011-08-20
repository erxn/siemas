<?php $this->load->view('header');?>

<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />

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

<div  class="tabs" style=" float:left; margin-top: 20px;margin-left: 30px; width:45%">
    <ul>
        <li><a href="#tabs-a">Daftar Pasien Hari ini</a></li>
    </ul>
    <div id="tabs-a" >


    </div>
    </div>


<div  class="tabs" style="float:right;  margin-top: 20px; margin-right: 30px; width:45%">
    <ul>
        <li><a href="#tabs-a">Isi Rekam Medik Hari Ini</a></li>
    </ul>
    <div id="tabs-a" >

        <div class="module" style="background:none; float: none; margin-left: 100px">

            <table id="myTable" class="tablesorter" border="8" style=" margin-top: 50px;width:70%">
                <thead>
                    <tr>
                        <th style="width:10%">No. Kunjungan</th>
                        <th style="width:21%">Nama Pasien</th>
                        <th style="width:13%">Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="odd">
                        <?php for ($i=0; $i<=count($selesai)-1; $i++){?>
                        <td class="align-center"><?php echo $selesai[$i]['no_kunjungan']?></td>
                        <td><a style=" text-decoration:none" href="" class="pop"><?php echo $selesai[$i]['nama_pasien']; ?></a></td>
                        <td><?php echo  $selesai[$i]['status'];?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

    </div>
    </div>
