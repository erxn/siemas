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
        ->setTitle("Daftar Urut Kepangkatan")
        ->setSubject("Daftar Urut Kepangkatan Puskesmas Bogor Tengah");

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

$xls->getActiveSheet()->setTitle("DUK " . $bulan . ' ' . $tahun);

$xls->getActiveSheet()->mergeCells("A2:M2")->setCellValueByColumnAndRow(0, 2, "DAFTAR URUT KEPANGKATAN");
$xls->getActiveSheet()->getStyle('A2')->getFont()->setSize(16)->setBold(true);
$xls->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A3:M3")->setCellValueByColumnAndRow(0, 3, "PUSKESMAS BOGOR TENGAH");
$xls->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A4:M4")->setCellValueByColumnAndRow(0, 4, "TAHUN $tahun");
$xls->getActiveSheet()->getStyle('A4')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->getRowDimension('2')->setRowHeight(19.5);
$xls->getActiveSheet()->getRowDimension('3')->setRowHeight(18);
$xls->getActiveSheet()->getRowDimension('4')->setRowHeight(18);

$xls->getActiveSheet()->getRowDimension('6')->setRowHeight(25.5);
$xls->getActiveSheet()->getRowDimension('7')->setRowHeight(25.5);
$xls->getActiveSheet()->getRowDimension('8')->setRowHeight(12.75);

// table header

$xls->getActiveSheet()
        ->mergeCells('A6:A7')
        ->mergeCells('B6:B7')
        ->mergeCells('C6:C7')
        ->mergeCells('D6:E6')
        ->mergeCells('F6:G6')
        ->mergeCells('H6:I6')
        ->mergeCells('J6:J7')
        ->mergeCells('K6:K7')
        ->mergeCells('L6:L7')
        ->mergeCells('M6:M7')
        ->getStyle('A6:M8')->getAlignment()->setHorizontal('center')->setVertical('center');

$xls->getActiveSheet()->getStyle('A6:M8')->getFont()->setSize(10);

$xls->getActiveSheet()
        ->setCellValue('A6', 'NO')
        ->setCellValue('B6', 'Nama')
        ->setCellValue('C6', 'NIP')
        ->setCellValue('D6', 'Pangkat')
        ->setCellValue('F6', 'Masa Kerja')
        ->setCellValue('H6', 'Pendidikan')
        ->setCellValue('J6', "Tempat, Tanggal Lahir")
        ->setCellValue('K6', 'Jabatan')
        ->setCellValue('L6', "Kenaikan Gaji YAD")
        ->setCellValue('M6', 'Keterangan')
        ->setCellValue('D7', 'Golongan / Ruang')
        ->setCellValue('E7', 'TMT')
        ->setCellValue('F7', 'Tahun')
        ->setCellValue('G7', 'Bulan')
        ->setCellValue('H7', 'Nama')
        ->setCellValue('I7', "Tahun Ijazah");

for ($i = 0; $i < 13; $i++)
    $xls->getActiveSheet()->setCellValueByColumnAndRow($i, 8, $i+1);

// column width

$xls->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);

$xls->getActiveSheet()->getStyle('A6:M8')->applyFromArray($styleThinBlackBorderOutline);

// print data

$i=9; foreach ($list as $pegawai) :

    $xls->getActiveSheet()->setCellValue("A$i", $i-8);
    $xls->getActiveSheet()->setCellValue("B$i", $pegawai['nama']);
    $xls->getActiveSheet()->setCellValue("C$i", format_nip($pegawai['nip']));
    $xls->getActiveSheet()->setCellValue("D$i", $pegawai['pangkat'] . ' - ' . $pegawai['golongan']);
    $xls->getActiveSheet()->setCellValue("E$i", format_tanggal_tampilan($pegawai['TMT_pangkat']));
    $xls->getActiveSheet()->setCellValue("F$i", $pegawai['masa_kerja_tahun']);
    $xls->getActiveSheet()->setCellValue("G$i", $pegawai['masa_kerja_bulan']);
    $xls->getActiveSheet()->setCellValue("H$i", $pegawai['pendidikan']);
    $xls->getActiveSheet()->setCellValue("I$i", $pegawai['tahun_ijazah']);
    $xls->getActiveSheet()->setCellValue("J$i", $pegawai['tempat_lahir'] . ', ' . format_tanggal_tampilan($pegawai['tanggal_lahir']));
    $xls->getActiveSheet()->setCellValue("K$i", $pegawai['jabatan']);
    $xls->getActiveSheet()->setCellValue("L$i", format_tanggal_tampilan($pegawai['kenaikan_YAD']));
    $xls->getActiveSheet()->setCellValue("M$i", ($pegawai['bp_pemda'] == 1) ? 'BP Pemda' : '');

    $xls->getActiveSheet()->getStyle("A$i:M$i")->getAlignment()->setVertical('center');
    $xls->getActiveSheet()->getStyle("A$i:M$i")->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension($i)->setRowHeight(25);
    $xls->getActiveSheet()->getStyle("A$i:M$i")->applyFromArray($styleThinBlackBorderOutline);

    // A,E,F,G,I,L: center

    $xls->getActiveSheet()->getStyle("A$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("E$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("F$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("G$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("I$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("L$i")->getAlignment()->setHorizontal('center');
$i++; endforeach;

// output it

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="DUK_' . $bulan . '_' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($xls, "Excel5");
$objWriter->save("php://output");