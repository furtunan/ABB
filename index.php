<?php
/**
 * The main template file.
 **/
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
            get_header();
            // get_search_form(); 
            if ( have_posts() ) :
                while ( have_posts(  ) ) :
                    the_post( );
                    get_template_part( 'template-parts/post/content' ); 
                endwhile;

                echo paginate_links([
                    'prev_text' => esc_html__('Prev', 'abb'),
                    'next_text' => esc_html__('Next', 'abb'),
                ]);
            else:
                get_template_part( 'template-parts/page/content', 'none' );
            endif;       
        ?>
    </main>
</div>
<?php
get_footer();

 