
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8;charset=utf-8" />
		<title>Puskesmas Bogor Tengah</title>
       
        <!-- CSS Reset -->
		<link rel="stylesheet" type="text/css" href="Template_files/reset000.css" media="screen" />
       
        <!-- Fluid 960 Grid System - CSS framework -->
		<link rel="stylesheet" type="text/css" href="Template_files/grid0000.css" media="screen" />
		
        <!-- IE Hacks for the Fluid 960 Grid System -->
        <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
        
        <!-- Main stylesheet -->
        <link rel="stylesheet" type="text/css" href="Template_files/styles00.css" media="screen" />
        
        <!-- WYSIWYG editor stylesheet -->
        <link rel="stylesheet" type="text/css" href="Template_files/jquery00.css" media="screen" />
        
        <!-- Table sorter stylesheet -->
        <link rel="stylesheet" type="text/css" href="Template_files/tablesor.css" media="screen" />
        
        <!-- Thickbox stylesheet -->
        <link rel="stylesheet" type="text/css" href="Template_files/thickbox.css" media="screen" />
        
        <!-- Themes. Below are several color themes. Uncomment the line of your choice to switch to different color. All styles commented out means blue theme. -->
        <link rel="stylesheet" type="text/css" href="Template_files/theme-bl.css" media="screen" />
        <!--<link rel="stylesheet" type="text/css" href="css/theme-red.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-yellow.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-green.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-graphite.css" media="screen" />-->
        
		<!-- JQuery engine script-->
		<script type="text/javascript" src="Template_files/jquery-1.js"></script>
        
		<!-- JQuery WYSIWYG plugin script -->
		<script type="text/javascript" src="Template_files/jquery00.js"></script>
        
        <!-- JQuery tablesorter plugin script-->
		<script type="text/javascript" src="Template_files/jquery01.js"></script>
        
		<!-- JQuery pager plugin script for tablesorter tables -->
		<script type="text/javascript" src="Template_files/jquery02.js"></script>
        
		<!-- JQuery password strength plugin script -->
		<script type="text/javascript" src="Template_files/jquery03.js"></script>
        
		<!-- JQuery thickbox plugin script -->
		<script type="text/javascript" src="Template_files/thickbox.js"></script>
        
        <!-- Initiate WYIWYG text area -->
		<script type="text/javascript">
			$(function()
			{
			$('#wysiwyg').wysiwyg(
			{
			controls : {
			separator01 : { visible : true },
			separator03 : { visible : true },
			separator04 : { visible : true },
			separator00 : { visible : true },
			separator07 : { visible : false },
			separator02 : { visible : false },
			separator08 : { visible : false },
			insertOrderedList : { visible : true },
			insertUnorderedList : { visible : true },
			undo: { visible : true },
			redo: { visible : true },
			justifyLeft: { visible : true },
			justifyCenter: { visible : true },
			justifyRight: { visible : true },
			justifyFull: { visible : true },
			subscript: { visible : true },
			superscript: { visible : true },
			underline: { visible : true },
            increaseFontSize : { visible : false },
            decreaseFontSize : { visible : false }
			}
			} );
			});
        </script>
        
        <!-- Initiate tablesorter script -->
        <script type="text/javascript">
			$(document).ready(function() { 
				$("#myTable") 
				.tablesorter({
					// zebra coloring
					widgets: ['zebra'],
					// pass the headers argument and assing a object 
					headers: { 
						// assign the sixth column (we start counting zero) 
						6: { 
							// disable it by setting the property sorter to false 
							sorter: false 
						} 
					}
				}) 
			.tablesorterPager({container: $("#pager")}); 
		}); 
		</script>
        
        <!-- Initiate password strength script -->
		<script type="text/javascript">
			$(function() {
			$('.password').pstrength();
			});
        </script>
	</head>
	<body>
    	<!-- Header -->
        <div id="header">
            <!-- Header. Status part -->
            <div id="header-status">
                <div class="container_12">
                    <div class="grid_8">
                        <span id="text-invitation"></span>
                        <!-- Messages displayed through the thickbox -->
                        
                    </div>
                    <div class="grid_4">
                        <a href="" id="logout">
                        Logout
                        </a>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End #header-status -->
            
             <img src="Template_files/logo0000.gif" style="position: absolute; top:56px; left:60px" />
            <img src="Template_files/puskesmas.png" style="position: absolute; top:45px; left:120px" />
            <img src="Template_files/alamat.png" style="position: absolute; top:95px; left:120px" />
            <img src="Template_files/gigi.png" style="position: absolute; top:40px; right:2px" />
            <!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">                       												
                            <ul id="nav">
                                 <li><a href="">Home</a></li>
                                <li id="current"><a href="#">Antrian</a></li>
                                <li><a href="#">Pasien</a></li>
								<li><a href="#">Statistik</a></li>
								<li><a href="#">Laporan</a></li>
                            </ul>
                       
                    </div><!-- End. .grid_12-->
                    <div style="clear: both;"></div>
                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            <div style="clear: both;"></div>
            <!-- Sub navigation -->
            
        </div> <!-- End #header -->
        
		<div class="container_12" >
        

            
            <!-- Dashboard icons -->
         
			<!--<h3 style="margin-left: 20px">Antrian Poli gigi</h3>-->
<div style=" margin-left: 550px; margin-top: 10px; width: 90%">
    <a href="remed_gigi_anamnesis.php" class="kotak"><img src="Template_files/female.png" border="0"/><br/>1 Deasy</a>
</div>



<div style="margin-top: 60px;">
	
	<div style="border: 1px; width: 10%;"></div>
	<a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>2 Abar</a>
    <a href="#" class="kotak" style="width:%"><img src="Template_files/female.png" border="0"/><br/>3 Annisa</a>
    <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>4 Toni</a>
    <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>5 Andi</a>
    <a href="#" class="kotak"><img src="Template_files/female.png" border="0"/><br/>6 Meri</a>
    <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>7 Didin</a>
    <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>8 Doni</a>
	<a href="#" class="kotak"><img src="Template_files/female.png" border="0"/><br/>9 Malisa</a>
	<div style=" ;></div>

</div>


<div style="border: 1px ; width: 70%; height: auto;padding: 2px; text-align: center; margin: 0 auto ">
    <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>10 Alif</a>
    <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>11 Praditya</a>
    <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>12 Tonton</a>
    <a href="#" class="kotak"><img src="Template_files/female.png" border="0"/><br/>13 Lusi</a>
    <a href="#" class="kotak"><img src="Template_files/female.png" border="0"/><br/>14 Tiara</a>
    <a href="#" class="kotak"><img src="Template_files/male.gif" border="0"/><br/>15 Redy</a>
    <a href="#" class="kotak"><img src="Template_files/female.png" border="0"/><br/>16 Neri</a>
	<a href="#" class="kotak"><img src="Template_files/female.png" border="0"/><br/>17 Chika</a>
      </div> <!-- End .grid_7 -->
            
            <div style="clear:both;"></div>
        </div> <!-- End .container_12 -->
		
           
        <!-- Footer -->
        <div id="footer">
        	<div class="container_12">
            	<div class="grid_12">
                	<!-- You can change the copyright line for your own -->
                	<p>SI Emas</p>
        		</div>
            </div>
            <div style="clear:both;"></div>
        </div> <!-- End #footer -->
	</body>
</html>
<!-- This document saved from http://www.xooom.pl/work/magicadmin/admin.html? -->
