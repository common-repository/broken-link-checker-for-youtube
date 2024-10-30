<div class="wrap">

<h2>Broken Link Checker for YouTube v<?php echo $this->version; ?></h2>

	<table class='form-table'>
	<tr>
	<td>
	<p>
	<?php 
		printf( 
		esc_html__( 'Will verify embedded %s videos in published posts using a public API key. %sBy using this query you agree to %sYouTube\'s Terms of Service%s and %sGoogle\'s Privacy Policy%s. %sNo user data is collected, stored, processed, or otherwise used.', 'video-blogster' ), 
		'YouTube', 
		'<br>',
		'<a target="_blank" href="' . esc_url('https://www.youtube.com/t/terms') . '">',
		'</a>',
		'<a target="_blank" href="' . esc_url('https://policies.google.com/privacy?hl=en-US') . '">',
		'</a>',
		'<br>'
		); 
	?>
	</p>
	</td>
	<td>
	<?php
		$file = __FILE__;
		$video_file = 'yt_logo_rgb_light.png';
		$iconFile = plugin_dir_path( $file ) .  '../images/' . strtolower( $video_file );
		$icon = plugins_url( '../images/' . strtolower( $video_file ), $file );
		if ( file_exists( $iconFile ) ) :
	?>
		<img height="64" src="<?php echo $icon;?>" \>
	<?php endif; ?>
	</td>
	</tr>
	</table>

<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">

	<input type="submit" name="scan_now" value="<?php _e('Scan Now', 'youtube-link-checker' ); ?> &raquo;" />

</form>

	<p>
	<?php _e("Want options? More features? Additional sites? Premium support? Then check out ", 'youtube-link-checker' ); ?>
	<a target='blank' href='https://1.envato.market/y62jy'>Video Link Checker</a>
	</p>
</div>
