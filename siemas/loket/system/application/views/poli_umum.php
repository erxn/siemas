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
  <h4  class="float-right">Total: <?php echo count($antri_umum) ?> orang</h4>
  <br/>
  <table id="myTable" class="tablesorter" style="width: 100%">
        <thead>
            <tr>
                <th class="header" style="width: 1%;">No</th>
                <th class="header" style="width: 19%;">Nama</th>
                <th class="header" style="width: 1%;">Umur</th>
                <th class="header" style="width: 14%;">Alamat</th>
                <th class="header" style="width: 8%;">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;foreach ($antri_umum as $umum) {?>
            <tr class="<?php if($i%2==0) echo "odd"; else echo "even"?>">
                <td class="align-center"><?php echo $i++;?></td>
                <td><a class="popup" href="index.php/pasien/profil_pasien/<?php echo $umum['id_kk']."/".$umum['id_pasien']?>"><?php echo $umum['nama']?></a></td>
                <td><?php echo $umum['umur']." th"?></td>
                <td><?php echo $umum['kecamatan_kk'];?></td>
                <td><?php echo $umum['status']?></td>
            </tr>
            <?php }?>
        </tbody>
  </table>
</div>