<?php

add_filter('the_content', function($content) {

	$content .= bpl_like_link();

	return $content;

}, 100);
