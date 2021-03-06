<?php 
/**
 * Helpers methods
 * List all your static functions you wish to use globally on your theme
 *
 * @package awps
 */

if (!function_exists('dd')) :
	function dd()
	{
		echo '<pre>';
	    array_map( function( $x ) { var_dump( $x ); }, func_get_args() );
	    echo '</pre>';
	    die;
	}
endif;