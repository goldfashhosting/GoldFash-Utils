<?php
/*
 *    Updates Plugin
 */
function my_github_plugin_updater() {

    if ( ! function_exists( 'github_plugin_updater_register' ) )
        return false;

    github_plugin_updater_register( array(
        'owner'    => 'goldfashhosting',
        'repo'    => 'GoldFash-Dash',
        'slug'    => 'GoldFash-Dash/GoldFash-Dash.php', // defaults to the repo value ('repo/repo.php')
    ) );
}
add_action( 'plugins_loaded', 'my_github_plugin_updater' );
/*
 *    News
 */
function rw_cryptx_arse_request( $wp ) {
    if ( isset($_GET['cryptx']) ) {
        switch( $_GET['cryptx'] ) {
            case 'news':
                include( 'ajax/news.php' );
                break;
        }
        exit;
    }
}
