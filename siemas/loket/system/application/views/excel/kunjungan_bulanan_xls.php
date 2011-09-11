<?php
//print_r($data);exit;
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
        ->setTitle("Laporan Kunjungan Bulanan")
        ->setSubject("Laporan Kunjungan Bulanan");

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

// header

$xls->getActiveSheet()->setTitle("Lap.Kunjungan " . $bulan . ' ' . $tahun);

$xls->getActiveSheet()->mergeCells("B2:F2")->setCellValueByColumnAndRow(1, 2, "LAPORAN KUNJUNGAN");
$xls->getActiveSheet()->getStyle('B2')->getFont()->setSize(16)->setBold(true);
$xls->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("B3:F3")->setCellValueByColumnAndRow(1, 3, "PUSKESMAS BOGOR TENGAH");
$xls->getActiveSheet()->getStyle('B3')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('B3')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("B4:F4")->setCellValueByColumnAndRow(1, 4, "$bulan $tahun");
$xls->getActiveSheet()->getStyle('B4')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('B4')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->getRowDimension('2')->setRowHeight(18.5);
$xls->getActiveSheet()->getRowDimension('3')->setRowHeight(18);
$xls->getActiveSheet()->getRowDimension('4')->setRowHeight(18);

$xls->getActiveSheet()->getRowDimension('6')->setRowHeight(25.5);
$xls->getActiveSheet()->getRowDimension('7')->setRowHeight(25.5);
$xls->getActiveSheet()->getRowDimension('8')->setRowHeight(12.75);

// table header

$xls->getActiveSheet()
        ->mergeCells('B6:B7')
        ->mergeCells('C6:C7')
        ->mergeCells('D6:E6')
        ->mergeCells('F6:F7')
        ->getStyle('B6:F7')->getAlignment()->setHorizontal('center')->setVertical('center');

$xls->getActiveSheet()->getStyle('B6:F7')->getFont()->setSize(11);
//buat ngasih background
$xls->getActiveSheet()->getStyle('B6:F7')->getFill()->setFillType(Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFDDEEDD');

// header table

$xls->getActiveSheet()
        ->setCellValue('B6', 'JENIS KUNJUNGAN')
        ->setCellValue('C6', 'ASKES')
        ->setCellValue('D6', 'GRATIS')
        ->setCellValue('D7', 'ASKESKIN')
        ->setCellValue('E7', 'LAIN-LAIN')
        ->setCellValue('F6', 'BAYAR')
        ;

//$xls->getActiveSheet()->getStyle('A6')->getFill()->getStartColor()->setARGB('C0C0C0');

// lebar kolom jadi auto
$xls->getActiveSheet()->getStyle("B6:F7")->getFont()->setBold(true);
//$xls->getActiveSheet()->getColumnDimension("A")->setWidth(8);
$xls->getActiveSheet()->getColumnDimension('A')->setWidth(3);
$xls->getActiveSheet()->getColumnDimension("B")->setWidth(30);
$xls->getActiveSheet()->getColumnDimension("C")->setWidth(9);
$xls->getActiveSheet()->getColumnDimension("D")->setWidth(11);
$xls->getActiveSheet()->getColumnDimension("E")->setWidth(11);
$xls->getActiveSheet()->getColumnDimension("F")->setWidth(9);


$xls->getActiveSheet()->getStyle('B6:F7')->applyFromArray($styleThinBlackBorderOutline);

// print data

    //print_r($hasil);exit;
    $xls->getActiveSheet()->setCellValue("B8", "Jumlah Kunjungan BP Umum");
    $xls->getActiveSheet()->setCellValue("B9", "Jumlah Kunjungan BP Gigi");
    $xls->getActiveSheet()->setCellValue("B10", "Jumlah Kunjungan KIA");
    $xls->getActiveSheet()->setCellValue("B11", "Jumlah Kunjungan Lab");
    $xls->getActiveSheet()->setCellValue("B12", "Jumlah Kunjungan RB");

    $xls->getActiveSheet()->setCellValue("B13", "Jumlah Kunjungan Haji");
    $xls->getActiveSheet()->setCellValue("B14", "Jumlah Kunjungan EKG");
    $xls->getActiveSheet()->setCellValue("B15", "Jumlah Kunjungan Spesialis Anak");

    $xls->getActiveSheet()->setCellValue("B16", "Jumlah Kunjungan Spesialis Dalam");
    $xls->getActiveSheet()->setCellValue("B17", "Jumlah Kunjungan Rontgen");
    $xls->getActiveSheet()->setCellValue("B18", "Jumlah Kunjungan Rontgen Gigi");
    $xls->getActiveSheet()->setCellValue("B19", "Jumlah Kunjungan Rujukan");
    $xls->getActiveSheet()->setCellValue("B20", "J U M L A H");

    // A.S.K.E.S
    $xls->getActiveSheet()->setCellValue("C8", $laporan[0]['umum_askes']);
    $xls->getActiveSheet()->setCellValue("C9", $laporan[0]['gigi_askes']);
    $xls->getActiveSheet()->setCellValue("C10",$laporan[0]['kia_askes']);
    $xls->getActiveSheet()->setCellValue("C11",$laporan[0]['lab_askes']);
    $xls->getActiveSheet()->setCellValue("C12",$laporan[0]['rb_askes']);

    $xls->getActiveSheet()->setCellValue("C13",$laporan[0]['haji_askes']);
    $xls->getActiveSheet()->setCellValue("C14",$laporan[0]['ekg_askes']);
    $xls->getActiveSheet()->setCellValue("C15",$laporan[0]['anak_askes']);

    $xls->getActiveSheet()->setCellValue("C16",$laporan[0]['dalam_askes']);
    $xls->getActiveSheet()->setCellValue("C17",$laporan[0]['rontgen_askes']);
    $xls->getActiveSheet()->setCellValue("C18",$laporan[0]['rontgen_gigi_askes']);
    $xls->getActiveSheet()->setCellValue("C19",$laporan[0]['rujukan_askes']);
    $xls->getActiveSheet()->setCellValue("C20", "=SUM(C8:C19)");

    // A.S.K.E.S.K.I.N
    $xls->getActiveSheet()->setCellValue("D8", $laporan[0]['umum_askeskin']);
    $xls->getActiveSheet()->setCellValue("D9", $laporan[0]['gigi_askeskin']);
    $xls->getActiveSheet()->setCellValue("D10",$laporan[0]['kia_askeskin']);
    $xls->getActiveSheet()->setCellValue("D11",$laporan[0]['lab_askeskin']);
    $xls->getActiveSheet()->setCellValue("D12",$laporan[0]['rb_askeskin']);

    $xls->getActiveSheet()->setCellValue("D13", $laporan[0]['haji_askeskin']);
    $xls->getActiveSheet()->setCellValue("D14", $laporan[0]['ekg_askeskin']);
    $xls->getActiveSheet()->setCellValue("D15", $laporan[0]['anak_askeskin']);

    $xls->getActiveSheet()->setCellValue("D16", $laporan[0]['dalam_askeskin']);
    $xls->getActiveSheet()->setCellValue("D17", $laporan[0]['rontgen_askeskin']);
    $xls->getActiveSheet()->setCellValue("D18", $laporan[0]['rontgen_gigi_askeskin']);
    $xls->getActiveSheet()->setCellValue("D19", $laporan[0]['rujukan_askeskin']);
    $xls->getActiveSheet()->setCellValue("D20", "=SUM(D8:D19)");

    // LAIN-LAIN
    $xls->getActiveSheet()->setCellValue("E8", $laporan[0]['umum_gr']);
    $xls->getActiveSheet()->setCellValue("E9", $laporan[0]['gigi_gr']);
    $xls->getActiveSheet()->setCellValue("E10",$laporan[0]['kia_gr']);
    $xls->getActiveSheet()->setCellValue("E11",$laporan[0]['lab_gr']);
    $xls->getActiveSheet()->setCellValue("E12",$laporan[0]['rb_gr']);

    $xls->getActiveSheet()->setCellValue("E13", $laporan[0]['haji_gr']);
    $xls->getActiveSheet()->setCellValue("E14", $laporan[0]['ekg_gr']);
    $xls->getActiveSheet()->setCellValue("E15", $laporan[0]['anak_gr']);

    $xls->getActiveSheet()->setCellValue("E16", $laporan[0]['dalam_gr']);
    $xls->getActiveSheet()->setCellValue("E17", $laporan[0]['rontgen_gr']);
    $xls->getActiveSheet()->setCellValue("E18", $laporan[0]['rontgen_gigi_gr']);
    $xls->getActiveSheet()->setCellValue("E19", $laporan[0]['rujukan_gr']);
    $xls->getActiveSheet()->setCellValue("E20", "=SUM(E8:E19)");

    // BAYAR
    $xls->getActiveSheet()->setCellValue("F8", $laporan[0]['umum_bayar']);
    $xls->getActiveSheet()->setCellValue("F9", $laporan[0]['gigi_bayar']);
    $xls->getActiveSheet()->setCellValue("F10",$laporan[0]['kia_bayar']);
    $xls->getActiveSheet()->setCellValue("F11",$laporan[0]['lab_bayar']);
    $xls->getActiveSheet()->setCellValue("F12", $laporan[0]['rb_bayar']);

    $xls->getActiveSheet()->setCellValue("F13",$laporan[0]['haji_bayar']);
    $xls->getActiveSheet()->setCellValue("F14",$laporan[0]['ekg_bayar']);
    $xls->getActiveSheet()->setCellValue("F15",$laporan[0]['anak_bayar']);

    $xls->getActiveSheet()->setCellValue("F16", $laporan[0]['dalam_bayar']);
    $xls->getActiveSheet()->setCellValue("F17", $laporan[0]['rontgen_bayar']);
    $xls->getActiveSheet()->setCellValue("F18", $laporan[0]['rontgen_gigi_bayar']);
    $xls->getActiveSheet()->setCellValue("F19", $laporan[0]['haji_bayar']);
    $xls->getActiveSheet()->setCellValue("F20", "=SUM(F8:F19)");

    $xls->getActiveSheet()->getStyle("B8:B19")->getAlignment()->setHorizontal('left');
    $xls->getActiveSheet()->getStyle("C8:F19")->getAlignment()->setVertical('center')->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("B20:F20")->getAlignment()->setVertical('center')->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("B20:F20")->getFont()->setBold(true);
    $xls->getActiveSheet()->getStyle("B8:B19")->getFont()->setSize(11);
    $xls->getActiveSheet()->getStyle("B20")->getFont()->setSize(12);
    $xls->getActiveSheet()->getStyle("B8:F20")->applyFromArray($styleThinBlackBorderOutline);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Lap.Kunj_' . $bulan . '_' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($xls, "Excel5");
$objWriter->save("php://output");