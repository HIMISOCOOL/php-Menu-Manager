<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>This page</title>
        <?php 
        useCSS();
         ?>
    </head>
    <body>
        <div class="containter row">
            <?php $menu->displayMenu("col-3")?>
            <header class="col-8">
                <h1>Definitely This Page</h1>
            </header>
            <div class="content col-8">
                <article>
                    Now you're gonna tell me that this is not THIS page, Look its even capitalized;
                    It must be super important if thats the case; 
                    Can't just go around saying it's not THAT page now can you.
                    <br/>Good day sir
                </article>
            </div>
        </div>
        <?php $footer->displayFooter()?>
    </body>
    <?php 
     useJS();
     ?>
</html>