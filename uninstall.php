<?php
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) exit;

delete_option( 'pgma_gateway_limits' );
delete_option( 'pgma_gateway_rules' );
delete_option( 'pgma_settings' );
