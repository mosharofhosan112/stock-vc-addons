<?php

  vc_map( 
	  	array(
	      "name" => __( "Stock button", "my-text-domain" ),
	      "base" => "stock_btn", 
	      "category" => __( "Stock", "my-text-domain"), 
	      "params" => array(
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
	          ), 
		      )
		   ) 
	  );
