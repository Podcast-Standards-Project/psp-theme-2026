<!-- edited -->

</main>
<?php get_sidebar(); ?>
</div>

<footer id="footer" role="contentinfo">
		<section>
			<div>
				<p>Follow us on <a href="https://twitter.com/podstandards">Twitter</a> and <a href="https://www.linkedin.com/groups/14631008/">LinkedIn</a></p>
				<p>&copy;<?php echo esc_html( date_i18n( __( 'Y', 'Podcast Standards Project' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>	
		</section>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>