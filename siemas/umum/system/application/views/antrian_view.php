<?php $this->load->view('header');?>

<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />
<link rel="stylesheet" type="text/css" href="Template_files/colorbox.css" />                <!--java script buat pop up-->
<script type="text/javascript" src="Template_files/jquery.colorbox-min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $(".pop").colorbox({initialHeight: "900px", initialWidth: "900px", width: "70%", height: "85%"})
    });
</script>


<script>
    $(function() {

        $( ".tabs" ).tabs();
    });
</script>

<script type="text/javascript">
    function load_tabel_antri() {
        $('#div-antri').load("index.php/antrian/tabel_antri/2");
    }

    function load_tabel_periksa() {
        $('#div-periksa').load("index.php/antrian/tabel_periksa/2");
    }

    function load_tabel_tunda() {
        $('#div-tunda').load("index.php/antrian/tabel_tunda/2");
    }
    function load_tabel_selesai() {
        $('#div-selesai').load("index.php/antrian/tabel_selesai/2");
    }

    $(document).ready(function(){
        load_tabel_antri();
        load_tabel_periksa();
        load_tabel_tunda();
        load_tabel_selesai();

        setInterval("load_tabel_antri()", 3000);
        setInterval("load_tabel_periksa()", 3000);
        setInterval("load_tabel_tunda()", 3000);
         setInterval("load_tabel_selesai()", 3000);

    });
</script>


<div id="subnav">
    <div class="container_12">
        <div class="grid_12">
            <ul>
                <li><a href="index.php/antrian/isi_remed_hari_ini">Isi Rekam Medik</a></li>
                <li><a href="index.php/antrian/antri/2">Antrian</a></li>
            </ul>

        </div>
    </div>
    <div style="clear: both;"></div>
</div>



<div  class="tabs" style="margin-left: 50px; margin-top: 50px; float:left; width: 45%">
    <ul>
        <li><a href="#tabs-a">Antri</a></li>
    </ul>
    <div id="tabs-a" >

        <div class="module" style="background:none; float: none; margin-bottom: 0px" id="div-tunda"></div>

        <div class="module" style="background:none; float: none; margin-bottom: 0px" id="div-antri">

        </div>
    </div>
</div>

<script type="text/javascript">

function periksa(id) {

    $.get('index.php/antrian/periksa/' + id);
    load_tabel_antri();
   load_tabel_periksa();
    load_tabel_tunda();

}

function lewati(id) {

    $.get('index.php/antrian/lewati/' + id);
    load_tabel_antri();
    load_tabel_periksa();
    load_tabel_tunda();

}

function selesai(id) {

    $.get('index.php/antrian/selesai/' + id);
    load_tabel_antri();
    load_tabel_periksa();
    load_tabel_tunda();

}

</script>


<div  class="tabs" style="margin-right: 50px; margin-top: 50px;  float:right; width: 45%">
    <ul>
        <li><a href="#tabs-b">Sedang Diperiksa</a></li>
    </ul>
    <div id="tabs-b" >


        <div class="module" style="background:none; float: none; margin-bottom: 0px" id="div-periksa">

        </div>

        <div class="module" style="background:none; float: none; margin-bottom: 0px" id="div-selesai">

        </div>

     </div>
</div>
