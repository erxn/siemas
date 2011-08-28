<h3>Jumlah pasien hari ini: <?php  echo count($sel); ?> orang</h3>
<table id="myTable" class="tablesorter" border="8" style=" margin-top: 5px;width:100%">
                <thead>
                    <tr>
                        <th style="width:10%">No. Kunjungan</th>
                        <th style="width:30%">Nama Pasien</th>
                    </tr>
                </thead>

                <tbody>
                   <?php for ($i=0; $i<=count($sel)-1; $i++) {?>
        <tr <?php if($i%2!=0) echo 'class="odd"' ?>>
            <td class="align-center"><?php echo $sel[$i]['no_kunjungan']?></td>
            <td style="border-right: none" align="center"><?php echo $sel[$i]['nama_pasien']; ?>
                <br/>
                <small style="font-size: 10px; color: #777777; font-weight: normal"><?php echo $sel[$i]['jk_pasien'] . ', ' . $sel[$i]['umur'] . ' th'; ?></small>
            </td>

        </tr>
            <?php }?>
                </tbody>
            </table>