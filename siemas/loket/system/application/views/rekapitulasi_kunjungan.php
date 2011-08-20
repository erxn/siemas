<?php $this->load->view('header');?>
<!-- SUBNAV -->
<?php $this->load->view('subnav_laporan');?>
<!-- END SUBNAV -->

<?php print_r($laporan);exit;?>
<br/>
<div>
    <div class="grid_6" style="width: 98%">
        <div class="module">
            <h2><span>Rekapitulasi Kunjungan Puskesmas</span></h2>
            <div class="module-body">
                <div>
                    <form method="post" action="index.php/c_laporan/rekapitulasi_kunjungan">
                    <table class="noborder" style="width: 35%">
                        <tr>
                            <td>Pilih Bulan/Tahun</td>
                            <td>:</td>
                            <td>
                                <?php $bulan = array('','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sept','Okt','Nov','Des'); ?>
                                <select name="bulan_kunjungan" style="width: 100%">
                                    <?php for($i=1;$i<=12;$i++) {?>
                                    <option  value="<?php echo $i; ?>"><?php echo $bulan[$i]; ?></option>
                                        <?php } ?>
                                </select>
                            </td>
                            <td>
                                <select name="tahun_kunjungan" style="width: 100%">
                                    <?php foreach($tahun as $thn) {?>
                                    <option value="<?php echo $thn['tahun'];?>"><?php echo $thn['tahun'];?></option>
                                        <?php }?>
                                </select>
                            </td>
                            <td>
                                <div align="right">
                                    <input type="submit" value="Pilih" class="submit-green" name="pilih">
                                </div>
                            </td>
                        </tr>
                    </table>
                    </form>
                        <hr/>
                </div>
                <?php $nama_bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember")

                        ?>
                <h3 align="center" class="style2">REKAPITULASI KUNJUNGAN PUSKESMAS BOGOR TENGAH</h3>
                <h3 align="center"><strong>BULAN: Agustus 2011<?php //echo $nama_bulan[intval($laporan[0]['bulan'])]." ".$laporan[0]['tahun']?></strong></h3>
                <table style="width: 101%" border="1">
                    <thead>
                    <tr>
                    <th width="4%" rowspan="2"><div align="center"><strong>Tgl</strong></div></th>
                    <th colspan="4"><div align="center"><strong>KUNJUNGAN LAMA</strong></div></th>
                    <th colspan="4"><div align="center"><strong>KUNJUNGAN BARU</strong></div></th>
                    <th colspan="4"><div align="center"><strong>KUNJUNGAN UMUM</strong></div></th>
                    <th colspan="4"><div align="center"><strong>KUNJUNGAN GIGI</strong></div></th>
                    <th colspan="4"><div align="center"><strong>KUNJUNGAN KIA</strong></div></th>
                    <th colspan="4"><div align="center"><strong>KUNJUNGAN KB</strong></div></th>
                  </tr>
                  <tr>
                    
                    <th width="4%"><div align="center"><strong>Pab</strong></div></th>
                    <th width="4%"><div align="center"><strong>Cib</strong></div></th>
                    <th width="4%"><div align="center"><strong>LPKM</strong></div></th>
                    <th width="4%"><div align="center"><strong>LKota</strong></div></th>
                    <th width="4%"><div align="center"><strong>Pab</strong></div></th>
                    <th width="4%"><div align="center"><strong>Cib</strong></div></th>
                    <th width="4%"><div align="center"><strong>LPKM</strong></div></th>
                    <th width="4%"><div align="center"><strong>LKota</strong></div></th>
                    <th width="4%"><div align="center"><strong>Pab</strong></div></th>
                    <th width="4%"><div align="center"><strong>Cib</strong></div></th>
                    <th width="4%"><div align="center"><strong>LPKM</strong></div></th>
                    <th width="4%"><div align="center"><strong>LKota</strong></div></th>
                    <th width="4%"><div align="center"><strong>Pab</strong></div></th>
                    <th width="4%"><div align="center"><strong>Cib</strong></div></th>
                    <th width="4%"><div align="center"><strong>LPKM</strong></div></th>
                    <th width="4%"><div align="center"><strong>LKota</strong></div></th>
                    <th width="4%"><div align="center"><strong>Pab</strong></div></th>
                    <th width="4%"><div align="center"><strong>Cib</strong></div></th>
                    <th width="4%"><div align="center"><strong>LPKM</strong></div></th>
                    <th width="4%"><div align="center"><strong>LKota</strong></div></th>
                    <th width="4%"><div align="center"><strong>Pab</strong></div></th>
                    <th width="4%"><div align="center"><strong>Cib</strong></div></th>
                    <th width="4%"><div align="center"><strong>LPKM</strong></div></th>
                    <th width="4%"><div align="center"><strong>LKota</strong></div></th>
                  </tr>
              </thead>
                      <?php foreach($laporan as $lap){?>
                   <tr>
                    <td>&nbsp;</td>
                    <td><?php echo $lap['lama_pab']?></td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                    <td>29</td>
                  </tr>
                 <?php }?>
                  
                </table>
                <br/>
                
            </div>
        </div>
    </div>
</div>
