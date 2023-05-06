		<section>
			<div class="jumbotron page">
				<div class="container d-flex" style="transform:scaleX(1);">
					<div class="hero-content">
						<?= $Wcms->block($Wcms->page('title')) ?>
					</div>
				</div>
			</div>
		</section>
		<div id="wrapper">
			<section id="intro" class="wrapper style1 fullscreen">
				<div class="container">
					<!- Main content for each page -->
					<?= $Wcms->page('content') ?>
				</div>
			</section>
		</div>





		<script>
		    $(document).ready(function () {
		        if (window.location.pathname == '/') { // check if current page is the homepage
		            // display custom HTML for non-homepage
		            $('article').append('<section> <div class="jumbotron page"> <div class="container d-flex" style="transform:scaleX(1);"> <div class="hero-content"> <?= $Wcms->block($Wcms->page("title")) ?> </div> </div> </div> </section> <div id="wrapper"> <section id="intro" class="wrapper style1 fullscreen"> <div class="container"> <!-- Main content for each page --> <?= $Wcms->page("content") ?> </div> </section></div>');
		        } else {
		            // display default HTML for homepage
		            $('article').append('<h1>Custom Page Title</h1><p>Here is some custom content for this page.</p>');
		        }
		    });
		</script>


		<script>
		    $(document).ready(function () {
		        if (window.location != 'http://localhost/wildjr/wonder/home') { // check if current page is the homepage
		            // display custom HTML for non-homepage		            
		            $('article#pageContent').append('<?= $Wcms->page($Wcms->page('title')) ?>');
			    } else {
		            // display default HTML for homepage
		            $('article#pageContent').append('<?= $Wcms->page("home") ?>');
				}		        
		    });
		</script>

