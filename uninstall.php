<?php
if ( !defined( 'WP_UNINSTALL_PLUGIN' )) {
	exit;
}
// Check if options exist and delete it
if ( get_option( 'jfs_image_1') != false ) {
delete_option( 'jfs_image_1' );
}

if ( get_option( 'jfs_image_2') != false ) {
delete_option( 'jfs_image_2');
}

if ( get_option( 'jfs_image_3') != false ) {
delete_option('jfs_image_3');
}

if ( get_option( 'jfs_image_4') != false ) {
delete_option( 'jfs_image_4');
}

if ( get_option( 'jfs_image_5') != false ) {
delete_option( 'jfs_image_5');
}

if ( get_option( 'jfs_image_6') != false ) {
delete_option( 'jfs_image_6');

}

if ( get_option( 'jfs_image_7') != false ) {
delete_option( 'jfs_image_7');

}

if ( get_option( 'jfs_image_8') != false ) {
delete_option( 'jfs_image_8');

}

if ( get_option( 'jfs_image_9') != false ) {
delete_option( 'jfs_image_9');

}

if ( get_option( 'jfs_image_10') != false ) {
delete_option( 'jfs_image_10');

}

if ( get_option( 'jfs_duration') != false ) {
	delete_option( 'jfs_duration');
}
if ( get_option( 'jfs_opacity') != false ) {
	delete_option( 'jfs_opacity');
}
if ( get_option( 'jfs_button') != false ) {
	delete_option( 'jfs_button');
}

if ( get_option( 'jfs_arrows') != false ) {
	delete_option( 'jfs_arrows');
}
?>