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

        <?php $i=1;foreach($antri_kia as $kia){?>
        <tr class="<?php if($i%2==0) echo "odd";?>">
            <td class="align-center"><?php echo $i++?></td>
            <td><a style="font-size: 15px !important;" class="popup" href="index.php/pasien/profil_pasien/<?php echo $kia['id_kk']."/".$kia['id_pasien']?>"><?php echo $kia['nama']?></a>
                <br/>
                <small style="font-size: 10px; color: #777777; font-weight: normal"><?php echo $kia['jk_pasien'] . ', ' . $kia['umur'] . ' th'; ?></small>
            </td>
            <td><?php echo $kia['kelurahan_kk'];?></td>
            <td class="align-center"><?php echo $kia['status_pelayanan']?></td>
            <td class="align-center"><small style="font-size: 12px; color: #777777; font-weight: normal"><?php echo $kia['status']?></small></td>
        </tr>
            <?php }?>


    </tbody>
</table>

</div>