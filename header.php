<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta name="description" content="<?php if (is_single()) {
    single_post_title('', true);
}
else {
    bloginfo('name');
    echo " - ";
    bloginfo('description');
}
?>" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="#index">Jennifer Cooley</a>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn mr-lg-5" onclick="closeNav()">×</a>
            <div class="overlay-content">
                <?php
                wp_nav_menu([
                    'theme_location'  => 'primary',
                    'depth'           => 0, // 1 = with dropdowns, 0 = no dropdowns.
                    'container'       => 'div',
                    'container_class' => 'd-flex justify-content-end mr-5 mr-lg-7',
                    'container_id'    => 'bs-example-navbar-collapse-1',
                    'menu_class'      => 'navbar-nav',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ]);
                ?>
            </div>
        </div>
    </div>
</nav>

<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>
