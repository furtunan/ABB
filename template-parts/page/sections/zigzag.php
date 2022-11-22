<?php
/**
 * Template page to display zigzag section in content-page.php
 **/
?>
<div class="container zigzag">    
    <?php
    $zig = get_field('zig');
    if( have_rows('zig') ): 
        while( have_rows('zig') ) : the_row();
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $side = get_sub_field('side');
        ?>
        <div class="container-flex container-zigzag">
            <div id="zigzag" class="<?php echo esc_html( $side ); ?>">
                <img src="<?php  echo esc_html( $image ); ?>" alt="<?php echo esc_attr($title); ?>" />
                <div class="zigzag-second">
                    <div class="text-line"></div>
                    <h2><?php echo esc_html( $title ); ?></h2>                
                    <p><?php echo esc_html( $text); ?></p>
                    <button onclick="location.href='<?php the_permalink() ?>'" class="custom-red-bk" type="button">MEHR ERFAHREN</button>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>    
</div>