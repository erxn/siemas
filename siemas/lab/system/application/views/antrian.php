<?php $this->load->view('header');?>
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
        <div style="clear: both;"></div>
    </div>
</div>
<!-- END SUBNAV -->
<br/>

<div>
    <div class="grid_6" style="width: 48%">
        <div class="module">
            <h2><span>ANTRIAN LABORATORIUM</span></h2>
            <div class="module-body">
                <table style="width: 100%">
    <thead>
        <tr>
            <th class="header" style="width: 1%;">No. Kunj.</th>
            <th class="header" style="width: 15%;">Nama</th>
            <th class="header" style="width: 5%;">Alamat</th>
            <th class="header" style="width: 3%;">Status Pembayaran</th>
            <th class="header" style="width: 8%;"></th>
            
        </tr>
    </thead>
    <tbody>

        <?php $i=1;foreach($antri_lab as $lab){?>
        <tr class="<?php if($i%2==0) echo "odd";?>">
            <td class="align-center"><?php echo $lab['no_kunjungan']?></td>
            <td><a style="font-size: 15px !important;" class="popup" href="index.php/pasien/profil_pasien/<?php echo $lab['id_kk']."/".$lab['id_pasien']?>"><?php echo $lab['nama_pasien']?></a>
                <br/>
                <small style="font-size: 10px; color: #777777; font-weight: normal"><?php echo $lab['jk_pasien'] . ', ' . $lab['umur'] . ' th'; ?></small>
            </td>
            <td><?php echo $lab['kelurahan_kk'];?></td>
            <td class="align-center"><?php echo $lab['status_pelayanan']?></td>
            <td><a href="index.php/pemeriksaan/permohonan_analisa/<?php echo $lab['id_kunjungan']?>" class="button"><span>Daftar Permohonan</span></a></td>
        </tr>
            <?php $i++;}?>


    </tbody>
</table>

            </div>
        </div>
    </div>
</div>
