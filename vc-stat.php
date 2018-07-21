<?php

  vc_map( 
	  	array(
	      "name" => __( "Stock static box", "my-text-domain" ),
	      "base" => "stock_stat", 
	      "category" => __( "Stock", "my-text-domain"), 
	      "params" => array(
	           array(
	            "type" => "textfield",
	            "heading" => __( "static number", "my-text-domain" ),
	            "param_name" => "number", 
	            "description" => __( "", "my-text-domain" ),  
	         ), 
	           array(
	            "type" => "textfield",
	            "heading" => __( "static number after-text", "my-text-domain" ),
	            "param_name" => "after_text", 
	            "description" => __( "", "my-text-domain" ),  
	         ), 
	           array(
	            "type" => "textfield",
	            "heading" => __( "static descripation", "my-text-domain" ),
	            "param_name" => "desc", 
	            "description" => __( "", "my-text-domain" ),  
	         ),  
		   )
	     ) 
	  );
