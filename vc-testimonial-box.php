<?php

  vc_map( 
	  	array(
	      "name" => __( "Stock testimonial box", "my-text-domain" ),
	      "base" => "stock_testimonial_box", 
	      "category" => __( "Stock", "my-text-domain"), 
	      "params" => array(
	         array(
	            "type" => "textfield",
	            "heading" => __("Title", "my-text-domain" ),
	            "param_name" => "title", 
	            "description" => __( "write your title", "my-text-domain" )
	         ), 
	          array(
	            "type" => "textfield",
	            "heading" => __("Position/Lucation", "my-text-domain" ),
	            "param_name" => "position", 
	            "description" => __( "write your position/lucation", "my-text-domain" )
	         ), 
	          array(
	            "type" => "attach_image",
	            "heading" => __("Photo", "my-text-domain" ),
	            "param_name" => "photo", 
	            "description" => __( "upload image", "my-text-domain" )
	         ),    
	          array(
	            "type" => "textarea",
	            "heading" => __("Testimonial", "my-text-domain" ),
	            "param_name" => "desc", 
	            "description" => __( "write your testimonials", "my-text-domain" )
	         )
	       
		   )
	     ) 
	  );
