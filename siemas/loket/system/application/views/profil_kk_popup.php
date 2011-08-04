<br/>
<div class="grid_6" style="width: 98%">
    <div class="module">
        <h2><span>Profil Kepala Keluarga (KK)</span></h2>
        <div class="module-body">
            <div>
                <div id="profil_kk">
                    <h4>Identitas KK</h4>
                    
                    <table class="noborder" style="width: 80%">
                        <tbody>
                            <tr class="odd">
                                <td style="width: 15%">Nama KK</td>
                                <td style="width: 40%"><span style="color: #24cc57; font-weight: bold"><?php echo $kk[0]['nama_kk'];?></span></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><?php echo $kk[0]['jk_kk'];?></td>
                            </tr>
                            <tr class="odd">
                                <td>Alamat</td>
                                <td><?php echo $kk[0]['alamat_kk'];?></td>
                            </tr>
                        </tbody>
                    </table>
                    <br/>
                    
                    <h4>Daftar Anggota Keluarga</h4>
                    <table id="myTable" class="tablesorter">
                        <thead>
                            <tr>
                                <th style="width:2%">No</th>
                                <th style="width:10%">Nama Anggota</th>
                                <th style="width:10%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($kk as $anggota) {
                            if($i%2==0) $x="odd";
                                else $x ="even"; ?>
                            <tr class="<?php echo $x;?>">
                                <td><?php echo $i++; ?></td>
                                <td><a href="#"><?php echo $anggota['nama_pasien'] ?></a></td>
                                <td><?php echo $anggota['status_dalam_keluarga'] ?></td>
                            </tr>
                            <?php }?>
                        </tbody> 
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>