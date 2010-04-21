<?php
/*
Plugin Name: Code Shortcode
Plugin URI: http://jimbarritt.com
Description: Shortcode that generates a code block for google syntax highlighter
Version: 0.0
Author: Jim Barritt
Author URI: http://jimbarritt.com
*/

function openCodeTag($language) {
	return "<pre name='code' class='".$language.":nogutter:nocontrols'>";
}

function closeCodeTag() {
	return "</pre>";
}

// [code]some code goes here[/code] -> to nicely formatted code
function shortcode_java($attr, $content) {
    return openCodeTag('java').strip_tags($content).closeCodeTag();
}
add_shortcode('java', 'shortcode_java');

function shortcode_php($attr, $content) {
    return openCodeTag('php').strip_tags($content).closeCodeTag();
}
add_shortcode('php', 'shortcode_php');

function shortcode_html($attr, $content) {
    return openCodeTag('html').$content.closeCodeTag();
}
add_shortcode('html', 'shortcode_html');

 function escapeCode($content) {        
$str = str_replace('<br ','',$content); 
    $str = str_replace('<','&lt;',$content);
$str = str_replace('>','&gt;',$content);

        return $str;
    }

function shortcode_bash($attr, $content) {
    return openCodeTag('java').$content.closeCodeTag();
}
add_shortcode('bash', 'shortcode_bash');

function removeBreaks($content) {
    $str = str_replace('<br />', '', $content);
    $str = str_replace('<p>', '', $str);
    $str = str_replace('</p>', '', $str);
    return $str;
}
function shortcode_xml($attr, $content) {
    return openCodeTag('xml').removeBreaks($content).closeCodeTag();
}
add_shortcode('xml', 'shortcode_xml');

?>