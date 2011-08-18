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
                                     ->setLastModifiedBy("085697977177")
                                     ->setTitle("Rekap Harian Tindakan Gigi")
                                     ->setSubject("Rekap Harian Tindakan Gigi");
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
        $objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(10);
       
        // header
        //$objPHPExcell->getActiveSheet()->getStyle('A1:H1')->getFont()->setSize(12);

        $objPHPExcel->getActiveSheet()->getStyle('A2:F4')->getFont()->setSize(8);

        $objPHPExcel->getActiveSheet()->getStyle('A5:AH90')->getFont()->setSize(9);


        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:B2')->setCellValueByColumnAndRow(1, 2, "Laporan Penyakit Harian BP Gigi ");

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:B2')->setCellValueByColumnAndRow(0, 2, "Kecamatan  :  Bogor Tengah");

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:B3')->setCellValueByColumnAndRow(0, 3, "Kota  :  Bogor");
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C4:F4')->setCellValueByColumnAndRow(2, 4, "Daerah : Cibogor");
        //$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);

      
        $objPHPExcel->getActiveSheet()
                    ->mergeCells('A5:A7')->setCellValueByColumnAndRow(0, 5, "NO")
                    ->mergeCells('B5:B7')->setCellValueByColumnAndRow(1, 5, "Nama Penyakit")
                        ->mergeCells('C5:Z5')->setCellValueByColumnAndRow(2, 5, "Golongan Umur")
                         ->mergeCells('AA5:AA7')->setCellValueByColumnAndRow(25, 6, "Jumlah")
                ->mergeCells('C6:D6')->setCellValueByColumnAndRow(2, 6, "0-7 Hari")
                     ->mergeCells('E6:F6')->setCellValueByColumnAndRow(4, 6, "8-28 Hari")
                     ->mergeCells('G6:H6')->setCellValueByColumnAndRow(6, 6, "29 Hari - 1 Tahun")
                     ->mergeCells('I6:J6')->setCellValueByColumnAndRow(8, 6, "1-4 Tahun")
                ->mergeCells('K6:L6')->setCellValueByColumnAndRow(10, 6, "5-9 Tahun")
                ->mergeCells('M6:N6')->setCellValueByColumnAndRow(12, 6, "10-14 Tahun")
                ->mergeCells('O6:P6')->setCellValueByColumnAndRow(14, 6, "15-19 Tahun")
                ->mergeCells('Q6:R6')->setCellValueByColumnAndRow(16, 6, "20-44 Tahun")
                ->mergeCells('S6:T6')->setCellValueByColumnAndRow(18, 6, "45-54 Tahun")
                ->mergeCells('U6:V6')->setCellValueByColumnAndRow(20, 6, "55-59 Tahun")
                ->mergeCells('W6:X6')->setCellValueByColumnAndRow(22, 6, "60-69 Tahun")
                ->mergeCells('Y6:Z6')->setCellValueByColumnAndRow(24, 6, ">70 Tahun")
                
                 ->setCellValueByColumnAndRow(2, 7, "L")
                 ->setCellValueByColumnAndRow(3, 7, "B")
                 ->setCellValueByColumnAndRow(4, 7, "L")
                 ->setCellValueByColumnAndRow(5, 7, "B")
                 ->setCellValueByColumnAndRow(6, 7, "L")
                 ->setCellValueByColumnAndRow(7, 7, "B")
                 ->setCellValueByColumnAndRow(8, 7, "L")
                 ->setCellValueByColumnAndRow(9, 7, "B")
                 ->setCellValueByColumnAndRow(10, 7, "L")
                 ->setCellValueByColumnAndRow(11, 7, "B")
                 ->setCellValueByColumnAndRow(12, 7, "L")
                 ->setCellValueByColumnAndRow(13, 7, "B")
                 ->setCellValueByColumnAndRow(14, 7, "L")
                 ->setCellValueByColumnAndRow(15, 7, "B")
                 ->setCellValueByColumnAndRow(16, 7, "L")
                 ->setCellValueByColumnAndRow(17, 7, "B")
                 ->setCellValueByColumnAndRow(18, 7, "L")
                 ->setCellValueByColumnAndRow(19, 7, "B")
                 ->setCellValueByColumnAndRow(20, 7, "L")
                 ->setCellValueByColumnAndRow(21, 7, "B")
                 ->setCellValueByColumnAndRow(22, 7, "L")
                 ->setCellValueByColumnAndRow(23, 7, "B")
                 ->setCellValueByColumnAndRow(24, 7, "L")
                 ->setCellValueByColumnAndRow(25, 7, "B")
                    ->getStyle('A5:Z5')->applyFromArray($styleAlignHorizontalCenter);
       
        $objPHPExcel->getActiveSheet()->getStyle('G6:AK7')->applyFromArray($styleAlignHorizontalCenter);
        $objPHPExcel->getActiveSheet()->getStyle('A5:C7')->applyFromArray($styleAlignVerticalCenter);
        $objPHPExcel->getActiveSheet()->getStyle('A5:A7')->applyFromArray($styleThinBlackBorderOutline);
         $objPHPExcel->getActiveSheet()->getStyle('AA5:AA7')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('B5:B7')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('C5:C7')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('D5:F5')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('G5:Z5')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('D6:Z7')->applyFromArray($styleThinBlackBorderAll);


        //fungsi inti





        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C19:F19')->setCellValueByColumnAndRow(2, 19, "Daerah : Pabaton");
        //$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);


        $objPHPExcel->getActiveSheet()
                    ->mergeCells('A20:A22')->setCellValueByColumnAndRow(0, 20, "NO")
                    ->mergeCells('B20:B22')->setCellValueByColumnAndRow(1, 20, "Nama Penyakit")
                        ->mergeCells('C20:Z20')->setCellValueByColumnAndRow(2, 20, "Golongan Umur")
                         ->mergeCells('AA20:AA22')->setCellValueByColumnAndRow(25, 21, "Jumlah")
                ->mergeCells('C21:D21')->setCellValueByColumnAndRow(2, 21, "0-7 Hari")
                     ->mergeCells('E21:F21')->setCellValueByColumnAndRow(4, 21, "8-28 Hari")
                     ->mergeCells('G21:H21')->setCellValueByColumnAndRow(6, 21, "29 Hari - 1 Tahun")
                     ->mergeCells('I21:J21')->setCellValueByColumnAndRow(8, 21, "1-4 Tahun")
                ->mergeCells('K21:L21')->setCellValueByColumnAndRow(10, 21, "5-9 Tahun")
                ->mergeCells('M21:N21')->setCellValueByColumnAndRow(12, 21, "10-14 Tahun")
                ->mergeCells('O21:P21')->setCellValueByColumnAndRow(14, 21, "15-19 Tahun")
                ->mergeCells('Q21:R21')->setCellValueByColumnAndRow(16, 21, "20-44 Tahun")
                ->mergeCells('S21:T21')->setCellValueByColumnAndRow(18, 21, "45-54 Tahun")
                ->mergeCells('U21:V21')->setCellValueByColumnAndRow(20, 21, "55-59 Tahun")
                ->mergeCells('W21:X21')->setCellValueByColumnAndRow(22, 21, "60-69 Tahun")
                ->mergeCells('Y21:Z21')->setCellValueByColumnAndRow(24, 21, ">70 Tahun")

                 ->setCellValueByColumnAndRow(2, 22, "L")
                 ->setCellValueByColumnAndRow(3, 22, "B")
                 ->setCellValueByColumnAndRow(4, 22, "L")
                 ->setCellValueByColumnAndRow(5, 22, "B")
                 ->setCellValueByColumnAndRow(6, 22, "L")
                 ->setCellValueByColumnAndRow(7, 22, "B")
                 ->setCellValueByColumnAndRow(8, 22, "L")
                 ->setCellValueByColumnAndRow(9, 22, "B")
                 ->setCellValueByColumnAndRow(10, 22, "L")
                 ->setCellValueByColumnAndRow(11, 22, "B")
                 ->setCellValueByColumnAndRow(12, 22, "L")
                 ->setCellValueByColumnAndRow(13, 22, "B")
                 ->setCellValueByColumnAndRow(14, 22, "L")
                 ->setCellValueByColumnAndRow(15, 22, "B")
                 ->setCellValueByColumnAndRow(16, 22, "L")
                 ->setCellValueByColumnAndRow(17, 22, "B")
                 ->setCellValueByColumnAndRow(18, 22, "L")
                 ->setCellValueByColumnAndRow(19, 22, "B")
                 ->setCellValueByColumnAndRow(20, 22, "L")
                 ->setCellValueByColumnAndRow(21, 22, "B")
                 ->setCellValueByColumnAndRow(22, 22, "L")
                 ->setCellValueByColumnAndRow(23, 22, "B")
                 ->setCellValueByColumnAndRow(24, 22, "L")
                 ->setCellValueByColumnAndRow(25, 22, "B")
                    ->getStyle('A20:Z20')->applyFromArray($styleAlignHorizontalCenter);

        $objPHPExcel->getActiveSheet()->getStyle('G20:AK21')->applyFromArray($styleAlignHorizontalCenter);
        $objPHPExcel->getActiveSheet()->getStyle('A20:C22')->applyFromArray($styleAlignVerticalCenter);
        $objPHPExcel->getActiveSheet()->getStyle('A20:A22')->applyFromArray($styleThinBlackBorderOutline);
         $objPHPExcel->getActiveSheet()->getStyle('AA20:AA22')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('B20:B22')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('C20:C22')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('D20:F20')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('G20:Z20')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('D21:Z22')->applyFromArray($styleThinBlackBorderAll);

 //fungsi inti




          $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C33:F33')->setCellValueByColumnAndRow(2, 33, "Daerah : Luar Wilayah");
        //$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);


        $objPHPExcel->getActiveSheet()
                    ->mergeCells('A34:A36')->setCellValueByColumnAndRow(0,  34, "NO")
                    ->mergeCells('B34:B36')->setCellValueByColumnAndRow(1, 34, "Nama Penyakit")
                        ->mergeCells('C34:Z34')->setCellValueByColumnAndRow(2, 34, "Golongan Umur")
                         ->mergeCells('AA34:AA36')->setCellValueByColumnAndRow(25, 35, "Jumlah")
                ->mergeCells('C35:D35')->setCellValueByColumnAndRow(2, 35, "0-7 Hari")
                     ->mergeCells('E35:F35')->setCellValueByColumnAndRow(4, 35, "8-28 Hari")
                     ->mergeCells('G35:H35')->setCellValueByColumnAndRow(6, 35, "29 Hari - 1 Tahun")
                     ->mergeCells('I35:J35')->setCellValueByColumnAndRow(8, 35, "1-4 Tahun")
                ->mergeCells('K35:L35')->setCellValueByColumnAndRow(10, 35, "5-9 Tahun")
                ->mergeCells('M35:N35')->setCellValueByColumnAndRow(12, 35, "10-14 Tahun")
                ->mergeCells('O35:P35')->setCellValueByColumnAndRow(14, 35, "15-19 Tahun")
                ->mergeCells('Q35:R35')->setCellValueByColumnAndRow(16, 35, "20-44 Tahun")
                ->mergeCells('S35:T35')->setCellValueByColumnAndRow(18, 35, "45-54 Tahun")
                ->mergeCells('U35:V35')->setCellValueByColumnAndRow(20, 35, "55-59 Tahun")
                ->mergeCells('W35:X35')->setCellValueByColumnAndRow(22, 35, "60-69 Tahun")
                ->mergeCells('Y35:Z35')->setCellValueByColumnAndRow(24, 35, ">70 Tahun")

                 ->setCellValueByColumnAndRow(2, 36, "L")
                 ->setCellValueByColumnAndRow(3, 36, "B")
                 ->setCellValueByColumnAndRow(4, 36, "L")
                 ->setCellValueByColumnAndRow(5, 36, "B")
                 ->setCellValueByColumnAndRow(6, 36, "L")
                 ->setCellValueByColumnAndRow(7, 36, "B")
                 ->setCellValueByColumnAndRow(8, 36, "L")
                 ->setCellValueByColumnAndRow(9, 36, "B")
                 ->setCellValueByColumnAndRow(10, 36, "L")
                 ->setCellValueByColumnAndRow(11, 36, "B")
                 ->setCellValueByColumnAndRow(12, 36, "L")
                 ->setCellValueByColumnAndRow(13, 36, "B")
                 ->setCellValueByColumnAndRow(14, 36, "L")
                 ->setCellValueByColumnAndRow(15, 36, "B")
                 ->setCellValueByColumnAndRow(16, 36, "L")
                 ->setCellValueByColumnAndRow(17, 36, "B")
                 ->setCellValueByColumnAndRow(18, 36, "L")
                 ->setCellValueByColumnAndRow(19, 36, "B")
                 ->setCellValueByColumnAndRow(20, 36, "L")
                 ->setCellValueByColumnAndRow(21, 36, "B")
                 ->setCellValueByColumnAndRow(22, 36, "L")
                 ->setCellValueByColumnAndRow(23, 36, "B")
                 ->setCellValueByColumnAndRow(24, 36, "L")
                 ->setCellValueByColumnAndRow(25, 36, "B")
                    ->getStyle('A34:Z34')->applyFromArray($styleAlignHorizontalCenter);

        $objPHPExcel->getActiveSheet()->getStyle('G34:AK35')->applyFromArray($styleAlignHorizontalCenter);
        $objPHPExcel->getActiveSheet()->getStyle('A34:C36')->applyFromArray($styleAlignVerticalCenter);
        $objPHPExcel->getActiveSheet()->getStyle('A34:A36')->applyFromArray($styleThinBlackBorderOutline);
         $objPHPExcel->getActiveSheet()->getStyle('AA34:AA36')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('B34:B36')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('C34:C36')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('D34:F34')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('G34:Z34')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('D35:Z36')->applyFromArray($styleThinBlackBorderAll);

//fungsi beneran

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C46:F46')->setCellValueByColumnAndRow(2, 46, "Daerah : Kota");
        //$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);


        $objPHPExcel->getActiveSheet()
                    ->mergeCells('A47:A49')->setCellValueByColumnAndRow(0, 48, "NO")
                    ->mergeCells('B47:B49')->setCellValueByColumnAndRow(1, 47, "Nama Penyakit")
                        ->mergeCells('C47:Z47')->setCellValueByColumnAndRow(2, 47, "Golongan Umur")
                         ->mergeCells('AA47:AA49')->setCellValueByColumnAndRow(25, 48, "Jumlah")
                ->mergeCells('C48:D48')->setCellValueByColumnAndRow(2, 48, "0-7 Hari")
                     ->mergeCells('E48:F48')->setCellValueByColumnAndRow(4, 48, "8-28 Hari")
                     ->mergeCells('G48:H48')->setCellValueByColumnAndRow(6, 48, "29 Hari - 1 Tahun")
                     ->mergeCells('I48:J48')->setCellValueByColumnAndRow(8, 48, "1-4 Tahun")
                ->mergeCells('K48:L48')->setCellValueByColumnAndRow(10, 48, "5-9 Tahun")
                ->mergeCells('M48:N48')->setCellValueByColumnAndRow(12, 48, "10-14 Tahun")
                ->mergeCells('O48:P48')->setCellValueByColumnAndRow(14, 48, "15-19 Tahun")
                ->mergeCells('Q48:R48')->setCellValueByColumnAndRow(16, 48, "20-44 Tahun")
                ->mergeCells('S48:T48')->setCellValueByColumnAndRow(18, 48, "45-54 Tahun")
                ->mergeCells('U48:V48')->setCellValueByColumnAndRow(20, 48, "55-59 Tahun")
                ->mergeCells('W48:X48')->setCellValueByColumnAndRow(22, 48, "60-69 Tahun")
                ->mergeCells('Y48:Z48')->setCellValueByColumnAndRow(24, 48, ">70 Tahun")

                 ->setCellValueByColumnAndRow(2, 49, "L")
                 ->setCellValueByColumnAndRow(3, 49, "B")
                 ->setCellValueByColumnAndRow(4, 49, "L")
                 ->setCellValueByColumnAndRow(5, 49, "B")
                 ->setCellValueByColumnAndRow(6, 49, "L")
                 ->setCellValueByColumnAndRow(7, 49, "B")
                 ->setCellValueByColumnAndRow(8, 49, "L")
                 ->setCellValueByColumnAndRow(9, 49, "B")
                 ->setCellValueByColumnAndRow(10, 49, "L")
                 ->setCellValueByColumnAndRow(11, 49, "B")
                 ->setCellValueByColumnAndRow(12, 49, "L")
                 ->setCellValueByColumnAndRow(13, 49, "B")
                 ->setCellValueByColumnAndRow(14, 49, "L")
                 ->setCellValueByColumnAndRow(15, 49, "B")
                 ->setCellValueByColumnAndRow(16, 49, "L")
                 ->setCellValueByColumnAndRow(17, 49, "B")
                 ->setCellValueByColumnAndRow(18, 49, "L")
                 ->setCellValueByColumnAndRow(19, 49, "B")
                 ->setCellValueByColumnAndRow(20, 49, "L")
                 ->setCellValueByColumnAndRow(21, 49, "B")
                 ->setCellValueByColumnAndRow(22, 49, "L")
                 ->setCellValueByColumnAndRow(23, 49, "B")
                 ->setCellValueByColumnAndRow(24, 49, "L")
                 ->setCellValueByColumnAndRow(25, 49, "B")
                    ->getStyle('A47:Z47')->applyFromArray($styleAlignHorizontalCenter);

        $objPHPExcel->getActiveSheet()->getStyle('G48:AK49')->applyFromArray($styleAlignHorizontalCenter);
        $objPHPExcel->getActiveSheet()->getStyle('A47:C49')->applyFromArray($styleAlignVerticalCenter);
        $objPHPExcel->getActiveSheet()->getStyle('A47:A49')->applyFromArray($styleThinBlackBorderOutline);
         $objPHPExcel->getActiveSheet()->getStyle('AA47:AA49')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('B47:B49')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('C47:C49')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('D47:F47')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('G47:Z47')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('D48:Z49')->applyFromArray($styleThinBlackBorderAll);











        // the real data

       /* $i = 7;
        foreach($data_bulanan as $data) {
            $active1 = 'A'.$i.':'.'AO'.$i;
            $active2 = 'A'.$i;
            $active3 = 'D'.$i.':'.'AO'.$i;
            $formula1 = '=SUM('.'G'.$i.':AK'.$i.')';
            $formula2 = '=D'.$i.'+E'.$i;
            $formula3 = '=F'.$i.'-AN'.$i;
            $objPHPExcel->getActiveSheet()->getStyle($active1)->applyFromArray($styleThinBlackBorderAll);
            $objPHPExcel->getActiveSheet()->getStyle($active2)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->getStyle($active3)->applyFromArray($styleAlignHorizontalCenter);
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $i, $data['id_obat']);
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $i, $data['nbk_obat']);
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $i, $data['satuan_obat']);
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $i, $data['stok_awal']);
            if(isset($data['tambah'])){
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $i, $data['tambah']);}
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(37, $i, $formula1);
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(39, $i, $formula1);
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $i, $formula2);
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(40, $i, $formula3);
            $x=5;
            $str=1;
            for($z=1;$z<=31;$z++){
                $t=$x+$z;
                $obatn='obat'.$z;
                if(isset($data[$obatn])){
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, $i, $data[$obatn]);}
                $str++;
            }
            $i++;}

*/
 //       $objPHPExcel->getActiveSheet()->getStyle('A6:F' . ($i-1))->applyFromArray($styleThinBlackBorderOutline);

        $objPHPExcel->getActiveSheet()->setTitle('Harian');

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);

        header('Content-Type: application/vnd.ms-excel');
        //header('Content-Disposition: attachment;filename="rekap_resep_bulanan_' . $namanya . '-' . $tahun . '.xls"');

        $objWriter = PHPEXCEL_IOFactory::createWriter($objPHPExcel, "Excel5");
        $objWriter->save("php://output");

?>
