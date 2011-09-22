<?php $this->view_header_obat(); ?>
<!-- Sub navigation -->
<div id="subnav">
<div class="container_12">
    <div class="grid_12">
        <ul style="margin-left: 0px;">

            <li><a href="<?php echo $this->base_url ?>index.php/obat/tambah_jenis_obat">Tambah Jenis Obat</a></li>
            <li><a href="<?php echo $this->base_url ?>index.php/obat/pemakaian_obat">Pemakaian Obat</a></li>
            <li id="current"><a href="<?php echo $this->base_url ?>index.php/obat">Daftar Obat</a></li>

        </ul>


    </div><!-- End. .grid_12-->
</div><!-- End. .container_12 -->
<div style="clear: both;"></div>
</div> <!-- End #subnav -->
</div> <!-- End #header -->

<div class="container_12">

<?php if (isset($verify)) {
?>
<?php echo $verify;
} ?>
<div style="clear: both"></div>
<!-- Example table -->
<div class="module" style="width: 756px ;">
    <h2><span>Data Obat</span></h2>

    <div class="module-table-body">
        <form action="">
            <table id="" class="" >
                <thead>
                    <tr>
                        <th style="width:7%">ID Obat</th>
                        <th style="width:30%">Nama Obat</th>
                        <th style="width:15%">Satuan</th>
                        <th style="width:7%">Jumlah</th>
                        <th style="width:6%"></th>
                    </tr>
                </thead>
                <tbody>
<?php foreach ($list as $list) { ?>
                    <tr>
                        <td class="align-center"><?php echo $list->id_obat; ?></td>
                        <td><?php echo $list->nbk_obat; ?></td>
                        <td><?php echo $list->satuan_obat; ?></td>
                        <td><?php echo $list->stok_obat; ?></td>
                        <td><a class="popup" href="<?php echo $this->base_url ?>index.php/obat/update/<?php echo $list->id_obat; ?>">
                                <input type="submit" value="UPDATE" /></a></td>
                    </tr>
<?php } ?>
                </tbody>
            </table>
        </form>

        <div style="clear: both"></div>
    </div> <!-- End .module-table-body -->
</div> <!-- End .module -->
<div style="clear: both;"></div>
</div> <!-- End .grid_12 -->


<!-- Footer -->
<div id="footer">
<div class="container_12">
    <div class="grid_12">
        <!-- You can change the copyright line for your own -->
        <p>&copy; 2011. Siemas.</p>
    </div>
</div>
<div style="clear:both;"></div>
</div> <!-- End #footer -->
</body>
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
</html>
<!-- This document saved from http://www.xooom.pl/work/magicadmin/admin.html? -->
