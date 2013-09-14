<?php
/**
 * A single item on the menu
 */
class MenuItem {
	// The text on the menu item
	public $label;
	// The link the menu item goes to
	public $link;
	// Whether the link is the active page
	public $isDropdown;
	// The subsequent items in the drop down menu
	public $dropdownItems;
	function __construct($label, $link, $isDropdown, $ddItems) {
		$this -> label = $label;
		if (isset($link) && $link!=NULL) {
			$this -> link = $link;	
		}
		$this -> isDropdown = $isDropdown;
		if (isset($ddItems)&&$ddItems!=NULL) {
			$this -> dropdownItems = $ddItems;	
		}
	}
}
?>