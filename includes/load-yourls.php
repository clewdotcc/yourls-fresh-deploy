<?php
/* Bootstrap YOURLS
 *
 * This file initialize everything needed for YOURLS
 * If you need to bootstrap YOURLS (ie access its functions and features) simply include this file.
 */

require __DIR__ . '/vendor/autoload.php';

// Set up YOURLS config

$config = new \YOURLS\Config\Config;
/* The following require has to be at global level so the variables inside config.php, including user defined if any,
 * are registered in the global scope. If this require is moved in \YOURLS\Config\Config, $yourls_user_passwords for
 * instance isn't registered.
 */
if (!defined('YOURLS_CONFIGFILE')) {
    define('YOURLS_CONFIGFILE', $config->find_config());
}
require_once YOURLS_CONFIGFILE;

// --- OUR DEBUG LOG AFTER CONFIG LOAD ---
error_log("DEBUG LOAD-YOURLS.PHP (Line " . __LINE__ . "): AFTER including user/config.php (YOURLS_CONFIGFILE). Checking \$yourls_reserved_keywords. Value: " . (isset($yourls_reserved_keywords) ? print_r($yourls_reserved_keywords, true) : 'NOT SET') . ". Type: " . (isset($yourls_reserved_keywords) ? gettype($yourls_reserved_keywords) : 'N/A'));
// --- END DEBUG LOG ---

$config->define_core_constants();

// Initialize YOURLS with default behaviors

$init_defaults = new \YOURLS\Config\InitDefaults;

// --- OUR DEBUG LOG BEFORE YOURLS\Config\Init ---
error_log("DEBUG LOAD-YOURLS.PHP (Line " . __LINE__ . "): BEFORE new \\YOURLS\\Config\\Init. Checking \$yourls_reserved_keywords. Value: " . (isset($yourls_reserved_keywords) ? print_r($yourls_reserved_keywords, true) : 'NOT SET') . ". Type: " . (isset($yourls_reserved_keywords) ? gettype($yourls_reserved_keywords) : 'N/A'));
// --- END DEBUG LOG ---

new \YOURLS\Config\Init($init_defaults);