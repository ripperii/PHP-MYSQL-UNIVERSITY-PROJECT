<?php require_once('Connections/localhost.php'); ?>
<?php


$query = 'select ChampionsCup, Ime from titli JOIN otbori using(idTitli);';
$result = mysql_query($query);



$num_cups = mysql_num_rows($result); 

$total_cups=0;
while ($row = mysql_fetch_object ($result)){
	$total_cups +=  $row->ChampionsCup;		
}
mysql_data_seek($result, 0); 

$image = imagecreatetruecolor(300, 300);

$orange = imagecolorallocate($image, 255, 204, 0);

$green = imagecolorallocate($image, 0, 255, 0);

$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);

$gray = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);

$darkgray = imagecolorallocate($image, 0x90, 0x90, 0x90);

$navy = imagecolorallocate($image, 0x00, 0x00, 0x80);

$darknavy = imagecolorallocate($image, 0x00, 0x00, 0x50);

$red = imagecolorallocate($image, 0xFF, 0x00, 0x00);

$darkred = imagecolorallocate($image, 0x90, 0x00, 0x00);

$degree = 360/$total_cups;
$start = 0;
$end = $degree;
$icolor = 0;


putenv('GDFONTPATH=/opt/lampp/htdocs/2');
$font = 'arial.ttf';
$y = 50;		  
$width = 300;
$text_color = $white;
$title_size= 16; 
$title = 'Campions Cups Statistics';
$title_dimensions = ImageTTFBBox($title_size, 0, $font, $title);
$title_length = $title_dimensions[2] - $title_dimensions[0];
$title_height = abs($title_dimensions[7] - $title_dimensions[1]);
$title_above_line = abs($title_dimensions[7]);
$title_x = ($width-$title_length)/2;  
$title_y = ($y - $title_height)/2 + $title_above_line; 
ImageTTFText($image, $title_size, 0, $title_x, $title_y, 
	$text_color, $font, $title);  
$text_x = 10;
$text_y = 45;

while ($row = mysql_fetch_object ($result)) {
	if ($icolor == 0)
		$color = $orange;
	else if ($icolor == 1)
		$color = $green;
	else if ($icolor == 2)
		$color = $red;
	else if ($icolor == 3)
		$color = $navy;
	else if ($icolor == 4)
		$color = $white;

	ImageTTFText($image, 12, 0, $text_x, $text_y, $color, $font, $row->ChampionsCup.'/'.$total_cups);

	ImageTTFText($image, 12, 0, $text_x + 40, $text_y, $color, $font, $row->Ime);
	$num_arc = $row->ChampionsCup;		


	for($num_fills = 1; $num_fills <= $num_arc; $num_fills++){

			imagefilledarc($image, 150, 200, 200, 100, $start, $end,$color, IMG_ARC_PIE);
		$start += $degree;
		$end += $degree;

	}
	$icolor = $icolor + 1;
	$text_y += 20;

}	

//header('Content-type: image/png');
imagepng($image);
imagedestroy($image);

?>