<?php
$img = imagecreatetruecolor(200, 100);

$bialy = imagecolorallocate($img, 255, 255, 255);
$bluenavy = imagecolorallocate($img, 0, 0, 128);
$blue = imagecolorallocate($img, 0, 0, 255);
$czerwony = imagecolorallocate($img, 255, 0, 0);
$yellow = imagecolorallocate($img, 255, 255, 0);


imagefill($img, 0, 0, $bialy);
imagefilledrectangle($img, 0, 49, 199, 99, $czerwony);
imagejpeg($img, "obraz1.jpg");
//imagedestroy($img);
//---------------
$img = imagecreatetruecolor(200, 100);

imagefill($img, 0, 0, $bluenavy);
imagefilledrectangle($img, 0, 40, 199, 60, $yellow);
imagefilledrectangle($img, 40, 0, 60, 99, $yellow);
imagejpeg($img, "obraz2.jpg");
//imagedestroy($img);
//--------------------
$img = imagecreatetruecolor(200, 100);

imagefill($img, 0, 0, $czerwony);
imagefilledrectangle($img, 0, 40, 199, 60, $bialy);
imagefilledrectangle($img, 35, 0, 65, 99, $bialy);
imagefilledrectangle($img, 0, 45, 199, 55, $blue);
imagefilledrectangle($img, 40, 0, 55, 99, $blue);
imagejpeg($img, "obraz3.jpg");
//imagedestroy($img);

//---------------------------
$img = imagecreatetruecolor(200, 100);

imagefill($img, 0, 0, $bialy);
imagefilledrectangle($img, 0, 0, 67, 199, $bluenavy);
imagefilledrectangle($img, 133, 0, 199, 99, $czerwony);
imagejpeg($img, "obraz4.jpg");
imagedestroy($img);


?>

<p><img src="obraz1.jpg"></p>
<p><img src="obraz2.jpg"></p>
<p><img src="obraz3.jpg"></p>
<p><img src="obraz4.jpg"></p>




