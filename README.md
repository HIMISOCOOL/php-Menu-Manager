php-Menu-Manager
================

Manages menus dynamically by reading an xml file

menus.xml must follow this format:

xml opening tag
<?xml version="1.0" encoding="UTF-8"?>
state that it is a menu
	
	<menus>
	    <item>//each item is opened as such
	        <label>Home</label>//each item has a label,
	        <link>index.php</link>//a link
	        <isDropdown>FALSE</isDropdown>//whether it is a dropdown, use only TRUE or FALSE
	        <ddItems>NULL</ddItems>//and the items in the dropdown, if isDropdown is false use NULL
	    </item>
	    <item>
	        <label>Other pages</label>
	        <link>#</link>//if you are making a dropdown use # for the link
	        <isDropdown>TRUE</isDropdown>//and make sure this says TRUE
	        <ddItems>//and then put all the items you want in ddItems
	            <item>
	                <label>That page</label>
	                <link>thatpage.php</link>
	                <isDropdown>FALSE</isDropdown>//Currently only 1 level of sub items is supported
	                <ddItems>NULL</ddItems>//So make sure a child is always FALSE and NULL
	            </item>
	            <item>
	                <label>Cunts</label>
	                <link>cunts.php</link>
	                <isDropdown>FALSE</isDropdown>
	                <ddItems>NULL</ddItems>
	            </item>
	        </ddItems>
	    </item>
	</menus>

TO add a new page follow the format layed out in index.php and then IndexController and IndexView. 

Feel free to modify the CSS and JS to your liking.

There is an option to change dropdowns to toggle on mouse hover rather than on click.

Submenus with active items cannot be toggled on hover to avoid fruitless spamming of the animation