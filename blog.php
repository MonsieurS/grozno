                                                                <!DOCTYPE html>
<html>
	<head>
		<title>Parfumeria</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Stylesheets -->
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/navigacija.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<link rel="stylesheet" type="text/css" href="css/blog.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


		<!-- Google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Neuton&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Parisienne&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

		<!-- jQuery source -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>

		<navigation>
			<div class="navigation">
				<div class="mobile-header">
					<div class="open-menu-icon"> <i class="fa fa-ellipsis-h fa-4x"></i></div>
					<div class="logo">Parfumeria</div>
					<div class="empty-div"></div>
					<div class="clearfix"></div>
				</div>
				<div class="navigation-wrapper">
					<div class="navigation-links">
						<ul><!--
							--><a href="index.html"><li>Proizvodi</li></a><!--
							--><a href="blog.php"><li>Blog</li></a><!--
							--><a href="galerija.html"><li>Galerija</li></a><!--s
							--><a href="kontakt.html"><li>Kontakt</li></a><!--
							-->
						</ul>
					</div>
				</div>
			</div>
		</navigation>

		<content>

			<div class="wrapper">
				<div class="blog">
					<h1>
				      <span id="left"></span>
				      <span id="center">Blog</span>
				      <span id="right"></span>
					</h1>
					
			<!-- BEGIN BLOG PHP WP CODE-->
<?php 
/* Short and sweet */

define('WP_USE_THEMES', false);
require('./blog/wp-blog-header.php');
?>

<?php

if (have_posts()) :
   while (have_posts()) :
      the_post();
?>
<br>
<h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?></a></h2>

<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
   <?php      the_content();
   endwhile;
endif;

?>
<!-- END BLOG PHP WP CODE-->
				</div>
			</div>

			
		</content>

		<footer>
			<div class="footer">
				<div class="footer-wrapper">
						<div class="social-media">
							<h2>follow us!</h2>
							<ul><!--
								--><a href=""><li><i class="fa fa-facebook fa-3x"></i></li></a><!--
								--><a href=""><li><i class="fa fa-google-plus fa-3x"></i></li></a><!--
								--><a href=""><li><i class="fa fa-twitter fa-3x"></i></li></a><!--
								-->
							</ul>
						</div>
						<div class="newsletter">
							<h2>newsletter</h2>
							<form>
								<input type="email" name="email" placeholder="Vaš email.."><br/>
								<input type="submit" value="Prijavi se">
							</form>
						</div>
				</div>
					

				<p><i class="fa fa-copyright"></i>2014 Parfumeria. Sva prava privržena.</p>
		</footer>





	<script type="text/javascript">
		$( document ).ready(function() {
			$('.open-menu-icon').click(function(){
			  $('.navigation-links').toggleClass('navigation-links-translate');
			   $('.navigation-wrapper').toggleClass('navigation-wrapper-translate');
			});

		$("#slideshow > div:gt(0)").hide();

		setInterval(function() { 
		  $('#slideshow > div:first')
		    .fadeOut(1000)
		    .next()
		    .fadeIn(1000)
		    .end()
		    .appendTo('#slideshow');
		},  3000);
		});

	</script>
	</body>
</html>

                            
                            