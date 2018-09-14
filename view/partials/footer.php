<?php

/**
 * Partial view for a single page.
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://myappuccino.com/
 * @since      1.0.0
 *
 * @package    Appuccino
 * @subpackage Appuccino/admin/partials
 */
?>
<footer class="uk-position-bottom-left uk-position-fixed uk-width-1-1">
	<div class="uk-card uk-card-default">
		<div class="uk-grid uk-child-width-expand" uk-grid>
			<div>
				<a href="#/" ng-class="post.uri == '/' ? 'active' : ''">
					<span uk-icon="home"></span>
					<span>Home</span>
				</a>
			</div>
			<div>
				<a href="#/" ng-class="post.uri == '/home/link2' ? 'active' : ''">
					<span uk-icon="info"></span>
					<span>Link #2</span>
				</a>
			</div>
			<div>
				<a href="#/" ng-class="post.uri == '/home/link3' ? 'active' : ''">
					<span uk-icon="comment"></span>
					<span>Link #3</span>
				</a>
			</div>
			<div>
				<a href="#/" ng-class="post.uri == '/home/link4' ? 'active' : ''">
					<span uk-icon="mail"></span>
					<span>Link #4</span>
				</a>
			</div>
		</div>
	</div>
</footer>