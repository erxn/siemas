<?php $this->load->view('header');?>

<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />
<link rel="stylesheet" type="text/css" href="Template_files/colorbox.css" />                <!--java script buat pop up-->
<script type="text/javascript" src="Template_files/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/jquery.uitablefilter.js"></script>


<script>
    $(function() {
        $( ".datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'd MM yy',
            monthNames: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
        });
    });
    $(function() {
        var theTable = $('#t_gigi')

        $("#b_gigi").click(function() {
            $.uiTableFilter( theTable, $('#d_gigi').val());
        })
    });

</script>


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

    function load_selesai() {
        $('#div-selesai').load("index.php/antrian/pasien_hari_ini/2");
    }

    function load_terisi() {
        $('#div-terisi').load("index.php/antrian/tabel_terisi/2");
    }
    $(document).ready(function(){

        load_terisi();
        load_selesai();
        setInterval("load_selesai()", 3000);
        setInterval("load_terisi()", 3000);

    });

</script>


<div id="subnav">
    <div class="container_12">
        <div class="grid_12">
            <ul>
            </ul>

        </div>
    </div>
    <div style="clear: both;"></div>
</div>

<div  class="tabs" style=" float:left; margin-top: 20px;margin-left: 30px; width:35%">
    <ul>
        <li><a href="#tabs-a">Daftar Pasien Hari ini</a></li>
    </ul>
    <div id="tabs-a" >


        <div class="module" style="background:none; float: none; margin-bottom: 0px" id="div-selesai">
        </div>

        <div class="module" style="background:none; float: none; margin-bottom: 0px" id="div-terisi">
        </div>
    </div>
</div>
<script type="text/javascript">

    function selesai(id) {

        $.get('index.php/antrian/pasien_hari_ini/' + id);
        load_selesai();
        load_terisi();
    }

    function terisi(id) {

        $.get('index.php/antrian/tabel_terisi/' + id);
        load_selesai();
        load_terisi();
    }



</script>
<div  class="tabs" style="float:right;  margin-right: 10px; margin-top: 20px; width:60%">
    <ul>
         <li><a href="#tabs-a">Isi Rekam Medik</a></li>
           
    </ul>
    <div id="tabs-a" >
        <div class="module" style="background:none; float: none; margin-bottom: 0px">


            <?php if($data_pasien == null) { ?>
            <span class="notification n-success">Data berhasil disimpan. Pilih pasien kembali </span>
                     
           <?php } else { ?>
            
        
             <?php }?>
</div>

    </div>


    </div>


