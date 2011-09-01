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

$tahun = date("Y");
$bulan = $nama_bulan[date("n")];

// PHPExcel object

$xls = new PHPExcel();

// Set properties
$xls->getProperties()->setCreator("SIM Puskesmas Bogor Tengah")
        ->setLastModifiedBy("SIM Puskesmas Bogor Tengah")
        ->setTitle("Formulir Absensi")
        ->setSubject("Formulir Absensi");

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

$xls->getActiveSheet()->mergeCells("A2:E2")->setCellValueByColumnAndRow(0, 2, "DAFTAR ABSENSI KARYAWAN PUSKESMAS BOGOR TENGAH");
$xls->getActiveSheet()->getStyle('A2')->getFont()->setSize(14)->setBold(true);
$xls->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A3:E3")->setCellValueByColumnAndRow(0, 3, "TANGGAL : " . tampilan_tanggal_indonesia(date("d-m-Y"), false, true));
$xls->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->getRowDimension('2')->setRowHeight(19.5);
$xls->getActiveSheet()->getRowDimension('3')->setRowHeight(18);
$xls->getActiveSheet()->getRowDimension('4')->setRowHeight(18);

$xls->getActiveSheet()->getRowDimension('6')->setRowHeight(30);


// table header

$xls->getActiveSheet()
        ->setCellValue('A6', 'No')
        ->setCellValue('B6', 'Nama')
        ->setCellValue('C6', 'Jabatan')
        ->setCellValue('D6', 'Jam Datang')
        ->setCellValue('E6', 'Paraf');

// column width

$xls->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);

$xls->getActiveSheet()->getColumnDimension('D')->setWidth(13);
$xls->getActiveSheet()->getColumnDimension('E')->setWidth(13);

$xls->getActiveSheet()->getStyle('A6:E6')->applyFromArray($styleThinBlackBorderOutline);
$xls->getActiveSheet()->getStyle('A6:E6')->getAlignment()->setVertical('center')->setHorizontal('center');
$xls->getActiveSheet()->getStyle('A6:E6')->getFont()->setBold(true);

// print data

$i=7; foreach ($list as $pegawai) :

    $xls->getActiveSheet()->setCellValue("A$i", $i-6);
    $xls->getActiveSheet()->setCellValue("B$i", $pegawai['nama']);
    $xls->getActiveSheet()->setCellValue("C$i", $pegawai['jabatan']);
    $xls->getActiveSheet()->setCellValue("D$i", "");
    $xls->getActiveSheet()->setCellValue("E$i", "");

    $xls->getActiveSheet()->getStyle("A$i:E$i")->getAlignment()->setVertical('center');
    $xls->getActiveSheet()->getStyle("A$i:E$i")->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension($i)->setRowHeight(20);
    $xls->getActiveSheet()->getStyle("A$i:E$i")->applyFromArray($styleThinBlackBorderOutline);

$i++; endforeach;

// output it

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Form_Absensi.xls"');

$objWriter = IOFactory::createWriter($xls, "Excel5");
$objWriter->save("php://output");