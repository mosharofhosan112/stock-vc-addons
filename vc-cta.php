<?php

  vc_map( 
	  	array(
	      "name" => __( "Stock Call to action box", "my-text-domain" ),
	      "base" => "stock_cta", 
	      "category" => __( "Stock", "my-text-domain"), 
	      "params" => array(
	         array(
	            "type" => "textfield",
	            "heading" => __("Title", "my-text-domain" ),
	            "param_name" => "title", 
	            "description" => __( "Select logo if you want", "my-text-domain" )
	         ),
	          
	          array(
	            "type" => "textarea",
	            "heading" => __("Content", "my-text-domain" ),
	            "param_name" => "desc", 
	            "description" => __( "Select item", "my-text-domain" ),
	         ),
	         
	           array(
	            "type" => "dropdown",
	            "heading" => __("Link type", "my-text-domain" ),
	            "param_name" => "type",
	            "std" => __( "1", "my-text-domain" ),
	             "value" => array(
	             	'Link to paye' => 1,
	             	'External' => 2,
	               ),
	            "description" => __( "", "my-text-domain" ),
	         ),
	         array(
	            "type" => "dropdown",
	            "heading" => __("Link to page", "my-text-domain" ),
	            "param_name" => "link_to_page", 
	             "value" => stock_toolkit_get_page_as_list(),
	            "description" => __( "", "my-text-domain" ), 
	                "dependency" => array(
	             	"element" => "type",
	             	"value" => array("1"),
	             )
	         ),
	          array(
	            "type" => "textfield",
	            "heading" => __( "link", "my-text-domain" ),
	            "param_name" => "external_link", 
	            "description" => __( "", "my-text-domain" ), 
	                "dependency" => array(
	             	"element" => "type",
	             	"value" => array("2"),
	             )
	         ),
	           array(
	            "type" => "textfield",
	            "heading" => __("Link text", "my-text-domain" ),
	            "param_name" => "link_text", 
	            "std" => __( "See more", "my-text-domain" ),
	            "description" => __( "", "my-text-domain" )
	            )
		      )
		   ) 
	  );
