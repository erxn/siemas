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
  <h4  class="float-right">Total pasien: <?php echo count($antri_umum) ?> orang</h4>
  <br/>
 <table style="width: 100%">
    <thead>
        <tr>
            <th class="header" style="width: 1%;">No</th>
            <th class="header" style="width: 10%;">Nama</th>
            <th class="header" style="width: 7%;">Alamat</th>
            <th class="header" style="width: 2%;">Pelayanan</th>
            <th class="header" style="width: 5%;">Status</th>
        </tr>
    </thead>
    <tbody>

        <?php $i=1;foreach($antri_umum as $umum){?>
        <tr class="<?php if($i%2==0) echo "odd";?>">
            <td class="align-center"><?php echo $i++?></td>
            <td><a style="font-size: 15px !important;" class="popup" href="index.php/pasien/profil_pasien/<?php echo $umum['id_kk']."/".$umum['id_pasien']?>"><?php echo $umum['nama']?></a>
                <br/>
                <small style="font-size: 10px; color: #777777; font-weight: normal"><?php echo $umum['jk_pasien'] . ', ' . $umum['umur'] . ' th'; ?></small>
            </td>
            <td><?php echo $umum['kelurahan_kk'];?></td>
            <td class="align-center"><?php echo $umum['status_pelayanan']?></td>
            <td class="align-center"><small style="font-size: 12px; color: #777777; font-weight: normal"><?php echo $umum['status']?></small></td>
        </tr>
            <?php }?>


    </tbody>
</table>
</div>