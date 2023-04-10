<?php
/*
    This Template for displaying the header
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?> >

    <div id="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <img class="logo" src="<?php echo get_theme_mod('ashik62_logo'); ?>" alt="logo">
                    </a>
                </div>
                <div class="col-md-9 menu_items">

                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'main_menu',
                            'menu_id' => 'nav'
                        )); 
                    ?>

                    <!-- <ul id="nav" class="menu_items">
                        <li> <a href="" class="menu-item first-item">Home</a> </li>
                        <li> <a href="" class="menu-item first-item">Portfolio</a> </li>
                        <li> <a href="" class="menu-item first-item">Projects</a> 
                            <ul>
                                <li> <a href="">DropDown Menu</a> </li>
                                <li> <a href="">DropDown Menu</a> </li>
                                <li> <a href="">DropDown Menu</a> 
                                    <ul>
                                        <li> <a href="">Sub DropDown Menu</a> </li>
                                        <li> <a href="">Sub DropDown Menu</a> </li>
                                        <li> <a href="">Sub DropDown Menu</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a href="" class="menu-item first-item">About Us</a> </li>
                        <li> <a href="" class="menu-item first-item">Contact Us</a> </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>

    <?php wp_footer() ?>
</body>
</html>