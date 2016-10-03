<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?= $view->render('head') ?>
        <!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
        <?php $view->style('theme', 'theme:css/main.css') ?>
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
        <?php $view->script('theme-jquery', 'theme:js/jquery.min.js') ?>
        <?php $view->script('theme-skel', 'theme:js/skel.min.js') ?>
        <?php $view->script('theme-util', 'theme:js/util.js') ?>
        <!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
        <?php $view->script('theme', 'theme:js/main.js') ?>

    </head>
    <body>
        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header -->
            <header id="header">
                <div class="inner">

                    <!-- Logo -->
                    <a href="<?= $view->url()->get() ?>" class="logo">
                        <span class="symbol">
                            <?php if ($logo = $params['logo']) { ?>
                                <img src="<?= $this->escape($logo) ?>" alt="">
                            <?php } ?>
                        </span><span class="title"><?= $params['title'] ?></span>
                    </a>

                    <!-- Mobile Nav -->
                    <nav>
                        <ul>
                            <li><a href="#menu">Menu</a></li>
                        </ul>
                    </nav>

                </div>
            </header>

            <!-- Menu -->
            <nav id="menu">
                <h2>Menu</h2>
                <?php if ($view->menu()->exists('main')) : ?>
                    <?= $view->menu('main') ?>
                <?php endif ?>
            </nav>

            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <!-- Render content -->
                    <?= $view->render('content') ?>

                </div>
            </div>

            <!-- Footer -->
            <footer id="footer">
                <div class="inner">
                    <section>
                        <?= $view->position('contact') ?>
                    </section>
                    <section>
                        <?= $view->position('socials') ?>
                    </section>
                    <?= $view->position('copyright') ?>
                </div>
            </footer>

        </div>

    </body>
</html>