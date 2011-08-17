<br/>
<div class="grid_6" style="width: 95%">
<div class="container_12">
        <div class="module">
            <h2><span>Daftar isi resep</span></h2>

            <div class="module-table-body">
                <table >
                    <thead>
                        <tr>
                            <th style="width:17%">ID Obat</th>
                            <th style="width:48%">Nama Obat</th>
                            <th style="width:18%">Satuan</th>
                            <th style="width:17%">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n = 1;
                        foreach ($isi as $list) { ?>
                            <tr>
                                <td class="align-center"><?php echo $list['id_obat']; ?></td>
                                <td><?php echo $list['nbk_obat']; ?></td>
                                <td><?php echo $list['satuan_obat']; ?></td>
                                <td><?php echo $list['jumlah']; ?></td>
                            </tr>
                        <?php $n++; } ?>
                    </tbody>
                </table>


                <div style="clear: both"></div>
            </div> <!-- End .module-table-body -->
        </div> <!-- End .module -->
</div> <!-- End .grid_12 -->
</div>