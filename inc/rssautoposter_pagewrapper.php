
<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h2><?php esc_attr_e( 'RSS Auto Poster Settings', 'wp_admin_style' ); ?></h2>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<h3><span><?php esc_attr_e( 'RSS Feeds', 'wp_admin_style' ); ?></span></h3>
						<div class="inside">
							<p><?php esc_attr_e(
									'RSS Feeds Add or remove feed URL and click "submit" to update. Place each feed on a new line.',
									'wp_admin_style'
								); ?></p>
						</div>

						<input tag="hidden" name="ccwf_rss_autoposter_form_submitted" value="true"/>

						<div class="inside">
							<textarea id="" name="" cols="80" rows="10" class="all-options">

							</textarea>
						</div>

						<div class="inside">

							<input class="button-primary" type="submit" name="Example" value="<?php esc_attr_e( 'Update' ); ?>" />

						</div>
						<!-- .inside -->

						
					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<h3><span><?php esc_attr_e(
									'Sidebar Content Header', 'wp_admin_style'
								); ?></span></h3>

						<div class="inside">
							<p><?php esc_attr_e(
									'Everything you see here, from the documentation to the code itself, was created by and for the community. WordPress is an Open Source project, which means there are hundreds of people all over the world working on it. (More than most commercial platforms.) It also means you are free to use it for anything from your cat’s home page to a Fortune 500 web site without paying anyone a license fee and a number of other important freedoms.',
									'wp_admin_style'
								); ?></p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->