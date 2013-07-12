<?php
/*
Plugin Name: Uit in Enschede occasion list
Version: 0.1.3
Description: Retrieves information about occasions from <a href="http://www.uitinenschede.nl/">www.uitinenschede.nl</a> and displays them in a list.
Author: Ruben Damink
Author URI: http://rubendamink.nl
*/

//[occasionlist]
function foobar_func( $atts ){
 return "foo and bar";
}
add_shortcode( 'occasionlist', 'foobar_func' );
?>