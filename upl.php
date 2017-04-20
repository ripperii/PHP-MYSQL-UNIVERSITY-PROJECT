<?php include("includes/header.php");?>


<h1>Uploading file...</h1>
<?php
$upload_dir="albums/new/";
$size_bytes=1048576;
$allowed_file_type=array('image/gif','image/png','image/jpg','image/jpeg','image/pjpeg');

if(!is_dir($upload_dir)) die("Директория <strong>($upload_dir)</strong> не е достъпна!");
if(is_uploaded_file($_FILES['userfile']['tmp_name'])) 
{
$error = $_FILES['userfile']['error'];
if ($error > 0)
{
echo("<h3>Проблем: </h3>");   //Подадения като параметър низ се извежда в браузъра
switch ($error)
{
case 1:  echo 'File exceeded upload_max_filesize';  break;
case 2:  echo 'File exceeded max_file_size';  break;
case 3:  echo 'File only partially uploaded';  break;
case 4:  echo 'No file uploaded';  break;
}
exit();
}

$name=$_FILES['userfile']['name'];
echo("<h2>NAME: ".$name."</h2>");   // извежда стойността като Низ от променлива и се разделя с точка
$size=$_FILES['userfile']['size'];
echo("<h2>SIZE: ".$size."</h2>");
$type=$_FILES['userfile']['type'];
echo("<h2>TYPE: ".$type."</h2>");

if($size > $size_bytes){
echo("<h3>Файлът е твърде голям!</h3>");
exit();
}

if(!in_array($type,$allowed_file_type)){
echo("<h3>Нямате право да качвате такъв тип файлове</h3>");
exit();
}

if(file_exists($upload_dir.$name)){
echo("<h3>Файл с такова име вече съществува!</h3>");
exit();
}

if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_dir.$name)){
echo("Файла (<a href=\"$upload_dir$name\">".$name."</a>) е качен успешно!");
}
else {
echo("<h3>Има проблем с качването на файла!</h3>");
exit();
}

}
?>
<?php include("includes/footer.php");?>