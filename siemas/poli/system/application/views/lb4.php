<?php
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
        ->setLastModifiedBy("")
        ->setTitle("")
        ->setSubject("");
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
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(43);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(5);
// header
//$objPHPExcell->getActiveSheet()->getStyle('A1:H1')->getFont()->setSize(12);

$objPHPExcel->getActiveSheet()->getStyle('A2:F4')->getFont()->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle('D2:J2')->getFont()->setSize(20);
$objPHPExcel->getActiveSheet()->getStyle('A5:Q200')->getFont()->setSize(9);


$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D2:J2')->setCellValueByColumnAndRow(3, 2, "LB4 Bu De");

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:B3')->setCellValueByColumnAndRow(0, 3, "Kecamatan  :  Bogor Tengah");

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:B4')->setCellValueByColumnAndRow(0, 4, "Kota  :  Bogor");

//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);

$objPHPExcel->getActiveSheet()
        ->mergeCells('A5:A7')->setCellValueByColumnAndRow(0, 5, "NO")
        ->mergeCells('B5:B7')->setCellValueByColumnAndRow(1, 5, "Kegiatan")
        ->mergeCells('C5:H5')->setCellValueByColumnAndRow(2, 5, "Kelurahan")
         ->mergeCells('I5:K6')->setCellValueByColumnAndRow(8, 5, "Luar Wil. Kerja")
         ->mergeCells('L5:N6')->setCellValueByColumnAndRow(11, 5, "Luar Wil Bogor")
         ->mergeCells('O5:Q6')->setCellValueByColumnAndRow(14, 5, "Jumlah Total")
         ->mergeCells('C6:E6')->setCellValueByColumnAndRow(2, 6, "PABATON")
         ->mergeCells('F6:H6')->setCellValueByColumnAndRow(5, 6, "COBOGOR")



        ->setCellValueByColumnAndRow(2, 7, "Askes")
        ->setCellValueByColumnAndRow(3, 7, "Jamksemas")
        ->setCellValueByColumnAndRow(4, 7, "Umum")
        ->setCellValueByColumnAndRow(5, 7, "Askes")
        ->setCellValueByColumnAndRow(6, 7, "Jamksemas")
        ->setCellValueByColumnAndRow(7, 7, "Umum")
        ->setCellValueByColumnAndRow(8, 7, "Askes")
        ->setCellValueByColumnAndRow(9, 7, "Jamksemas")
        ->setCellValueByColumnAndRow(10, 7, "Umum")
        ->setCellValueByColumnAndRow(11, 7, "Askes")
        ->setCellValueByColumnAndRow(12, 7, "Jamksemas")
        ->setCellValueByColumnAndRow(13, 7, "Umum")
        ->setCellValueByColumnAndRow(14, 7, "Askes")
        ->setCellValueByColumnAndRow(15, 7, "Jamksemas")
        ->setCellValueByColumnAndRow(16, 7, "Umum")

        ->setCellValueByColumnAndRow(0, 8, "V")
        ->setCellValueByColumnAndRow(1, 8, "UPAYA KESEHATAN GIGI")
        ->setCellValueByColumnAndRow(0, 9, "A")
        ->setCellValueByColumnAndRow(1, 9, "KUNJUNGAN DI BP. GIGI")
        ->setCellValueByColumnAndRow(1, 10, "Kunjungan baru rawat jalan gigi")
        ->setCellValueByColumnAndRow(1, 11, "Kunjungan lama rawat jalan gigi")
        ->setCellValueByColumnAndRow(1, 12, "Kunjungan baru ibu hamil")
        ->setCellValueByColumnAndRow(1, 13, "Kunjungan Lama ibu hamil")
        ->setCellValueByColumnAndRow(1, 14, "Kunjungan baru anak prasekolah")
        ->setCellValueByColumnAndRow(1, 15, "Kunjungan lama anak prasekolah")
        ->setCellValueByColumnAndRow(1, 16, "Hari buka Bp. gigi")
        ->setCellValueByColumnAndRow(1, 17, "Tumpatan gigi tetap")
        ->setCellValueByColumnAndRow(1, 18, "Pencabutan gigi tetap")
        ->setCellValueByColumnAndRow(1, 19, "Tumpatan gigi suung")
        ->setCellValueByColumnAndRow(1, 20, "Pencabutan gigi sulung")
        ->setCellValueByColumnAndRow(1, 21, "pengobatan pulpa & jaringan periapikal")
        ->setCellValueByColumnAndRow(1, 22, "pengobatan gusi dan atau periodontal")
        ->setCellValueByColumnAndRow(1, 23, "Pembersihan karang gigi")

        ->setCellValueByColumnAndRow(0, 25, "B")
        ->setCellValueByColumnAndRow(1, 25, "KUNJUNGAN U K G S")
        ->setCellValueByColumnAndRow(1, 26, "Tumpatan gigi tetap")
        ->setCellValueByColumnAndRow(1, 27, "Pencabutan gigi tetap")
        ->setCellValueByColumnAndRow(1, 28, "Tumpatan gigi suung")
        ->setCellValueByColumnAndRow(1, 29, "Pencabutan gigi sulung")
        ->setCellValueByColumnAndRow(1, 30, "Pencabutan gigi sulung")
        ->setCellValueByColumnAndRow(1, 31, "Pengobatan pulpa")
        ->setCellValueByColumnAndRow(1, 32, "PEngobatan periodontal")
        ->setCellValueByColumnAndRow(1, 33, "Pembersihan karang gigi")
        ->setCellValueByColumnAndRow(1, 34, "Rujukan ke puskesmas")
        ->setCellValueByColumnAndRow(1, 35, "PEmbinaan ke SD UKGS")
        ->setCellValueByColumnAndRow(1, 36, "Jumlah murid SD UKGS")
        ->setCellValueByColumnAndRow(1, 37, " Murid SD UKGS yang perlu perawatan ")
        ->setCellValueByColumnAndRow(1, 38, "Murid SD UKGS yang mendapat perawatan")
        ->setCellValueByColumnAndRow(1, 39, "PEnyuluhan di sekolah SD/MI")
        ->setCellValueByColumnAndRow(1, 40, "PEnyuluhan di sekolah TK/RA")
        ->setCellValueByColumnAndRow(1, 41, "Sikat gigi masal di SD/MA")
        ->setCellValueByColumnAndRow(1, 42, "Sikat gigi masal di TK/RA")
        ->setCellValueByColumnAndRow(1, 43, "Pembinaan ke desa UKGMD")
        ->setCellValueByColumnAndRow(1, 44," Penduduk yang mendapatkan penyuluhan kesehatan gigi")
        ->setCellValueByColumnAndRow(1, 45, "Rujukan kader,Posyandu,BP, sekolah")
        ->getStyle('A5:AO5')->applyFromArray($styleAlignHorizontalCenter);
for($n=1;$n<=14;$n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n+9, $n);
}
for($n=1;$n<=21;$n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n+24, $n);
}

$objPHPExcel->getActiveSheet()->getStyle('G6:N6')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('A5:Q45')->applyFromArray($styleAlignVerticalCenter);
$objPHPExcel->getActiveSheet()->getStyle('A5:Q45')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('A5:A6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('B5:B6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C5:C6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D5:F5')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('G5:N5')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D6:N7')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('O5:Q7')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('A5:Q7')->getFill()->setFillType(Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFDDEEDD');



    $data = $this->lap->lb4('baton','askes','lama','ya','ya');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 11, $data);




$objPHPExcel->getActiveSheet()->setTitle('Harian');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

header('Content-Type: application/vnd.ms-excel');
//header('Content-Disposition: attachment;filename="rekap_resep_bulanan_' . $namanya . '-' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($objPHPExcel, "Excel5");
$objWriter->save("php://output");

?>