<?php 

/**
 * Procedural functions to work with 
 */


/**
 * Open element tags
 */
function open_tag($elem, $attr = array()){
   $output = "<{$elem}";

   foreach($attr as $key => $value){
   	$output .= " {$key}=\"{$value}\"";
   }

   $output .= ">";

   return $output;
}



/**
 * Close element tag opened by the open_tag element
 */
function close_tag($elem){
	return "</{$elem}>";
}