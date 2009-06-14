<?php
/*
Plugin Name: Quotmarks Replacer
Version: 1.0.5
Author: Sparanoid
Author URI: http://blog.sparanoid.com/
Plugin URI: http://blog.sparanoid.com/archive/wordpress/quotmarks-replacer/
Description: Convert all SBC quotation marks and suspension points into DBC case. 解决 WordPress 的全角引号问题，将全角的单引、和双引号和省略号替换成半角的格式，使后台输入的引号、省略号格式与前台读者浏览的引号格式保持一致。
*/

// First replaced contents
function qmr_replace($the_content) {
    $the_content = str_replace("&#8220;", "&quot;", $the_content);
    $the_content = str_replace("&#8221;", "&quot;", $the_content);
    $the_content = str_replace("&#8243;", "&quot;", $the_content);
    $the_content = str_replace("&#8216;", "'", $the_content);
    $the_content = str_replace("&#8217;", "'", $the_content);
    $the_content = str_replace("&#8242;", "'", $the_content);
    $the_content = str_replace("&#8230;", "...", $the_content);
    $the_content = str_replace("&#8211;", "--", $the_content);
    $the_content = str_replace("&#8212;", "---", $the_content);
	return $the_content;
}

// Set replace sections
function qmr_filter_the_title($content) {
	return qmr_replace($content);
}

function qmr_filter_the_content($content) {
	return qmr_replace($content);
}

function qmr_filter_the_excerpt($content) {
	return qmr_replace($content);
}

// And the WordPress hooks
add_filter ('bloginfo','qmr_filter_the_title');
add_filter ('the_title','qmr_filter_the_title');
add_filter ('the_content','qmr_filter_the_content');
add_filter ('the_excerpt','qmr_filter_the_excerpt');
add_filter ('comment_text','qmr_filter_the_content');

// That is, EZ :)
?>
