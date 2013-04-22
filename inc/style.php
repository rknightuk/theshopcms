<?php header("Content-type: text/css"); ?>
<?php $style_config = parse_ini_file( "style_config.ini" ); ?>

/* General page styles */

body	{
	margin: 0 auto;
	margin-top: 20px;
	color: #<?=$style_config['bodytextcolor']?>;
	font-family: Helvetica, Arial, sans-serif;
	font-size: 14px;
	width: 960px;
	background-color: #<?=$style_config['backgroundcolor'];?>;
}

#head_main	{
	position: fixed;
	top: 0;
	width: 960px;
	height: auto;
	padding: 10px 0 10px 0;
	background-color: #<?=$style_config['backgroundcolor'];?>;
	z-index: 1000;
	border-bottom: 2px solid #000;
	-webkit-box-shadow: 0 8px 6px -6px #<?=$style_config['linkcolor'];?>;
	   -moz-box-shadow: 0 8px 6px -6px #<?=$style_config['linkcolor'];?>;
	        box-shadow: 0 8px 6px -6px #<?=$style_config['linkcolor'];?>;
}

.logo	{
	position: relative;
	float: left;
	width: 300px;
	font-family: Helvetica Bold, Arial Bold, sans-serif;
	font-size: 150%;
}

	h1	{
		line-height: 0;
	}
	
	h1 a:link, h1 a:visited, h1 a:active	{
		text-decoration: none;
		color: #<?=$style_config['headercolor']?>;
	}
	
	h1 a:hover	{
		color: #<?=$style_config['linkcolor'];?>;
		text-decoration: underline;
		text-decoration: none;
	}

.content	{
	position: relative;
	width: 750px;
	padding: 5px;
	float: right;
}

.content img	{
	max-width: 100%;
}

.nav_search	{
	position: relative;
	float: left;
	width: 350px;
	margin-top: 3px;	
}
	
.nav_search input[type=text]	{
	width: 350px;
	height: 35px;
	font-size: 150%;
	background: url('/inc/img/search.png') top left no-repeat;
	padding-left: 40px;
	background-color: #fff;
}

	.nav_search input:focus	{
		background-color: #F7F7F7;
	}

.feedback_no, .feedback_yes	{
		margin: 0 auto;
		position: relative;
		clear: both;
		width: 70%;
		padding: 10px;
		border-radius: 7px;
		text-align: center;
	}
	
	.feedback_yes	{
		background: #C4FDBA;
		border: 1px solid #6EFF97;
	}
	
	.feedback_no	{
		background: #FDC7C7;
		border: 1px solid #f99;
	}

#nav_basket	{
	position: relative;
	float: right;
	width: 245px;
	margin-top: 15px;
	text-align: right;
	line-height: 10px;
	margin-top: 0;
}

.nav_admin	{
	position: relative;
	float: right;
	width: 350px;
	margin-top: 15px;
}

	.nav_admin ul li	{
		margin: 0;
		padding: 10px 5px 10px 5px;
		list-style-type: none;
		display: inline;
	}

.clearfix	{
	clear: both;
	margin-top: 100px;
}

.nav_main	{
	position: relative;
	width: 180px;
	float: left;
}

	.nav_main ul li	{
		margin-left: -40px;
		list-style-type: none;
	}
	
	.nav_main a:link	{
		display: block;
		width: 160px;
		padding: 10px 5px 10px 5px;
		background: #f7f7f7;
		margin-bottom: 5px;
		text-align: center;
		text-decoration: none;
		border: 1px solid #<?=$style_config['linkcolor'];?>;
	}
	
	.nav_main a:hover	{
		border-color: #dbdbdb;
	}

footer	{
	position: relative;
	width: 100%;
	border-top: 2px solid #000;
	clear: both;
}
	
a, a:link, a:visited, a:active	{
	color: #<?=$style_config['linkcolor']?>;
	text-decoration: underline;
}

a:hover	{
	color: #939393;
	text-decoration: none;
}

input {
	padding: 5px;
	width: 200px;
}

	input:focus	{
		background-color: #F7F7F7;
	}

label	{
	width: 200px;
	float: left;
	text-align: right;
	padding: 5px;
}

fieldset	{
	width: 60%;
	padding: 10px;
}

legend	{
	font-weight: bold;
	font-size: 130%;
}

input.submit	{
	float: right;
	width: 70px;
}

input.update	{
	float: left;
	width: 70px;
}

input.updateq	{
	width: 50px;
	text-align: center;
}

input.checkout 	{
	width: 75px;
}

table
{
	background: #fff;
	margin-right: 45px;
	width: 100%;
	border-collapse: collapse;
	text-align: left;
	margin-bottom: 30px;
}

th
{
	font-size: 14px;
	font-weight: bold;
	padding: 10px 8px;
	border-bottom: 2px solid #000;
}

td
{
	padding: 10px 5px 10px 5px;
}

tbody tr:hover td
{
	color: #009;
}

tr	{
	border-bottom: 1px solid #e5e5e5;
}

tr:nth-child(even){
	background-color: #f8f8f8;
}

.sales tr {
	background: #fff;
	border: none;
	text-align: center;
}

.sales td 	{
	padding: 0;
	color: #6F6F6F;
}

select	{
	font-size: 20px;
}

#sort, #pagination	{
	text-align: center;
}

/* Product grid layout */

.product	{
	width: 30%;
	height: auto;
    display: inline-block;
    margin: 5px;
    border: 1px solid #<?=$style_config['productborder'];?>;
    text-align: center;
    }
    
    .product p	{
	    margin-top: 10px;
	    font-weight: bold;
    }
    
    .product .description	{
	    font-weight: normal;
	    min-height: 70px;
	    padding: 0 5px;
    }
    
    .product .img	{
    	min-height: 200px;
    	line-height: 200px;
    	/*border-bottom: 1px solid #DBDBDB;
    	border-top: 1px solid #DBDBDB;
    	background-color: #fff;*/
    }

    	.product img	{
		    margin: auto;
		    max-width: 95%;
		    max-height: 190px;
		    height: auto;
		    margin-top: auto;
		    margin-bottom: auto;
		    vertical-align: middle;
    	}
    
    .product h3	{
	    text-align: center;
	    width: 100%;
	    padding-top: 10px;
	    margin-top: 0;
	    height: 50px;
    }

    .product
    .product:after {
            content: "";
            display: table;
            clear: both;
        }

/* Search results layout */

.search_product	{
			width: 95%;
			height: 120px;
			padding: 5px;
		}

		.search_product:nth-child(even)	{
			background-color: #f8f8f8;
		}

		.search_product h4	{
			margin-top: 10px;
		}

		.search_product .img 	{
			max-height: 100px;
			max-width: 170px;
			min-width: 170px;
			height: auto;
			width: auto;
			line-height: 120px;
			float: left;
			text-align: center;
		}

		.search_product img 	{
			max-height: 100px;
			max-width: 170px;
			height: auto;
			width: auto;
			vertical-align: middle;
		}

		.search_product .info	{
			float: left;
			margin-left: 10px;
			width: 340px;
		}

		.search_product .buy	{
			float: right;
			text-align: right;
			padding-right: 5px;
		}

/* Product page layout */

.product_ind	{
	width: 50%;
	min-height: 300px;
	float: left;
    display: inline-block;
    padding: 3px 3px 30px 3px;
    margin: 5px;
    text-align: left;
    }
    
    .product_info	{
	    width: 40%;
	    height: auto;
	    float: right;
	    display: inline-block;
	    padding: 3px 20px 3px 20px;
	    margin: 58px 0 0 0;
	    text-align: left;
	    border-radius: 7px;
    }
    
    .related	{
		position: relative;
		width: 750px;
		padding: 5px;
		float: right;
	}
	
	.product_related	{
		width: 30%;
		height: 250px;
		float: left;
		display: inline-block;
		padding: 3px;
		margin: 5px;
		border: 1px solid #dbdbdb;
		text-align: center;
	}
	
	.product_related .img {
		line-height: 250px;
	}

	.product_related img	{
		max-height: 180px;
	}

	.add_to_basket, .out_of_stock	{
		padding: 10px;
	}

	.add_to_basket a {
		background: #f7f7f7;
		text-align: center;
		padding: 10px 20px;
		border: 1px solid #<?=$style_config['linkcolor'];?>;
		text-decoration: none;
		font-weight: normal;
	}

	.out_of_stock a {
		background: #d3d3d3;
		text-align: center;
		padding: 10px 25px;
		border: 1px solid #<?=$style_config['linkcolor'];?>;
		text-decoration: none;
		font-weight: normal;
	}

	.add_to_basket a:hover, .out_of_stock a:hover	{
		border-color: #dbdbdb;
	}

	p.out_of_stock	{
		font-weight: normal;
	}

	.product_info .out_of_stock	{
		float: left;
	}

#nav_basket	{
	width: 200px;
	height: auto;
}

.basket_total	{
	text-align: right;
}

.summary	{
	color: red;
	font-weight: bold;
}

#basket_contents	{
	clear: both;
	padding: 5px;
	display: none;
}

.right	{
	text-align: right;
}

.empty 	{
	text-align: right;
	font-size: 80%;
	font-weight: bold;
	text-transform: uppercase;
}

.empty a:link,
.empty a:hover,
.empty a:visited	{
	color: #f00;
	padding: 5px;
	border: 1px solid #f00;
	text-decoration: none;
}

.empty a:hover	{
	background-color: #FCE7E7;
}

.msg	{
	visibility: hidden;
}

#outstockmsg	{
	position: fixed;
	top: 10px;
	width: 370px;
	height: auto;
	margin-left: 285px;
	margin-right: 285px;
	padding: 10px 0 10px 0;
	background-color: #fff;
	z-index: 1001;
	border: 2px solid #<?=$style_config['linkcolor'];?>;
	padding: 5px;
	text-align: center;
}

#feedback_form, .feedback_msg	{
	color: #ff0000;
	font-weight: bold;
}

#pagination a, .pagi_links_current	{
	padding: 5px 10px;
	text-decoration: none;
	background: #f7f7f7;
	text-align: center;
	text-decoration: none;
	font-weight: normal;
}

#pagination a {
	border: 1px solid #<?=$style_config['linkcolor']?>;
}

#pagination a:hover, .pagi_links_current {
	border: 1px solid #dbdbdb;
	color: #939393;
}

	.page_numbers {
		color: #bababa;
		font-size: 80%;
	}