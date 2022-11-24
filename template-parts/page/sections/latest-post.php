<?php
/**
 * Template page to display hero image in content-page.php
 **/
?>
<?php if( is_front_page() ) { ?>
    <div class="container latest--post">
        <div class="text-line"> </div>
        <h2>Zwischenüberschrift Applikationsberichte/Fachartikel</h2>
        <div class="container-flex gap-16">            
            <?php
                $the_query = new WP_Query( 'posts_per_page=3' ); 
            ?>            
            <?php            
                while ($the_query -> have_posts()) : $the_query -> the_post();          
            ?>
            <div class="latest--box container-flex">
                <?php echo the_post_thumbnail( 'large' ); ?>
                <h2> <?php the_title() ; ?> </h2>                
                <div>
                    <?php
                        the_excerpt(__('(more…)')); 
                    ?>
                </div>
                <button onclick="location.href='<?php the_permalink() ?>'" class="bk-red" type="button">WEITERLESEN</button>
            </div>            
            <?php            
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
    </div>
<?php } ?>