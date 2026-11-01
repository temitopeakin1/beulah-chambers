<?php
/**
 * Favicon matching the site preloader: bronze balance-scale on white
 * (same look as Font Awesome fa-balance-scale in #preloader).
 */
$outDir = dirname(__DIR__) . '/assets/images';
$sizes = [16, 32, 48, 180, 192];

foreach ($sizes as $s) {
  $im = imagecreatetruecolor($s, $s);
  imageantialias($im, true);

  // White background (like preloader)
  $bg = imagecolorallocate($im, 255, 255, 255);
  imagefilledrectangle($im, 0, 0, $s - 1, $s - 1, $bg);

  // Preloader circle border: rgb(41, 51, 55)
  $circle = imagecolorallocate($im, 41, 51, 55);
  // Preloader icon color: rgb(154, 111, 45)
  $bronze = imagecolorallocate($im, 154, 111, 45);
  $bronzeLight = imagecolorallocate($im, 180, 135, 60);

  $margin = (int) max(1, $s * 0.06);
  $cx = (int) ($s / 2);
  $cy = (int) ($s / 2);
  $radius = (int) (($s / 2) - $margin);

  // Outer ring (like .circle on preloader)
  $ring = max(2, (int) ($s * 0.06));
  for ($i = 0; $i < $ring; $i++) {
    imageellipse($im, $cx, $cy, ($radius - $i) * 2, ($radius - $i) * 2, $circle);
  }

  // Draw scales inside the circle (padded)
  $pad = (int) ($s * 0.22);
  $top = $pad;
  $bot = $s - $pad;
  $stemW = max(2, (int) ($s * 0.10));

  // Stem
  imagefilledrectangle($im, $cx - (int) ($stemW / 2), $top + (int) ($s * 0.06), $cx + (int) ($stemW / 2), $bot - (int) ($s * 0.08), $bronze);

  // Beam
  $barY = $top + (int) ($s * 0.12);
  $barHalf = (int) ($s * 0.22);
  $barH = max(2, (int) ($s * 0.08));
  imagefilledrectangle($im, $cx - $barHalf, $barY, $cx + $barHalf, $barY + $barH, $bronze);

  // Pivot
  $pr = max(2, (int) ($s * 0.09));
  imagefilledellipse($im, $cx, $barY + (int) ($barH / 2), $pr * 2, $pr * 2, $bronzeLight);

  // Chains + pans
  $panY = $barY + (int) ($s * 0.26);
  $panR = max(3, (int) ($s * 0.12));
  $leftX = $cx - $barHalf + (int) ($s * 0.04);
  $rightX = $cx + $barHalf - (int) ($s * 0.04);
  $chainW = max(2, (int) ($s * 0.05));
  imagefilledrectangle($im, $leftX - (int) ($chainW / 2), $barY + $barH, $leftX + (int) ($chainW / 2), $panY, $bronze);
  imagefilledrectangle($im, $rightX - (int) ($chainW / 2), $barY + $barH, $rightX + (int) ($chainW / 2), $panY, $bronze);
  imagefilledarc($im, $leftX, $panY, $panR * 2, (int) ($panR * 1.5), 0, 180, $bronze, IMG_ARC_PIE);
  imagefilledarc($im, $rightX, $panY, $panR * 2, (int) ($panR * 1.5), 0, 180, $bronze, IMG_ARC_PIE);

  // Base
  $baseW = (int) ($s * 0.28);
  $baseH = max(2, (int) ($s * 0.08));
  imagefilledrectangle($im, $cx - (int) ($baseW / 2), $bot - $baseH, $cx + (int) ($baseW / 2), $bot, $bronze);

  $file = $outDir . '/favicon-' . $s . '.png';
  imagepng($im, $file);
  imagedestroy($im);
  echo "Wrote $file\n";
}

copy($outDir . '/favicon-32.png', $outDir . '/favicon.png');
copy($outDir . '/favicon-180.png', $outDir . '/apple-touch-icon.png');
echo "Wrote favicon.png and apple-touch-icon.png\n";

function pngToIco(array $pngFiles, string $icoPath): void
{
  $images = [];
  foreach ($pngFiles as $png) {
    $data = file_get_contents($png);
    $info = getimagesize($png);
    $images[] = [
      'w' => $info[0] >= 256 ? 0 : $info[0],
      'h' => $info[1] >= 256 ? 0 : $info[1],
      'data' => $data,
      'size' => strlen($data),
    ];
  }

  $count = count($images);
  $offset = 6 + ($count * 16);
  $ico = pack('vvv', 0, 1, $count);

  foreach ($images as $img) {
    $ico .= pack('CCCCvvVV', $img['w'], $img['h'], 0, 0, 1, 32, $img['size'], $offset);
    $offset += $img['size'];
  }
  foreach ($images as $img) {
    $ico .= $img['data'];
  }

  file_put_contents($icoPath, $ico);
  echo "Wrote $icoPath\n";
}

pngToIco([
  $outDir . '/favicon-32.png',
  $outDir . '/favicon-48.png',
], $outDir . '/favicon.ico');

echo "Done.\n";
