<?php 

//set content type so that image will be rendered in the browser
header ("Content-type: image/png");

//create new 300x300 image
$myImage = ImageCreate(300,300);

//the first color allocated is the background color
$black = ImageColorAllocate($myImage, 0, 0, 0);
$white = ImageColorAllocate($myImage, 255, 255, 255);
$red = ImageColorAllocate($myImage, 255, 0, 0);
$blue = ImageColorAllocate($myImage, 0, 0, 255);
$green = ImageColorAllocate($myImage, 0, 255, 0);

//draw and fill pie
//ImageRectangle($myImage, 100, 100, 140, 130, $white);
ImageFilledArc($myImage, 110, 110, 200, 150, 0, 90, $red, IMG_ARC_PIE);
ImageFilledArc($myImage, 100, 100, 200, 150, 90, 180, $green, IMG_ARC_PIE);
ImageFilledArc($myImage, 100, 100, 200, 150, 180, 360, $blue, IMG_ARC_PIE);

//send the bytes of the image
ImagePng($myImage);

//free the memory for the image, clean up after youself
ImageDestroy($myImage);

?>