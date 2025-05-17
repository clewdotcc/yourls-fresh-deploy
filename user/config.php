<?php
define( 'YOURLS_DB_USER', getenv('DB_USER') ?: 'yourls_user' );
define( 'YOURLS_DB_PASS', getenv('DB_PASS') ?: 'yourls_pass' );
define( 'YOURLS_DB_NAME', getenv('DB_NAME') ?: 'yourls_db' );
define( 'YOURLS_DB_HOST', getenv('DB_HOST') ?: 'localhost' );
define( 'YOURLS_SITE', getenv('YOURLS_SITE_URL') ?: 'http://localhost' );
define( 'YOURLS_HOURS_OFFSET', 0 );
define( 'YOURLS_LANG', '' );
define( 'YOURLS_UNIQUE_URLS', true );
define( 'YOURLS_PRIVATE', true );
define( 'YOURLS_COOKIEKEY', getenv('YOURLS_COOKIEKEY') ?: 'something-random' );

$yourls_user_passwords = [
    getenv('YOURLS_ADMIN_USER') ?: 'admin' => getenv('YOURLS_ADMIN_PASS') ?: 'password',
];

