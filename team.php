<?php
/**
 * Back-compat: /team.php and rewrites that hit this file
 * should show the listing that now lives at team/index.php
 */
include __DIR__ . '/path.php';
header('Location: ' . BASE_URL . '/team/', true, 301);
exit;
