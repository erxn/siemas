<div class="module" style="width: 457px ; ">
    <h2><span>Informasi</span></h2>
    <div class="module-table-body">
        <table>
            <tbody>
                <?php if ($jumlah_daftar) {
 ?>
                    <tr>
                        <td>Jumlah daftar obat :</td>
                        <td><?php echo $jumlah_daftar; ?></td>
                        <td><a class="popup" href="<?php echo $this->base_url ?>index.php/statistik/daftar_obat">
                                <input type="submit" value="Lihat daftar obat" /></a></td>
                    </tr>
<?php } ?>

<?php if ($jumlah_kadaluarsa) { ?>
                    <tr>
                        <td>Jumlah obat yang akan kadaluarsa :</td>
                        <td><?php echo $jumlah_kadaluarsa; ?></td>
                        <td><a class="popup" href="<?php echo $this->base_url ?>index.php/kadaluarsa/lihat_obat_total">
                                <input type="submit" value="Lihat daftar obat" /></a></td>
                    </tr>
<?php } ?>

<?php if ($jumlah_habis) { ?>
                    <tr>
                        <td>Jumlah obat yang akan habis :</td>
                        <td><?php echo $jumlah_habis; ?></td>
                        <td><a class="popup" href="<?php echo $this->base_url ?>index.php/statistik/daftar_obat_habis">
                                <input type="submit" value="Lihat daftar obat" /></a></td>
                    </tr>
<?php } ?>
            </tbody>
        </table></div></div>

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