<?php
/**
 * Template page to display hero image in content-page.php
 **/
?>


<?php
$hero = get_field('hero');
if( $hero ): ?>
    <div id="hero">
        <div class="hero" style="background-image:url(<?php echo esc_url( $hero['image'] ); ?>)">
            <div class="content-hero">
                <div class="box-hero">
                    <div class="text-line"></div>
                    <h1 class="fw-bold"><?php echo esc_html( $hero['title'] ); ?></h1>
                    <h1><?php echo esc_html( $hero['text'] ); ?></h1>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
       