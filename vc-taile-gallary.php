<?php

  vc_map( 
	  	array(
	      "name" => __( "Stock taile gallary", "my-text-domain" ),
	      "base" => "stock_taile_gallary_carousel", 
	      "category" => __( "Stock", "my-text-domain"), 
	      "params" => array(
	         array(
	            "type" => "attach_images",
	            "heading" => __("Upload gallarys images", "my-text-domain" ),
	            "param_name" => "taile-gallarys", 
	            "description" => __( "Select taile-gallary if you want", "my-text-domain" )
	         ),
	          
	          array(
	            "type" => "textfield",
	            "heading" => __("Height", "my-text-domain" ),
	            "param_name" => "height",
	            "std" => __( "310", "my-text-domain" ), 
	            "description" => __( "image height in folting number", "my-text-domain" ),
	         )
	        
	      )
	   ) 
  );
