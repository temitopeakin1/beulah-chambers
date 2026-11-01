<?php
/**
 * Favicon links. Set $favicon_base before include if page is in a subdirectory
 * (e.g. $favicon_base = '../';). Defaults to '' for root pages.
 */
if (!isset($favicon_base)) {
  $favicon_base = '';
}
?>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo htmlspecialchars($favicon_base); ?>assets/images/favicon-32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="<?php echo htmlspecialchars($favicon_base); ?>assets/images/favicon-48.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo htmlspecialchars($favicon_base); ?>assets/images/favicon-192.png">
    <link rel="shortcut icon" href="<?php echo htmlspecialchars($favicon_base); ?>assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo htmlspecialchars($favicon_base); ?>assets/images/apple-touch-icon.png">
