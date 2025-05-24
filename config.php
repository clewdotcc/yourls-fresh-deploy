<?php
/*
 ** YOURLS Configuration file.
 ** https://yourls.org/
 */

// ** MySQL settings ** //
define( 'YOURLS_DB_USER', 'sql7779025' );
define( 'YOURLS_DB_PASS', 'ZqCTjHs2aQ' );
define( 'YOURLS_DB_NAME', 'sql7779025' );
define( 'YOURLS_DB_HOST', 'sql7.freesqldatabase.com' );
define( 'YOURLS_DB_PREFIX', 'yourls_' );

// ** Site options ** //
define( 'YOURLS_SITE', 'https://yourls-fresh-deploy.onrender.com' );
define( 'YOURLS_HOURS_OFFSET', 0 );
define( 'YOURLS_LANG', 'en' );
define( 'YOURLS_UNIQUE_URLS', true );
define( 'YOURLS_PRIVATE', true );

// ** User authentication ** //
$yourls_user_passwords = array(
    'admin' => 'password',
);

// ** Security keys ** //
define( 'YOURLS_COOKIEKEY', 'xkSYyNwVqfUyKA7u4vC1nmjgMJ86v3eaDd0nFd3cR8FCXPyVDzS2RamX9jhVPGkS' );

// ** Debug mode ** //
// define( 'YOURLS_DEBUG', true );

/*
 ** All done. Have fun!
 */

// ✅ FIX: Prevent fatal in_array() error
$yourls_reserved_keywords = [];  // 👈 this line must NOT start with //
// force redeploy again
// redeploy trigger: LICM_fix_002
