<html>
<head>
    <meta charset=utf-8"/>
    <title>Upload</title>
</head>
<body>

<div>
    <form enctype="multipart/form-data" action="" method="POST">
        <input name="plik" type="file"/>
        <input name="procent"/>
        <input type="submit" value="Wyslij plik"/>
    </form>
</div>

<?php
$plik_tmp = $_FILES['plik']['tmp_name'];
$plik_nazwa = $_FILES['plik']['name'];
$plik_rozmiar = $_FILES['plik']['size'];
$proc = $_POST['procent'];

if (is_uploaded_file($plik_tmp)) {
    move_uploaded_file($plik_tmp, "upload/$plik_nazwa");
    echo "Plik: <strong>$plik_nazwa</strong> o rozmiarze 
    <strong>$plik_rozmiar bajtow</strong> zostal przeslany na serwer!";
}

$img_src = imagecreatefromjpeg("upload/$plik_nazwa");

$w_src = imagesx($img_src);
$h_src = imagesy($img_src);

$w_dest = $w_src * $proc / 100;
$h_dest = $h_src * $proc / 100;

$img_dest = imagecreatetruecolor($w_dest, $h_dest);

imagecopyresampled($img_dest, $img_src, 0, 0, 0, 0, $w_dest, $h_dest, $w_src, $h_src);

imagejpeg($img_dest, "obr5.jpg");

imagedestroy($img_src);
imagedestroy($img_src);

?>

<p><img src="obr5.jpg"></p>
</body>
</html>