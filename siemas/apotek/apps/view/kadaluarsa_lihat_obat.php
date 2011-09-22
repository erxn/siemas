<br/>
<div class="grid_6" style="width: 95%">
    <div class="container_12">
        <table>
            <tr>
                <td>Tanggal Input Obat </td>
                <td> &nbsp;&nbsp; : &nbsp;&nbsp; </td>
                <td><?php echo $tanggal_input; ?></td>
            </tr>
            <tr>
                <td>No SBKK </td>
                <td> &nbsp;&nbsp; : &nbsp;&nbsp; </td>
                <td><?php echo $no_sbkk; ?></td>
            </tr>
        </table>
        <div class="module">
            <h2><span>Daftar obat yang akan kadaluarsa</span></h2>

            <div class="module-table-body">
                <table >
                    <thead>
                        <tr>
                            <th style="width:12%">Id Obat</th>
                            <th style="width:43%">Nama Obat</th>
                            <th style="width:20%">Tanggal Kadaluarsa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n = '1';
                        foreach ($obat_kadaluarsa as $list) {
                        ?>
                            <tr>
                                <td class="align-center"><?php echo $list->id_obat; ?></td>
                                <td><?php echo $list->nbk_obat; ?></td>
                                <td><?php echo $list->kadaluarsa; ?></td>
                            </tr>
                        <?php $n++;
                        } ?>
                    </tbody>
                </table>


                <div style="clear: both"></div>
            </div> <!-- End .module-table-body -->
        </div> <!-- End .module -->
    </div> <!-- End .grid_12 -->
</div>