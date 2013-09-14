<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Home page</title>
        <?php useCSS(); ?>
    </head>
    <body>
        <div class="containter row">
            <?php $menu->displayMenu("col-3")?>
            <header class="col-8">
                <h1>Website</h1>
            </header>
            <div class="content col-8">
                <article>Anandtech took a look at our Water 3.0 series and this is what they have to say:<br />
                    <q>“Going through testing, it became increasingly clear to me what the Thermaltake Water 3.0 kits were, how to evaluate them, and ultimately which ones to recommend.“</q><br />
                    Full Review <a href="http://www.anandtech.com/show/6984/thermaltake-water-30-closed-loop-cooler-roundup">http://www.anandtech.com/show/6984/thermaltake-water-30-closed-loop-cooler-roundup</a><br />
                    For more information on the Water 3.0 Extreme, All-in-One Liquid Cooler,please visit: <a href="http://www.thermaltake.com/products-model.aspx?id=C_00002065">http://www.thermaltake.com/products-model.aspx?id=C_00002065</a></article>
            </div>
        </div>
        <?php $footer->displayFooter()?>
    </body>
    <?php 
     useJS();
     ?>
</html>