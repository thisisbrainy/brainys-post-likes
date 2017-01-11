<?php

// Include scripts
add_action('wp_enqueue_scripts', 'bpl_scripts');

// Process AJAX request to like a post
add_action('wp_ajax_bpl_like_post', 'bpl_like_post');
