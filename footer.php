<?php
/**
 * Contains footer
 **/

?>
    <footer class="footer ">
        <div class="container">
            <div class="left-footer">
                <div class="left-first-footer">
                <?php
                    if ( has_nav_menu ( 'footer' ) ) :
                        wp_nav_menu ( [
                            'theme_location' => 'footer',
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
                ?>
                </div>
                <div class="left-first-footer">
                    <div class="Social-media">
                        <a href="#"><img src="/wp-content/uploads/2022/11/Icon-awesome-facebook-square.png"/></a>
                        <a href="#"><img src="/wp-content/uploads/2022/11/Icon-awesome-twitter-square.png"/></a>
                        <a href="#"><img src="/wp-content/uploads/2022/11/Icon-awesome-linkedin.png"/></a>
                    </div>
                </div>
            </div>

            <div class="right-footer">
                <p>Copyright © ABB AG</p>            
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>