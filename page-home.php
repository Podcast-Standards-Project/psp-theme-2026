<!-- edited -->

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>></div>

	<main class="entry-content" itemprop="mainContentOfPage">

		<div>
			<section>
				<h3>The Podcast Standards Project is a grassroots industry coalition dedicated to adopting new features that improve the open podcasting ecosystem for both listeners and creators.</h3>
				<span>
					<?php the_content(); ?>
				</span>
			</section>
		</div>

		<div class="light">
			<section>
				<h3>This is an open project and we’re calling upon all of the rebellious and wild children of podcasting for support.</h3>
				<span>
					<p>The truth is that no one can kill open podcasting. Anyone with a microphone and an Internet connection will always be able to spin up a feed and broadcast to the world. But much in the same way that closed social feeds replaced open blogs, podcasting faces a similar assault today.</p>

					<p>This is the landscape that has birthed The Podcast Standards Project, a grassroots coalition dedicated to creating standards and practices that improve the open podcasting ecosystem for both listeners and creators.</p>

					<p>Check out <a href="/our-proposals">the new features</a> and <a href="/get-involved">join the movement</a> to keep podcasting open.</p>
				</span>
			</section>
		</div>

		<div>
			<section>
				<img class="certified" src="https://i0.wp.com/podstandards.org/wp-content/uploads/2023/03/PSPCertified.png">
				<p>PSP Certification recognizes companies that are prioritizing open podcasting technology. <a href="/get-involved">Learn more about certification</a>.</p>
			</section>

			<section class="memberslist">
				<h3>Hosting Providers</h3>
				<ul>				
					<li>
						<a href="https://blubrry.com"><img src="https://i0.wp.com/podstandards.org/wp-content/uploads/2023/03/logo.blubrry.png"></a>
						<p>Blubrry</p>
					</li>
					<li>
						<a href="https://www.buzzsprout.com"><img src="https://i0.wp.com/podstandards.org/wp-content/uploads/2023/03/logo.buzzsprout.png"></a>
						<p>Buzzsprout</p>
					</li>

					<li>
						<a href="https://www.captivate.fm"><img src="https://i0.wp.com/podstandards.org/wp-content/uploads/2023/03/logo.captivate_.png"></a>
						<p>Captivate</p>
					</li>
					<li>
						<a href="https://redcircle.com"><img src="https://i0.wp.com/podstandards.org/wp-content/uploads/2023/03/logo.redcircle_new.png"></a>
						<p>RedCircle</p>
					</li>
					<li>
						<a href="https://rss.com"><img src="https://i0.wp.com/podstandards.org/wp-content/uploads/2023/03/logo.rsscom.png"></a>
						<p>RSS</p>
					</li>
					<li>
						<a href="https://transistor.fm"><img src="https://i0.wp.com/podstandards.org/wp-content/uploads/2023/03/logo.transistor.png"></a>
						<p>Transistor</p>
					</li>
					<li>
						<a href="https://iono.fm/"><img src="https://podstandards.org/wp-content/uploads/2025/03/iono-fm-logo.png"></a>
						<p>Iono.fm</p>
					</li>
					<li>
						<a href="https://www.podhome.fm/"><img src="https://podstandards.org/wp-content/uploads/2025/03/podhome-logo.png"></a>
						<p>Podhome</p>
					</li>
					<li>
						<a href="https://podtoo.com/"><img src="https://podstandards.org/wp-content/uploads/2025/06/podtoo-logo.png"></a>
						<p>Podtoo</p>
					</li>
					<li>
						<a href="https://alitu.com/"><img src="https://podstandards.org/wp-content/uploads/2025/07/alitu.png"></a>
						<p>Alitu</p>
					</li>
					<li>
						<a href="https://dovetail.prx.org/"><img src="https://podstandards.org/wp-content/uploads/2025/10/prx-logo.png"></a>
						<p>PRX Dovetail</p>
					</li>
					<li>
						<a href="https://www.podpage.com/"><img src="https://podstandards.org/wp-content/uploads/2025/03/podpage-logo.png"></a>
						<p>Podpage</p>
					</li>
					<li class="comingsoon">
						<small>Coming Soon</small>
						<a href="https://www.podigee.com/en/"><img src="https://podstandards.org/wp-content/uploads/2025/03/podigee-logo.png"></a>
						<p>Podigee</p>
					</li>
					<li class="comingsoon">
						<small>Coming Soon</small>
						<a href="https://castos.com"><img src="https://i0.wp.com/podstandards.org/wp-content/uploads/2023/03/logo.castos.png"></a>
						<p>Castos</p>
					</li>

				</ul>
			</section>

			<section class="memberslist">
				<h3>Podcast Players</h3>
				<ul>
					<li>
						<a href="https://pocketcasts.com/"><img src="https://podstandards.org/wp-content/uploads/2025/03/pocket-casts-logo.png"></a>
						<p>PocketCasts</p>
					</li>				
					<li>
						<a href="https://podcastguru.io//"><img src="https://podstandards.org/wp-content/uploads/2025/03/podcast-guru-logo.png"></a>
						<p>Podcast Guru</p>
					</li>			
					<li>
						<a href="https://curiocaster.com"><img src="https://podstandards.org/wp-content/uploads/2025/03/curiocaster-horizontal-logo.png"></a>
						<p>CurioCaster</p>
					</li>
					<li>
						<a href="https://podverse.fm"><img src="https://podstandards.org/wp-content/uploads/2025/03/podverse-logo.png"></a>
						<p>Podverse</p>
					</li>
					<li>
						<a href="https://www.steno.fm"><img src="https://i0.wp.com/podstandards.org/wp-content/uploads/2023/03/steno.png"></a>
						<p>Steno</p>
					</li>
					<li>
						<a href="https://truefans.fm/"><img src="https://podstandards.org/wp-content/uploads/2025/07/truefans.png"></a>
						<p>TrueFans</p>
					</li>
					<li>
						<a href="https://anytimeplayer.app/"><img src="https://podstandards.org/wp-content/uploads/2025/03/anytime-player.png"></a>
						<p>Anytime Podcast Player</p>
					</li>
				</ul>
			</section>

			<section class="memberslist">
				<h3>Other Partners</h3>
				<ul>
					<li>
						<a href="https://podnews.net"><img src="https://i0.wp.com/podstandards.org/wp-content/uploads/2023/03/podnews.png"></a>
						<p>Podnews</p>
					</li>
				</ul>
			</section>

		</div>

	</main>
</div>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

