<?php

$original_w = 15070;
$original_h = 10030;
$original_x = 0;
$original_y = 0;

$final_w = 263;
$final_h = 175;
$final_x = 7730;
$final_y = 4898;

$iterations = 161;

for ($i = 0 ; $i <= $iterations  ; $i++) {

	$w = round($original_w - (($original_w - $final_w) * sqrt(log(($i / $iterations)  + 1, 2))));
	$h = round($original_h - (($original_h - $final_h) * sqrt(log(($i / $iterations) + 1, 2))));
	$x = round(($final_x - $original_x) * sqrt(log(($i / $iterations) + 1, 2)));
	$y = round(($final_y - $original_y) * sqrt(log(($i / $iterations) + 1, 2)));

	printf("convert frames/rotate_%06d.jpg -crop ". $w.'x'.$h.'+'.$x.'+'.$y." -resize 1920x1278 frames_zoom/image_%06d.jpg\n", $i, $i);
}
