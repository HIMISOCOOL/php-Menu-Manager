$(document).ready(init);

function init(){
    searchActive();
    dropDowns();
}

function searchActive() {
    //Gets the current pages name
    var pathname = window.location.pathname.split('/').pop();
    //for each item in the dropdown styled list
    $("nav ul li a").each(function() {
        //var current = this;
        //if the pathname is equal to the link
        if (pathname === jQuery(this).attr("href")) {
            //make it active
            $(this).addClass("active");
            if($(this).parent().parent().parent().hasClass("dropdown")){
                $(this).parent().parent().parent().attr("id","HAC");
            }
        } 
        //else if the pathname is empty and the link is index
        else if (pathname === "" && $(this).attr("href") === "index.php") {
            //make it active
            $(this).addClass("active");
        }
    });
}

function dropDowns() {
    //for each dropdown li a
    $(".dropdown:not(#HAC) li a").each(function() {
        //hide subitems if not HAC (has active children)
        $(this).hide();
    });
    //Toggle show them on click
    clickToggle();
}

function clickToggle(){
    $(".dropdown a").click(function(){
        $(this).parent().find(".subItem a").slideToggle("fast");
    });
}

function hoverToggle(){
    $(".dropdown:not(#HAC)").hover(function(){
        $(this).find(".subItem a").slideToggle("fast");
    });
}