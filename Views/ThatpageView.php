<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>That Page</title>
        <?php 
        useCSS();
         ?>
    </head>
    <body>
        <div class="containter row">
            <?php $menu->displayMenu("col-3")?>
            <header class="col-8">
                <h1>Definitely that page</h1>
            </header>
            <div class="content col-8">
                <article>
                    THERE IS LITERALLY NO WAY THIS IS NOT *THAT* PAGE
                </article>
            </div>
        </div>
        <?php $footer->displayFooter()?>
    </body>
    <?php 
     useJS();
     ?>
</html>