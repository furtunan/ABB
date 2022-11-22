<?php
/**
 * Template page to display promo section in content-page.php
 **/
?>


<?php
$promo = get_field('promo');
if( $promo ): ?>
    <div id="promo" class="">
        <div class="container">
        <div class="promo-first">
                    <div class="text-line"></div>
                    <h2><?php echo esc_html( $promo['title'] ); ?></h2>                    
                </div>
            <div class="container-flex">                
                <div class="promo-first">                   
                    <img src="<?php  echo esc_html( $promo['image'] ); ?>" alt="<?php echo esc_attr($title); ?>" />
                </div>
                <div class="promo-second">
                    <p><?php echo esc_html( $promo['text'] ); ?></p>
                    <button class="custom-red-bk" type="button">JETZT HERUNTERLADEN</button>
                </div>
            </div>
        </div>        
    </div>
<?php endif; ?>
       