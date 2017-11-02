<?php
/**
 * Functions for handling how comments are displayed and used on the site. This allows more precise 
 * control over their display.
 */


if ( ! function_exists( 'at_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own st_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 */
function at_comment( $comment, $args, $depth ) {
  $GLOBALS['comment'] = $comment;
  switch ( $comment->comment_type ) :
    case 'pingback' :
    case 'trackback' :
    // Display trackbacks differently than normal comments.?>

<li class="post pingback">
  <p>
    <?php esc_html_e( 'Pingback:', 'tribe' ); ?>
    <?php comment_author_link(); ?>
    <?php edit_comment_link( esc_html__( '(Edit)', 'tribe' ), ' ' ); ?>
  </p>
  <?php
break;
default : ?>

<li <?php comment_class(empty( $args['has_children'] ) ? '' : 'has-children') ?>>
  <article id="comment-<?php comment_ID(); ?>" class="at-comment" itemtype="http://schema.org/UserComments" itemscope="itemscope" itemprop="comment">
  

    <!-- .comment-meta -->
    <header class="at-comment__header">
    
      <div class="at-comment__author" itemtype="http://schema.org/Person" itemscope="itemscope" itemprop="creator">
      <?php echo get_avatar( $comment, 60, $default = '', $alt = '', $args = array( 'class' => 'at-comment__authoravatar' ) ); ?>
      <span class="at-comment__authorname" itemprop="name"><?php printf( wp_kses_post(__( '%s', 'tribe' )), sprintf( '%s', get_comment_author_link() ) ); ?></span>
        </div>
        <time class="at-comment__time" datetime="<?php comment_time( 'c' ); ?>" itemprop="commentTime">
        <a itemprop="url" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><?php echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . esc_html__(' ago', 'tribe'); ?></a>
    </time>

    </header>
    <!-- /.comment-meta -->
    
    <?php if ( '0' == $comment->comment_approved ) : ?>
    <p class="at-comment__moderation">
      <?php esc_html_e( 'Your comment is awaiting moderation.', 'tribe' ); ?>
    </p>
    <?php endif; ?>
    
    <div class="at-comment__content" itemprop="commentText">
      <?php comment_text(); ?>
    </div >
    
    <footer class="at-comment__footer">
    <!-- .comment-action -->
    <div class="at-comment__actions">
      <?php edit_comment_link( esc_html__( 'Edit', 'tribe' ), '', '' ); ?>
      <?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'tribe' ), 'depth' => $depth, 'max_depth' => get_option('thread_comments_depth')  ) ) ); ?>
    </div>
    <!-- /.comment-action -->
    </footer>
    
    
   
  </article>
  <!-- #comment-## -->
  <?php
    break;
  endswitch; // end comment_type check
}
endif;