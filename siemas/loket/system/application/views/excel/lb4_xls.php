<?php

$nama_bulan = array(
    "",
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
);

$tahun = $laporan[0]['tahun'];
$bulan = $nama_bulan[$laporan[0]['bulan']];

// PHPExcel object

$xls = new PHPExcel();

// Set properties
$xls->getProperties()->setCreator("SIM Puskesmas Bogor Tengah")
        ->setLastModifiedBy("SIM Puskesmas Bogor Tengah")
        ->setTitle("")
        ->setSubject("LB4");

$xls->setActiveSheetIndex(0);

$xls->getDefaultStyle()->getFont()->setName('Calibri');

$styleThinBlackBorderOutline = array(
    'borders' => array(
        'allborders' => array(
            'style' => Style_Border::BORDER_THIN,
            'color' => array('argb' => 'FF000000'),
        ),
    ),
);

// header

$xls->getActiveSheet()->setTitle("LB4 " . $bulan . ' ' . $tahun);

$xls->getActiveSheet()->mergeCells("A2:B2")->setCellValueByColumnAndRow(0, 2, "KODE PUSKESMAS");
$xls->getActiveSheet()->mergeCells("A3:B3")->setCellValueByColumnAndRow(0, 3, "PUSKESMAS");
$xls->getActiveSheet()->mergeCells("A4:B4")->setCellValueByColumnAndRow(0, 4, "KECAMATAN");
$xls->getActiveSheet()->mergeCells("A5:B5")->setCellValueByColumnAndRow(0, 5, "PUSKESMAS PEMBANTU YANG ADA");
$xls->getActiveSheet()->mergeCells("A6:B6")->setCellValueByColumnAndRow(0, 6, "KOTA");
$xls->getActiveSheet()->mergeCells("A7:B7")->setCellValueByColumnAndRow(0, 7, "PROPINSI");
//
$xls->getActiveSheet()->mergeCells("C2:E2")->setCellValueByColumnAndRow(2, 2, ": 0301");
$xls->getActiveSheet()->mergeCells("C3:E3")->setCellValueByColumnAndRow(2, 3, ": BOGOR TENGAH");
$xls->getActiveSheet()->mergeCells("C4:E4")->setCellValueByColumnAndRow(2, 4, ": BOGOR TENGAH");
$xls->getActiveSheet()->mergeCells("C5:E5")->setCellValueByColumnAndRow(2, 5, ": 0");
$xls->getActiveSheet()->mergeCells("C6:E6")->setCellValueByColumnAndRow(2, 6, ": BOGOR");
$xls->getActiveSheet()->mergeCells("C7:E7")->setCellValueByColumnAndRow(2, 7, ": JAWA BARAT");

$xls->getActiveSheet()->getStyle('A3:E7')->getFont()->setSize(11);

$xls->getActiveSheet()->mergeCells("A9:M9")->setCellValueByColumnAndRow(0, 9, "LAPORAN BULANAN PEMBERANTASAN PENCEGAHAN PENYAKIT");
$xls->getActiveSheet()->mergeCells("A10:M10")->setCellValueByColumnAndRow(0, 10, "BULAN: $bulan $tahun");
$xls->getActiveSheet()->getStyle("A9:M10")->getFont()->setBold(true);
$xls->getActiveSheet()->getStyle("A9:M10")->getAlignment()->setHorizontal('center');
$xls->getActiveSheet()->getStyle('A9:M10')->getFont()->setSize(12);

// table header

$xls->getActiveSheet()
        ->mergeCells('A12:A13')
        ->mergeCells('B12:B13')
        ->mergeCells('C12:D12')
        ->mergeCells('E12:F12')
        ->mergeCells('G12:H12')
        ->mergeCells('I12:J12')
        ->mergeCells('K12:L12')
        ->mergeCells('M12:M13')
        ->getStyle('A12:M13')->getAlignment()->setHorizontal('center')->setVertical('center');

//// header table

$xls->getActiveSheet()
        ->setCellValue('A12', 'NO')
        ->setCellValue('B12', 'KEGIATAN')
        ->setCellValue('C12', 'KEL.PABATON')
        ->setCellValue('E12', 'KEL.CIBOGOR')
        ->setCellValue('G12', 'LW WILAYAH')
        ->setCellValue('I12', 'Kab')
        ->setCellValue('K12', 'Jumlah')
        ->setCellValue('M12', 'TOTAL')
        ->setCellValue('C13', 'GAKIN')
        ->setCellValue('D13', 'NON GAKIN')
        ->setCellValue('E13', 'GAKIN')
        ->setCellValue('F13', 'NON GAKIN')
        ->setCellValue('G13', 'GAKIN')
        ->setCellValue('H13', 'NON GAKIN')
        ->setCellValue('I13', 'GAKIN')
        ->setCellValue('J13', 'NON GAKIN')
        ->setCellValue('K13', 'GAKIN')
        ->setCellValue('L13', 'NON GAKIN');


$xls->getActiveSheet()->getStyle('A12:M13')->getFill()->setFillType(Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFD8D8D8');


$xls->getActiveSheet()->getStyle("A12:M13")->getFont()->setBold(true);
$xls->getActiveSheet()->getStyle("A12:M13")->getAlignment()->setHorizontal('center');
$xls->getActiveSheet()->getStyle('A12:B13')->getFont()->setSize(11);
$xls->getActiveSheet()->getStyle('C12:M13')->getFont()->setSize(9);
$xls->getActiveSheet()->getStyle('C12:L12')->getFont()->setSize(11);
$xls->getActiveSheet()->getStyle("A12:M13")->applyFromArray($styleThinBlackBorderOutline);
$xls->getActiveSheet()->getColumnDimension("A")->setWidth(6);
$xls->getActiveSheet()->getColumnDimension("B")->setWidth(30);
$xls->getActiveSheet()->getStyle("D13:M13")->getAlignment()->setWrapText(true);
$xls->getActiveSheet()->getRowDimension('13')->setRowHeight(32.75);


for ($i = 1; $i <= 26; $i++){
    $n = $i+13;
    $xls->getActiveSheet()->setCellValueByColumnAndRow(0, $n, $i);
    $xls->getActiveSheet()->getStyle("A$n")->getAlignment()->setHorizontal('center');
}

    $xls->getActiveSheet()->setCellValue("B14", "Kunjungan Puskesmas");
    $xls->getActiveSheet()->setCellValue("B15", "Kunjungan Baru");
    $xls->getActiveSheet()->setCellValue("B16", "Kunjungan Lama");
    $xls->getActiveSheet()->setCellValue("B17", "Kunjungan Rawat Jalan Umum");
    $xls->getActiveSheet()->setCellValue("B18", "Kunjungan Rawat Jalan KIA");
    $xls->getActiveSheet()->setCellValue("B19", "Kunjungan Rawat Jalan KB");
    $xls->getActiveSheet()->setCellValue("B20", "Kunjungan Rawat Jalan Gigi");
    $xls->getActiveSheet()->setCellValue("B21", "Kunjungan Lain-lain/RB");
    $xls->getActiveSheet()->setCellValue("B22", "Penderita yang dirawat");
    $xls->getActiveSheet()->setCellValue("B23", "Hari Perawatan");
    $xls->getActiveSheet()->setCellValue("B24", "Lama Perawatan");
    $xls->getActiveSheet()->setCellValue("B25", "Penderita keluar hidup");
    $xls->getActiveSheet()->setCellValue("B26", "Penderita keluar meninggal kurang dari 48 jam");
    $xls->getActiveSheet()->setCellValue("B27", "Penderita keluar meninggal lebih dari 48 jam");
    $xls->getActiveSheet()->setCellValue("B28", "Penderita yang dirujuk ke rumah sakit/puskesmas DTP");
    $xls->getActiveSheet()->setCellValue("B29", "Rujukan dari kader, Posyandu, BP, Sekolah, dll");
    $xls->getActiveSheet()->setCellValue("B30", "Kunjungan dokter ahli");
    $xls->getActiveSheet()->setCellValue("B31", "Rujukan dari rumah sakit ke puskesmas");
    $xls->getActiveSheet()->setCellValue("B32", "Kunjungan Kartu Sehat");
    $xls->getActiveSheet()->setCellValue("B33", "Kunjungan peserta ASKES");
    $xls->getActiveSheet()->setCellValue("B34", "Kunjungan peserta Jamsostek");
    $xls->getActiveSheet()->setCellValue("B35", "Kunjungan peserta JPKM");
    $xls->getActiveSheet()->setCellValue("B36", "Kunjungan peserta asuransi kesehatan swasta");
    $xls->getActiveSheet()->setCellValue("B37", "Kunjungan peserta asuransi lainnya");
    $xls->getActiveSheet()->setCellValue("B38", "Kunjungan kartu sehat terdaftar di puskesmas");
    $xls->getActiveSheet()->setCellValue("B39", "Peserta kartu sehat yang dirujuk ke rumah sakit/puskesmas DTP");
    $xls->getActiveSheet()->getStyle("B14:M41")->getAlignment()->setWrapText(true);
    $xls->getActiveSheet()->getStyle('A14:M40')->applyFromArray($styleThinBlackBorderOutline);
    //isi tabelnya
    //kunjungan total
    $xls->getActiveSheet()->setCellValue("C14", $laporan[0]['kunj_gakin_pab']);
    $xls->getActiveSheet()->setCellValue("D14", $laporan[0]['kunj_ngakin_pab']);
    $xls->getActiveSheet()->setCellValue("E14", $laporan[0]['kunj_gakin_cib']);
    $xls->getActiveSheet()->setCellValue("F14", $laporan[0]['kunj_ngakin_cib']);
    $xls->getActiveSheet()->setCellValue("G14", $laporan[0]['kunj_gakin_lw']);
    $xls->getActiveSheet()->setCellValue("H14", $laporan[0]['kunj_ngakin_lw']);
    $xls->getActiveSheet()->setCellValue("I14", $laporan[0]['kunj_gakin_lk']);
    $xls->getActiveSheet()->setCellValue("J14", $laporan[0]['kunj_ngakin_lk']);
    $xls->getActiveSheet()->setCellValue("K14", "=SUM(C14,E14,G14,I14)");
    $xls->getActiveSheet()->setCellValue("L14", "=SUM(D14,F14,H14,J14)");
    $xls->getActiveSheet()->setCellValue("M14", "=SUM(K14,L14)");
    //kunjungan baru
    $xls->getActiveSheet()->setCellValue("C15", $laporan[0]['baru_g_pab']);
    $xls->getActiveSheet()->setCellValue("D15", $laporan[0]['baru_ng_pab']);
    $xls->getActiveSheet()->setCellValue("E15", $laporan[0]['baru_g_cib']);
    $xls->getActiveSheet()->setCellValue("F15", $laporan[0]['baru_ng_cib']);
    $xls->getActiveSheet()->setCellValue("G15", $laporan[0]['baru_g_LW']);
    $xls->getActiveSheet()->setCellValue("H15", $laporan[0]['baru_ng_LW']);
    $xls->getActiveSheet()->setCellValue("I15", $laporan[0]['baru_g_LK']);
    $xls->getActiveSheet()->setCellValue("J15", $laporan[0]['baru_ng_LK']);
    $xls->getActiveSheet()->setCellValue("K15", "=SUM(C15,E15,G15,I15)");
    $xls->getActiveSheet()->setCellValue("L15", "=SUM(D15,F15,H15,J15)");
    $xls->getActiveSheet()->setCellValue("M15", "=SUM(K15,L15)");
    //kunjungan lama
    $xls->getActiveSheet()->setCellValue("C16", $laporan[0]['lama_g_pab']);
    $xls->getActiveSheet()->setCellValue("D16", $laporan[0]['lama_ng_pab']);
    $xls->getActiveSheet()->setCellValue("E16", $laporan[0]['lama_g_cib']);
    $xls->getActiveSheet()->setCellValue("F16", $laporan[0]['lama_ng_cib']);
    $xls->getActiveSheet()->setCellValue("G16", $laporan[0]['lama_g_LW']);
    $xls->getActiveSheet()->setCellValue("H16", $laporan[0]['lama_ng_LW']);
    $xls->getActiveSheet()->setCellValue("I16", $laporan[0]['lama_g_LK']);
    $xls->getActiveSheet()->setCellValue("J16", $laporan[0]['lama_ng_LK']);
    $xls->getActiveSheet()->setCellValue("K16", "=SUM(C16,E16,G16,I16)");
    $xls->getActiveSheet()->setCellValue("L16", "=SUM(D16,F16,H16,J16)");
    $xls->getActiveSheet()->setCellValue("M16", "=SUM(K16,L16)");
    //kunjungan rawat jalan umum
    $xls->getActiveSheet()->setCellValue("C17", $laporan[0]['umum_pab_gakin']);
    $xls->getActiveSheet()->setCellValue("D17", $laporan[0]['umum_pab_ngakin']);
    $xls->getActiveSheet()->setCellValue("E17", $laporan[0]['umum_cib_gakin']);
    $xls->getActiveSheet()->setCellValue("F17", $laporan[0]['umum_cib_ngakin']);
    $xls->getActiveSheet()->setCellValue("G17", $laporan[0]['umum_lw_gakin']);
    $xls->getActiveSheet()->setCellValue("H17", $laporan[0]['umum_lw_ngakin']);
    $xls->getActiveSheet()->setCellValue("I17", $laporan[0]['umum_lk_gakin']);
    $xls->getActiveSheet()->setCellValue("J17", $laporan[0]['umum_lk_ngakin']);
    $xls->getActiveSheet()->setCellValue("K17", "=SUM(C17,E17,G17,I17)");
    $xls->getActiveSheet()->setCellValue("L17", "=SUM(D17,F17,H17,J17)");
    $xls->getActiveSheet()->setCellValue("M17", "=SUM(K17,L17)");
    //kunjungan rawat jalan kia
    $xls->getActiveSheet()->setCellValue("C18", $laporan[0]['kia_pab_gakin']);
    $xls->getActiveSheet()->setCellValue("D18", $laporan[0]['kia_pab_ngakin']);
    $xls->getActiveSheet()->setCellValue("E18", $laporan[0]['kia_cib_gakin']);
    $xls->getActiveSheet()->setCellValue("F18", $laporan[0]['kia_cib_ngakin']);
    $xls->getActiveSheet()->setCellValue("G18", $laporan[0]['kia_lw_gakin']);
    $xls->getActiveSheet()->setCellValue("H18", $laporan[0]['kia_lw_ngakin']);
    $xls->getActiveSheet()->setCellValue("I18", $laporan[0]['kia_lk_gakin']);
    $xls->getActiveSheet()->setCellValue("J18", $laporan[0]['kia_lk_ngakin']);
    $xls->getActiveSheet()->setCellValue("K18", "=SUM(C18,E18,G18,I18)");
    $xls->getActiveSheet()->setCellValue("L18", "=SUM(D18,F18,H18,J18)");
    $xls->getActiveSheet()->setCellValue("M18", "=SUM(K18,L18)");
    //kunjungan rawat jalan kb --> BELOM

    //kunjungan GIGI
    $xls->getActiveSheet()->setCellValue("C19", $laporan[0]['gigi_pab_gakin']);
    $xls->getActiveSheet()->setCellValue("D19", $laporan[0]['gigi_pab_ngakin']);
    $xls->getActiveSheet()->setCellValue("E19", $laporan[0]['gigi_cib_gakin']);
    $xls->getActiveSheet()->setCellValue("F19", $laporan[0]['gigi_cib_ngakin']);
    $xls->getActiveSheet()->setCellValue("G19", $laporan[0]['gigi_lw_gakin']);
    $xls->getActiveSheet()->setCellValue("H19", $laporan[0]['gigi_lw_ngakin']);
    $xls->getActiveSheet()->setCellValue("I19", $laporan[0]['gigi_lk_gakin']);
    $xls->getActiveSheet()->setCellValue("J19", $laporan[0]['gigi_lk_ngakin']);
    $xls->getActiveSheet()->setCellValue("K19", "=SUM(C19,E19,G19,I19)");
    $xls->getActiveSheet()->setCellValue("L19", "=SUM(D19,F19,H19,J19)");
    $xls->getActiveSheet()->setCellValue("M19", "=SUM(K19,L19)");

    //kunjungan rawat RB --> BELOM

//    //PENGGUNA ASKES
//    $xls->getActiveSheet()->setCellValue("C18", $laporan[0]['kia_pab_gakin']);
//    $xls->getActiveSheet()->setCellValue("D18", $laporan[0]['kia_pab_ngakin']);
//    $xls->getActiveSheet()->setCellValue("E18", $laporan[0]['kia_cib_gakin']);
//    $xls->getActiveSheet()->setCellValue("F18", $laporan[0]['kia_cib_ngakin']);
//    $xls->getActiveSheet()->setCellValue("G18", $laporan[0]['kia_lw_gakin']);
//    $xls->getActiveSheet()->setCellValue("H18", $laporan[0]['kia_lw_ngakin']);
//    $xls->getActiveSheet()->setCellValue("I18", $laporan[0]['kia_lk_gakin']);
//    $xls->getActiveSheet()->setCellValue("J18", $laporan[0]['kia_lk_ngakin']);
//    $xls->getActiveSheet()->setCellValue("K18", "=SUM(C18,E18,G18,I18)");
//    $xls->getActiveSheet()->setCellValue("L18", "=SUM(D18,F18,H18,J18)");
//    $xls->getActiveSheet()->setCellValue("M18", "=SUM(K18,L18)");

    //total semua
    $xls->getActiveSheet()->mergeCells("A40:B40")->setCellValue("A40", "JUMLAH");
    $xls->getActiveSheet()->getStyle("A40:M40")->getFont()->setBold(true);
    $xls->getActiveSheet()->getStyle("A40:M40")->getAlignment()->setHorizontal('center')->setVertical('center');
    $xls->getActiveSheet()->getStyle("A40:M40")->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension('40')->setRowHeight(22.75);
    $xls->getActiveSheet()->setCellValue("C40", "=SUM(C14:C39)");
    $xls->getActiveSheet()->setCellValue("D40", "=SUM(D14:D39)");
    $xls->getActiveSheet()->setCellValue("E40", "=SUM(E14:E39)");
    $xls->getActiveSheet()->setCellValue("F40", "=SUM(F14:F39)");
    $xls->getActiveSheet()->setCellValue("G40", "=SUM(G14:G39)");
    $xls->getActiveSheet()->setCellValue("H40", "=SUM(H14:H39)");
    $xls->getActiveSheet()->setCellValue("I40", "=SUM(I14:I39)");
    $xls->getActiveSheet()->setCellValue("J40", "=SUM(J14:J39)");
    $xls->getActiveSheet()->setCellValue("K40", "=SUM(K14:K39)");
    $xls->getActiveSheet()->setCellValue("L40", "=SUM(L14:L39)");
    $xls->getActiveSheet()->setCellValue("M40", "=SUM(M14:M39)");

    

    //JUMLAH
    //
// lebar kolom jadi auto
//$xls->getActiveSheet()->getStyle("A6:Q8")->getFont()->setBold(true);
//$xls->getActiveSheet()->getColumnDimension("A")->setWidth(8);
//$xls->getActiveSheet()->getColumnDimension("B")->setWidth(10);
//$xls->getActiveSheet()->getColumnDimension("C")->setWidth(10);
//$xls->getActiveSheet()->getColumnDimension("D")->setWidth(10);
//$xls->getActiveSheet()->getColumnDimension("E")->setWidth(10);
//
//$xls->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
////$xls->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
////$xls->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
////$xls->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
////$xls->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
//$xls->getActiveSheet()->getColumnDimension('F')->setWidth(10);
//$xls->getActiveSheet()->getColumnDimension('G')->setWidth(10);
//$xls->getActiveSheet()->getColumnDimension('H')->setWidth(10);
//$xls->getActiveSheet()->getColumnDimension('I')->setWidth(10);
//$xls->getActiveSheet()->getColumnDimension('J')->setWidth(10);
//$xls->getActiveSheet()->getColumnDimension('K')->setWidth(10);
//$xls->getActiveSheet()->getColumnDimension('L')->setWidth(10);
//$xls->getActiveSheet()->getColumnDimension('M')->setWidth(10);
//$xls->getActiveSheet()->getColumnDimension('N')->setWidth(10);
//$xls->getActiveSheet()->getColumnDimension('O')->setWidth(10);
//$xls->getActiveSheet()->getColumnDimension('P')->setWidth(10);
//$xls->getActiveSheet()->getColumnDimension('Q')->setWidth(10);
//

//
//// print data
//
//$i=9; foreach ($laporan as $hasil) :
//    //print_r($hasil);exit;
//    $xls->getActiveSheet()->setCellValue("A$i", $i-8);
//    $xls->getActiveSheet()->setCellValue("B$i", $hasil['umum']);
//    $xls->getActiveSheet()->setCellValue("C$i", " ");
//    $xls->getActiveSheet()->setCellValue("D$i", $hasil['labor']);
//    $xls->getActiveSheet()->setCellValue("E$i", $hasil['rontgen']);
//
//    $xls->getActiveSheet()->setCellValue("F$i", $hasil['ekg']);
//    $xls->getActiveSheet()->setCellValue("G$i", $hasil['haji']);
//    $xls->getActiveSheet()->setCellValue("H$i", $hasil['rb']);
//
//    $xls->getActiveSheet()->setCellValue("I$i", $hasil['anak']);
//    $xls->getActiveSheet()->setCellValue("J$i", " ");
//    $xls->getActiveSheet()->setCellValue("K$i", $hasil['usg']);
//    $xls->getActiveSheet()->setCellValue("L$i", '');
//    $xls->getActiveSheet()->setCellValue("M$i", $hasil['catin']);
//    $xls->getActiveSheet()->setCellValue("N$i", '');
//    $xls->getActiveSheet()->setCellValue("O$i", $hasil['mantuox']);
//    $xls->getActiveSheet()->setCellValue("P$i", "=SUM(B$i:O$i");
//
//    $xls->getActiveSheet()->getStyle("A$i:P$i")->getAlignment()->setVertical('center');
//    $xls->getActiveSheet()->getStyle("A$i:P$i")->getFont()->setSize(12);
//    $xls->getActiveSheet()->getRowDimension($i)->setRowHeight(25);
//    $xls->getActiveSheet()->getStyle("A$i:Q$i")->applyFromArray($styleThinBlackBorderOutline);
//
//    // A,E,F,G,I,L: center
//
//    $xls->getActiveSheet()->getStyle("A$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("B$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("C$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("D$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("E$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("F$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("G$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("H$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("I$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("J$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("K$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("L$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("M$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("N$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("O$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("P$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("Q$i")->getAlignment()->setHorizontal('center');
//
//$i++; endforeach;
//
////echo "i= ".$i;exit;
//// 30 hari
//if($i==40)
//    $z=40;
////31 hari
//else if($i==39) $z=39;
//
//$y=10;
//
////echo $i." ".$z;exit;
//$xls->getActiveSheet()->setCellValue("A$i","JUMLAH");
//$xls->getActiveSheet()->setCellValue("B$i","SUM(B$y:B$z)");
//$xls->getActiveSheet()->setCellValue("C$i","SUM(C$y:C$z)");
//$xls->getActiveSheet()->setCellValue("D$i","SUM(D$y:D$z)");
//$xls->getActiveSheet()->setCellValue("E$i","SUM(E$y:E$z)");
//$xls->getActiveSheet()->setCellValue("F$i","SUM(F$y:F$z)");
//$xls->getActiveSheet()->setCellValue("G$i","SUM(G$y:G$z)");
//$xls->getActiveSheet()->setCellValue("H$i","SUM(H$y:H$z)");
//$xls->getActiveSheet()->setCellValue("I$i","SUM(I$y:I$z)");
//$xls->getActiveSheet()->setCellValue("J$i","SUM(J$y:J$z)");
//$xls->getActiveSheet()->setCellValue("K$i","SUM(K$y:K$z)");
//$xls->getActiveSheet()->setCellValue("L$i","SUM(L$y:L$z)");
//$xls->getActiveSheet()->setCellValue("M$i","SUM(M$y:M$z)");
//$xls->getActiveSheet()->setCellValue("N$i","SUM(N$y:N$z)");
//$xls->getActiveSheet()->setCellValue("O$i","SUM(O$y:O$z)");
//$xls->getActiveSheet()->setCellValue("P$i","SUM(P$y:P$z)");
//
//// output it
//
//$xls->getActiveSheet()->getStyle("A$i:Q$i")->applyFromArray($styleThinBlackBorderOutline);
//$xls->getActiveSheet()->getStyle("A$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("B$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("C$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("D$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("E$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("F$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("G$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("H$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("I$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("J$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("K$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("L$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("M$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("N$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("O$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("P$i")->getAlignment()->setHorizontal('center');
//    $xls->getActiveSheet()->getStyle("Q$i")->getAlignment()->setHorizontal('center');
//
//    $xls->getActiveSheet()->getStyle("A$i:Q$i")->getFont()->setBold(true);
//    $xls->getActiveSheet()->getRowDimension($i)->setRowHeight(25);
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="LB4_' . $bulan . '_' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($xls, "Excel5");
$objWriter->save("php://output");