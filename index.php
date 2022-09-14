<?php

    $raiz = "./";

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">

    <head>
        <?php include($raiz."includes/head.php") ?>
    </head>

    <body>

        <!--[if lt IE 9]>
            <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
        <![endif]-->

        <div class="preloader">
            <div class="preloader_image"></div>
        </div>

        <!-- search modal -->
        <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
            <div class="widget widget_search">
                <form method="get" class="searchform form-inline" action="/">
                    <div class="form-group">
                        <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
                    </div>
                    <button type="submit" class="theme_button">Search</button>
                </form>
            </div>
        </div>

        
        <!-- wrappers for visual page editor and boxed version of template -->
        <div id="canvas">
            <div id="box_wrapper">

                <?php include($raiz."includes/slider.php") ?>
                <?php include($raiz."includes/menu_super.php") ?>
                <?php include($raiz."includes/quadros.php") ?>
                <?php include($raiz."includes/tabela_precos.php") ?>
                <?php include($raiz."includes/depoimentos.php") ?>
                <?php include($raiz."includes/quem_somos.php") ?>
                <?php include($raiz."includes/galeria.php") ?>
                <?php include($raiz."includes/footer.php") ?>
                <?php include($raiz."includes/copy.php") ?>

                

            </div>
            <!-- eof #box_wrapper -->
        </div>



        <script src="<?=$raiz?>js/compressed.js"></script>
        <script src="<?=$raiz?>js/main.js"></script>
        
    </body>



</html>
