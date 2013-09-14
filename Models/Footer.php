<?php
/**
 * The footer of a website, can contain many links
 *
 * @author Matthew
 */
class Footer{
    public $leftList;
    public $middleList;
    public $rightList;
    public function __construct($leftList,$middleList,$rightList) {
        $this->leftList = $leftList;
        $this->middleList = $middleList;
        $this->rightList = $rightList;
    }
    
    public function displayFooter(){
        echo '<footer class="col-8 col-offset-4">
                <p class="row">Created by Matthew</p>
                <div class="row">
                <ul class="col-3">
            ';
        foreach ($this->leftList as $item) {
            echo "<li><a href='$item->link'>$item->label</a></li>";
        }
        echo '</ul>
            <ul class="col-3">
                ';
        foreach ($this->middleList as $item) {
            echo "<li><a href='$item->link'>$item->label</a></li>";
        }
        echo '</ul>
            <ul class="col-3">
            ';
        foreach ($this->rightList as $item) {
            echo "<li><a href='$item->link'>$item->label</a></li>";
        }
        echo '</ul>
            </div>
        </footer>
        ';
    }
}

?>
