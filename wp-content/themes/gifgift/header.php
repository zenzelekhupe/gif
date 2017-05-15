<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/build.css" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
 <!-- Third Party CSS Dependencies -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dependencies/prism.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dependencies/select.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dependencies/sweetalert.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"> 
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70867506-2', 'auto');
  ga('send', 'pageview');

</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body <?php body_class(); ?>>
<header>
<!-- <div class="header-top">
  <div class="container">
  <p>Create and share your own Gif now.</p>
  </div>
</div> -->
<div class="header">

 <nav class="navbar navbar-inverse navbar-static-top example6">
	<div class="container">
		<div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#gifnav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand text-hide" href="<?php echo site_url();?>"><img src="<?php the_field('logo', 'option');?>">
        </a>
      </div>
    <div id="gifnav" class="navbar-collapse collapse">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav navbar-nav navbar-right','container' => false ) ); ?>
    </div>
  </div>
 </nav>
</div>
</header>


