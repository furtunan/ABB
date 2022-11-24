<?php
/**
 * Template page to display promo section in content-page.php
 **/
?>
<?php
$promo = get_field('promo');
if( $promo ): ?>
    <div class="promo bk-grey">
        <div class="container">
            <div class="promo-box">
                <div class="text-line"></div>
                    <h2><?php echo esc_html( $promo['title'] ); ?></h2>                    
                </div>
                <div class="container-flex">                
                    <div class="promo-img">                   
                        <img src="<?php  echo esc_html( $promo['image'] ); ?>" alt="<?php echo esc_attr($title); ?>" />
                    </div>
                    <div class="promo-second gap-16">
                        <p><?php echo esc_html( $promo['text'] ); ?></p>
                        <button class="bk-red" type="button">JETZT HERUNTERLADEN</button>
                    </div>
                </div>
            </div>
        </div>        
    </div>
<?php endif; ?>
       