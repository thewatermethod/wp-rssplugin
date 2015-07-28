<?php
   /*
   Plugin Name: RSS Auto Poster 
   Plugin URI: http://www.capecodwebfoundry.com
   Description: Creates draft posts from RSS feeds!
   Version: 1.0
   Author: Matt Bevilacqua
   Author URI: http://www.mattbev.com
   License: GPL2
   */



   function ccwf_rssautoposter_menu(){

   		/*
       *
       *  add options page 
	     *  add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function);
   		 *
       */

		add_options_page(
			'RSS Auto Poster',
			'RSS Auto Poster Options',
			'manage_options',
			'ccwf_rssautoposter',
         'ccwf_rssautoposter_options_page'
		);

   }

   add_action( 'admin_menu', 'ccwf_rssautoposter_menu' );



   function ccwf_rssautoposter_options_page(){

      if( !current_user_can('manage_options') ){
         wp_die( 'You do not have sufficient permissions to access this page.' );
      }

      require( 'inc/rssautoposter_pagewrapper.php' );

   }


?>