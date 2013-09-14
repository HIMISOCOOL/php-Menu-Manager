<?php
require_once 'Model.php';

/**
 * A page manager
 */
abstract class Controller {

    public $model;
    public function __construct() {
        $this -> model = new Model();
    }

    public abstract function invoke();
}
?>
