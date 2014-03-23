<?php echo ipDoctypeDeclaration(); ?>
<html <?php echo ipHtmlAttributes(); ?>>
<head>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet" type="text/css">
    <?php
    ipAddCss('assets/ipContent.css');
    ipAddCss('assets/style.css');
    echo ipHead();
    ?>
</head>
<body>
    <header class="scrollingTheme">
        <div class="wrapper">
            <nav class="clearfix">
                <div class="navContainer">
                    <?php echo ipSlot('menu', 'menu1'); ?>
                </div>
                <div class="navIcons">
                    <a href="http://www.facebook.com"><img
                            src="<?php echo ipThemeUrl('assets/images/soc_fb.png'); ?>" alt=""></a>
                    <a href="https://plus.google.com/‎"><img
                            src="<?php echo ipThemeUrl('assets/images/soc_google.png'); ?>" alt=""></a>
                    <a href="http://www.pinterest.com/"><img
                            src="<?php echo ipThemeUrl('assets/images/soc_pinterest.png') ?>" alt=""></a>
                    <a href="https://www.twitter.com/"><img
                            src="<?php echo ipThemeUrl('assets/images/soc_tweet.png') ?>" alt=""></a>
                </div>
            </nav>
        </div>
    </header>

<div class="wrapper">
    <div class="allPagesContainer">
        <div class="spacer">&nbsp;
        </div>
        <?php echo ipBlock('main');  ?>
    </div>
    <div class="backToTop">

    </div>

    <footer>
        <div class="navIcons">
            <p><?php _e('Socialize with us', 'Scrolling') ?></p>
            <a href="http://www.facebook.com"><img src="<?php echo ipThemeUrl('assets/images/soc_fb.png') ?>"alt=""></a>
            <a href="https://plus.google.com/‎"><img src="<?php echo ipThemeUrl('assets/images/soc_google.png') ?>" alt=""></a>
            <a href="http://www.pinterest.com/"><img src="<?php echo ipThemeUrl('assets/images/soc_pinterest.png') ?>" alt=""></a>
            <a href="https://www.twitter.com/"><img src="<?php echo ipThemeUrl('assets/images/soc_tweet.png') ?>" alt=""></a>
        </div>
        <div class="copyright">
            Copyright ImpressPages. OnePage theme. 2013
        </div>
    </footer>

</div>

<?php
ipAddJs('assets/js/jquery.nav.js');
ipAddJs('assets/js/jquery.scrollTo.js');
ipAddJs('assets/js/theme.js');
echo ipJs();
?>
</body>
</html>
