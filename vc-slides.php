<?php

  vc_map( 
	  	array(
	      "name" => __( "Stock Slider", "my-text-domain" ),
	      "base" => "stock_slides", 
	      "category" => __( "Stock", "my-text-domain"), 
	      "params" => array(
	         array(
	            "type" => "textfield",
	            "heading" => __("Count", "my-text-domain" ),
	            "param_name" => "count",
	            "value" => __( "3", "my-text-domain" ),
	            "description" => __( "Select slides count. If you want to show unlimited slides, type -1.", "my-text-domain" )
	         ),
	         array(
	            "type" => "dropdown",
	            "heading" => __("Select slider", "my-text-domain" ),
	            "param_name" => "slider_id", 
	             "value" => stock_toolkit_get_slide_as_list(), 
	             "description" => __( "", "my-text-domain" ),
	             "dependency" => array(
	             	"element" => "count",
	             	"value" => array("1"),
	             )
	               ),
 
	          array(
	            "type" => "textfield",
	            "heading" => __("Slider height", "my-text-domain" ),
	            "param_name" => "height",
	            "std" => __( "700", "my-text-domain" ),
	            "description" => __( "Type slider height in px. number only", "my-text-domain" )
	         ),
	          array(
	            "type" => "dropdown",
	            "heading" => __("Enable loop?", "my-text-domain" ),
	            "param_name" => "loop",
	            "std" => __( "true", "my-text-domain" ),
	             "value" => array(
	             	'yes' => 'true',
	             	'No' => 'false',
	               ),
	            "description" => __( "", "my-text-domain" ),
	               "dependency" => array(
	             	"element" => "count",
	             	"value" => array("2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),
	             )
	         ),
	         array(
	            "type" => "dropdown",
	            "heading" => __("Enable autoplay?", "my-text-domain" ),
	            "param_name" => "autoplay",
	            "std" => __( "true", "my-text-domain" ),
	             "value" => array(
	             	'yes' => 'true',
	             	'No' => 'false',
	               ),
	            "description" => __( "", "my-text-domain" ),
	              "dependency" => array(
	             	"element" => "count",
	             	"value" => array("2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),
	             )
	         ),
	         array(
	            "type" => "dropdown",
	            "heading" => __("Slide time", "my-text-domain" ),
	            "param_name" => "autoplayTimeout",
	            "std" => __( "5000", "my-text-domain" ),
	             "value" => array(
	             	'1 Second' => '1000', 
	             	'2 Seconds' => '2000', 
	             	'3 Seconds' => '3000', 
	             	'4 Seconds' => '4000', 
	             	'5 Seconds' => '5000', 
	             	'6 Seconds' => '6000', 
	             	'7 Seconds' => '7000', 
	             	'8 Seconds' => '8000', 
	             	'9 Seconds' => '9000', 
	             	'10 Seconds' => '10000', 
	             	'11 Seconds' => '11000', 
	             	'12 Seconds' => '12000', 
	             	'13 Seconds' => '13000', 
	             	'14 Seconds' => '14000', 
	             	'15 Seconds' => '15000', 
	               ),
	            "description" => __( "", "my-text-domain" ),
	              "dependency" => array(
	             	"element" => "count",
	             	"value" => array("2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),
	             )
	         ),
	         array(
	            "type" => "dropdown",
	            "heading" => __("Enable navigation icon?", "my-text-domain" ),
	            "param_name" => "nav",
	            "std" => __( "true", "my-text-domain" ),
	             "value" => array(
	             	'yes' => 'true',
	             	'No' => 'false',
	               ),
	            "description" => __( "", "my-text-domain" ),
	              "dependency" => array(
	             	"element" => "count",
	             	"value" => array("2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),
	             )
	         ),
	          array(
	            "type" => "dropdown",
	            "heading" => __("Enable dots?", "my-text-domain" ),
	            "param_name" => "dots",
	            "std" => __( "true", "my-text-domain" ),
	             "value" => array(
	             	'yes' => 'true',
	             	'No' => 'false',
	               ),
	            "description" => __( "", "my-text-domain" ),
	              "dependency" => array(
	             	"element" => "count",
	             	"value" => array("2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),
	             )
	         )
	      )
	   ) 
  );
