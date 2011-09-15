<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
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
        ->setLastModifiedBy("SIEMAS")
        ->setTitle("Rekap Bulanan Tindakan Gigi")
        ->setSubject("Rekap Bulanan Tindakan Gigi");
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
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(1);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('AL')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('AM')->setWidth(10);
// header
//$objPHPExcell->getActiveSheet()->getStyle('A1:H1')->getFont()->setSize(12);

$objPHPExcel->getActiveSheet()->getStyle('A2:F4')->getFont()->setSize(8);

$objPHPExcel->getActiveSheet()->getStyle('A5:AN500')->getFont()->setSize(9);


$objPHPExcel->setActiveSheetIndex(0)->mergeCells('M1:Z1')->setCellValueByColumnAndRow(13, 1, "Laporan Penyakit Harian BP Gigi ");

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:D2')->setCellValueByColumnAndRow(0, 2, "Kecamatan  :  Bogor Tengah");

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:C3')->setCellValueByColumnAndRow(0, 3, "Kota  :  Bogor");
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C4:J4')->setCellValueByColumnAndRow(2, 4, "Nama penyakit: Karies Gigi(02)");
//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);

$objPHPExcel->getActiveSheet()
        ->mergeCells('B5:B8')->setCellValueByColumnAndRow(1, 5, "Tanggal")
        ->mergeCells('C5:AL5')->setCellValueByColumnAndRow(2, 5, "golongan Umur")
        ->mergeCells('AM5:AM8')->setCellValueByColumnAndRow(38, 5, "Jumlah")
        ->mergeCells('C6:F6')->setCellValueByColumnAndRow(2, 6, "1-4 Tahun")
        ->mergeCells('G6:J6')->setCellValueByColumnAndRow(6, 6, "5-9 Tahun")
        ->mergeCells('K6:N6')->setCellValueByColumnAndRow(10, 6, "10-14 Tahun")
        ->mergeCells('O6:R6')->setCellValueByColumnAndRow(14, 6, "15-19 Tahun")
        ->mergeCells('S6:V6')->setCellValueByColumnAndRow(18, 6, "20-44 Tahun")
        ->mergeCells('W6:Z6')->setCellValueByColumnAndRow(22, 6, "45-54 Tahun")
        ->mergeCells('AA6:AD6')->setCellValueByColumnAndRow(26, 6, "55-59 Tahun")
        ->mergeCells('AE6:AH6')->setCellValueByColumnAndRow(30, 6, "60-69 Tahun")
        ->mergeCells('AI6:AL6')->setCellValueByColumnAndRow(34, 6, ">70 Tahun")
        ->mergeCells('C7:D7')->setCellValueByColumnAndRow(2, 7, "P")
        ->mergeCells('E7:F7')->setCellValueByColumnAndRow(4, 7, "L")
        ->mergeCells('G7:H7')->setCellValueByColumnAndRow(6, 7, "P")
        ->mergeCells('I7:J7')->setCellValueByColumnAndRow(8, 7, "L")
        ->mergeCells('K7:L7')->setCellValueByColumnAndRow(10, 7, "P")
        ->mergeCells('M7:N7')->setCellValueByColumnAndRow(12, 7, "L")
        ->mergeCells('O7:P7')->setCellValueByColumnAndRow(14, 7, "P")
        ->mergeCells('Q7:R7')->setCellValueByColumnAndRow(16, 7, "L")
        ->mergeCells('S7:T7')->setCellValueByColumnAndRow(18, 7, "P")
        ->mergeCells('U7:V7')->setCellValueByColumnAndRow(20, 7, "L")
        ->mergeCells('W7:X7')->setCellValueByColumnAndRow(22, 7, "P")
        ->mergeCells('Y7:Z7')->setCellValueByColumnAndRow(24, 7, "L")
        ->mergeCells('AA7:AB7')->setCellValueByColumnAndRow(26, 7, "P")
        ->mergeCells('AC7:AD7')->setCellValueByColumnAndRow(28, 7, "L")
        ->mergeCells('AE7:AF7')->setCellValueByColumnAndRow(30, 7, "P")
        ->mergeCells('AG7:AH7')->setCellValueByColumnAndRow(32, 7, "L")
        ->mergeCells('AI7:AJ7')->setCellValueByColumnAndRow(34, 7, "P")
        ->mergeCells('AK7:AL7')->setCellValueByColumnAndRow(36, 7, "L")
        ->setCellValueByColumnAndRow(2, 8, "B")
        ->setCellValueByColumnAndRow(3, 8, "L")
        ->setCellValueByColumnAndRow(4, 8, "B")
        ->setCellValueByColumnAndRow(5, 8, "L")
        ->setCellValueByColumnAndRow(6, 8, "B")
        ->setCellValueByColumnAndRow(7, 8, "L")
        ->setCellValueByColumnAndRow(8, 8, "B")
        ->setCellValueByColumnAndRow(9, 8, "L")
        ->setCellValueByColumnAndRow(10, 8, "B")
        ->setCellValueByColumnAndRow(11, 8, "L")
        ->setCellValueByColumnAndRow(12, 8, "B")
        ->setCellValueByColumnAndRow(13, 8, "L")
        ->setCellValueByColumnAndRow(14, 8, "B")
        ->setCellValueByColumnAndRow(15, 8, "L")
        ->setCellValueByColumnAndRow(16, 8, "B")
        ->setCellValueByColumnAndRow(17, 8, "L")
        ->setCellValueByColumnAndRow(18, 8, "B")
        ->setCellValueByColumnAndRow(19, 8, "L")
        ->setCellValueByColumnAndRow(20, 8, "B")
        ->setCellValueByColumnAndRow(21, 8, "L")
        ->setCellValueByColumnAndRow(22, 8, "B")
        ->setCellValueByColumnAndRow(23, 8, "L")
        ->setCellValueByColumnAndRow(24, 8, "B")
        ->setCellValueByColumnAndRow(25, 8, "L")
        ->setCellValueByColumnAndRow(26, 8, "B")
        ->setCellValueByColumnAndRow(27, 8, "L")
        ->setCellValueByColumnAndRow(28, 8, "B")
        ->setCellValueByColumnAndRow(29, 8, "L")
        ->setCellValueByColumnAndRow(30, 8, "B")
        ->setCellValueByColumnAndRow(31, 8, "L")
        ->setCellValueByColumnAndRow(32, 8, "B")
        ->setCellValueByColumnAndRow(33, 8, "L")
        ->setCellValueByColumnAndRow(34, 8, "B")
        ->setCellValueByColumnAndRow(35, 8, "L")
        ->setCellValueByColumnAndRow(36, 8, "B")
        ->setCellValueByColumnAndRow(37, 8, "L")
        ->getStyle('A5:AO5')->applyFromArray($styleAlignHorizontalCenter);

for ($n = 1; $n <= 31; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $n + 8, $n);
}
$objPHPExcel->getActiveSheet()->getStyle('G6:AK6')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('AO5:AO6')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('AN5:AN6')->applyFromArray($styleAlignVerticalCenter);
$objPHPExcel->getActiveSheet()->getStyle('B5:B8')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C5:C6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D5:F5')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('AM5:AM8')->applyFromArray($styleAlignHorizontalCenter); //JUMLAH
$objPHPExcel->getActiveSheet()->getStyle('AM5:AM8')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C7:AL7')->applyFromArray($styleAlignHorizontalCenter); //JK
$objPHPExcel->getActiveSheet()->getStyle('C7:AL7')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('C8:AL8')->applyFromArray($styleAlignHorizontalCenter); //JK
$objPHPExcel->getActiveSheet()->getStyle('C8:AL8')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('B9:AM39')->applyFromArray($styleAlignHorizontalCenter); //JK
$objPHPExcel->getActiveSheet()->getStyle('B9:AM39')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('G5:AL5')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C4:J4')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D6:AM6')->applyFromArray($styleThinBlackBorderAll);



$l = 9;
for ($i = 1; $i <= 31; $i++) {

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 1, 4, 6);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $l, $data['d']);


    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 5, 9, 6);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $l, $data['d']);


    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 10, 14, 6);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 15, 19, 6);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 20, 44, 6);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 45, 54, 6);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(22, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 55, 59, 6);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(26, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(27, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(28, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(29, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 60, 69, 6);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(30, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(31, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(32, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(33, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 70, 200, 6);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(34, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(35, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(36, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(37, $l, $data['d']);

    $l++;
}


$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C45:M45')->setCellValueByColumnAndRow(2, 45, "Nama penyakit: Penyakit Pulpa & Jaringan Periapikal(03)");
//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);

$objPHPExcel->getActiveSheet()
        ->mergeCells('B46:B49')->setCellValueByColumnAndRow(1, 46, "Tanggal")
        ->mergeCells('C46:AL46')->setCellValueByColumnAndRow(2, 46, "golongan Umur")
        ->mergeCells('AM46:AM49')->setCellValueByColumnAndRow(38, 46, "Jumlah")
        ->mergeCells('C47:F47')->setCellValueByColumnAndRow(2, 47, "1-4 Tahun")
        ->mergeCells('G47:J47')->setCellValueByColumnAndRow(6, 47, "5-9 Tahun")
        ->mergeCells('K47:N47')->setCellValueByColumnAndRow(10, 47, "10-14 Tahun")
        ->mergeCells('O47:R47')->setCellValueByColumnAndRow(14, 47, "15-19 Tahun")
        ->mergeCells('S47:V47')->setCellValueByColumnAndRow(18, 47, "20-44 Tahun")
        ->mergeCells('W47:Z47')->setCellValueByColumnAndRow(22, 47, "45-54 Tahun")
        ->mergeCells('AA47:AD47')->setCellValueByColumnAndRow(26, 47, "55-59 Tahun")
        ->mergeCells('AE47:AH47')->setCellValueByColumnAndRow(30, 47, "60-69 Tahun")
        ->mergeCells('AI47:AL47')->setCellValueByColumnAndRow(34, 47, ">70 Tahun")
        ->mergeCells('C48:D48')->setCellValueByColumnAndRow(2, 48, "P")
        ->mergeCells('E48:F48')->setCellValueByColumnAndRow(4, 48, "L")
        ->mergeCells('G48:H48')->setCellValueByColumnAndRow(6, 48, "P")
        ->mergeCells('I48:J48')->setCellValueByColumnAndRow(8, 48, "L")
        ->mergeCells('K48:L48')->setCellValueByColumnAndRow(10, 48, "P")
        ->mergeCells('M48:N48')->setCellValueByColumnAndRow(12, 48, "L")
        ->mergeCells('O48:P48')->setCellValueByColumnAndRow(14, 48, "P")
        ->mergeCells('Q48:R48')->setCellValueByColumnAndRow(16, 48, "L")
        ->mergeCells('S48:T48')->setCellValueByColumnAndRow(18, 48, "P")
        ->mergeCells('U48:V48')->setCellValueByColumnAndRow(20, 48, "L")
        ->mergeCells('W48:X48')->setCellValueByColumnAndRow(22, 48, "P")
        ->mergeCells('Y48:Z48')->setCellValueByColumnAndRow(24, 48, "L")
        ->mergeCells('AA48:AB48')->setCellValueByColumnAndRow(26, 48, "P")
        ->mergeCells('AC48:AD48')->setCellValueByColumnAndRow(28, 48, "L")
        ->mergeCells('AE48:AF48')->setCellValueByColumnAndRow(30, 48, "P")
        ->mergeCells('AG48:AH48')->setCellValueByColumnAndRow(32, 48, "L")
        ->mergeCells('AI48:AJ48')->setCellValueByColumnAndRow(34, 48, "P")
        ->mergeCells('AK48:AL48')->setCellValueByColumnAndRow(36, 48, "L")
        ->setCellValueByColumnAndRow(2, 49, "B")
        ->setCellValueByColumnAndRow(3, 49, "L")
        ->setCellValueByColumnAndRow(4, 49, "B")
        ->setCellValueByColumnAndRow(5, 49, "L")
        ->setCellValueByColumnAndRow(6, 49, "B")
        ->setCellValueByColumnAndRow(7, 49, "L")
        ->setCellValueByColumnAndRow(8, 49, "B")
        ->setCellValueByColumnAndRow(9, 49, "L")
        ->setCellValueByColumnAndRow(10, 49, "B")
        ->setCellValueByColumnAndRow(11, 49, "L")
        ->setCellValueByColumnAndRow(12, 49, "B")
        ->setCellValueByColumnAndRow(13, 49, "L")
        ->setCellValueByColumnAndRow(14, 49, "B")
        ->setCellValueByColumnAndRow(15, 49, "L")
        ->setCellValueByColumnAndRow(16, 49, "B")
        ->setCellValueByColumnAndRow(17, 49, "L")
        ->setCellValueByColumnAndRow(18, 49, "B")
        ->setCellValueByColumnAndRow(19, 49, "L")
        ->setCellValueByColumnAndRow(20, 49, "B")
        ->setCellValueByColumnAndRow(21, 49, "L")
        ->setCellValueByColumnAndRow(22, 49, "B")
        ->setCellValueByColumnAndRow(23, 49, "L")
        ->setCellValueByColumnAndRow(24, 49, "B")
        ->setCellValueByColumnAndRow(25, 49, "L")
        ->setCellValueByColumnAndRow(26, 49, "B")
        ->setCellValueByColumnAndRow(27, 49, "L")
        ->setCellValueByColumnAndRow(28, 49, "B")
        ->setCellValueByColumnAndRow(29, 49, "L")
        ->setCellValueByColumnAndRow(30, 49, "B")
        ->setCellValueByColumnAndRow(31, 49, "L")
        ->setCellValueByColumnAndRow(32, 49, "B")
        ->setCellValueByColumnAndRow(33, 49, "L")
        ->setCellValueByColumnAndRow(34, 49, "B")
        ->setCellValueByColumnAndRow(35, 49, "L")
        ->setCellValueByColumnAndRow(36, 49, "B")
        ->setCellValueByColumnAndRow(37, 49, "L")
        ->getStyle('A46:AO46')->applyFromArray($styleAlignHorizontalCenter);

for ($n = 1; $n <= 31; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $n + 49, $n);
}
$objPHPExcel->getActiveSheet()->getStyle('G47:AK47')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('AO46:AO47')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('AN46:AN47')->applyFromArray($styleAlignVerticalCenter);
$objPHPExcel->getActiveSheet()->getStyle('B46:B49')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C46:C47')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D46:F46')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('AM46:AM49')->applyFromArray($styleAlignHorizontalCenter); //JUMLAH
$objPHPExcel->getActiveSheet()->getStyle('AM46:AM49')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C48:AL48')->applyFromArray($styleAlignHorizontalCenter); //JK
$objPHPExcel->getActiveSheet()->getStyle('C48:AL48')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('C49:AL49')->applyFromArray($styleAlignHorizontalCenter); //JK
$objPHPExcel->getActiveSheet()->getStyle('C49:AL49')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('B50:AM80')->applyFromArray($styleAlignHorizontalCenter); //SEMUANYA
$objPHPExcel->getActiveSheet()->getStyle('B50:AM80')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('G46:AL46')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C45:M45')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D47:AM47')->applyFromArray($styleThinBlackBorderAll);

//FUNGSI INTI


$l = 50;
for ($i = 1; $i <= 31; $i++) {

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 1, 4, 7);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $l, $data['d']);


    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 5, 9, 7);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $l, $data['d']);


    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 10, 14, 7);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 15, 19, 7);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 20, 44, 7);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 45, 54, 7);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(22, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 55, 59, 7);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(26, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(27, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(28, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(29, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 60, 69, 7);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(30, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(31, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(32, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(33, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 70, 200, 7);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(34, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(35, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(36, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(37, $l, $data['d']);

    $l++;
}


$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C87:M87')->setCellValueByColumnAndRow(2, 87, "Nama penyakit: Penyakit Gusi & Periodontal(04)");
//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);

$objPHPExcel->getActiveSheet()
        ->mergeCells('B88:B91')->setCellValueByColumnAndRow(1, 88, "Tanggal")
        ->mergeCells('C88:AL88')->setCellValueByColumnAndRow(2, 88, "golongan Umur")
        ->mergeCells('AM88:AM91')->setCellValueByColumnAndRow(38, 88, "Jumlah")
        ->mergeCells('C89:F89')->setCellValueByColumnAndRow(2, 89, "1-4 Tahun")
        ->mergeCells('G89:J89')->setCellValueByColumnAndRow(6, 89, "5-9 Tahun")
        ->mergeCells('K89:N89')->setCellValueByColumnAndRow(10, 89, "10-14 Tahun")
        ->mergeCells('O89:R89')->setCellValueByColumnAndRow(14, 89, "15-19 Tahun")
        ->mergeCells('S89:V89')->setCellValueByColumnAndRow(18, 89, "20-44 Tahun")
        ->mergeCells('W89:Z89')->setCellValueByColumnAndRow(22, 89, "45-54 Tahun")
        ->mergeCells('AA89:AD89')->setCellValueByColumnAndRow(26, 89, "55-59 Tahun")
        ->mergeCells('AE89:AH89')->setCellValueByColumnAndRow(30, 89, "60-69 Tahun")
        ->mergeCells('AI89:AL89')->setCellValueByColumnAndRow(34, 89, ">70 Tahun")
        ->mergeCells('C90:D90')->setCellValueByColumnAndRow(2, 90, "P")
        ->mergeCells('E90:F90')->setCellValueByColumnAndRow(4, 90, "L")
        ->mergeCells('G90:H90')->setCellValueByColumnAndRow(6, 90, "P")
        ->mergeCells('I90:J90')->setCellValueByColumnAndRow(8, 90, "L")
        ->mergeCells('K90:L90')->setCellValueByColumnAndRow(10, 90, "P")
        ->mergeCells('M90:N90')->setCellValueByColumnAndRow(12, 90, "L")
        ->mergeCells('O90:P90')->setCellValueByColumnAndRow(14, 90, "P")
        ->mergeCells('Q90:R90')->setCellValueByColumnAndRow(16, 90, "L")
        ->mergeCells('S90:T90')->setCellValueByColumnAndRow(18, 90, "P")
        ->mergeCells('U90:V90')->setCellValueByColumnAndRow(20, 90, "L")
        ->mergeCells('W90:X90')->setCellValueByColumnAndRow(22, 90, "P")
        ->mergeCells('Y90:Z90')->setCellValueByColumnAndRow(24, 90, "L")
        ->mergeCells('AA90:AB90')->setCellValueByColumnAndRow(26, 90, "P")
        ->mergeCells('AC90:AD90')->setCellValueByColumnAndRow(28, 90, "L")
        ->mergeCells('AE90:AF90')->setCellValueByColumnAndRow(30, 90, "P")
        ->mergeCells('AG90:AH90')->setCellValueByColumnAndRow(32, 90, "L")
        ->mergeCells('AI90:AJ90')->setCellValueByColumnAndRow(34, 90, "P")
        ->mergeCells('AK90:AL90')->setCellValueByColumnAndRow(36, 90, "L")
        ->setCellValueByColumnAndRow(2, 91, "B")
        ->setCellValueByColumnAndRow(3, 91, "L")
        ->setCellValueByColumnAndRow(4, 91, "B")
        ->setCellValueByColumnAndRow(5, 91, "L")
        ->setCellValueByColumnAndRow(6, 91, "B")
        ->setCellValueByColumnAndRow(7, 91, "L")
        ->setCellValueByColumnAndRow(8, 91, "B")
        ->setCellValueByColumnAndRow(9, 91, "L")
        ->setCellValueByColumnAndRow(10, 91, "B")
        ->setCellValueByColumnAndRow(11, 91, "L")
        ->setCellValueByColumnAndRow(12, 91, "B")
        ->setCellValueByColumnAndRow(13, 91, "L")
        ->setCellValueByColumnAndRow(14, 91, "B")
        ->setCellValueByColumnAndRow(15, 91, "L")
        ->setCellValueByColumnAndRow(16, 91, "B")
        ->setCellValueByColumnAndRow(17, 91, "L")
        ->setCellValueByColumnAndRow(18, 91, "B")
        ->setCellValueByColumnAndRow(19, 91, "L")
        ->setCellValueByColumnAndRow(20, 91, "B")
        ->setCellValueByColumnAndRow(21, 91, "L")
        ->setCellValueByColumnAndRow(22, 91, "B")
        ->setCellValueByColumnAndRow(23, 91, "L")
        ->setCellValueByColumnAndRow(24, 91, "B")
        ->setCellValueByColumnAndRow(25, 91, "L")
        ->setCellValueByColumnAndRow(26, 91, "B")
        ->setCellValueByColumnAndRow(27, 91, "L")
        ->setCellValueByColumnAndRow(28, 91, "B")
        ->setCellValueByColumnAndRow(29, 91, "L")
        ->setCellValueByColumnAndRow(30, 91, "B")
        ->setCellValueByColumnAndRow(31, 91, "L")
        ->setCellValueByColumnAndRow(32, 91, "B")
        ->setCellValueByColumnAndRow(33, 91, "L")
        ->setCellValueByColumnAndRow(34, 91, "B")
        ->setCellValueByColumnAndRow(35, 91, "L")
        ->setCellValueByColumnAndRow(36, 91, "B")
        ->setCellValueByColumnAndRow(37, 91, "L")
        ->getStyle('A88:AO88')->applyFromArray($styleAlignHorizontalCenter);

for ($n = 1; $n <= 31; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $n + 91, $n);
}
$objPHPExcel->getActiveSheet()->getStyle('G89:AK89')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('AO88:AO89')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('AN88:AN89')->applyFromArray($styleAlignVerticalCenter);
$objPHPExcel->getActiveSheet()->getStyle('B88:B91')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C88:C89')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D88:F88')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('AM88:AM91')->applyFromArray($styleAlignHorizontalCenter); //JUMLAH
$objPHPExcel->getActiveSheet()->getStyle('AM88:AM91')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C89:AL89')->applyFromArray($styleAlignHorizontalCenter); //JK
$objPHPExcel->getActiveSheet()->getStyle('C89:AL89')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('C91:AL91')->applyFromArray($styleAlignHorizontalCenter); //JK
$objPHPExcel->getActiveSheet()->getStyle('C91:AL91')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('B91:AM123')->applyFromArray($styleAlignHorizontalCenter); //JK
$objPHPExcel->getActiveSheet()->getStyle('B91:AM123')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('G88:AL88')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C87:M87')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D89:AM89')->applyFromArray($styleThinBlackBorderAll);


//FUNGSI ASLINYAHHH BUAT KODE 04 (id 8)
$l = 92;
for ($i = 1; $i <= 31; $i++) {

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 1, 4, 8);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $l, $data['d']);


    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 5, 9, 8);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $l, $data['d']);


    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 10, 14, 8);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 15, 19, 8);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 20, 44, 8);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 45, 54, 8);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(22, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 55, 59, 8);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(26, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(27, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(28, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(29, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 60, 69, 8);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(30, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(31, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(32, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(33, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 70, 200, 8);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(34, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(35, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(36, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(37, $l, $data['d']);

    $l++;
}




$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C129:M129')->setCellValueByColumnAndRow(2, 129, "Nama penyakit: Penyakit Dentofasial termasuk inaloklusi (05)");
//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);

$objPHPExcel->getActiveSheet()
        ->mergeCells('B130:B133')->setCellValueByColumnAndRow(1, 130, "Tanggal")
        ->mergeCells('C130:AL130')->setCellValueByColumnAndRow(2, 130, "golongan Umur")
        ->mergeCells('AM130:AM133')->setCellValueByColumnAndRow(38, 130, "Jumlah")
        ->mergeCells('C131:F131')->setCellValueByColumnAndRow(2, 131, "1-4 Tahun")
        ->mergeCells('G131:J131')->setCellValueByColumnAndRow(6, 131, "5-9 Tahun")
        ->mergeCells('K131:N131')->setCellValueByColumnAndRow(10, 131, "10-14 Tahun")
        ->mergeCells('O131:R131')->setCellValueByColumnAndRow(14, 131, "15-19 Tahun")
        ->mergeCells('S131:V131')->setCellValueByColumnAndRow(18, 131, "20-44 Tahun")
        ->mergeCells('W131:Z131')->setCellValueByColumnAndRow(22, 131, "45-54 Tahun")
        ->mergeCells('AA131:AD131')->setCellValueByColumnAndRow(26, 131, "55-59 Tahun")
        ->mergeCells('AE131:AH131')->setCellValueByColumnAndRow(30, 131, "60-69 Tahun")
        ->mergeCells('AI131:AL131')->setCellValueByColumnAndRow(34, 131, ">70 Tahun")
        ->mergeCells('C132:D132')->setCellValueByColumnAndRow(2, 132, "P")
        ->mergeCells('E132:F132')->setCellValueByColumnAndRow(4, 132, "L")
        ->mergeCells('G132:H132')->setCellValueByColumnAndRow(6, 132, "P")
        ->mergeCells('I132:J132')->setCellValueByColumnAndRow(8, 132, "L")
        ->mergeCells('K132:L132')->setCellValueByColumnAndRow(10, 132, "P")
        ->mergeCells('M132:N132')->setCellValueByColumnAndRow(12, 132, "L")
        ->mergeCells('O132:P132')->setCellValueByColumnAndRow(14, 132, "P")
        ->mergeCells('Q132:R132')->setCellValueByColumnAndRow(16, 132, "L")
        ->mergeCells('S132:T132')->setCellValueByColumnAndRow(18, 132, "P")
        ->mergeCells('U132:V132')->setCellValueByColumnAndRow(20, 132, "L")
        ->mergeCells('W132:X132')->setCellValueByColumnAndRow(22, 132, "P")
        ->mergeCells('Y132:Z132')->setCellValueByColumnAndRow(24, 132, "L")
        ->mergeCells('AA132:AB132')->setCellValueByColumnAndRow(26, 132, "P")
        ->mergeCells('AC132:AD132')->setCellValueByColumnAndRow(28, 132, "L")
        ->mergeCells('AE132:AF132')->setCellValueByColumnAndRow(30, 132, "P")
        ->mergeCells('AG132:AH132')->setCellValueByColumnAndRow(32, 132, "L")
        ->mergeCells('AI132:AJ132')->setCellValueByColumnAndRow(34, 132, "P")
        ->mergeCells('AK132:AL132')->setCellValueByColumnAndRow(36, 132, "L")
        ->setCellValueByColumnAndRow(2, 133, "B")
        ->setCellValueByColumnAndRow(3, 133, "L")
        ->setCellValueByColumnAndRow(4, 133, "B")
        ->setCellValueByColumnAndRow(5, 133, "L")
        ->setCellValueByColumnAndRow(6, 133, "B")
        ->setCellValueByColumnAndRow(7, 133, "L")
        ->setCellValueByColumnAndRow(8, 133, "B")
        ->setCellValueByColumnAndRow(9, 133, "L")
        ->setCellValueByColumnAndRow(10, 133, "B")
        ->setCellValueByColumnAndRow(11, 133, "L")
        ->setCellValueByColumnAndRow(12, 133, "B")
        ->setCellValueByColumnAndRow(13, 133, "L")
        ->setCellValueByColumnAndRow(14, 133, "B")
        ->setCellValueByColumnAndRow(15, 133, "L")
        ->setCellValueByColumnAndRow(16, 133, "B")
        ->setCellValueByColumnAndRow(17, 133, "L")
        ->setCellValueByColumnAndRow(18, 133, "B")
        ->setCellValueByColumnAndRow(19, 133, "L")
        ->setCellValueByColumnAndRow(20, 133, "B")
        ->setCellValueByColumnAndRow(21, 133, "L")
        ->setCellValueByColumnAndRow(22, 133, "B")
        ->setCellValueByColumnAndRow(23, 133, "L")
        ->setCellValueByColumnAndRow(24, 133, "B")
        ->setCellValueByColumnAndRow(25, 133, "L")
        ->setCellValueByColumnAndRow(26, 133, "B")
        ->setCellValueByColumnAndRow(27, 133, "L")
        ->setCellValueByColumnAndRow(28, 133, "B")
        ->setCellValueByColumnAndRow(29, 133, "L")
        ->setCellValueByColumnAndRow(30, 133, "B")
        ->setCellValueByColumnAndRow(31, 133, "L")
        ->setCellValueByColumnAndRow(32, 133, "B")
        ->setCellValueByColumnAndRow(33, 133, "L")
        ->setCellValueByColumnAndRow(34, 133, "B")
        ->setCellValueByColumnAndRow(35, 133, "L")
        ->setCellValueByColumnAndRow(36, 133, "B")
        ->setCellValueByColumnAndRow(37, 133, "L")
        ->getStyle('A130:AO130')->applyFromArray($styleAlignHorizontalCenter);

for ($n = 1; $n <= 31; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $n + 133, $n);
}
$objPHPExcel->getActiveSheet()->getStyle('G131:AK131')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('AO130:AO131')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('AN130:AN131')->applyFromArray($styleAlignVerticalCenter);
$objPHPExcel->getActiveSheet()->getStyle('B130:B133')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C130:C131')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D130:F130')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('AM130:AM133')->applyFromArray($styleAlignHorizontalCenter); //JUMLAH
$objPHPExcel->getActiveSheet()->getStyle('AM130:AM133')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C132:AL132')->applyFromArray($styleAlignHorizontalCenter); //JK
$objPHPExcel->getActiveSheet()->getStyle('C132:AL132')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('C133:AL133')->applyFromArray($styleAlignHorizontalCenter); //JK
$objPHPExcel->getActiveSheet()->getStyle('C133:AL133')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('B134:AM164')->applyFromArray($styleAlignHorizontalCenter); //JK
$objPHPExcel->getActiveSheet()->getStyle('B134:AM164')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('G130:AL130')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C129:M129')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D132:AM132')->applyFromArray($styleThinBlackBorderAll);

//FUNGSI INTI BUAT 05

$l = 134;
for ($i = 1; $i <= 31; $i++) {

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 1, 4, 9);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $l, $data['d']);


    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 5, 9, 9);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $l, $data['d']);


    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 10, 14, 9);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 15, 19, 9);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 20, 44, 9);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 45, 54, 9);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(22, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 55, 59, 9);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(26, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(27, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(28, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(29, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 60, 69, 9);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(30, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(31, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(32, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(33, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 70, 200, 9);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(34, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(35, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(36, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(37, $l, $data['d']);

    $l++;
}

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C170:N170')->setCellValueByColumnAndRow(2, 170, "Nama penyakit: Gangguan Gigi & Jaringan Penunjang Lain(08)");
//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);

$objPHPExcel->getActiveSheet()
        ->mergeCells('B171:B174')->setCellValueByColumnAndRow(1, 171, "Tanggal")
        ->mergeCells('C171:AL171')->setCellValueByColumnAndRow(2, 171, "golongan Umur")
        ->mergeCells('AM171:AM174')->setCellValueByColumnAndRow(38, 171, "Jumlah")
        ->mergeCells('C172:F172')->setCellValueByColumnAndRow(2, 172, "1-4 Tahun")
        ->mergeCells('G172:J172')->setCellValueByColumnAndRow(6, 172, "5-9 Tahun")
        ->mergeCells('K172:N172')->setCellValueByColumnAndRow(10, 172, "10-14 Tahun")
        ->mergeCells('O172:R172')->setCellValueByColumnAndRow(14, 172, "15-19 Tahun")
        ->mergeCells('S172:V172')->setCellValueByColumnAndRow(18, 172, "20-44 Tahun")
        ->mergeCells('W172:Z172')->setCellValueByColumnAndRow(22, 172, "45-54 Tahun")
        ->mergeCells('AA172:AD172')->setCellValueByColumnAndRow(26, 172, "55-59 Tahun")
        ->mergeCells('AE172:AH172')->setCellValueByColumnAndRow(30, 172, "60-69 Tahun")
        ->mergeCells('AI172:AL172')->setCellValueByColumnAndRow(34, 172, ">70 Tahun")
        ->mergeCells('C173:D173')->setCellValueByColumnAndRow(2, 173, "P")
        ->mergeCells('E173:F173')->setCellValueByColumnAndRow(4, 173, "L")
        ->mergeCells('G173:H173')->setCellValueByColumnAndRow(6, 173, "P")
        ->mergeCells('I173:J173')->setCellValueByColumnAndRow(8, 173, "L")
        ->mergeCells('K173:L173')->setCellValueByColumnAndRow(10, 173, "P")
        ->mergeCells('M173:N173')->setCellValueByColumnAndRow(12, 173, "L")
        ->mergeCells('O173:P173')->setCellValueByColumnAndRow(14, 173, "P")
        ->mergeCells('Q173:R173')->setCellValueByColumnAndRow(16, 173, "L")
        ->mergeCells('S173:T173')->setCellValueByColumnAndRow(18, 173, "P")
        ->mergeCells('U173:V173')->setCellValueByColumnAndRow(20, 173, "L")
        ->mergeCells('W173:X173')->setCellValueByColumnAndRow(22, 173, "P")
        ->mergeCells('Y173:Z173')->setCellValueByColumnAndRow(24, 173, "L")
        ->mergeCells('AA173:AB173')->setCellValueByColumnAndRow(26, 173, "P")
        ->mergeCells('AC173:AD173')->setCellValueByColumnAndRow(28, 173, "L")
        ->mergeCells('AE173:AF173')->setCellValueByColumnAndRow(30, 173, "P")
        ->mergeCells('AG173:AH173')->setCellValueByColumnAndRow(32, 173, "L")
        ->setCellValueByColumnAndRow(2, 174, "B")
        ->setCellValueByColumnAndRow(3, 174, "L")
        ->setCellValueByColumnAndRow(4, 174, "B")
        ->setCellValueByColumnAndRow(5, 174, "L")
        ->setCellValueByColumnAndRow(6, 174, "B")
        ->setCellValueByColumnAndRow(7, 174, "L")
        ->setCellValueByColumnAndRow(8, 174, "B")
        ->setCellValueByColumnAndRow(9, 174, "L")
        ->setCellValueByColumnAndRow(10, 174, "B")
        ->setCellValueByColumnAndRow(11, 174, "L")
        ->setCellValueByColumnAndRow(12, 174, "B")
        ->setCellValueByColumnAndRow(13, 174, "L")
        ->setCellValueByColumnAndRow(14, 174, "B")
        ->setCellValueByColumnAndRow(15, 174, "L")
        ->setCellValueByColumnAndRow(16, 174, "B")
        ->setCellValueByColumnAndRow(17, 174, "L")
        ->setCellValueByColumnAndRow(18, 174, "B")
        ->setCellValueByColumnAndRow(19, 174, "L")
        ->setCellValueByColumnAndRow(20, 174, "B")
        ->setCellValueByColumnAndRow(21, 174, "L")
        ->setCellValueByColumnAndRow(22, 174, "B")
        ->setCellValueByColumnAndRow(23, 174, "L")
        ->setCellValueByColumnAndRow(24, 174, "B")
        ->setCellValueByColumnAndRow(25, 174, "L")
        ->setCellValueByColumnAndRow(26, 174, "B")
        ->setCellValueByColumnAndRow(27, 174, "L")
        ->setCellValueByColumnAndRow(28, 174, "B")
        ->setCellValueByColumnAndRow(29, 174, "L")
        ->setCellValueByColumnAndRow(30, 174, "B")
        ->setCellValueByColumnAndRow(31, 174, "L")
        ->setCellValueByColumnAndRow(32, 174, "B")
        ->setCellValueByColumnAndRow(33, 174, "L")
        ->setCellValueByColumnAndRow(34, 174, "B")
        ->setCellValueByColumnAndRow(35, 174, "L")
        ->setCellValueByColumnAndRow(36, 174, "B")
        ->setCellValueByColumnAndRow(37, 174, "L")
        ->getStyle('A171:AO171')->applyFromArray($styleAlignHorizontalCenter);
for ($n = 1; $n <= 31; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $n + 174, $n);
}
$objPHPExcel->getActiveSheet()->getStyle('G171:AK171')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('AO171:AO171')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('AN171:AN171')->applyFromArray($styleAlignVerticalCenter);
$objPHPExcel->getActiveSheet()->getStyle('B171:B174')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C170:N170')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D170:N170')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('AM171:AM174')->applyFromArray($styleAlignHorizontalCenter); //JUMLAH
$objPHPExcel->getActiveSheet()->getStyle('AM171:AM174')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C173:AL173')->applyFromArray($styleAlignHorizontalCenter); //JK
$objPHPExcel->getActiveSheet()->getStyle('C173:AL173')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('C174:AL174')->applyFromArray($styleAlignHorizontalCenter); //JK
$objPHPExcel->getActiveSheet()->getStyle('C174:AL174')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('B175:AM205')->applyFromArray($styleAlignHorizontalCenter); //JK
$objPHPExcel->getActiveSheet()->getStyle('B175:AM205')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('G171:AL171')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C171:J171')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D171:AM171')->applyFromArray($styleThinBlackBorderAll);


$l = 175;
for ($i = 1; $i <= 31; $i++) {

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 1, 4, 10);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $l, $data['d']);


    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 5, 9, 10);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $l, $data['d']);


    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 10, 14, 10);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 15, 19, 10);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 20, 44, 10);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 45, 54, 10);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(22, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 55, 59, 10);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(26, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(27, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(28, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(29, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 60, 69, 10);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(30, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(31, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(32, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(33, $l, $data['d']);

    $data = $this->lap->get_data_laporan_bulanan_penyakit($i, $bulan, $tahun, 70, 200, 10);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(34, $l, $data['a']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(35, $l, $data['b']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(36, $l, $data['c']);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(37, $l, $data['d']);

    $l++;
}


$objPHPExcel->getActiveSheet()->setTitle('Harian');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Laporan_bulanan_Penyakit' . $nama_bulan[$bulan]. '-' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($objPHPExcel, "Excel5");
$objWriter->save("php://output");
?>