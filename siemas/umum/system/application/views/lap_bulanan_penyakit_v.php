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
                                'style' => PHPEXCEL_Style_Border::BORDER_THIN,
                                'color' => array('argb' => 'FF000000'),
                        ),
                ),
        );

        $styleThinBlackBorderAll = array(
                'borders' => array(
                        'allborders' => array(
                                'style' => PHPEXCEL_Style_Border::BORDER_THIN,
                                'color' => array('argb' => 'FF000000'),
                        ),
                ),
        );

        // Align
        $styleAlignHorizontalCenter = array(
                'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                ),
        );

        $styleAlignVerticalCenter = array(
                'alignment' => array(
                        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                ),
        );

        // Set properties
        $objPHPExcel->getProperties()->setCreator("Siemas")
                                     ->setLastModifiedBy("")
                                     ->setTitle("Rekap buanan umum")
                                     ->setSubject("rekap bulanan umum");
        $objPHPExcel->getActiveSheet()->getPageSetup()
                ->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE)
                ->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4)
                ->setFitToWidth(1)->setFitToHeight(0);

        $objPHPExcel->getActiveSheet()->getPageMargins()->setTop(0.75)
                                                        ->setRight(0.4)
                                                        ->setLeft(0.4)
                                                        ->setBottom(0.75);


        // Set Cell excell
        $objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(3.22);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
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
        $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(10);
        // header
        //$objPHPExcell->getActiveSheet()->getStyle('A1:H1')->getFont()->setSize(12);

        $objPHPExcel->getActiveSheet()->getStyle('A2:F4')->getFont()->setSize(8);

        $objPHPExcel->getActiveSheet()->getStyle('A5:AJ30')->getFont()->setSize(9);

$objPHPExcel->getActiveSheet()->getStyle('G2:U2')->getFont()->setSize(15);
        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('G2:U2')->setCellValueByColumnAndRow(6, 2, "Surveilans Terpadu penyakit berbasis puskesmas ");

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:B3')->setCellValueByColumnAndRow(0, 3, "Kecamatan  :  Bogor Tengah");

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:B4')->setCellValueByColumnAndRow(0, 4, "Kota  :  Bogor");

        //$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);

        $objPHPExcel->getActiveSheet()
                    ->mergeCells('A5:A7')->setCellValueByColumnAndRow(0, 5, "NO")
                    ->mergeCells('B5:B7')->setCellValueByColumnAndRow(1, 5, "Nama Layanan")
                    ->mergeCells('C5:Z5')->setCellValueByColumnAndRow(2, 5, "Tanggal")
                    ->mergeCells('AA5:AA7')->setCellValueByColumnAndRow(26, 6, "Jumlah")
                ->mergeCells('C6:D6')->setCellValueByColumnAndRow(2, 6, "0-7 Hr")
                ->mergeCells('E6:F6')->setCellValueByColumnAndRow(4, 6, "8-28 Hr")
                ->mergeCells('G6:H6')->setCellValueByColumnAndRow(6, 6, "<1 th ")
                ->mergeCells('I6:J6')->setCellValueByColumnAndRow(8, 6, "1-4 th")
                ->mergeCells('K6:L6')->setCellValueByColumnAndRow(10, 6, "5-9 th")
                 ->mergeCells('M6:N6')->setCellValueByColumnAndRow(12, 6, "10-14 th")
                 ->mergeCells('O6:P6')->setCellValueByColumnAndRow(14, 6, "15-19 th")
                 ->mergeCells('Q6:R6')->setCellValueByColumnAndRow(16, 6, "20-44 th")
                 ->mergeCells('S6:T6')->setCellValueByColumnAndRow(18, 6, "45-54 th")
                ->mergeCells('U6:V6')->setCellValueByColumnAndRow(20, 6, "55-59 th")
                ->mergeCells('W6:X6')->setCellValueByColumnAndRow(22, 6, "60-69 th")
                ->mergeCells('Y6:Z6')->setCellValueByColumnAndRow(24, 6, "70+")
                ->setCellValueByColumnAndRow(2, 7, "P")
                ->setCellValueByColumnAndRow(3, 7, "L")
                ->setCellValueByColumnAndRow(4, 7, "P")
                ->setCellValueByColumnAndRow(5, 7, "L")
                ->setCellValueByColumnAndRow(6, 7, "P")
                ->setCellValueByColumnAndRow(7, 7, "L")
                ->setCellValueByColumnAndRow(8, 7, "P")
                ->setCellValueByColumnAndRow(9, 7, "L")
                ->setCellValueByColumnAndRow(10, 7, "P")
                ->setCellValueByColumnAndRow(11, 7, "L")
                ->setCellValueByColumnAndRow(12, 7, "P")
                ->setCellValueByColumnAndRow(13, 7, "L")
                ->setCellValueByColumnAndRow(14, 7, "P")
                ->setCellValueByColumnAndRow(15, 7, "L")
                ->setCellValueByColumnAndRow(16, 7, "P")
                ->setCellValueByColumnAndRow(17, 7, "L")
                ->setCellValueByColumnAndRow(18, 7, "P")
                ->setCellValueByColumnAndRow(19, 7, "L")
                ->setCellValueByColumnAndRow(20, 7, "P")
                ->setCellValueByColumnAndRow(21, 7, "L")
                ->setCellValueByColumnAndRow(22, 7, "P")
                ->setCellValueByColumnAndRow(23, 7, "L")
                ->setCellValueByColumnAndRow(24, 7, "P")
                ->setCellValueByColumnAndRow(25, 7, "L")

        ->getStyle('A5:AO5')->applyFromArray($styleAlignHorizontalCenter);
         for($n=0;$n<=25;$n++){$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n+6, $n);}
         $objPHPExcel->getActiveSheet()->getStyle('G2:U2')->applyFromArray($styleAlignHorizontalCenter);
         $objPHPExcel->getActiveSheet()->getStyle('C6:AK40')->applyFromArray($styleAlignHorizontalCenter);
        $objPHPExcel->getActiveSheet()->getStyle('AO5:AO6')->applyFromArray($styleAlignHorizontalCenter);
        $objPHPExcel->getActiveSheet()->getStyle('A5:A6')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('B5:B6')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('C5:C6')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('Z5:Z6')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('D5:F5')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('G5:AA5')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('D6:AA6')->applyFromArray($styleThinBlackBorderAll);
         $objPHPExcel->getActiveSheet()->getStyle('A7:AA40')->applyFromArray($styleThinBlackBorderAll);
         $objPHPExcel->getActiveSheet()->getStyle('A5:AA6')->getFill()->setFillType(PHPEXCEL_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFDDEEDD');

        // the real data

       $i = 7;

       array_shift($penyakit);

        foreach($penyakit as $p) {

            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $i, $p['nama_penyakit']);

            $i++;
        }
$l = 9;
 {

    $data = $this->lap->penyakit_bulanan_umum( 8,2011, 0, 4, 'Korela');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $l, $data['p']);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $l, $data['l']);
 }
 //       $objPHPExcel->getActiveSheet()->getStyle('A6:F' . ($i-1))->applyFromArray($styleThinBlackBorderOutline);

        $objPHPExcel->getActiveSheet()->setTitle('bulanan layanan');

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);

        header('Content-Type: application/vnd.ms-excel');
        //header('Content-Disposition: attachment;filename="rekap_resep_bulanan_' . $namanya . '-' . $tahun . '.xls"');

        $objWriter = PHPEXCEL_IOFactory::createWriter($objPHPExcel, "Excel5");
        $objWriter->save("php://output");

?>