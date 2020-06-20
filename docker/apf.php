<?php

$constants = [
    // constant-definition start
    'WP_REDIS_SERVERS' => ['tcp://192.168.32.5:26379','tcp://192.168.32.10:26379','tcp://192.168.32.8:26379',],
    'WP_REDIS_CLIENT' => 'predis',
    'WP_REDIS_SENTINEL' => 'master',
    // constant-definition end
];

foreach ( $constants as $constant => $value ) {
    if ( ! defined( $constant ) ) {
        define( $constant, $value );
    }
}
