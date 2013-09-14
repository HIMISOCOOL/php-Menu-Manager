<?php
require_once 'Controller.php';

/**
 * Manages the Index page
 */
class IndexController extends Controller{

    public function __construct() {
        parent::__construct();
    }

    public function invoke() {
        $menu = $this->model->getMenu();
        $footer = $this->model->getFooter();
        include 'includes.php';
        include 'Views/IndexView.php';
    }
}
?>