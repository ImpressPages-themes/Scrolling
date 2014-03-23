<?php echo $this->doctypeDeclaration(); ?>
<html <?php echo $this->htmlAttributes(); ?>>
<head>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet" type="text/css">
    <?php
    $site->addCss(BASE_URL . THEME_DIR . THEME . '/ip_content.css');
    $site->addCss(BASE_URL . THEME_DIR . THEME . '/css/style.css');
    $site->addCss(BASE_URL . LIBRARY_DIR . 'js/colorbox/themes/2/colorbox.css');

    echo $site->generateHead();
    ?>
</head>
<body>
<?php
/* TURN OFF HEADER IN MANAGEMENT STATE */
if (!$site->managementState()) {
    /* EOF TURN OFF HEADER IN MANAGEMENT STATE */
    ?>
    <!-- START HEAD -->
    <header class="scrollingTheme">
        <div class="wrapper">
            <nav class="clearfix">
                <div class="navContainer">
                    <?php

                    /* STANDARD MENU */
                    echo $this->generateMenu('Menu', 'menu1');
                    /* EOF STANDARD MENU */

                    /* GENERATE MENU */
                    //                                        echo '<ul id="nav">';
                    //
                    //                                        echo '<li><a href="#home">Home</a></li>';
                    //                                        $pages = $site->getZone('menu1')->getElements();
                    //                                        foreach ($pages as $pageKey => $page) {
                    //                                            echo '<li><a href="#page_' . $page->getId() . '">' . $page->getButtonTitle() . '</a></li>';
                    //
                    //                                        }
                    //                                        echo '</ul>';
                    /* EOF GENERATE MENU */

                    ?>
                </div>
                <div class="navIcons">
                    <a href="http://www.facebook.com"><img
                            src="<?php echo BASE_URL . THEME_DIR . THEME; ?>/images/soc_fb.png" alt=""></a>
                    <a href="https://plus.google.com/‎"><img
                            src="<?php echo BASE_URL . THEME_DIR . THEME; ?>/images/soc_google.png" alt=""></a>
                    <a href="http://www.pinterest.com/"><img
                            src="<?php echo BASE_URL . THEME_DIR . THEME; ?>/images/soc_pinterest.png " alt=""></a>
                    <a href="https://www.twitter.com/"><img
                            src="<?php echo BASE_URL . THEME_DIR . THEME; ?>/images/soc_tweet.png" alt=""></a>
                </div>
            </nav>
        </div>
    </header>
    <?php
    /* TURN OFF HEADER IN MANAGEMENT STATE */
}
/* EOF TURN OFF HEADER IN MANAGEMENT STATE */
?>
<!-- EOF HEAD -->
<!-- START WRAPPER -->
<div class="wrapper">
    <!-- ALL PAGES CONTAINER -->
    <div class="allPagesContainer">
        <div class="spacer">&nbsp;
        </div>
        <?php
        /* SHOW STATIC HTML HOMEPAGE */
        //                if (!$site->managementState()) {
        //
        //
        ?>
        <!--                    <section class="homepage" id="home">-->
        <!--                        <div>-->
        <!--                            <h2>ImpressPages onepage theme</h2>-->
        <!---->
        <!--                            <h1>Project name</h1>-->
        <!--                        </div>-->
        <!--                        <div class="startButton"><a href="#click">Start</a></div>-->
        <!--                    </section>-->
        <!---->
        <!--        --><?php
        //                }
        /* EOF SHOW STATIC HTML HOMEPAGE */

        /* STANDARD BLOCK OUTPUT */
        echo $site->generateBlock('main');
        /* EOF STANDARD BLOCK OUTPUT */

        /* SHOW ALL PAGES IN ONE */

        //                if ($site->managementState() || $site->getCurrentZone()->getName() != 'menu1') {
        //                    echo $site->generateBlock('main');
        //                } else {
        //                    $pages = $site->getZone('menu1')->getElements();
        //                    foreach ($pages as $pageKey => $page) {
        //                        echo '<div class="scrollblock">';
        //                        echo '<div id="page_' . $page->getId() . '">';
        //
        //                        $publishedRevision = \Ip\Revision::getPublishedRevision('menu1', $page->getId());
        //
        //                        echo \Modules\standard\content_management\Model::generateBlock(
        //                            'main',
        //                            $publishedRevision['revisionId'],
        //                            $site->managementState()
        //                        );
        //
        //                        echo '</div>';
        //
        //                        echo '</div>';
        //
        //                    }
        //                }
        /* EOF SHOW ALL PAGES IN ONE */

        ?>
    </div>
    <div class="backToTop">

    </div>
    <!-- EOF ALL PAGES CONTAINER -->
    <footer>
        <div class="navIcons">
            <p>Socialize with us</p>
            <a href="http://www.facebook.com"><img src="<?php echo BASE_URL . THEME_DIR . THEME; ?>/images/soc_fb.png"
                                                   alt=""></a>
            <a href="https://plus.google.com/‎"><img
                    src="<?php echo BASE_URL . THEME_DIR . THEME; ?>/images/soc_google.png" alt=""></a>
            <a href="http://www.pinterest.com/"><img
                    src="<?php echo BASE_URL . THEME_DIR . THEME; ?>/images/soc_pinterest.png " alt=""></a>
            <a href="https://www.twitter.com/"><img
                    src="<?php echo BASE_URL . THEME_DIR . THEME; ?>/images/soc_tweet.png" alt=""></a>
        </div>
        <div class="copyright">
            Copyright ImpressPages. OnePage theme. 2013
        </div>
    </footer>

</div>
<!-- EOF WRAPPER -->
<?php
/* Add libraries and theme-specific JS */
$site->addJavascript(BASE_URL . THEME_DIR . THEME . '/js/jquery.nav.js');
$site->addJavascript(BASE_URL . THEME_DIR . THEME . '/js/jquery.scrollTo.js');
$site->addJavascript(BASE_URL . THEME_DIR . THEME . '/js/theme.js');
/* EOF Add libraries and theme-specific JS */
$site->addJavascript(BASE_URL . LIBRARY_DIR . 'js/colorbox/jquery.colorbox.js');
$site->addJavascript(BASE_URL . THEME_DIR . THEME . '/js/lightbox.js');
echo $site->generateJavascript();
?>
</body>
</html>
