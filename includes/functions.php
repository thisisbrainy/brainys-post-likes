<?php

function bpl_like_post() {

	if(isset($_POST['bpl_post_id']) && wp_verify_nonce($_POST['bpl_nonce'])) {

		// update like count
		$like_count = bpl_like_count($_POST['bpl_post_id']);

		if($like_count) {

			$like_count = $like_count + 1;

		} else {

			$like_count = 1;

		}

		bpl_set_session($_POST['bpl_post_id']);
		update_post_meta($_POST['bpl_post_id'], 'bpl_like_count', $like_count);

		echo 'Liked';

	}

}

function bpl_like_count($post_id) {

	return get_post_meta($post_id, 'bpl_like_count', true);

}

function bpl_set_session($post_id) {

	$_SESSION['bpl_session'][$post_id] = true;

}

function bpl_has_session($post_id) {

	if(!empty($_SESSION['bpl_session'][$post_id])) {

		return true;

	}

	return false;

}

function bpl_like_link() {

	global $post;

	$link = '<div class="bpl-like-post-container">';

	if(bpl_has_session($post->ID)) {

		$link .= 'You like this.';

	} else {

		$link .= '<a href="javascript:;" class="bpl-like-post" data-bpl-post-id="' . esc_attr(get_the_ID()) . '">Like</a>';

	}

	$link .= '</div>';

	return $link;

}
