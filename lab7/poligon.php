<?php
$values = array(
    40, 50,  // Point 1 (x, y)
    20, 240, // Point 2 (x, y)
    60, 60,  // Point 3 (x, y)
    240, 20,  // Point 4 (x, y)
    50, 40,  // Point 5 (x, y)
    10, 10   // Point 6 (x, y)
);

$image = imagecreatetruecolor(250, 250);

$bialy_bg = imagecolorallocate($image, 255, 255, 255);
$blue = imagecolorallocate($image, 0, 0, 255);

imagefilledrectangle($image, 0, 0, 249, 249, $bialy_bg);

imagefilledpolygon($image, $values, 6, $blue);

imagejpeg($image, "obraz6.jpg");
//imagedestroy($image);
//-------------------
$image = imagecreatetruecolor(200, 200);
imagefill($image, 0, 0, $bialy_bg);
/*
$values1 = array(
    0, 100,  // Point 1 (x, y)
    50, 50, // Point 2 (x, y)
    100, 0,  // Point 3 (x, y)
    150, 50,  // Point 4 (x, y)
    200, 100,  // Point 5 (x, y)
    150, 150,  // Point 6 (x, y)
    100, 200,  // Point 7 (x, y)
    50, 150   // Point 8 (x, y)
);
*/
$values1 = array(
    0, 100,  // Point 1 (x, y)
    75, 75, // Point 2 (x, y)
    100, 0,  // Point 3 (x, y)
    125, 75,  // Point 4 (x, y)
    200, 100,  // Point 5 (x, y)
    125, 125,  // Point 6 (x, y)
    100, 200,  // Point 7 (x, y)
    75, 125   // Point 8 (x, y)
);
imagefilledpolygon($image, $values1, 8, $blue);
imagejpeg($image, "obraz7.jpg");
imagedestroy($image);
?>

<p><img src="obraz6.jpg"></p>
<p><img src="obraz7.jpg"></p>
