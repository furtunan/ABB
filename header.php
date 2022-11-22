<?php
/**
 * Contains the header
 **/

?><!doctype html>
<html <?php language_attributes(); ?>>  
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

    <header class="bk-white">
        <div class="top-bar">
            <div class="top-bar-title nav-logo">
                    <?php if( has_custom_logo() ):  ?>
                        <?php 
                            // Get Custom Logo URL
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            $custom_logo_url = $custom_logo_data[0];
                        ?>

                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                        title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
                        rel="home">

                            <img src="<?php echo esc_url( $custom_logo_url ); ?>" 
                                alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

                        </a>
                    <?php else: ?>
                        <div class="site-name"><?php bloginfo( 'name' ); ?></div>
                    <?php endif; ?>
                </div>
            <div id="topBarNavToggle">
                <i class="glyphicon glyphicon-menu-hamburger"></i>
            </div>

            <nav class="top-bar-navigation">
                <?php
                    if ( has_nav_menu ( 'primary' ) ) :
                        wp_nav_menu ( [
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'menu-group, navigation-item',
                            'menu_id' =>'',
                            'depth' => 2
                        ] );
                        else :
                            printif(
                                '<a href="%1$s">%2$s</a>',
                                esc_url( admin_url( '/nav-menus.php') ),
                                esc_html__( 'Asign a menu', 'abb' )
                            );
                    endif;
                    
                    if ( has_nav_menu ( 'header_action' ) ) :
                        wp_nav_menu ( [
                            'theme_location' => 'header_action',
                            'container' => false,
                            'menu_class' => 'header_menu_action, menu-group, navigation-item',
                            'menu_id' =>'',
                            'depth' => 2
                        ] );
                        else :
                            printif(
                                '<a href="%1$s">%2$s</a>',
                                esc_url( admin_url( '/nav-menus.php') ),
                                esc_html__( 'Asign a menu', 'abb' )
                            );
                        endif; 
                    ?>
            </nav>
        </div>
    </header>

   