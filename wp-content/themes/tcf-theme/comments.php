<?php
/*
The comments page
*/

// don't load it if you can't comment
if ( post_password_required() ) {
  return;
}
?>

<?php // You can start editing here. ?>

  <?php if ( have_comments() ) : ?>

    <h3 id="comments-title" class="h2"><?php comments_number( __( '<span>No</span> Comments' ), __( '<span>One</span> Comment' ), __( '<span>%</span> Comments' ) );?></h3>

    <div class="commentlist">
      <?php
        wp_list_comments( array(
          'style'             => 'div',
          'short_ping'        => true,
          'avatar_size'       => 40,
          'callback'          => 'tcf_comments',
          'end-callback'      => 'tcf_end_comments',
          'type'              => 'all',
          'reply_text'        => __('Reply'),
          'page'              => '',
          'per_page'          => '',
          'reverse_top_level' => null,
          'reverse_children'  => ''
        ) );
      ?>
    </div>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    	<nav class="navigation comment-navigation" role="navigation">
      	<div class="comment-nav-prev"><?php previous_comments_link( __( '&larr; Previous Comments' ) ); ?></div>
      	<div class="comment-nav-next"><?php next_comments_link( __( 'More Comments &rarr;' ) ); ?></div>
    	</nav>
    <?php endif; ?>

    <?php if ( ! comments_open() ) : ?>
    	<p class="no-comments"><?php _e( 'Comments are closed.' ); ?></p>
    <?php endif; ?>

  <?php endif; ?>

  <?php
    $fields   =  array(
      'author' => '<p class="form-group form-inline comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                  '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' /></p>',
      'email'  => '<p class="form-group form-inline comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                  '<input id="email" class="form-control" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p>',
      'url'    => '<p class="form-group form-inline comment-form-url"><label for="url">' . __( 'Website' ) . '</label> ' .
                  '<input id="url" class="form-control" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
    );



    $fields = apply_filters( 'comment_form_default_fields', $fields );
    $args = array(
      'title_reply'          => __( 'Leave a Reply' ),
      'title_reply_to'       => __( 'Leave a Reply to %s' ),
      'cancel_reply_link'    => __( 'Cancel reply' ),
      'label_submit'         => __( 'Post Comment' ),
      'id_form'              => 'commentform',
      'id_submit'            => 'submit',
      'class_submit'         => 'submit btn btn-primary',
      'name_submit'          => 'submit',
      'comment_field'        => '<div class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label></div> <p class="form-group form-inline"><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-describedby="form-allowed-tags" aria-required="true" required="required"></textarea></p>',
      'must_log_in'          => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
      'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
      'comment_notes_before' => '<p class="comment-notes"><span id="email-notes">' . __( 'Your email address will not be published.' ) . '</span>'. ( $req ? $required_text : '' ) . '</p>',
      'comment_notes_after'  => '<p class="form-allowed-tags" id="form-allowed-tags">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ), ' <code>' . allowed_tags() . '</code>' ) . '</p>',
      'fields'               => $fields,

    );


comment_form($args) ?>

