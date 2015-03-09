<?php
/**
 * Database Repair and Optimization Script.
 *
 * @package WordPress
 * @subpackage Database
 */
define('WP_REPAIRING', true);

require_once( dirname( dirname( dirname( __FILE__ ) ) ) . '/wp-load.php' );

header( 'Content-Type: text/html; charset=utf-8' );
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php _e( 'WordPress &rsaquo; Database Repair' ); ?></title>
	<?php
	wp_admin_css( 'install', true );
	?>
</head>
<body class="wp-core-ui">
<h1 id="logo"><a href="<?php echo esc_url( __( 'https://wordpress.org/' ) ); ?>" tabindex="-1"><?php _e( 'WordPress' ); ?></a></h1>

<?php

if ( ! defined( 'WP_ALLOW_REPAIR' ) ) {
	echo '<p>' . __( 'To allow use of this page to automatically repair database problems, please add the following line to your <code>wp-config.php</code> file. Once this line is added to your config, reload this page.' ) . "</p><p><code>define('WP_ALLOW_REPAIR', true);</code></p>";
} elseif ( isset( $_GET['repair'] ) ) {
	$optimize = 2 == $_GET['repair'];
	$okay = true;
	$problems = array();

	$tables = $wpdb->tables();

	// Sitecategories may not exist if global terms are disabled.
	$query = $wpdb->prepare( "SHOW TABLES LIKE %s", $wpdb->esc_like( $wpdb->sitecategories ) );
	if ( is_multisite() && ! $wpdb->get_var( $query ) ) {
		unset( $tables['sitecategories'] );
	}

	/**
	 * Filter additional database tables to repair.
	 *
	 * @since 3.0.0
	 *
	 * @param array $tables Array of prefixed table names to be repaired.
	 */
	$tables = array_merge( $tables, (array) apply_filters( 'tables_to_repair', array() ) );

	// Loop over the tables, checking and repairing as needed.
	foreach ( $tables as $table ) {
		$check = $wpdb->get_row( "CHECK TABLE $table" );

		echo '<p>';
		if ( 'OK' == $check->Msg_text ) {
			/* translators: %s: table name */
			printf( __( 'The %s table is okay.' ), "<code>$table</code>" );
		} else {
			/* translators: 1: table name, 2: error message, */
			printf( __( 'The %1$s table is not okay. It is reporting the following error: %2$s. WordPress will attempt to repair this table&hellip;' ) , "<code>$table</code>", "<code>$check->Msg_text</code>" );

			$repair = $wpdb->get_row( "REPAIR TABLE $table" );

			echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;';
			if ( 'OK' == $check->Msg_text ) {
				/* translators: %s: table name */
				printf( __( 'Successfully repaired the %s table.' ), "<code>$table</code>" );
			} else {
				/* translators: 1: table name, 2: error message, */
				echo sprintf( __( 'Failed to repair the %1$s table. Error: %2$s' ), "<code>$table</code>", "<code>$check->Msg_text</code>" ) . '<br />';
				$problems[$table] = $check->Msg_text;
				$okay = false;
			}
		}

		if ( $okay && $optimize ) {
			$check = $wpdb->get_row( "ANALYZE TABLE $table" );

			echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;';
			if ( 'Table is already up to date' == $check->Msg_text )  {
				/* translators: %s: table name */
				printf( __( 'The %s table is already optimized.' ), "<code>$table</code>" );
			} else {
				$check = $wpdb->get_row( "OPTIMIZE TABLE $table" );

				echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;';
				if ( 'OK' == $check->Msg_text || 'Table is already up to date' == $check->Msg_text ) {
					/* translators: %s: table name */
					printf( __( 'Successfully optimized the %s table.' ), "<code>$table</code>" );
				} else {
					/* translators: 1: table name, 2: error message, */
					printf( __( 'Failed to optimize the %1$s table. Error: %2$s' ), "<code>$table</code>", "<code>$check->Msg_text</code>" );
				}
			}
		}
		echo '</p>';
	}

	if ( $problems ) {
		printf( '<p>' . __('Some database problems could not be repaired. Please copy-and-paste the following list of errors to the <a href="%s">WordPress support forums</a> to get additional assistance.') . '</p>', __( 'https://wordpress.org/support/