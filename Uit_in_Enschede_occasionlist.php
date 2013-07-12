<?php
/*
Plugin Name: Uit in Enschede occasion list
Version: 0.1.7
Description: Retrieves information about occasions from <a href="http://www.uitinenschede.nl/">www.uitinenschede.nl</a> and displays them in a list.
Author: Ruben Damink
Author URI: http://rubendamink.nl
*/

//[occasionlist]
function list_func( $atts ){
 return "Hier komt daarstraks de listoutput";
}
add_shortcode( 'occasionlist', 'list_func' );
?>