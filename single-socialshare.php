<div class="at-socialshare">
  <ul>
    <li class="at-socialshare__facebook">
      <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>">
        <?php get_template_part( '/svg/16px-facebook' ); ?><?php esc_html_e( 'Share', 'tribe' ); ?>
      </a>
    </li>
    <li class="at-socialshare__twitter">
      <a target="_blank" href="https://twitter.com/intent/tweet?source=tweetbutton&url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>">
        <?php get_template_part( '/svg/16px-twitter' ); ?><?php esc_html_e( 'Tweet', 'tribe' ); ?>
      </a>
    </li>
    <li class="at-socialshare__google">
      <a target="_blank" href="https://plus.google.com/share?url=<?php echo get_the_permalink(); ?>">
        <?php get_template_part( '/svg/16px-googleplus' ); ?><?php esc_html_e( '+1', 'tribe' ); ?>
      </a>
    </li>
    <li class="at-socialshare__linkedin">
      <a target="_blank" href="https://www.linkedin.com/cws/share?url=<?php echo get_the_permalink(); ?>">
        <?php get_template_part( '/svg/16px-linkedin' ); ?><?php esc_html_e( 'Share', 'tribe' ); ?>
      </a>
    </li>
    <li class="at-socialshare__pinterest">
      <a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo get_the_permalink(); ?>">
        <?php get_template_part( '/svg/16px-pinterest' ); ?><?php esc_html_e( 'Pin', 'tribe' ); ?>
      </a>
    </li>
  </ul>
</div>