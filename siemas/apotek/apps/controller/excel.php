<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_excel extends Panada {

    var $nick_bulan = array(
            "",
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'Mei',
            'Jun',
            'Jul',
            'Agu',
            'Sep',
            'Okt',
            'Nov',
            'Des'
    );

    var $nama_bulan = array(
            "",
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
    );

    public function __construct(){
        parent::__construct();
		$this->db = new library_db();
		$this->session = new Library_session();
    }

    public function index(){
    }

    public function harian(){
        $tanggal_harian = $this->session->get('tanggal_harian');
        $this->session->remove('tanggal_harian');
        $tanggal = 'Tanggal '.$tanggal_harian;
        $data_harian = $this->session->get('data_harian');
        $this->session->remove('data_harian');


        if($data_harian){
        require_once 'PHPExcel.php';
        require_once 'PHPExcel/IOFactory.php';
        $objPHPExcel = new PHPExcel();

        // Set properties
        $objPHPExcel->getProperties()->setCreator("Siemas")
                                     ->setLastModifiedBy("085697977177")
                                     ->setTitle("Rekap Harian Obat")
                                     ->setSubject("Rekap Harian Obat");

        // Set Excel cell
        $objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');

        // Title Sheet
        $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
        $objPHPExcel->getActiveSheet()->getStyle('A1:F1')->getFont()->setSize(14)->setBold(true);
        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:F1')->setCellValueByColumnAndRow(0, 1, "Laporan Harian")
                    ->getStyle('A1:F1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        // column width

        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);

        // header

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:B2')->setCellValueByColumnAndRow(0, 2, "Kecamatan  :  Bogor Tengah");

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:B3')->setCellValueByColumnAndRow(0, 3, "Kota  :  Bogor");

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $tanggal);

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C2:F2')->setCellValueByColumnAndRow(2, 2, "Resep  :");

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C3:F3')->setCellValueByColumnAndRow(2, 3, "Kasus  :");

        $objPHPExcel->getActiveSheet()->getStyle('A2:F4')->getFont()->setSize(10);

        $objPHPExcel->getActiveSheet()
                    ->setCellValueByColumnAndRow(0, 5, "NO")
                    ->setCellValueByColumnAndRow(1, 5, "Nama Obat")
                    ->setCellValueByColumnAndRow(2, 5, "Sat")
                    ->setCellValueByColumnAndRow(3, 5, "P.Awal")
                    ->setCellValueByColumnAndRow(4, 5, "Terpakai")
                    ->setCellValueByColumnAndRow(5, 5, "Sisa")
                    ->getStyle('A5:F5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        for ($n = 0; $n <= 5; $n++)
            $objPHPExcel->getActiveSheet()->getStyleByColumnAndRow($n, 5)->getFont()->setBold(true);

        // the real data

        $i = 6;
        foreach($data_harian as $data) {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $i, $data['id_obat']);
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $i, $data['nbk_obat']);
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $i, $data['satuan_obat']);
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $i, $data['stok_awal']);
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $i, $data['terpakai']);
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $i, $data['stok_akhir']);
            $i++;}
    //    endforeach;

        // border
        $styleThinBlackBorderOutline = array(
                'borders' => array(
                        'outline' => array(
                                'style' => PHPEXCEL_Style_Border::BORDER_THIN,
                                'color' => array('argb' => 'FF000000'),
                        ),
                ),
        );
        $objPHPExcel->getActiveSheet()->getStyle('A5:F5')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('A6:F' . ($i-1))->applyFromArray($styleThinBlackBorderOutline);

        $objPHPExcel->getActiveSheet()->getStyle('A5:F5')->getFill()->setFillType(PHPEXCEL_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFDDDDDD');

        // Rename sheet
        $objPHPExcel->getActiveSheet()->setTitle('Harian');

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="rekap_resep_harian_' . $tanggal_harian . '.xls"');

        $objWriter = PHPEXCEL_IOFactory::createWriter($objPHPExcel, "Excel5");
        $objWriter->save("php://output");
        }
        else{
            $alert = '<span class="notification n-error">Data yang anda cari tidak ada!</span>';
            $this->session->set('alert_harian',$alert);
        }
    $this->redirect('index.php/laporan/harian/');
    }

    public function bulanan(){
        $bulan = $this->session->get('bulan_bulanan');
        $this->session->remove('bulan_bulanan');
        $tahun = $this->session->get('tahun_bulanan');
        $this->session->remove('tahun_bulanan');
        $data_bulanan = $this->session->get('data_bulanan');
        $namanya = $this->nama_bulan[$bulan];
        $date='Bulan '.$namanya.' '.$tahun;

        if($data_bulanan){
        require_once 'PHPExcel.php';
        require_once 'PHPExcel/IOFactory.php';
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
                                     ->setTitle("Rekap Bulanan Obat")
                                     ->setSubject("Rekap Bulanan Obat");
        $objPHPExcel->getActiveSheet()->getPageSetup()
                ->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE)
                ->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4)
                ->setFitToWidth(1)->setFitToHeight(0);

        $objPHPExcel->getActiveSheet()->getPageMargins()->setTop(0.75)
                                                        ->setRight(0.4)
                                                        ->setLeft(0.4)
                                                        ->setBottom(0.75);

        // Title Sheet
        $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
        $objPHPExcel->getActiveSheet()->getStyle('A1:F1')->getFont()->setSize(14)->setBold(true);
        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:F1')->setCellValueByColumnAndRow(0, 1, "Laporan Bulanan")
                    ->getStyle('A1:F1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


        // Set Cell excell
        $objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(3.22);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(11);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AL')->setWidth(5.33);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AM')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AN')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('AO')->setWidth(5);

        // header
        
        $objPHPExcel->getActiveSheet()->getStyle('A2:F4')->getFont()->setSize(8);

        $objPHPExcel->getActiveSheet()->getStyle('A5:AO273')->getFont()->setSize(9);

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:B2')->setCellValueByColumnAndRow(0, 2, "Kecamatan  :  Bogor Tengah");

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:B3')->setCellValueByColumnAndRow(0, 3, "Kota  :  Bogor");

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C2:F2')->setCellValueByColumnAndRow(2, 2, "Resep  :");

        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C3:F3')->setCellValueByColumnAndRow(2, 3, "Kasus  :");

        $objPHPExcel->getActiveSheet()
                    ->mergeCells('A5:A6')->setCellValueByColumnAndRow(0, 5, "NO")
                    ->mergeCells('B5:B6')->setCellValueByColumnAndRow(1, 5, "Nama Obat")
                    ->mergeCells('C5:C6')->setCellValueByColumnAndRow(2, 5, "Sat")
                    ->mergeCells('D5:F5')->setCellValueByColumnAndRow(3, 5, "Persediaan")
                    ->mergeCells('D5:F5')->setCellValueByColumnAndRow(3, 5, "Persediaan")
                    ->mergeCells('G5:AK5')->setCellValueByColumnAndRow(6, 5, "Jumlah Pemakaian Obat pada Tanggal")
                    ->mergeCells('AL5:AM5')->setCellValueByColumnAndRow(37, 5, "Pemakaian")
                    ->mergeCells('AN5:AN6')->setCellValueByColumnAndRow(39, 5, "Jumlah")
                    ->setCellValueByColumnAndRow(40, 5, "Sisa")
                    ->setCellValueByColumnAndRow(40, 6, "akhir")
                    ->setCellValueByColumnAndRow(3, 6, "P.Awal")
                    ->setCellValueByColumnAndRow(4, 6, "Penam.+")
                    ->setCellValueByColumnAndRow(5, 6, "Juml")
                    ->setCellValueByColumnAndRow(37, 6, "Boteng")
                    ->setCellValueByColumnAndRow(38, 6, "Pemda")
                    ->getStyle('A5:AO5')->applyFromArray($styleAlignHorizontalCenter);
        for($n=1;$n<=31;$n++){$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($n+5, 6, $n);}
        $objPHPExcel->getActiveSheet()->getStyle('G6:AK6')->applyFromArray($styleAlignHorizontalCenter);
        $objPHPExcel->getActiveSheet()->getStyle('AO5:AO6')->applyFromArray($styleAlignHorizontalCenter);
        $objPHPExcel->getActiveSheet()->getStyle('A5:C6')->applyFromArray($styleAlignVerticalCenter);
        $objPHPExcel->getActiveSheet()->getStyle('AN5:AN6')->applyFromArray($styleAlignVerticalCenter);
        $objPHPExcel->getActiveSheet()->getStyle('A5:A6')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('B5:B6')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('C5:C6')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('D5:F5')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('G5:AK5')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('AL5:AM5')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('AN5:AN6')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('AO5:AO6')->applyFromArray($styleThinBlackBorderOutline);
        $objPHPExcel->getActiveSheet()->getStyle('D6:AM6')->applyFromArray($styleThinBlackBorderAll);
        // the real data

        $i = 7;
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
    

 //       $objPHPExcel->getActiveSheet()->getStyle('A6:F' . ($i-1))->applyFromArray($styleThinBlackBorderOutline);

        $objPHPExcel->getActiveSheet()->getStyle('A5:AO6')->getFill()->setFillType(PHPEXCEL_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFDDDDDD');

        // Rename sheet
        $objPHPExcel->getActiveSheet()->setTitle('Bulanan');

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="rekap_resep_bulanan_' . $namanya . '-' . $tahun . '.xls"');

        $objWriter = PHPEXCEL_IOFactory::createWriter($objPHPExcel, "Excel5");
        $objWriter->save("php://output");
        }
        else{
            $alert = '<span class="notification n-error">Data yang anda cari tidak ada!</span>';
            $this->session->set('alert_bulanan',$alert);
        }
    $this->redirect('index.php/laporan/bulanan/');
    }

    public function tahunan(){
        $bulan = $this->session->get('bulan_bulanan');
        $this->session->remove('bulan_bulanan');
        $tahun = $this->session->get('tahun_bulanan');
        $this->session->remove('tahun_bulanan');
        $data_tahunan = $this->session->get('data_tahunan');
        $namanya = $this->nama_bulan[$bulan];
        $nick_tahun=$tahun%100;
        if($bulan>1){
            $bulan2 = $bulan-1;
            $tahun2 = $tahun+1;
        } else {
            $bulan2 = 12;
            $tahun2 = $tahun;
        }

        $header_laporan = 'Rekapan Pemakaian Obat 1 Tahun '.$this->nama_bulan[$bulan].' '.$tahun.' S/D '.$this->nama_bulan[$bulan2].' '.$tahun2;

        if($data_tahunan){
        require_once 'PHPExcel.php';
        require_once 'PHPExcel/IOFactory.php';
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
                                     ->setTitle("Rekap Tahunan Obat")
                                     ->setSubject("Rekap Tahunan Obat");
        $objPHPExcel->getActiveSheet()->getPageSetup()
                ->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE)
                ->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4)
                ->setFitToWidth(1)->setFitToHeight(0);

        $objPHPExcel->getActiveSheet()->getPageMargins()->setTop(0.75)
                                                        ->setRight(0.4)
                                                        ->setLeft(0.4)
                                                        ->setBottom(0.75);

        // Title Sheet
        $objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
        $objPHPExcel->getActiveSheet()->getStyle('A2:P2')->getFont()->setSize(14)->setBold(true);
        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:P2')->setCellValueByColumnAndRow(0, 2, $header_laporan)
                    ->getStyle('A2:P2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


        // Set Cell excell
        $objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(3.22);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(11);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(10);
        // header

        $objPHPExcel->getActiveSheet()->getStyle('A5:AO273')->getFont()->setSize(9);

        $objPHPExcel->getActiveSheet()
                    ->mergeCells('A4:A5')->setCellValueByColumnAndRow(0, 4, "NO")
                    ->mergeCells('B4:B5')->setCellValueByColumnAndRow(1, 4, "Nama Obat")
                    ->mergeCells('C4:C5')->setCellValueByColumnAndRow(2, 4, "Sat")
                    ->mergeCells('D4:D5')
                    ->mergeCells('E4:E5')
                    ->mergeCells('F4:F5')
                    ->mergeCells('G4:G5')
                    ->mergeCells('H4:H5')
                    ->mergeCells('I4:I5')
                    ->mergeCells('J4:J5')
                    ->mergeCells('K4:K5')
                    ->mergeCells('L4:L5')
                    ->mergeCells('M4:M5')
                    ->mergeCells('N4:N5')
                    ->mergeCells('O4:O5')
                    ->mergeCells('P4:P5')->setCellValueByColumnAndRow(15, 4, "JUML")
                    ->getStyle('A4:P5')->applyFromArray($styleAlignHorizontalCenter)->applyFromArray($styleAlignVerticalCenter);
            $x=$bulan;
            $y=$nick_tahun;
        for($n=1;$n<=12;$n++){
            $bulan_tahun = $this->nick_bulan[$x]." '".$y;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($n+2, 4, $bulan_tahun);
            $x++;
            if($x>12){
                $x=1;
                $y++;
            }
            }
        $objPHPExcel->getActiveSheet()->getStyle('A4:P5')->applyFromArray($styleThinBlackBorderAll);
        // the real data

        $i = 6;
        foreach($data_tahunan as $data) {
            $active1 = 'A'.$i.':'.'P'.$i;
            $active2 = 'A'.$i;
            $active3 = 'D'.$i.':'.'P'.$i;
            $formula1 = '=SUM('.'D'.$i.':O'.$i.')';
            $objPHPExcel->getActiveSheet()->getStyle($active1)->applyFromArray($styleThinBlackBorderAll);
            $objPHPExcel->getActiveSheet()->getStyle($active2)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->getStyle($active3)->applyFromArray($styleAlignHorizontalCenter);
            if(isset($data['id_obat'])){
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $i, $data['id_obat']);}
            if(isset($data['nbk_obat'])){
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $i, $data['nbk_obat']);}
            if(isset($data['satuan_obat'])){
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $i, $data['satuan_obat']);}
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, $i, $formula1);
            $x=2;
            $str=1;
            for($z=1;$z<=12;$z++){
                $t=$x+$z;
                $obatn='obat'.$z;
                if(isset($data[$obatn])){
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, $i, $data[$obatn]);}
                $str++;
            }
            $i++;}


 //       $objPHPExcel->getActiveSheet()->getStyle('A6:F' . ($i-1))->applyFromArray($styleThinBlackBorderOutline);

        $objPHPExcel->getActiveSheet()->getStyle('A4:P5')->getFill()->setFillType(PHPEXCEL_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFDDDDDD');

        // Rename sheet
        $objPHPExcel->getActiveSheet()->setTitle('Tahunan');

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="rekap_resep_tahunan_' . $namanya . '-' . $tahun . '--' . $this->nama_bulan[$bulan2].'-'.$tahun2.'.xls"');

        $objWriter = PHPEXCEL_IOFactory::createWriter($objPHPExcel, "Excel5");
        $objWriter->save("php://output");
        }
    $this->redirect('index.php/laporan/tahunan/');
    }
}
