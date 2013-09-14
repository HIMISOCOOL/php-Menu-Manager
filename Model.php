<?php 
require_once 'Models/Nav.php';
require_once 'Models/Footer.php';
require_once 'Models/MenuItem.php';
/**
 * Manages Models
 */
class Model {
    public function getMenu() {
        $xml = simplexml_load_file("menus.xml");
        $menuItems = array();
        for ($i = 0; $i < count($xml->item); $i++) {
            $item=$xml->item;
            if((string)$item[$i]->isDropdown==="TRUE"){
                $menuItems[$i]=new MenuItem((string)$item[$i]->label,(string)$item[$i]->link,TRUE,$this->makeMenuItem($item[$i]));
            }
            else{
                $menuItems[$i]=new MenuItem((string)$item[$i]->label,(string)$item[$i]->link,FALSE,NULL);
            }
        }
        $menu = new Nav($menuItems,"1",TRUE);
        return $menu;
    }
    
    protected function makeMenuItem($toplevel) {
        $array=array();
        for ($j = 0; $j < count($toplevel->ddItems->item); $j++) {
            $subItem = $toplevel->ddItems->item[$j];
            $array[$j]=new MenuItem((string)$subItem->label,(string)$subItem->link,FALSE,NULL);
        }
        return $array;
    }
    
    public function getFooter() {
        $leftList = array(
            new MenuItem("Facebook","http://www.facebook.com/HIMISOCOOL",FALSE,NULL)
        );
        $middleList = array(
            new MenuItem("Youtube", "http://www.youtube.com/HIMISOCOOL",FALSE,NULL)
        );
        $rightList = array(
            new MenuItem("Twitter", "http://www.twitter.com/HIMISOCOOL",FALSE,NULL)
        );
        $footer = new Footer($leftList, $middleList, $rightList);
        return $footer;
    }
}
?>