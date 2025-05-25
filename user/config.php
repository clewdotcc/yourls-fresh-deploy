// FORCE_REDEPLOY_TRIGGER: LICM_999

<?php
/*
 ** YOURLS Configuration file.
 ** https://yourls.org/
 */

error_log("DEBUG CONFIG.PHP (Line " . __LINE__ . "): START of config.php execution."); // <<< ADDED

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
    'admin' => 'password', // For security, you'll want to change 'password' to something strong
);

// ** Security keys ** //
// IMPORTANT: YOURLS_COOKIEKEY needs to be a unique, random string.
// You can generate one here: https://api.yourls.org/services/cookiekey/1.0/
define( 'YOURLS_COOKIEKEY', 'xkSYyNwVqfUyKA7u4vC1nmjgMJ86v3eaDd0nFd3cR8FCXPyVDzS2RamX9jhVPGkS' ); // Ensure this is your unique key

// --- DEBUG LINE TO VERIFY THIS CONFIG FILE IS BEING EXECUTED ---
// This line is fine to keep, or remove if you prefer, as the new logs are more specific
error_log("DEBUG YOURLS: user/config.php is being parsed by PHP. Timestamp: " . date("Y-m-d H:i:s") . ". About to define reserved_keywords.");
// --- END DEBUG LINE ---

// ✅ FIX: Prevent fatal in_array() error
$yourls_reserved_keywords = [];

error_log("DEBUG CONFIG.PHP (Line " . __LINE__ . "): \$yourls_reserved_keywords DEFINED. Value: " . print_r($yourls_reserved_keywords, true) . ". Type: " . gettype($yourls_reserved_keywords)); // <<< ADDED

// FORCE_REDEPLOY_TRIGGER: LICM_989

error_log("DEBUG CONFIG.PHP (Line " . __LINE__ . "): END of config.php execution."); // <<< ADDED

/*
 * If you want a closing PHP tag, you can add it:
 * ?>
 * But it's not strictly necessary if this is the last thing in the file.
 * For consistency with added logs, let's ensure there's a closing tag if we add one at the start.
 */
?>