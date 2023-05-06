<!--
	WonderCMS Login: wildjr.com/v2/wondercms/login
	Username: bill@wondercms.com
	Password: I hope this works!
-->

<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<base href="http://localhost/wildjr/wonder/" />

		<!-- Encoding, browser compatibility, viewport -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Search Engine Optimization (SEO) -->
		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		<meta property="og:url" content="<?= $this->url() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:site" content="<?= $this->url() ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

		<!-- Website and page title -->
		<title>
			<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>

		</title>

		<!-- Admin CSS -->
		<?= $Wcms->css() ?>
		
		<!-- Theme CSS -->
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/bootstrap/bootstrap.min.css') ?>">
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/font-awesome.min.css') ?>">
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/animate.css') ?>">
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/custom.css') ?>">
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/paroller.css') ?>">

	</head>
	
	<body>
		<!-- Admin settings panel and alerts -->
		<?= $Wcms->settings() ?>

		<?= $Wcms->alerts() ?>

		<section id="topMenu">
			<div class="container">
				<div class="menu-logo">
					<a href="home">
						<img src="data/files/navbar-logo.png" alt="Wild Jr's" style="vertical-align:baseline !important;">
					</a>
				</div>
				<nav>
					<ul class="menu">
						<!-- Menu -->
						<?= $Wcms->menu() ?>
						<!-- Ecwid store menu item -->
						<li class="nav-item" style="margin-top: -8px;">
							<a class="nav-link">
								<div data-layout="MEDIUM_ICON_COUNTER" data-custom-icon-url="data/files/shopping-cart-reverse.svg" class="ec-cart-widget" style="display:flex !important;width:46px;height:46px"></div>
								<div>
									<script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?17415697&data_platform=code&data_date=2019-08-11" charset="utf-8"></script>
									<script type="text/javascript">Ecwid.init();</script>
								</div>
							</a>
						</li>
						</li>
					</ul>
				</nav>
			</div>
		</section>

		<?php
		$link = $_SERVER['REQUEST_URI'];
		//echo "<h2 class='text-white'>" . $link . "</h2>";

		if ($link != "/wildjr/wonder/home") {
			// Append a div with the current page content
			echo '
			    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
				<section>
					<div class="jumbotron page" style="data-paroller-factor="0.5" data-paroller-factor-xs="0.2">
						<div class="container">
							' . $Wcms->block($Wcms->page("title")) . '
						</div
					</div>
				</section>
				<div id="wrapper">
					<section id="intro" class="wrapper">
						<div class="container">
						' . $Wcms->page('content') . '
						</div>
					</section>
				</div>
				';
		} else {
			// Append a div with the home page content
			include_once('themes/habanero/landingPage.php');
		};

		// Custom page for Photos
		// if 'employees' in the url => profile-page-layout ELSE default layout
		if ($link == "/wildjr/wonder/photos") {
			echo include_once 'gallery.php';
		}
		?>


		<footer class="style2">
			<section class="footer py-6" id="footer1-2">

				<div class="container">
					<div class="media-container-row content text-light">
						<div class="col-12 col-md-2">
							<div class="media-wrap">
								<a href="#/">
									<img src="data/files/head-flame.png" alt="Wild Jr's">
								</a>
							</div>
						</div>
						<div class="col-12 col-md-5 mbr-fonts-style">
							<h2 class="pb-3 text-orange">
								Contact Us
							</h2>
							<p class="footer-links">
								Email: info@prosauces.com
							</p>
						</div>
						<div class="col-12 col-md-2 mbr-fonts-style no-margin">
							<h2 class="pb-3 text-orange">
								Links
							</h2>
							
							<p class="footer-links mb-0">
								<a class="text-primary" href="index.php">Home</a><br>
								<a class="text-primary" href="store.php">Store</a><br>
								<a class="text-primary" href="testimonials.php">Testimonials</a><br>
							</p>
						</div>
						<div class="col-12 col-md-3 mbr-fonts-style">
							<h2 class="pb-md-3 d-none d-md-block">&nbsp;
							</h2>
							<p class="footer-links">
								<a class="text-primary" href="photos.php">Photos</a><br>
								<a class="text-primary" href="faqs.php">FAQs</a><br>
								<a class="text-primary" href="about.php">About</a><br>
								<!--<a class="text-primary" href="#/">Contact</a>-->
							</p>
						</div>
					</div>
					<div class="footer-lower pt-5">
						<div class="media-container-row mbr-white">
							<div class="col-12 col-sm-7 copyright">
								<p class="footer-links mbr-fonts-style copyright">
									Copyright © <?php echo date("Y");?> WD Reese, LLC - All Rights Reserved
								</p>
							</div>
							<div class="col-12 col-sm-5">
								<div class="social-list align-right">
									<div class="soc-item">
										<a href="https://twitter.com/wildjrhotsauce" target="_blank">
											<i class="socicon-twitter fa fa-twitter fa-2x"></i>
										</a>
									</div>
									<div class="soc-item">
										<a href="https://www.facebook.com/Wild-Jrs-Hot-Sauce-1520417508101041" target="_blank">
											<i class="socicon-facebook fa fa-facebook fa-2x"></i>
										</a>
									</div>
									<div class="soc-item">
										<a href="https://www.instagram.com/wildjrhotsauce/" target="_blank">
											<i class="socicon-instagram fa fa-instagram fa-2x"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</footer>

		<a href="javascript:void();" class="scrollup" style="display: block;">
			<img src="data/files/chevron-up.png">
		</a>

		<!-- Admin JavaScript. More JS libraries can be added below -->
		<?= $Wcms->js() ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


		<script>
			$(document).ready(function(){
				$('.nav-button').click(function(e){
					e.preventDefault();
					$('body').toggleClass('nav-open');
				});

				/*** Testimonials ***/
				$(".rotate-text").textTimeSlider([
					'"It’s really good, I’ve been putting it on everything!"<br/>Ron D.',
					'"I really like your hot sauce."<br/>Vince D.',
					'"I love this hot sauce! Do you need help? I could sell a ton of this!"<br/>Joe P.',
					'"This is really good! My son Shane loves it!"<br/>Stacie P.',
					'"It’s good! I’m using a heck of a lot of it."<br/>Brian R.',
					'"It’s great with breakfast."<br/>Corey R.',
					'"My husband loves it!"<br/>Christa H.',
					'"It’s got good flavor, you can actually taste the peppers, not just heat"<br/>Bill H.',
					'"It’s fantastic!"<br/>Steve B.',
					'"Wow! This is great. I’ll be ordering more. This bottle will be gone in no time."<br/>Dr. Larry',
					'"As a self-described foodie, I was a bit skeptical about the three ingredients thing, but to be honest… after trying the sauce, I don’t really care. It’s awesome!"<br/>Tony R.'
				], [4000]);

				$('.scrollLink').click(function() {
					if ($(window).width() >= 992) {
						var headerHeight = 77;
						$('html, body').animate({
							scrollTop: $($.attr(this, 'href')).offset().top - headerHeight
						}, 500);
						return false;
					}
				});

				$('a[href*="#"]').on('click', function(event) {
					let hash = this.hash;
					if (hash) {
						event.preventDefault();
						$('html, body').animate({
							scrollTop: $(hash).offset().top - 77
						}, 750);
					}
				});
			  
				$(".socicon-twitter").hover( function () {
				  $(this).toggleClass('animated tada');
				});
				$(".socicon-facebook").hover( function () {
				  $(this).toggleClass('animated heartBeat');
				});
				$(".socicon-instagram").hover( function () {
				  $(this).toggleClass('animated flash');
				});
			  
				// initialize paroller.js
				$("[data-paroller-factor]").paroller();
				$("[data-paroller-type]").paroller();
				$("[data-paroller-direction]").paroller();
				$("[data-paroller-transition]").paroller();
				$('.jumbotron').paroller();
				
				$('.scrollLink').click(function() {
					if ($(window).width() >= 992) {
						var headerHeight = 77;
						$('html, body').animate({ scrollTop: $( $.attr(this, 'href') ).offset().top - headerHeight}, 500);
						return false;
					}
				});
			});
		</script>
		<script src="<?= $Wcms->asset('js/paroller/jquery.paroller.min.js') ?>"></script>
		<script src="<?= $Wcms->asset('js/scrollTop.js') ?>"></script>
		<script src="<?= $Wcms->asset('js/textTimeSlider/textTimeSlider.js') ?>"></script>

	</body>
</html>
