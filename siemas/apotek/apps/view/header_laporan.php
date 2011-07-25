<?php $this->view_header();?>
        <!-- Date Picker stylesheet -->
                <link rel="stylesheet" type="text/css" href="<?php echo $this->base_url?>js/jquery-ui/css/redmond/jquery-ui-1.7.3.custom.css" media="screen" />
        <!-- JQuery Date Picker Script -->
                <script language="JavaScript" type="text/javascript" src="<?php echo $this->base_url?>js/jquery-ui/js/jquery-1.3.2.min.js"></script>
                <script language="JavaScript" type="text/javascript" src="<?php echo $this->base_url?>js/jquery-ui/js/jquery-ui-1.7.3.custom.min.js"></script>

        <script type="text/javascript">
            $(function() {
                $( "#tanggal" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd-mm-yy'
                });
            });
</script>

        <!-- Header. Main part -->
			
            <div id="header-main">
					<div class="container_12">
                    <div class="grid_12">
                            <ul id="nav">
                                <li><a href="<?php echo $this->base_url?>index.php/home">Home</a></li>
                                <li><a href="<?php echo $this->base_url?>index.php/history">History</a></li>
                                <li><a href="<?php echo $this->base_url?>index.php/obat">Obat</a></li>
                                <li><a href="<?php echo $this->base_url?>index.php/kadaluarsa">Kadaluarsa</a></li>
				<li><a href="<?php echo $this->base_url?>index.php/statistik">Statistik</a></li>
                            </ul>
                    <div class="iconMenu">
						<a href="<?php echo $this->base_url?>index.php/resep">
						<img src="<?php echo $this->base_url?>Template_files/images/resep.png" alt="member" width="50px" height="50px"/></a>
						<span><a href="<?php echo $this->base_url?>index.php/resep">
						Resep</a></span>
					</div>
					<div class="iconMenu">
						<a href="<?php echo $this->base_url?>index.php/tambah_obat">
						<img src="<?php echo $this->base_url?>Template_files/images/tambah_obat.png" alt="member" width="50px" height="50px"/></a>
						<span><a href="<?php echo $this->base_url?>index.php/tambah_obat">
						Tambah Obat</a></span>
					</div>
					<div class="iconMenu">
						<a href="<?php echo $this->base_url?>index.php/laporan">
						<img src="<?php echo $this->base_url?>Template_files/images/laporan.png" alt="member" width="50px" height="50px"/></a>
						<span id="current"><a href="<?php echo $this->base_url?>index.php/laporan">
						Laporan</a></span>
					</div>
                    </div><!-- End. .grid_12-->
					
                    <div style="clear: both;"></div>
					 
                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            <div style="clear: both;"></div>