<?php
/*
 ** YOURLS Configuration file.
 ** See https://yourls.org/config for full options.
 */

// --- DATABASE SETTINGS ---
define( 'YOURLS_DB_USER', getenv('DB_USER') ?: 'yourls_user' );
define( 'YOURLS_DB_PASS', getenv('DB_PASS') ?: 'yourls_pass' );
define( 'YOURLS_DB_NAME', getenv('DB_NAME') ?: 'yourls_db' );
define( 'YOURLS_DB_HOST', getenv('DB_HOST') ?: 'localhost' );
define( 'YOURLS_DB_PREFIX', getenv('DB_PREFIX') ?: 'yourls_' );

// --- SITE OPTIONS ---
define( 'YOURLS_SITE', getenv('YOURLS_SITE_URL') ?: 'https://your-custom-url.com' );
define( 'YOURLS_HOURS_OFFSET', getenv('YOURLS_HOURS_OFFSET') ?: 0 );
define( 'YOURLS_LANG', getenv('YOURLS_LANG') ?: '' );
define( 'YOURLS_UNIQUE_URLS', (getenv('YOURLS_UNIQUE_URLS') === 'false' ? false : true) );
define( 'YOURLS_PRIVATE', (getenv('YOURLS_PRIVATE') === 'false' ? false : true) );
define( 'YOURLS_COOKIEKEY', getenv('YOURLS_COOKIEKEY') ?: 'change_this_to_a_random_secure_key' );

// --- USERS ---
$yourls_user_passwords = [
    getenv('YOURLS_ADMIN_USER') ?: 'admin' => getenv('YOURLS_ADMIN_PASS') ?: 'password',
];

// Fallback warning
if (empty($yourls_user_passwords)) {
    die('No YOURLS_ADMIN_USER or YOURLS_ADMIN_PASS defined!');
}

