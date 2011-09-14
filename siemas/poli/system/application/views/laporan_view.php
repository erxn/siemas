<?php $this->load->view('header') ?>
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>

<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />

<script>
    $(function() {
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy'
        });
    });
</script>

<script>
    $(function() {
        $( ".tabs" ).tabs();
    });


</script>

<script type="text/javascript">

    function go_to_bulanan_layanan() {

        var link = "index.php/laporan/bulanan_layanan";
        var bln = $('#bulan_lay').val();
        var thn = $('#tahun_lay').val();

        if (bln == 0 || thn == 0) alert("Pilih bulan dan tahun terlebih dahulu");
        else window.location = link + '/' + bln + '/' + thn;

    }

    function go_to_bulanan_penyakit() {

        var link = "index.php/laporan/bulanan_penyakit";
        var bln = $('#bulan_peny').val();
        var thn = $('#tahun_peny').val();

        if (bln == 0 || thn == 0) alert("Pilih bulan dan tahun terlebih dahulu");
        else window.location = link + '/' + bln + '/' + thn;

    }

    function go_to_tahunan() {

        var link = "index.php/laporan/tahunan";
        var thn = $('#tahunan_tahun').val();

        if (thn == 0) alert("Pilih bulan dan tahun terlebih dahulu");
        else window.location = link + '/' + thn;

    }

</script>

<div class="tabs" style="margin-left: 200px;width: 48%; margin-top: 20px">
    <ul>
        <li><a href="#tabs-2">Laporan Bulanan</a></li>
    </ul>
    <div id="tabs-2">
        <table width="100%">
            <tbody>
                <tr>
                    <td align="center">
                        <select id="bulan_lay" style="margin-bottom: 10px">
                            <option value="0">Pilih bulan:</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </td>
                    <td align="center">
                        <select id="bulan_peny" style="margin-bottom: 10px;">
                            <option value="0">Pilih bulan:</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select></td>
                        <td align="center">
                        <select id="lb4_bulan" style="margin-bottom: 10px;">
                            <option value="0">Pilih bulan:</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select></td>
                </tr>
                <tr>
                    <td align="center">
                        <select id="tahun_lay">
                            <option value="0">Pilih tahun:</option>
                            <?php for ($i = date('Y') - 5; $i <= date('Y') + 5; $i++) : ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </td>
                    <td align="center">
                        <select id="tahun_peny">
                            <option value="0">Pilih tahun:</option>
                        <?php for ($i = date('Y') - 5; $i <= date('Y') + 5; $i++) : ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                        </select>
                    </td>
                    <td align="center">
                        <select id="lb4_tahun">
                            <option value="0">Pilih tahun:</option>
                        <?php for ($i = date('Y') - 5; $i <= date('Y') + 5; $i++) : ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <br/>
                        <a style="text-decoration:none; margin: 0px !important; float: none !important" href="#" onclick="go_to_bulanan_layanan(); return false;" id="btn_bulanan_lay" class="dashboard-module">
                            <img src="Template_files/lap_bul_tindakan.png" width="64" height="64" alt="edit" />
                            <span>Laporan Tindakan</span>
                        </a>
                    </td>
                    <td align="center">
                        <br/>
                        <a style="text-decoration:none; margin: 0px !important; float: none !important" href="#" onclick="go_to_bulanan_penyakit(); return false;" id="btn_bulanan_peny" class="dashboard-module">
                            <img src="Template_files/lap_bul_penyakit.png" width="64" height="64" alt="edit" />
                            <span>Laporan Penyakit</span>
                        </a>
                    </td>
                    <td align="center">
                        <br/>
                        <a style="text-decoration:none; margin: 0px !important; float: none !important" href="" onclick="" id="btn_bulanan_peny" class="dashboard-module">
                            <img src="Template_files/lap_bul_penyakit.png" width="64" height="64" alt="edit" />
                            <span>LB4</span>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>


    </div>


</div>




