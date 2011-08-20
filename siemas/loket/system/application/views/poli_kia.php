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
    <h4 align="right">Total Pasien: <?php echo count($antri_kia) ?> orang</h4>
    <table id="myTable" class="tablesorter" style="width: 100%">
        <thead>

            <tr>
                <th class="header" style="width: 1%;">No</th>
                <th class="header" style="width: 19%;">Nama</th>
                <th class="header" style="width: 1%;">Umur</th>
                <th class="header" style="width: 16%;">Alamat</th>
                <th class="header" style="width: 8%;">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;foreach($antri_kia as $kia){?>
            <tr class="<?php if($i%2==0) echo "odd"; else echo "even"?>">
                <td class="align-center"><?php echo $i++?></td>
                <td><a class="popup" href="index.php/pasien/profil_pasien/<?php echo $kia['id_kk']."/".$kia['id_pasien']?>"><?php echo $kia['nama']?></a></td>
                <td><?php echo $kia['umur']." th"?></td>
                <td><?php echo $kia['kecamatan_kk']?></td>
                <td><?php echo $kia['status']?></td>
            </tr>
            <?php }?>
         
        </tbody>
    </table>

</div>