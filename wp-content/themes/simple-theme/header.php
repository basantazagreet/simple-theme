<html lang="<?php language_attributes() ?>">

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <header>
        <div class="header-first-row-flex">
            <h1><a href="<?php site_url(); ?>">Advanced wordpress theme</a></h1>
            <h5>Another Wordpress theme</h5>
            <form method="get" action="<?php esc_url(home_url('/')); ?>">
                <input type="text" name="s" placeholder="Search...">
            </form>

        </div>
        <div class="header-second-row-flex">

            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            <!-- <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
            </ul>
        </nav> -->
        </div>
    </header>