<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_excel extends Panada {

    public function __construct(){
        parent::__construct();
		$this->db = new library_db();
		$this->session = new Library_session();
    }

    public function index(){
    }

    public function harian(){
        $data_harian = $this->session->get('data_harian');
        if($data_harian){
        require_once 'PHPExcel.php';
        require_once 'PHPExcel/IOFactory.php';
        $objPHPExcel = new PHPExcel();

        // Set properties
        $objPHPExcel->getProperties()->setCreator("Siemas")
                                     ->setLastModifiedBy("085697977177")
                                     ->setTitle("Rekap Harian Obat")
                                     ->setSubject("Rekap Harian Obat");

        // header

        $objPHPExcel->getActiveSheet()
                    ->setCellValueByColumnAndRow(0, 5, "NO")
                    ->setCellValueByColumnAndRow(1, 5, "Nama Obat")
                    ->setCellValueByColumnAndRow(2, 5, "Sat")
                    ->setCellValueByColumnAndRow(3, 5, "P.Awal")
                    ->setCellValueByColumnAndRow(4, 5, "Terpakai")
                    ->setCellValueByColumnAndRow(5, 5, "Sisa");

        for ($n = 0; $n <= 5; $n++)
            $objPHPExcel->getActiveSheet()->getStyleByColumnAndRow($n, 4)->getFont()->setBold(true);

        // column width

        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);

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
        header('Content-Disposition: attachment;filename="rekap_resep_harian_' . time() . '.xls"');

        $objWriter = PHPEXCEL_IOFactory::createWriter($objPHPExcel, "Excel5");
        $objWriter->save("php://output");
        }
    $this->redirect('index.php/laporan/harian/');
    }
}
