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
$xls->getActiveSheet()->getStyle('A9:M10')->getFont()->setSize(11);

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
$xls->getActiveSheet()->getStyle("A12:M13")->applyFromArray($styleThinBlackBorderOutline);
$xls->getActiveSheet()->getColumnDimension("A")->setWidth(6);
$xls->getActiveSheet()->getColumnDimension("B")->setWidth(30);
$xls->getActiveSheet()->getStyle("D13:M13")->getAlignment()->setWrapText(true);
$xls->getActiveSheet()->getRowDimension('13')->setRowHeight(32.75);


//for ($i = 0; $i < 17; $i++)
//    $xls->getActiveSheet()->setCellValueByColumnAndRow($i, 8, $i+1);
//
//// lebar kolom jadi auto
//$xls->getActiveSheet()->getStyle("A6:Q8")->getFont()->setBold(true);
////$xls->getActiveSheet()->getColumnDimension("A")->setWidth(8);
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
//$xls->getActiveSheet()->getStyle('A6:Q8')->applyFromArray($styleThinBlackBorderOutline);
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