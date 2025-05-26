<?php
/*
Plugin Name: Plugin Name: IP Click Tracker
Plugin URI: https://clew.cc
Description: Logs each click's IP, referrer, keyword, and user agent.
Version: 1.0
Author: C
*/

yourls_add_action('pre_redirect', 'yourls_ip_logger');

function yourls_ip_logger($args) {
    $ip      = $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN';
    $ref     = $_SERVER['HTTP_REFERER'] ?? 'NO_REFERRER';
    $agent   = $_SERVER['HTTP_USER_AGENT'] ?? 'NO_AGENT';
    $keyword = $args[0]; // shortlink keyword
    $time    = date('Y-m-d H:i:s');

    $log_entry = "[$time] keyword: $keyword | IP: $ip | Referrer: $ref | Agent: $agent" . PHP_EOL;

    $log_file = dirname(__FILE__) . '/clicks.log';
    file_put_contents($log_file, $log_entry, FILE_APPEND);
}
