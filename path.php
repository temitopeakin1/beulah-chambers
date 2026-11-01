<?php

define("ROOT_PATH", realpath(dirname(__FILE__)));

// Auto-detect site base URL (works on localhost and production)
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$scriptName = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
// When a page lives in /team or /practice-areas, BASE_URL should still be site root
if (preg_match('#/(team|practice-areas|admin)(/.*)?$#', $scriptName)) {
  $scriptName = preg_replace('#/(team|practice-areas|admin)(/.*)?$#', '', $scriptName);
}
$basePath = rtrim($scriptName, '/');
if ($basePath === '' || $basePath === '.') {
  $basePath = '';
}
define('BASE_URL', $scheme . '://' . $host . $basePath);
