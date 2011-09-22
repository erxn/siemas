<br/>
<div class="grid_6" style="width: 99%">
    <div class="container_12">
        <div class="module">
            <h2><span>Daftar isi obat yang dipakai</span></h2>

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
                        <?php
                        $n = '1';
                        foreach ($isi as $list) {
                            $a = 'id_obat' . $n;
                            $b = 'nbk_obat' . $n;
                            $c = 'satuan_obat' . $n;
                            $d = 'jumlah' . $n;
                        ?>
                            <tr>
                                <td class="align-center"><?php echo $list[$a]; ?></td>
                                <td><?php echo $list[$b]; ?></td>
                                <td><?php echo $list[$c]; ?></td>
                                <td><?php echo $list[$d]; ?></td>
                            </tr>
                        <?php } ?>
                        <?php
                        $n = '2';
                        foreach ($isi as $list) {
                            $a = 'id_obat' . $n;
                            $b = 'nbk_obat' . $n;
                            $c = 'satuan_obat' . $n;
                            $d = 'jumlah' . $n;
                            if (isset($list[$a])) {
                                ?><tr>&nbsp;</tr>
                                <tr>
                                    <td class="align-center"><?php if (isset($list[$a])) {
                                    echo $list[$a];
                                } ?></td>
                                    <td><?php if (isset($list[$b])) {
                                    echo $list[$b];
                                } ?></td>
                                    <td><?php if (isset($list[$c])) {
                                    echo $list[$c];
                                } ?></td>
                                    <td><?php if (isset($list[$d])) {
                                    echo $list[$d];
                                } ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                        <?php
                        $n = '3';
                        foreach ($isi as $list) {
                            $a = 'id_obat' . $n;
                            $b = 'nbk_obat' . $n;
                            $c = 'satuan_obat' . $n;
                            $d = 'jumlah' . $n;
                            if (isset($list[$a])) {
                                ?><tr>&nbsp;</tr>
                                <tr>
                                    <td class="align-center"><?php if (isset($list[$a])) {
                                    echo $list[$a];
                                } ?></td>
                                    <td><?php if (isset($list[$b])) {
                                    echo $list[$b];
                                } ?></td>
                                    <td><?php if (isset($list[$c])) {
                                    echo $list[$c];
                                } ?></td>
                                    <td><?php if (isset($list[$d])) {
                                    echo $list[$d];
                                } ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>


                    </tbody>
                </table>


                <div style="clear: both"></div>
            </div> <!-- End .module-table-body -->
        </div> <!-- End .module -->
    </div> <!-- End .grid_12 -->
</div>