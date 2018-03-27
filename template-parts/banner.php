<?php global $theme; ?>
<header id="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="site-identity-text">
					<h1 id="site-title"><?php bloginfo( 'name' ) ?></h1>
					<?php if( $theme['show_banner_tagline'] ): ?>
					<p id="site-description"><?php bloginfo( 'description' ) ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</header>