<html> <head>
    <title> Puskesmas Bogor Tengah</title>
    
    </head>
    
    <body>
        
        <table border ="1">
             <tr>
                                    <th>No</th>
                                    <th>Tanggal Pendaftaran</th>
                                    <th>Id KK</th>
                                    <th>Nama KK</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th> Status Pelayan</th>
                                    <th>No Kartu</th>
                                    <th></th>
            </tr>
            
            <?php
                    foreach($data_pasien->result() as $row){
                      
            ?>
                    <tr>
                                    <th><?php echo $row->id_pasien; ?></th>
                                    <th><?php echo $row->tanggal_pendaftaran; ?></th>
                                    <th><?php echo $row->KK_Id_KK; ?></th>
                                    <th><?php echo $row->nama_pasien; ?></th>
                                    <th><?php echo $row->jk; ?></th>
                                    <th><?php echo $row->tanggal_lahir; ?></th>
                                    <th><?php echo $row->status_pelayanan; ?></th>
                                    <th><?php echo $row->no_kartu_layanan; ?></th>
                                    <th></th>
            </tr>
            <?php } ?>
            
            
            
        </table>
        
    </body>
    
</html>