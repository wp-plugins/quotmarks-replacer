<?php
/*
Plugin Name: Quotmarks Replacer
Version: 2.0 Beta
Author: Sparanoid
Author URI: http://sparanoid.com/
Plugin URI: http://sparanoid.com/taxonomy/blog/wordpress/quotmarks-replacer/
Description: Convert all SBC quotation marks and suspension points into DBC case. 解决 WordPress 的全角引号问题，将全角的单引、和双引号和省略号替换成半角的格式，使后台输入的引号、省略号格式与前台读者浏览的引号格式保持一致。

Following is the old way to replace the wptexturized contents:

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

function qmr_filter($content) {
	return qmr_replace($content);
}

add_filter ('bloginfo','qmr_filter');
add_filter ('the_title','qmr_filter');
add_filter ('the_content','qmr_filter');
add_filter ('the_excerpt','qmr_filter');
add_filter ('category_description','qmr_filter');
add_filter ('comment_author','qmr_filter');
add_filter ('comment_excerpt','qmr_filter');
add_filter ('comment_text','qmr_filter');
add_filter ('list_cats','qmr_filter');
add_filter ('single_post_title','qmr_filter');
*/

// This is a new way to remove the wptexturize filter:
remove_filter ('bloginfo','wptexturize');
remove_filter ('the_title','wptexturize');
remove_filter ('the_content','wptexturize');
remove_filter ('the_excerpt','wptexturize');
remove_filter ('category_description','wptexturize');
remove_filter ('comment_author','wptexturize');
remove_filter ('comment_excerpt','wptexturize');
remove_filter ('comment_text','wptexturize');
remove_filter ('list_cats','wptexturize');
remove_filter ('single_post_title','wptexturize');

?>
