<?php
/**
 * Template for displaying comments.
 */

 if ( post_password_required() ) {
    return;
 }
 ?>

 <div id="comments" class="comments-area">
    <?php if ( have_comments() ) :?>
    <h2 class="comments-title">
        <?php
        $comment_count = get_comments_number();
        if ( '1' === $comment_count ) {
            printf(
                esc_html__( 'Comments (1)', 'abb' )
            );
        } else {
            printf(
                esc_html__( 'Comments (%1$s)', 'abb' ),
                intval( $comment_count )
            );
        }
        ?>
    </h2>
    <?php the_comments_navigation(); ?>
    <ol class="comment-list">
        <?php
        wp_list_comments( [
            'style' => 'ol',
            'short_ping' => true
        ] );
        ?>
    </ol>
    <?php 
    the_comments_pagination();
    // If comments are closed then show this message.
    if ( ! comments_open() ) {
        printf(
            '<p class="no-comments">%1$s</p>',
            esc_html__( 'Comments are closed', 'abb' )
        );
    }
    ?>
    <?php endif; 
    // Show comments form
    comment_form();
    ?>
 </div>