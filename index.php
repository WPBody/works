<?php

if ( ! defined( 'ABSPATH' ) ) {
    die;
}


require_once dirname( __FILE__ ) . '/includes/ar-settings.php';

function run() {
    $run = new ar_run();
    return $run;
}