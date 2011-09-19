<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_home extends Panada {
    
    public function __construct(){
        parent::__construct();

    }
    
    public function index(){
        $this->redirect('index.php/Beranda');
    }
}
