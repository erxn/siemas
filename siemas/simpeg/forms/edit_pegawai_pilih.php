<?php include 'header.php'; ?>

<?php include 'list_pegawai.php'; ?>

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
                <?php
                for ($j = 1; $j < count($pegawai); $j++) {

                    echo "<li><a href='forms/edit_pegawai.php'>{$pegawai[$j]}</a></li>";

                } ?>
                </ul>

            </div>
        </div>
    </div>

</div>

<script type="text/javascript" src="js/list_filter.js"></script>

<?php include 'footer.php'; ?>