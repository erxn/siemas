<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        
        <base href="<?php echo base_url(); ?>"/>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Sistem Informasi Kepegawaian Puskesmas</title>
        <style type="text/css">body { margin: 0; padding: 0; font: 12px/*62.5%*/ Verdana, sans-serif; }</style>
        <link type="text/css" href="ribbon/themes/base/ui.all.css" rel="stylesheet" />
        <link type="text/css" href="ribbon/themes/base/ui.tabs.css" rel="stylesheet" />
        <link type="text/css" href="ribbon/style/ui.button.css" rel="stylesheet" />
        <link type="text/css" href="ribbon/style/ui.ribbon.css" rel="stylesheet" />
        <link type="text/css" href="ribbon/style/ui.orbButton.css" rel="stylesheet" />
        <link type="text/css" href="ribbon/style/ui.ribbon.style.msoffice.css" rel="stylesheet" />
        <link type="text/css" href="ribbon/style/msoffice-icons.css" rel="stylesheet" />

        <script language="JavaScript" type="text/javascript" src="ribbon/jquery-1.3.2.js"></script>
        <script language="JavaScript" type="text/javascript">
            (function ($) {
                var $prev_focused = null;
                var focus_orig = $.fn.focus;
                $.fn.focus = function () {
                    if (!arguments.length) {
                        if ($prev_focused) $prev_focused.blur();
                        $prev_focused = this;
                    }
                    else {
                        focus_orig.apply(this, function () { $prev_focused = $(this); });
                    }
                    return focus_orig.apply(this, arguments);
                };
                $(document).click(function () {
                    if ($prev_focused) $prev_focused.blur();
                    $prev_focused = null;

                    $(document).find('.ui-state-focus').blur();
                });
            })(jQuery);
        </script>
        <script language="JavaScript" type="text/javascript" src="ribbon/ui/ui.core.js"></script>
        <script language="JavaScript" type="text/javascript" src="ribbon/ui/ui.tabs.js"></script>
        <script language="JavaScript" type="text/javascript" src="ribbon/ui/ui.ribbon.js"></script>
        <script language="JavaScript" type="text/javascript" src="ribbon/ui/ui.orbButton.js"></script>
        <script language="JavaScript" type="text/javascript" src="ribbon/ui/ui.button.js"></script>

        <script language="JavaScript" type="text/javascript">
            jQuery(function ($) {
                $('#log').dblclick(function () { $('#log').empty(); });

                $('.ui-button').button({ useSlidingDoors: true });
                //$('.ui-orbButton').orbButton();
                $('#ribbon-msoffice').wrap('<div class="style-msoffice"></div>');

                $('#ribbon-msoffice').ribbon({
                    collapsible: false
                })
            });
        </script>


    </head>
    <body style="overflow: hidden">

        <div id="ribbon-msoffice" style="-moz-user-select: none" unselectable="on">
            <ul>
                <li><a href="#ribbon-msofficeTabHome" class="_ribbontab"><span><label>Home</label></span></a></li>
                <li><a href="#ribbon-msofficeTabInput" class="_ribbontab"><span><label>Input Data</label></span></a></li>
                <li><a href="#ribbon-msofficeTabLaporan" class="_ribbontab"><span><label>Laporan</label></span></a></li>
            </ul>

            <div id="ribbon-msofficeTabHome">
                <ul>
                    <li id="groupHariIni_ribbon-msofficeTabHome">
                        <div>
                            <button href="index.php/home" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Halaman muka">
                                <span class="ui-icon msoffice-icon-home-32x32"></span>
                                <span class="ui-button-label">Beranda</span>
                            </button>

                            <?php if($jam_kerja['buka'] == '1') : ?>
                            <table style="margin: 0px 20px 0px 10px; float: left">
                                <tr>
                                    <td colspan="2"><strong><?php echo tampilan_tanggal_indonesia(date("d-m-Y")) ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Jam Buka</td>
                                    <td>: <?php echo date("H:i", strtotime($jam_kerja['jam_mulai'])) ?></td>
                                </tr>
                                <tr>
                                    <td>Jam Tutup</td>
                                    <td>: <?php echo date("H:i", strtotime($jam_kerja['jam_selesai'])) ?></td>
                                </tr>
                            </table>
                            <?php else : ?>
                            <table style="margin: 0px 20px 0px 10px; float: left">
                                <tr>
                                    <td colspan="2"><strong><?php echo tampilan_tanggal_indonesia(date("d-m-Y")) ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Jam Buka</td>
                                    <td>: (Libur)</td>
                                </tr>
                                <tr>
                                    <td>Jam Tutup</td>
                                    <td>: (Libur)</td>
                                </tr>
                            </table>
                            <?php endif; ?>

                            <button href="index.php/home/hari_ini" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Lihat detail hari ini">
                                <span class="ui-icon msoffice-icon-magnifier-32x32"></span>
                                <span class="ui-button-label">Detail</span>
                            </button>

                        </div>
                        <h3><span>Hari Ini</span></h3>
                    </li>
                    <li id="groupKalender_ribbon-msofficeTabHome">
                        <div>
                            <button href="index.php/home/kalender" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Lihat kalender bulan ini">
                                <span class="ui-icon msoffice-icon-calendar-32x32"></span>
                                <span class="ui-button-label">Kalender Bulan&nbsp;Ini</span>
                            </button>
                        </div>
                        <h3><span>Kalender</span></h3>
                    </li>
                    <li id="groupKalender_ribbon-msofficeTabHome">
                        <div>
                            <table style="margin: 0px 10px 0px 10px; float: left">
                                <tr>
                                    <td colspan="2"><strong>Informasi Akun</strong></td>
                                </tr>
                                <tr>
                                    <td>Login Terakhir</td>
                                    <td>: <?php echo tampilan_tanggal_indonesia(date('d-m-Y', strtotime($this->session->userdata('admin_last_login'))), true, true); ?></td>
                                </tr>
                                <tr>
                                    <td>Pukul</td>
                                    <td>: <?php echo date('H:i', strtotime($this->session->userdata('admin_last_login'))); ?></td>
                                </tr>
                            </table>

                            <button href="index.php/home/ganti_password" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Ganti kata kunci untuk login">
                                <span class="ui-icon msoffice-icon-key-32x32"></span>
                                <span class="ui-button-label">Ganti Password</span>
                            </button>
                            <button onclick='if(confirm("Logout dari aplikasi?")) location.href="index.php/home/logout"' class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Logout dari aplikasi">
                                <span class="ui-icon msoffice-icon-exit-32x32"></span>
                                <span class="ui-button-label">Logout</span>
                            </button>
                        </div>
                        <h3><span>Akun</span></h3>
                    </li>
                </ul>
            </div>


            <div id="ribbon-msofficeTabInput">
                <ul>
                    <li id="groupAbsensi_ribbon-msofficeTabInput">
                        <div>
                            <button href="index.php/absensi" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Input kehadiran pegawai pada hari ini">
                                <span class="ui-icon msoffice-icon-absenhariini-32x32"></span>
                                <span class="ui-button-label">Absensi Hari&nbsp;Ini</span>
                            </button>
                            <button href="index.php/absensi/pilih_tanggal_absensi" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Input kehadiran pegawai pada tanggal-tanggal terdahulu">
                                <span class="ui-icon msoffice-icon-absendulu-32x32"></span>
                                <span class="ui-button-label">Absensi Terdahulu</span>
                            </button>
                            <ul class="ui-ribbon-element ui-ribbon-list">
                                <li><button href="index.php/absensi/jam_kerja" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-simple-button" title="Atur jam buka dan jam selesai Puskesmas"><span class="ui-icon msoffice-icon-jam-22x22"></span><span class="ui-button-label">Jam Kerja</span></button></li>
                                <li><button href="index.php/absensi/input_libur" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-simple-button" title="Input hari-hari Puskesmas libur"><span class="ui-icon msoffice-icon-libur-22x22"></span><span class="ui-button-label">Hari Libur</span></button></li>
                            </ul>
                        </div>
                        <h3><span>Absensi</span></h3>
                    </li>
                    <li id="groupCuti_ribbon-msofficeTabInput">
                        <div>
                            <button href="index.php/cuti" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Input cuti pegawai">
                                <span class="ui-icon msoffice-icon-cuti-32x32"></span>
                                <span class="ui-button-label">Input Cuti</span>
                            </button>
                        </div>
                        <h3><span>Cuti</span></h3>
                    </li>
                    <li id="groupKegiatan_ribbon-msofficeTabInput">
                        <div>
                            <button href="index.php/kegiatan" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Input kegiatan luar Puskesmas">
                                <span class="ui-icon msoffice-icon-kegiatan-32x32"></span>
                                <span class="ui-button-label">Input Kegiatan&nbsp;Luar</span>
                            </button>
                        </div>
                        <h3><span>Kegiatan</span></h3>
                    </li>
                    <li id="groupPegawai_ribbon-msofficeTabInput">
                        <div>
                            <button href="index.php/pegawai" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Atur jam mulai dan jam selesai Puskesmas">
                                <span class="ui-icon msoffice-icon-newpegawai-32x32"></span>
                                <span class="ui-button-label">Input Pegawai&nbsp;Baru</span>
                            </button>
                            <button href="index.php/pegawai/edit_pegawai_pilih" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Edit data pegawai">
                                <span class="ui-icon msoffice-icon-editpegawai-32x32"></span>
                                <span class="ui-button-label">Edit Data&nbsp;Pegawai</span>
                            </button>
                            <ul class="ui-ribbon-element ui-ribbon-list">
                                <li><button href="index.php/pegawai/input_perubahan_gaji" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-simple-button" title="Input perubahan gaji"><span class="ui-icon msoffice-icon-gaji-22x22"></span><span class="ui-button-label">Gaji</span></button></li>
                                <li><button href="index.php/pegawai/input_perubahan_jabatan" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-simple-button" title="Input perubahan jabatan"><span class="ui-icon msoffice-icon-jabatan-22x22"></span><span class="ui-button-label">Jabatan</span></button></li>
                                <li><button href="index.php/pegawai/input_perubahan_pangkat" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-simple-button" title="Input perubahan pangkat/golongan"><span class="ui-icon msoffice-icon-pangkat-22x22"></span><span class="ui-button-label">Pangkat</span></button></li>
                            </ul>
                            <ul class="ui-ribbon-element ui-ribbon-list">
                                <li><button href="index.php/pegawai/input_kenaikan_yad" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-simple-button" title="Input kenaikan gaji yang akan datang"><span class="ui-icon msoffice-icon-kenaikangaji-22x22"></span><span class="ui-button-label">Kenaikan Gaji YAD</span></button></li>
                                <li><button href="index.php/pegawai/input_struktur_organisasi" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-simple-button" title="Input struktur organisasi"><span class="ui-icon msoffice-icon-strukturorganisasi-22x22"></span><span class="ui-button-label">Struktur Organisasi</span></button></li>
                            </ul>

                        </div>
                        <h3><span>Pegawai</span></h3>
                    </li>
                    <li id="groupPenilaian_ribbon-msofficeTabInput">
                        <div>
                            <button href="index.php/penilaian/input_dp3" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Input penilaian DP3">
                                <span class="ui-icon msoffice-icon-write-32x32"></span>
                                <span class="ui-button-label">Input Penilaian&nbsp;DP3</span>
                            </button>
                            <button href="index.php/penilaian/input_tunjangan" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Input tunjangan untuk tiap pegawai">
                                <span class="ui-icon msoffice-icon-irc-32x32"></span>
                                <span class="ui-button-label">Input Tunjangan</span>
                            </button>
                            <button href="index.php/penilaian/input_rumus_tpp" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Atur rumus untuk perhitungan TPP">
                                <span class="ui-icon msoffice-icon-highscores-32x32"></span>
                                <span class="ui-button-label">Perhitungan TPP</span>
                            </button>
                        </div>
                        <h3><span>Penilaian dan Tunjangan</span></h3>
                    </li>
                </ul>
            </div>

            <div id="ribbon-msofficeTabLaporan">
                <ul>
                    <li id="groupPegawai_ribbon-msofficeTabLaporan">
                        <div>
                            <button href="index.php/pegawai/laporan_duk" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Lihat daftar urut kepangkatan pegawai">
                                <span class="ui-icon msoffice-icon-agenda-32x32"></span>
                                <span class="ui-button-label">Daftar Kepangkatan</span>
                            </button>
                            <button href="index.php/pegawai/laporan_biodata_fungsional" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Lihat biodata fungsional dari pegawai">
                                <span class="ui-icon msoffice-icon-biodata-32x32"></span>
                                <span class="ui-button-label">Biodata Fungsional</span>
                            </button>
                            <button href="index.php/pegawai/laporan_skumptk" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Lihat Surat Keterangan Untuk Mendapatkan Tunjangan Keluarga (SKUM PTK)">
                                <span class="ui-icon msoffice-icon-signed-32x32"></span>
                                <span class="ui-button-label">SKUM PTK</span>
                            </button>
                        </div>
                        <h3><span>Pegawai</span></h3>
                    </li>
                    <li id="groupAbsensi_ribbon-msofficeTabLaporan">
                        <div>
                            <button href="index.php/absensi/rekap_absensi" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Lihat rekapitulasi absensi bulanan">
                                <span class="ui-icon msoffice-icon-rekapabsen-32x32"></span>
                                <span class="ui-button-label">Rekap Absensi</span>
                            </button>
                            <button href="index.php/absensi/rekap_jam_efek" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Lihat rekapitulasi jam kerja efektif bulanan">
                                <span class="ui-icon msoffice-icon-rekapabsenjam-32x32"></span>
                                <span class="ui-button-label">Rekap Jam Kerja Efektif</span>
                            </button>
                        </div>
                        <h3><span>Absensi</span></h3>
                    </li>
                    <li id="groupPenilaian_ribbon-msofficeTabLaporan">
                        <div>
                            <button href="index.php/penilaian/laporan_nilai_dp3" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Lihat daftar nilai DP3 (Daftar Penilaian Pelaksanaan Pekerjaan)">
                                <span class="ui-icon msoffice-icon-rekapdp3-32x32"></span>
                                <span class="ui-button-label">Daftar Nilai&nbsp;DP3</span>
                            </button>
                            <button href="index.php/penilaian/laporan_nilai_tpp" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Lihat daftar nilai TPP (Tambahan Perbaikan Penghasilan)">
                                <span class="ui-icon msoffice-icon-rekaptpp-32x32"></span>
                                <span class="ui-button-label">Daftar Nilai&nbsp;TPP</span>
                            </button>
                            <button href="index.php/penilaian/rekap_tunjangan" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Lihat daftar pembayaran Tambahan Tunjangan Penghasilan (TTP)">
                                <span class="ui-icon msoffice-icon-rekaptunjangan-32x32"></span>
                                <span class="ui-button-label">Pembayaran Tunjangan</span>
                            </button>
                        </div>
                        <h3><span>Penilaian dan Tunjangan</span></h3>
                    </li>
<!--                    <li id="groupCuti_ribbon-msofficeTabLaporan">
                        <div>
                            <button class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Lihat laporan cuti pegawai">
                                <span class="ui-icon msoffice-icon-cuti-32x32"></span>
                                <span class="ui-button-label">Laporan Cuti</span>
                            </button>
                        </div>
                        <h3><span>Cuti</span></h3>
                    </li>-->
                    <li id="groupKegiatan_ribbon-msofficeTabLaporan">
                        <div>
                            <button href="index.php/kegiatan/laporan_kegiatan" class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Lihat laporan kegiatan luar Puskesmas">
                                <span class="ui-icon msoffice-icon-kegiatan-32x32"></span>
                                <span class="ui-button-label">Laporan Kegiatan&nbsp;Luar</span>
                            </button>
                        </div>
                        <h3><span>Kegiatan</span></h3>
                    </li>

                </ul>
            </div>

        </div>

        <div id="page_content_container">

            <iframe id="page_content" frameborder="0" width="100%" height="100%" src="index.php/home"></iframe>

        </div>

        <script type="text/javascript">

            $(document).ready(function(){
                resizeContent();
            });
            
            $(window).resize(function(){
                resizeContent();
            });

            function resizeContent(){
                $('#page_content').css({height: $(window).height() - $('#ribbon-msoffice').height() + 'px'});
            }

            var form_changed = false;

            $('#page_content').load(function(){
                $('#page_content').contents().find("input, select, textarea").change(function(){
                    form_changed = true;
                });
            });

            $('#ribbon-msoffice .ui-button').click(function(){

                var url = $(this).attr("href");
                var current = $('#page_content').attr('src');

                var c = true;

                if(form_changed == true) {
                    c = confirm("Form telah diubah tetapi belum disimpan. Tinggalkan form ini tanpa disimpan?");
                }
                
                if(c == false) return false;

                if(c == true) {
                    $('#page_content').attr({src: url});
                    form_changed = false;
                }

            });

        </script>

    </body>
</html>
