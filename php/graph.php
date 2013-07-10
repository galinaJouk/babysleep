<?php 

//set content type so that image will be rendered in the browser
header ("Content-type: image/png");

//create new 300x300 image
$myImage = ImageCreate(300,200);

//the first color allocated is the background color
$white = ImageColorAllocate($myImage, 255, 255, 255);
$red = ImageColorAllocate($myImage, 255, 0, 0);
$green = ImageColorAllocate($myImage, 0, 255, 0);


//draw a green rectangal around the edge of the screen
ImageRectangle($myImage, 0, 0, 299, 199, $green);

//start drawing line of graph
Imageline($myImage, 10, 40, 50, 10, $green);
Imageline($myImage, 50, 10, 90, 60, $green);
Imageline($myImage, 90, 60, 130, 30, $green);
Imageline($myImage, 130, 30, 170, 70, $green);
Imageline($myImage, 170, 70, 210, 40, $green);
Imageline($myImage, 210, 40, 250, 50, $green);

//send the bytes of the image
ImagePng($myImage);

//free the memory for the image, clean up after youself
ImageDestroy($myImage);

?>