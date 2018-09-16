<!-- Intro -->
<section id="intro">
	<header>
		<h2><?php echo $site->title() ?></h2>
		<p><?php echo $site->slogan() ?></p>
	</header>
</section>

<?php Theme::plugins('siteSidebar') ?>

<!-- Footer -->
<section id="footer">
	<ul class="icons">
	<?php
		if($site->twitter()) {
			echo '<li><a href="'.$site->twitter().'" class="fab fa-twitter"><span class="label">Twitter</span></a></li>';
		}

		if($site->facebook()) {
			echo '<li><a href="'.$site->facebook().'" class="fab fa-facebook"><span class="label">Facebook</span></a></li>';
		}

		if($site->codepen()) {
			echo '<li><a href="'.$site->codepen().'" class="fab fa-codepen"><span class="label">CodePen</span></a></li>';
		}

		if($site->googlePlus()) {
			echo '<li><a href="'.$site->googlePlus().'" class="fab fa-google"><span class="label">Google+</span></a></li>';
		}

		if($site->instagram()) {
			echo '<li><a href="'.$site->instagram().'" class="fab fa-instagram"><span class="label">Instagram</span></a></li>';
		}

		if($site->gitlab()) {
			echo '<li><a href="'.$site->gitlab().'" class="fab fa-gitlab"><span class="label">GitLab</span></a></li>';
		}

		if($site->github()) {
			echo '<li><a href="'.$site->github().'" class="fab fa-github"><span class="label">GitHub</span></a></li>';
		}

		if($site->linkedin()) {
			echo '<li><a href="'.$site->linkedin().'" class="fab fa-linkedin"><span class="label">LinkedIn</span></a></li>';
		}

		if( $plugins['all']['pluginRSS']->installed() ) {
			echo '<li><a href="'.DOMAIN_BASE.'rss.xml'.'" class="fa-rss"><span class="label">RSS</span></a></li>';
		}

		if( $plugins['all']['pluginSitemap']->installed() ) {
			echo '<li><a href="'.DOMAIN_BASE.'sitemap.xml'.'" class="fa-sitemap"><span class="label">Sitemap</span></a></li>';
		}
	?>
	</ul>
	<p class="copyright"><?php echo $site->footer() ?> | <a href="http://www.bludit.com">BLUDIT</a></p>
</section>
