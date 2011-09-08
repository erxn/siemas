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
    $xls->getActiveSheet()->setCellValue("C11", "Lab");
    $xls->getActiveSheet()->setCellValue("C12", "RB");

    $xls->getActiveSheet()->setCellValue("C13",$laporan[0]['haji_askes']);
    $xls->getActiveSheet()->setCellValue("C14",$laporan[0]['ekg_askes']);
    $xls->getActiveSheet()->setCellValue("C15", $laporan[0]['anak_askes']);

    $xls->getActiveSheet()->setCellValue("C16",$laporan[0]['dalam_askes']);
    $xls->getActiveSheet()->setCellValue("C17", $laporan[0]['rontgen_askes']);
    $xls->getActiveSheet()->setCellValue("C18", "Rontgen Gigi");
    $xls->getActiveSheet()->setCellValue("C19", "Rujukan");
    $xls->getActiveSheet()->setCellValue("C20", "=SUM(C8:C19)");

    // A.S.K.E.S.K.I.N
    $xls->getActiveSheet()->setCellValue("D8", "Umum");
    $xls->getActiveSheet()->setCellValue("D9", "Gigi");
    $xls->getActiveSheet()->setCellValue("D10", "KIA");
    $xls->getActiveSheet()->setCellValue("D11", "Lab");
    $xls->getActiveSheet()->setCellValue("D12", "RB");

    $xls->getActiveSheet()->setCellValue("D13", "Haji");
    $xls->getActiveSheet()->setCellValue("D14", "EKG");
    $xls->getActiveSheet()->setCellValue("D15", "Spesialis Anak");

    $xls->getActiveSheet()->setCellValue("D16", "Spesialis Dalam");
    $xls->getActiveSheet()->setCellValue("D17", "Rontgen");
    $xls->getActiveSheet()->setCellValue("D18", "Rontgen Gigi");
    $xls->getActiveSheet()->setCellValue("D19", "Rujukan");
    $xls->getActiveSheet()->setCellValue("D20", "J U M L A H");

    // LAIN-LAIN
    $xls->getActiveSheet()->setCellValue("E8", "Umum");
    $xls->getActiveSheet()->setCellValue("E9", "Gigi");
    $xls->getActiveSheet()->setCellValue("E10", "KIA");
    $xls->getActiveSheet()->setCellValue("E11", "Lab");
    $xls->getActiveSheet()->setCellValue("E12", "RB");

    $xls->getActiveSheet()->setCellValue("E13", "Haji");
    $xls->getActiveSheet()->setCellValue("E14", "EKG");
    $xls->getActiveSheet()->setCellValue("E15", "Spesialis Anak");

    $xls->getActiveSheet()->setCellValue("E16", "Spesialis Ealam");
    $xls->getActiveSheet()->setCellValue("E17", "Rontgen");
    $xls->getActiveSheet()->setCellValue("E18", "Rontgen Gigi");
    $xls->getActiveSheet()->setCellValue("E19", "Rujukan");
    $xls->getActiveSheet()->setCellValue("E20", "J U M L A H");

    // BAYAR
    $xls->getActiveSheet()->setCellValue("F8", "Umum");
    $xls->getActiveSheet()->setCellValue("F9", "Gigi");
    $xls->getActiveSheet()->setCellValue("F10", "KIA");
    $xls->getActiveSheet()->setCellValue("F11", "Lab");
    $xls->getActiveSheet()->setCellValue("F12", "RB");

    $xls->getActiveSheet()->setCellValue("F13", "Haji");
    $xls->getActiveSheet()->setCellValue("F14", "EKG");
    $xls->getActiveSheet()->setCellValue("F15", "Spesialis Anak");

    $xls->getActiveSheet()->setCellValue("F16", "Spesialis Dalam");
    $xls->getActiveSheet()->setCellValue("F17", "Rontgen");
    $xls->getActiveSheet()->setCellValue("F18", "Rontgen Gigi");
    $xls->getActiveSheet()->setCellValue("F19", "Rujukan");
    $xls->getActiveSheet()->setCellValue("F20", "J U M L A H");

    $xls->getActiveSheet()->getStyle("B8:B19")->getAlignment()->setVertical('left');
    $xls->getActiveSheet()->getStyle("C8:F19")->getAlignment()->setVertical('center');
    $xls->getActiveSheet()->getStyle("B20:F20")->getAlignment()->setVertical('center');
    $xls->getActiveSheet()->getStyle("B8:B19")->getFont()->setSize(11);
    $xls->getActiveSheet()->getStyle("B20")->getFont()->setSize(12);
    $xls->getActiveSheet()->getStyle("B8:F20")->applyFromArray($styleThinBlackBorderOutline);

    // A,E,F,G,I,L: center
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
//
//
//$y = 9;
//$z = $i - 1;

////echo $i." ".$z;exit;
//$xls->getActiveSheet()->setCellValue("A$i","JUMLAH");
//$xls->getActiveSheet()->setCellValue("B$i","=SUM(B$y:B$z)");
//$xls->getActiveSheet()->setCellValue("C$i","=SUM(C$y:C$z)");
//$xls->getActiveSheet()->setCellValue("D$i","=SUM(D$y:D$z)");
//$xls->getActiveSheet()->setCellValue("E$i","=SUM(E$y:E$z)");
//$xls->getActiveSheet()->setCellValue("F$i","=SUM(F$y:F$z)");
//$xls->getActiveSheet()->setCellValue("G$i","=SUM(G$y:G$z)");
//$xls->getActiveSheet()->setCellValue("H$i","=SUM(H$y:H$z)");
//$xls->getActiveSheet()->setCellValue("I$i","=SUM(I$y:I$z)");
//$xls->getActiveSheet()->setCellValue("J$i","=SUM(J$y:J$z)");
//$xls->getActiveSheet()->setCellValue("K$i","=SUM(K$y:K$z)");
//$xls->getActiveSheet()->setCellValue("L$i","=SUM(L$y:L$z)");
//$xls->getActiveSheet()->setCellValue("M$i","=SUM(M$y:M$z)");
//$xls->getActiveSheet()->setCellValue("N$i","=SUM(N$y:N$z)");
//$xls->getActiveSheet()->setCellValue("O$i","=SUM(O$y:O$z)");
//$xls->getActiveSheet()->setCellValue("P$i","=SUM(P$y:P$z)");

// output it
////
////$xls->getActiveSheet()->getStyle("A$i:Q$i")->applyFromArray($styleThinBlackBorderOutline);
////$xls->getActiveSheet()->getStyle("A$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("B$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("C$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("D$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("E$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("F$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("G$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("H$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("I$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("J$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("K$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("L$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("M$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("N$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("O$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("P$i")->getAlignment()->setHorizontal('center');
////    $xls->getActiveSheet()->getStyle("Q$i")->getAlignment()->setHorizontal('center');
//
//    $xls->getActiveSheet()->getStyle("A$i:Q$i")->getFont()->setBold(true);
//    $xls->getActiveSheet()->getRowDimension($i)->setRowHeight(25);
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Lap.Kunj_' . $bulan . '_' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($xls, "Excel5");
$objWriter->save("php://output");