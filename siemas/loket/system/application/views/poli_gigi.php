        <script type="text/javascript">
            $(document).ready(function(){
                $(".popup").colorbox({initialHeight: "900px", initialWidth: "900px", width: "55%", height: "75%", onComplete: function(){
                        $( "#datepicker" ).datepicker({
                            changeMonth: true,
                            changeYear: true
                        });
                    }
                });
            });
        </script>
<div style="width: 100%">

<h4  class="float-right">Total: <?php echo count($antri_gigi) ?> orang</h4>
<br/>
<table id="myTable" class="tablesorter" style="width: 100%">
    <thead>
        <tr>
            <th class="header" style="width: 1%;">No</th>
            <th class="header" style="width: 13%;">Nama</th>
            <th class="header" style="width: 1%;">Umur</th>
            <th class="header" style="width: 10%;">Alamat</th>
            <th class="header" style="width: 10%;">Status</th>
        </tr>
    </thead>
    <tbody>
        
        <?php $i=1;foreach($antri_gigi as $gigi){?>
        <tr class="<?php if($i%2==0) echo "odd"; else echo "even"?>">
            <td class="align-center"><?php echo $i++?></td>
            <td><a class="popup" href="index.php/pasien/profil_pasien/<?php echo $gigi['id_kk']."/".$gigi['id_pasien']?>"><?php echo $gigi['nama']?></a></td>
            <td><?php echo $gigi['umur']." th"?></td>
            <td><?php echo $gigi['kecamatan_kk'];?></td>
            <td><?php echo $gigi['status']?></td>
        </tr>
            <?php }?>
        

    </tbody>
</table>
</div>