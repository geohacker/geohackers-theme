<?php

function the_bootstrap_credits() {
	printf(
		'<span class="credits aligncenter">' . __( '&copy; %1$s <a href="%2$s">geohackers.in</a>', 'the-bootstrap' ) . '</span>',
		date( 'Y' ),
		home_url( '/' )
	);
}

/**
 * Prints HTML with meta information for the current post-date/time and author,
* comment and edit link
*
* @author	Konstantin Obenland
* @since	1.0.0 - 05.02.2012
*
* @return	void
*/
function the_bootstrap_posted_on() {
	printf( __( '<span><i class="icon-calendar"></i> </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="by-author"> <span class="sep"> <i class="icon-user"></i> </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'the-bootstrap' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'the-bootstrap' ), get_the_author() ) ),
			get_the_author()
	);
	if ( comments_open() AND ! post_password_required() ) { ?>
		<span class="sep"> | </span>
		<span class="comments-link">
			<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'the-bootstrap' ) . '</span>', __( '<strong>1</strong> <i class="icon-comment"></i>', 'the-bootstrap' ), __( '<strong>%</strong> <i class="icon-comment"></i>', 'the-bootstrap' ) ); ?>
		</span>
		<span class="sep"> | </span>
		<?php igit_tsb_button(); ?>
		<?php
	}
	edit_post_link( __( 'Edit', 'the-bootstrap' ), '<span class="sep">&nbsp;</span><span class="edit-link label">', '</span>' );
}
?>
