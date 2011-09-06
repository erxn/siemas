<?php $this->load->view('header'); ?>

<script type="text/javascript" src="template/jquery.js"></script>

<div class="belowribbon">
    <h1>
        Edit data pegawai
    </h1>
</div>

<div id="page">

    <div  style="margin: 0px 1%">
        <div class="module">
            <h2><span>Pilih pegawai</span></h2>
            <div class="module-table-body">
                <table>
                    <thead>
                        <tr>
                            <th width="22">No</th>
                            <th>Nama</th>
                            <th width="220">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach($daftar_pegawai as $p) : ?>
                        <tr <?php if ($i % 2 == 0) echo 'class="even"' ?>>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $p['nama']; ?></td>
                            <td>
                                <a href="index.php/pegawai/edit_pegawai/<?php echo $p['id_pegawai'] ?>"><input type="button" value="Edit Data" class="submit-green"/></a>
                                <a href="index.php/pegawai/profil/<?php echo $p['id_pegawai'] ?>"><input type="button" value="Lihat Profil" class="submit-green"/></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<?php $this->load->view('footer'); ?>