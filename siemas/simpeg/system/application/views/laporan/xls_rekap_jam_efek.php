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

// PHPExcel object

$xls = new PHPExcel();

// Set properties
$xls->getProperties()->setCreator("SIM Puskesmas Bogor Tengah")
        ->setLastModifiedBy("SIM Puskesmas Bogor Tengah")
        ->setTitle("Daftar Jam Efektif Pegawai")
        ->setSubject("Daftar Jam Efektif Pegawai Puskesmas Bogor Tengah");

$xls->setActiveSheetIndex(0);

$xls->getDefaultStyle()->getFont()->setName('Arial');

$styleThinBlackBorderOutline = array(
    'borders' => array(
        'allborders' => array(
            'style' => Style_Border::BORDER_THIN,
            'color' => array('argb' => 'FF000000'),
        ),
    ),
);

switch ($jumlah_hari_bulan_ini) {
    case 28 :
        $max_column_name = 'AD';
        $kolom_jumlah = 'AE';
        break;
    case 29 :
        $max_column_name = 'AE';
        $kolom_jumlah = 'AF';
        break;
    case 30 :
        $max_column_name = 'AF';
        $kolom_jumlah = 'AG';
        break;
    case 31 :
        $max_column_name = 'AG';
        $kolom_jumlah = 'AH';
        break;
}

$max_column_num = $jumlah_hari_bulan_ini + 1;

// --- PUSKESMAS ---
// header

$xls->getActiveSheet()->setTitle("Puskesmas");

$xls->getActiveSheet()->mergeCells("A2:{$kolom_jumlah}2")->setCellValueByColumnAndRow(0, 2, "DAFTAR PENILAIAN JAM EFEKTIF PEGAWAI");
$xls->getActiveSheet()->getStyle('A2')->getFont()->setSize(16)->setBold(true);
$xls->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A3:{$kolom_jumlah}3")->setCellValueByColumnAndRow(0, 3, "PADA PUSKESMAS BOGOR TENGAH");
$xls->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A4:{$kolom_jumlah}4")->setCellValueByColumnAndRow(0, 4, "Bulan : " . $nama_bulan[$bulan] . ' ' . $tahun);
$xls->getActiveSheet()->getStyle('A4')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->getRowDimension('2')->setRowHeight(19.5);
$xls->getActiveSheet()->getRowDimension('3')->setRowHeight(18);
$xls->getActiveSheet()->getRowDimension('4')->setRowHeight(18);

$xls->getActiveSheet()->getRowDimension('6')->setRowHeight(20);
$xls->getActiveSheet()->getRowDimension('7')->setRowHeight(20);

// table header

$xls->getActiveSheet()
        ->mergeCells('A6:A7')
        ->mergeCells('B6:B7')
        ->mergeCells("C6:{$max_column_name}6")
        ->mergeCells("{$kolom_jumlah}6:{$kolom_jumlah}7")
        ->getStyle("A6:{$kolom_jumlah}7")->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);

$xls->getActiveSheet()
        ->setCellValue('A6', 'NO')
        ->setCellValue('B6', 'Nama')
        ->setCellValue('C6', "Tanggal")
        ->setCellValue("{$kolom_jumlah}6", 'Jumlah');

for ($t = 1; $t <= $jumlah_hari_bulan_ini; $t++) {
    $xls->getActiveSheet()->setCellValueByColumnAndRow($t + 1, 7, $t);
    if (in_array($t, $tanggal_libur_pkm)) {
        $xls->getActiveSheet()->getStyleByColumnAndRow($t + 1, 7)->getFill()->setFillType(Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFD8D8D8');
    }
}

// header border
$xls->getActiveSheet()->getStyle("A6:{$kolom_jumlah}7")->applyFromArray($styleThinBlackBorderOutline);

// print data

$baris = 8;
foreach ($jam_efek_pkm as $a) {

    $xls->getActiveSheet()->setCellValue("A$baris", $baris - 7);
    $xls->getActiveSheet()->setCellValue("B$baris", $a['nama']);
    $xls->getActiveSheet()->getRowDimension($baris)->setRowHeight(20);
    $xls->getActiveSheet()->getStyleByColumnAndRow(0, $baris)->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle($kolom_jumlah . $baris)->getAlignment()->setHorizontal('center');

    for ($j = 1; $j <= $jumlah_hari_bulan_ini; $j++) {
        if (in_array($j, $tanggal_libur_pkm)) {
            $xls->getActiveSheet()->getStyleByColumnAndRow($j + 1, $baris)->getFill()->setFillType(Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFD8D8D8');
        } else {
            $xls->getActiveSheet()->setCellValueByColumnAndRow($j + 1, $baris, round($a['jam_efek_' . $j], 1));
            $xls->getActiveSheet()->getStyleByColumnAndRow($j + 1, $baris)->getAlignment()->setHorizontal('center');
        }
    }
    
    $xls->getActiveSheet()->setCellValue($kolom_jumlah . $baris, $a['jumlah'] . " Jam");

    $baris++;
}

// allborder

$xls->getActiveSheet()->getStyle("A8:" . $kolom_jumlah . ($baris - 1))->applyFromArray($styleThinBlackBorderOutline);

// column width

$xls->getActiveSheet()->getColumnDimension('A')->setWidth(4.14);
$xls->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension($kolom_jumlah)->setWidth(10);
for ($j = 1; $j <= $jumlah_hari_bulan_ini; $j++) {
    $xls->getActiveSheet()->getColumnDimensionByColumn($j + 1)->setWidth(5);
}

// --- BP PEMDA ---
// header

$xls->createSheet();
$xls->setActiveSheetIndex(1);
$xls->getActiveSheet()->setTitle("BP Pemda");

$xls->getActiveSheet()->mergeCells("A2:{$kolom_jumlah}2")->setCellValueByColumnAndRow(0, 2, "DAFTAR PENILAIAN JAM EFEKTIF PEGAWAI");
$xls->getActiveSheet()->getStyle('A2')->getFont()->setSize(16)->setBold(true);
$xls->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A3:{$kolom_jumlah}3")->setCellValueByColumnAndRow(0, 3, "PADA BP PEMDA");
$xls->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A4:{$kolom_jumlah}4")->setCellValueByColumnAndRow(0, 4, "Bulan : " . $nama_bulan[$bulan] . ' ' . $tahun);
$xls->getActiveSheet()->getStyle('A4')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->getRowDimension('2')->setRowHeight(19.5);
$xls->getActiveSheet()->getRowDimension('3')->setRowHeight(18);
$xls->getActiveSheet()->getRowDimension('4')->setRowHeight(18);

$xls->getActiveSheet()->getRowDimension('6')->setRowHeight(20);
$xls->getActiveSheet()->getRowDimension('7')->setRowHeight(20);

// table header

$xls->getActiveSheet()
        ->mergeCells('A6:A7')
        ->mergeCells('B6:B7')
        ->mergeCells("C6:{$max_column_name}6")
        ->mergeCells("{$kolom_jumlah}6:{$kolom_jumlah}7")
        ->getStyle("A6:{$kolom_jumlah}7")->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);

$xls->getActiveSheet()
        ->setCellValue('A6', 'NO')
        ->setCellValue('B6', 'Nama')
        ->setCellValue('C6', "Tanggal")
        ->setCellValue("{$kolom_jumlah}6", 'Jumlah');

for ($t = 1; $t <= $jumlah_hari_bulan_ini; $t++) {
    $xls->getActiveSheet()->setCellValueByColumnAndRow($t + 1, 7, $t);
    if (in_array($t, $tanggal_libur_pkm)) {
        $xls->getActiveSheet()->getStyleByColumnAndRow($t + 1, 7)->getFill()->setFillType(Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFD8D8D8');
    }
}

// header border
$xls->getActiveSheet()->getStyle("A6:{$kolom_jumlah}7")->applyFromArray($styleThinBlackBorderOutline);

// print data

$baris = 8;
foreach ($jam_efek_bp as $a) {

    $xls->getActiveSheet()->setCellValue("A$baris", $baris - 7);
    $xls->getActiveSheet()->setCellValue("B$baris", $a['nama']);
    $xls->getActiveSheet()->getRowDimension($baris)->setRowHeight(20);
    $xls->getActiveSheet()->getStyleByColumnAndRow(0, $baris)->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle($kolom_jumlah . $baris)->getAlignment()->setHorizontal('center');

    for ($j = 1; $j <= $jumlah_hari_bulan_ini; $j++) {
        if (in_array($j, $tanggal_libur_pkm)) {
            $xls->getActiveSheet()->getStyleByColumnAndRow($j + 1, $baris)->getFill()->setFillType(Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFD8D8D8');
        } else {
            $xls->getActiveSheet()->setCellValueByColumnAndRow($j + 1, $baris, round($a['jam_efek_' . $j], 1));
            $xls->getActiveSheet()->getStyleByColumnAndRow($j + 1, $baris)->getAlignment()->setHorizontal('center');
        }
    }

    $xls->getActiveSheet()->setCellValue($kolom_jumlah . $baris, $a['jumlah'] . " Jam");

    $baris++;
}

// allborder

$xls->getActiveSheet()->getStyle("A8:" . $kolom_jumlah . ($baris - 1))->applyFromArray($styleThinBlackBorderOutline);

// column width

$xls->getActiveSheet()->getColumnDimension('A')->setWidth(4.14);
$xls->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension($kolom_jumlah)->setWidth(10);
for ($j = 1; $j <= $jumlah_hari_bulan_ini; $j++) {
    $xls->getActiveSheet()->getColumnDimensionByColumn($j + 1)->setWidth(5);
}

// output it

$xls->setActiveSheetIndex(0);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Rekap_Absensi_' . $bulan . '_' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($xls, "Excel5");
$objWriter->save("php://output");