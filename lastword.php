<?php  
    /* 
    Plugin Name: lastword.at 
    Plugin URI: http://lastword.at 
    Description: Plugin to allow visitors to see the latest from lastword.at and to contibute to it from your site.
    Author: danclarkie 
    Version: 1.0 
    Author URI: http://www.danclarkie.co.uk 
    */  
function lastword() {
$lastword = file_get_contents('http://lastword.at/synd.php');
echo $lastword;
}
 
function init_lastword(){
	register_sidebar_widget("lastword.at", "lastword");     
}
 
add_action("plugins_loaded", "init_lastword");
 
?>