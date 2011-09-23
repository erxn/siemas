<?php $this->load->view('header');?>
<!-- SUBNAV -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>
<!-- END SUBNAV -->

<script type="text/javascript">


        var x = 6;

        function tambahPembayaran() {

        $('#tr_'+x).fadeIn();
        x++;

        }

</script>

<br/>
<div class="container_12">
    <div>
        <div class="grid_6" style="width: 98%">
            <div class="module">
                <h2><span>PEMBAYARAN</span></h2>
                <div class="module-body">
                    <table class="noborder" style="font-size: 16px">
                        <tr class="odd">
                            <td style="width: 20% ">Tgl Kunjungan</td>
                            <td style="width: 3%">:</td>
                            <td style="width:60% "><?php echo tgl_indo($kunjungan[0]['tanggal_kunjungan'])?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama Pasien</td>
                            <td>:</td>
                            <td><b><?php echo $pasien[0]['nama_pasien']?></b></td>
                            <td></td>
                        </tr>
                        <tr class="odd">
                            <td>Umur</td>
                            <td>:</td>
                            <td><?php echo $pasien[0]['umur']?> tahun</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $pasien[0]['alamat_kk'].", Kel. ".$pasien[0]['kelurahan_kk']." Kec. ".$pasien[0]['kecamatan_kk'].", Kab/Kota ".$pasien[0]['kota_kab_kk']?></td>
                            <td></td>
                        </tr>
                        <tr class="odd">
                            <td>Status Pelayanan</td>
                            <td>:</td>
                            <td><?php if($status_bawa_kartu=='Tidak')echo "Umum"; else echo $pasien[0]['status_pelayanan']?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <form method="post" action="">
                    <div style="width: 80%">
                        <h2 id="total_harga" align="right">TOTAL: Rp <?php  echo number_format($kunjungan[0]['total_harga']) ?></h2>
                        <br/>
                        <table  style="width: 100%" >
                            <thead>
                                <tr style="font-size: 16px !important">
                                    <th class="header" style="width: 5%;">No.</th>
                                    <th class="header" style="width: 50%;">Pelayanan</th>
                                    <th class="header" style="width: 15%;">Poli</th>
                                    <th class="header" style="width: 30%;">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=1; $i<=20; $i++) : ?>
                                <tr class=" <?if($i%2==0) echo "odd"; else echo "even";?>" id="tr_<?php echo $i ?>"  <?php if($i>5) echo "style = 'display: none'"?>>
                                    <td class="align-center"><?php echo $i ?></td>
                                    <td><input type="text" style="width: 90%" name="pelayanan[]" class="input-medium autocomplete"/></td>
                                    <td><select name="poli[]">
                                            <option value="GIGI">GIGI</option>
                                            <option value="KIA">KIA</option>
                                            <option value="UMUM">Umum</option>
                                            <option value="LAB">Laboratorium</option>
                                            <option value="RADIOLOGI">Radiologi</option>
                                            <option value="Lain-lain">Lain-lain</option>
                                        </select>
                                    </td>
                                    <td>Rp <input type="text" name="harga[]"  class="input-medium" value=""/></td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                        <input type="button" onclick="tambahPembayaran(); return false;" value="Tambah"/>
                        <div align="right">
                            <input name="submit" align="right" class="submit-green" type="submit" value="LUNAS" />
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

$(document).ready(function()
            {$("input.autocomplete").autocomplete({
			source: [
                        <?php if(isset($daftar_layanan)){ foreach ($daftar_layanan as $list) { ?>
			{"value":"<?php echo $list['nama_layanan']; ?>","id":"<?php echo $list['harga']; ?>"},
                        <?php } } ?>
                        {}
                        ],
                	select: function( event, ui ) {
				var nama_obat = ui.item.value;
                                var id_obat = ui.item.id;

                                $(this).parent('td').next().next().find('input').val(id_obat);
                        },
                        delay: 0
            });
        });




</script>
