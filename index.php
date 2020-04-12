<html>
<title>Random Musher</title>
<head>
<style>
	img {
	height: 50%;
	width: 50%;
	object-fit: contain;
	}


</style>
</head>
<body>
<div style='width:1000; margin:0 auto;'>
<?php

$imagesDir = 'img/';

$images = glob($imagesDir . '*.{jpg}', GLOB_BRACE);

$randomImage1 = $images[array_rand($images)];
$randomImage2 = $images[array_rand($images)];
$randomImage3 = $images[array_rand($images)];
$randomImage4 = $images[array_rand($images)];
/*
print("<table width = 100%><tr>");
print("<td><img src=$randomImage1 /></td>");
print("<td><img src=$randomImage2 /></td>");
print("<td><img src=$randomImage3 /></td>");
print("<td><img src=$randomImage4 /></td>");
print("</tr></table>");
*/
print("<img src=$randomImage1 />");
print("<img src=$randomImage2 />");
//print("<img src=$randomImage3 />");
?>
</div>
<div style='text-align: center;'>
<button onclick="location.reload();" style='font-size: 100; text-align: center; width: 50%; height: 20%' autofocus>Reload</button>
</div>
</body>
