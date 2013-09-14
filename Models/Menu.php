<?php
/**
 * A menu on the page, has items on it
 */
abstract class Menu {
    // An array of all the items on the menu
    public $items;
    function __construct($items) {
        $this -> items = $items;
    }

    public function removeItem($item) {
        if (($key = array_search($item, $this -> items)) !== false) {
            unset($this -> items[$key]);
        }
    }
}
?>