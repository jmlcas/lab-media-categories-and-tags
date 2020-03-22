<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Add Media Trash

 function labmct_config_put( $slash = '' ) {
    $config = file_get_contents (ABSPATH . "wp-config.php");
    $config = preg_replace ("/^([\r\n\t ]*)(\<\?)(php)?/i", "<?php define('MEDIA_TRASH', true);", $config);
    file_put_contents (ABSPATH . $slash . "wp-config.php", $config);
}

if ( file_exists (ABSPATH . "wp-config.php") && is_writable (ABSPATH . "wp-config.php") ){
    labmct_config_put();
}
else if (file_exists (dirname (ABSPATH) . "/wp-config.php") && is_writable (dirname (ABSPATH) . "/wp-config.php")){
    labmct_config_put('/');
}
else { 
    add_warning('Error adding');
}