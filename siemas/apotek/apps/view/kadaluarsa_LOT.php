<br/>
<div class="grid_6" style="width: 99%">
<div class="container_12">
        <div class="module">
            <h2><span>Daftar obat yang akan kadaluarsa</span></h2>

            <div class="module-table-body">
                <table >
                    <thead>
                        <tr>
                            <th style="width:25%">Tanggal Input Obat</th>
                            <th style="width:20%">No SBKK</th>
                            <th style="width:12%">Id Obat</th>
                            <th style="width:43%">Nama Obat</th>
                            <th style="width:20%">Tanggal Kadaluarsa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n = '1';
                        foreach ($obat_kadaluarsa as $list) { ?>
                            <tr>
                                <td><?php echo $list->tanggal_input; ?></td>
                                <td><?php echo $list->no_sbkk; ?></td>
                                <td class="align-center"><?php echo $list->id_obat; ?></td>
                                <td><?php echo $list->nbk_obat; ?></td>
                                <td><?php echo $list->kadaluarsa; ?></td>
                            </tr>
                        <?php $n++; } ?>
                    </tbody>
                </table>


                <div style="clear: both"></div>
            </div> <!-- End .module-table-body -->
        </div> <!-- End .module -->
</div> <!-- End .grid_12 -->
</div>