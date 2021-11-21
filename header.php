<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&family=Playfair+Display:wght@400;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>
<section class="">
    <nav class="flex justify-between front-hero px-6 py-9">
        <div>
            <a href="<?php echo home_url();?>" class="text-xl text-white text-bold nunito">
                Dinartux
            </a>
        </div>
        <div>
            <?php wp_nav_menu([
                    'menu' => 'main-menu',
                    'menu_class' => 'flex nunito main-nav',
                    'container' => '',
            ])?>
        </div>

        <div id="responsive-toggle" class="md:hidden flex items-center">
            <button class="outline-none mobile-menu-button">
                <svg
                        class="w-6 h-6 text-white"
                        x-show="!showMenu"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                >
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>
