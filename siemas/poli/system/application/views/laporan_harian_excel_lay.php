<?php

//echo $bulan;
//echo "<br>";
//echo $tahun; die();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//view
$objPHPExcel = new PHPExcel();

// border
$styleThinBlackBorderOutline = array(
    'borders' => array(
        'outline' => array(
            'style' => Style_Border::BORDER_THIN,
            'color' => array('argb' => 'FF000000'),
        ),
    ),
);

$styleThinBlackBorderAll = array(
    'borders' => array(
        'allborders' => array(
            'style' => Style_Border::BORDER_THIN,
            'color' => array('argb' => 'FF000000'),
        ),
    ),
);

// Align
$styleAlignHorizontalCenter = array(
    'alignment' => array(
        'horizontal' => Style_Alignment::HORIZONTAL_CENTER,
    ),
);

$styleAlignVerticalCenter = array(
    'alignment' => array(
        'vertical' => Style_Alignment::VERTICAL_CENTER,
    ),
);

// Set properties
$objPHPExcel->getProperties()->setCreator("Siemas")
        ->setLastModifiedBy("085697977177")
        ->setTitle("Rekap Harian Tindakan Gigi")
        ->setSubject("Rekap Harian Tindakan Gigi");
$objPHPExcel->getActiveSheet()->getPageSetup()
        ->setOrientation(Worksheet_PageSetup::ORIENTATION_LANDSCAPE)
        ->setPaperSize(Worksheet_PageSetup::PAPERSIZE_A4)
        ->setFitToWidth(1)->setFitToHeight(0);

$objPHPExcel->getActiveSheet()->getPageMargins()->setTop(0.75)
        ->setRight(0.4)
        ->setLeft(0.4)
        ->setBottom(0.75);


// Set Cell excell
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(3.22);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setWidth(3);
$objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setWidth(10);
;
$objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setWidth(15);
;
// header
//$objPHPExcell->getActiveSheet()->getStyle('A1:H1')->getFont()->setSize(12);

$objPHPExcel->getActiveSheet()->getStyle('A2:F4')->getFont()->setSize(8);

$objPHPExcel->getActiveSheet()->getStyle('A5:AJ40')->getFont()->setSize(9);

$objPHPExcel->getActiveSheet()->getStyle('G2:U2')->getFont()->setSize(15);
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('G2:U2')->setCellValueByColumnAndRow(6, 2, "Laporan Kegiatan Harian BP Gigi ");

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:B3')->setCellValueByColumnAndRow(0, 3, "Kecamatan  :  Bogor Tengah");

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:B4')->setCellValueByColumnAndRow(0, 4, "Kota  :  Bogor");

//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);

$objPHPExcel->getActiveSheet()
        ->mergeCells('A5:A6')->setCellValueByColumnAndRow(0, 5, "NO")
        ->mergeCells('B5:B6')->setCellValueByColumnAndRow(1, 5, "Nama Layanan")
        ->mergeCells('C5:AG5')->setCellValueByColumnAndRow(2, 5, "Tanggal")
        ->mergeCells('AH5:AH6')->setCellValueByColumnAndRow(33, 5, "Jumlah")
        ->mergeCells('AI5:AI6')->setCellValueByColumnAndRow(34, 5, "Harga")
        ->mergeCells('AJ5:AJ6')->setCellValueByColumnAndRow(35, 5, "Jumlah Harga")
        ->getStyle('A5:AO5')->applyFromArray($styleAlignHorizontalCenter);
for ($n = 1; $n <= 31; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($n + 1, 6, $n);
}
for ($n = 1; $n <= 33; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n + 6, $n);
}
$objPHPExcel->getActiveSheet()->getStyle('G2:U2')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('C6:AK39')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('AO5:AO6')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('A5:A6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('B5:B6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C5:C6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('AH5:AH6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('AI5:AI6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('AJ5:AJ6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D5:F5')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('G5:AG5')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D6:AJ6')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('A7:AJ39')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('A5:AJ6')->getFill()->setFillType(Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFDDEEDD');

// the real data

$i = 7;

// buang elemen pertama
array_shift($layanan_h);

foreach ($layanan_h as $lay) {

    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $i, $lay['nama_layanan']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(34, $i, $lay['harga']);

    $i++;
}

for ($k = 1; $k <= cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun); $k++) {


    $data = $this->lap->layanan_bulanan($k, $bulan, $tahun);
    $l = 7;

    foreach ($data as $d) {

        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1 + $k, $l, $d['jumlah']);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(33, $l, '=SUM(' . 'C' . $l . ':AG' . $l . ')');
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(35, $l, '=(' . 'AH' . $l . '*AI' . $l . ')');
        $l++;
    }
}


//       $objPHPExcel->getActiveSheet()->getStyle('A6:F' . ($i-1))->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->getActiveSheet()->setTitle('bulanan layanan');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

header('Content-Type: application/vnd.ms-excel');
//header('Content-Disposition: attachment;filename="rekap_resep_bulanan_' . $namanya . '-' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($objPHPExcel, "Excel5");
$objWriter->save("php://output");
?>