<?php

include('inc/assets.php');

// Define upload_url_path to embed media with domain-relative URLs
// Only needs to be excuted once on project initialization
update_option('upload_url_path', '/wp-content/uploads');

if( WP_PASSWORD_PROTECT == true ){
	
	function password_protect() {
		if ( !is_user_logged_in() ) {
			auth_redirect();
		}
	}

	add_action ('template_redirect', 'password_protect');
}
