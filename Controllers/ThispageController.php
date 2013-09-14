<?php
require_once 'Controller.php';
/**
 * Manages the This page
 */
class ThispageController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function invoke() {
        $menu = $this->model->getMenu();
        $footer = $this->model->getFooter();
        include 'includes.php';
        include 'Views/ThispageView.php';
    }
}
?>