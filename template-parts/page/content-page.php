<?php
/**
 * Template page to display page content in page.php
 **/
?>
<article id="post-<?php the_ID(); ?>" >
    <!-- /**<?php the_title( '<h1 class="entry-title">', '</h1>' ) ?>  -->

    <?php
    /**
     *  Page Thumbnail
    */
    if ( has_post_thumbnail() ) :
        the_post_thumbnail( 'full' );
    endif;
    ?>
    
    <?php
        get_template_part( 'template-parts/page/sections/hero',);
    ?>
    <div class="entry-content">        
        <div class="container content-post">
            <?php the_content(); ?>
        </div>
        <?php
            get_template_part( 'template-parts/page/sections/promo',);
            get_template_part( 'template-parts/page/sections/latest-post',);
            get_template_part( 'template-parts/page/sections/zigzag',);            

            wp_link_pages( array(
                'before' => '<div class="page-links">' .esc_html__( 'Pages:', 'abb' ),
                'after' => '</div',
            ) );
        ?>
    </div>
    <?php if ( get_edit_post_link()) : ?>
        <footer class="entry-footer">
            <?php
            edit_post_link(
                sprintf(
                    wp_kses(
                        /*translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Edit <span class="screen-reader-text">%s</span>', 'abb' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer>
     <?php endif; ?>   
 </article>