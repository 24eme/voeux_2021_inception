<?php

$original_w = 10010;
$original_h = 6655;
$original_x = 0;
$original_y = 0;

$final_w = 960;
$final_h = 640;
$final_x = 4746;
$final_y = 3129;

$iterations = 61;

for ($i = 0 ; $i <= $iterations  ; $i++) {

	$w = round($original_w - (($original_w - $final_w) * log(($i / $iterations) + 1, 2)));
	$h = round($original_h - (($original_h - $final_h) * log(($i / $iterations) + 1, 2)));
	$x = round(($final_x - $original_x) * log(($i / $iterations) + 1, 2));
	$y = round(($final_y - $original_y) * log(($i / $iterations) + 1, 2));

	$img = $i + 100;
	printf("convert frames_bis_crop/rotate_%06d.jpg -crop ". $w.'x'.$h.'+'.$x.'+'.$y." -resize 1920x1278 frames_zoom_zoom/image_%06d.jpg\n", $img, $img);
}
