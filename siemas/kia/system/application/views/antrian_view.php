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


<div id="subnav">
    <div class="container_12">
        <div class="grid_12">
            <ul>

            </ul>

        </div>
    </div>
    <div style="clear: both;"></div>
</div>


<div  class="tabs" style="margin-right: 20px; margin-left: 20px">
    <ul>
        <li><a href="#tabs-a">Antrian Poli gigi</a></li>
    </ul>
    <div id="tabs-a" >


        <div class="container_12" >

            <div style=" margin-left: 550px; margin-top: 10px; width: 100%">
                <a href="index.php/pasien/data_pasien_remed/" class="kotak"><img src="Template_files/femaleG.png" border="0"/><br/>1 Deasy</a>
            </div>



            <div style="margin-top: 50px; margin-left: 200px ">
                <div style="border: 1px; width: 5%;"></div>
                <a href="index.php/pasien/rekam_medik_pasien" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>2 Abar</a>
                <a href="#" class="kotak"><img src="Template_files/femaleK.png" border="0"/><br/>3 Annisa</a>
                <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>4 Toni</a>
                <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>5 Andi</a>
                <a href="#" class="kotak"><img src="Template_files/femaleK.png" border="0"/><br/>6 Meri</a>
                <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>7 Didin</a>
                <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>8 Doni</a>
                <a href="#" class="kotak"><img src="Template_files/femaleK.png" border="0"/><br/>9 Malisa</a>


            </div>


            <div style=" margin-top: 20px; margin-left: 200px   ">
                <div style="border: 1px; width: 5%;"></div>
                <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>10 Alif</a>
                <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>11 Praditya</a>
                <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>12 Tonton</a>
                <a href="#" class="kotak"><img src="Template_files/femaleK.png" border="0"/><br/>13 Lusi</a>
                <a href="#" class="kotak"><img src="Template_files/femaleK.png" border="0"/><br/>14 Tiara</a>
                <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>15 Redy</a>
                <a href="#" class="kotak"><img src="Template_files/femaleK.png" border="0"/><br/>16 Neri</a>
                <a href="#" class="kotak"><img src="Template_files/femaleK.png" border="0"/><br/>17 Chika</a>
            </div> <!-- End .grid_7 -->

            <div style="clear:both;"></div>
        </div> <!-- End .container_12 -->
    </div>
</div>
