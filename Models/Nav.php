<?php
require_once 'Menu.php';
/**
 * A navigation bar for a website
 *
 * @author Matthew
 */
class Nav extends Menu{
    // Can be small menu, medium menu or large menu
    public $size;
    // Whether or not the menu is a side bar
    public $isSidebar;
    
    public function __construct($items, $size, $isSideBar) {
        parent::__construct($items);
        $this -> size = $size;
        $this -> isSidebar = $isSideBar;
    }
    
    public function displayMenu($size) {
        echo '<nav class="'.$size.'">
                <ul>';
        if ($this->isSidebar) {
            foreach ($this->items as $item) {
            if ($item->isDropdown) {
                echo "<li class='dropdown'><a href='$item->link'>$item->label</a><ul class='topLevel'>                
                ";
                foreach ($item->dropdownItems as $ddItem) {
                    echo "  <li class='subItem'><a href='$ddItem->link'>$ddItem->label</a></li>
                ";
                }
                echo "</ul>
                    </li>
            ";				
                }
                else {
                    echo "<li><a href='$item->link'>$item->label</a></li>
                    ";	
                }
            }
        }
        else {
            //make a top bar.. some how
        }
        echo '</ul>
            </nav>';
    }
}

?>
