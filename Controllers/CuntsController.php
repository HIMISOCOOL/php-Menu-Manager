<?php
require_once 'Controller.php';

class CuntsController extends Controller {

    public function __construct() {
        parent::__construct();
        }

    public function invoke() {
        $menu=$this->model->getMenu();
        $footer=$this->model->getFooter();
        include 'includes.php';
        include 'Views/CuntsView.php';
    }

}
?>
