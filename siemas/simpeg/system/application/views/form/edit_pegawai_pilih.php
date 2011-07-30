<?php $this->load->view('header'); ?>

<script type="text/javascript" src="template/jquery.js"></script>

<div class="belowribbon">
    <h1>
        Edit data pegawai
    </h1>
</div>

<div id="page">

    <div class="grid_6" style="width: 48%">
        <div class="module">
            <h2><span>Pilih pegawai</span></h2>
            <div class="module-body">

                <p id="list_filter_header">Klik nama pegawai yang akan diedit, atau cari pegawai: </p>

                <ul class="bullets" id="list_filter">
                    <?php foreach($daftar_pegawai as $p) : ?>
                    <li><a href="index.php/pegawai/edit_pegawai/<?php echo $p['id_pegawai']; ?>"><?php echo $p['nama']; ?> &raquo;</a></li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </div>

</div>

<script type="text/javascript" src="js/list_filter.js"></script>

<?php $this->load->view('footer'); ?>