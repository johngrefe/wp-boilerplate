<?php

include('inc/assets.php');
include('inc/init.php')

if( WP_PASSWORD_PROTECT == true ){
	
	function password_protect() {
		if ( !is_user_logged_in() ) {
			auth_redirect();
		}
	}

	add_action ('template_redirect', 'password_protect');
}
