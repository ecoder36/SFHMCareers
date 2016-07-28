<?php
$fileName =     @$_FILES["file1"]["name"]; // The file name
$ext = pathinfo($fileName, PATHINFO_EXTENSION);
$fileTmpLoc =   @$_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType =     @$_FILES["file1"]["type"]; // The type of file it is
$fileSize =     @$_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = @$_FILES["file1"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
//$u = trim (printf("uniqid(): %s\r\n",uniqid()));
//$u = printf("uniqid(): %s\r\n",uniqid()) ;
//$uu = uniqid() ;

$uniqid = uniqid();

$file_name_new = $uniqid . '.' . $fileName  ;
if(move_uploaded_file($fileTmpLoc, "file/$file_name_new")){

    echo "$fileName upload is complete ";
    echo "</br></br>&nbsp<a  href='file/$file_name_new' target='_blank'>Link</a>&nbsp</br></br>";
    echo "<input type=\"hidden\"><a style=\"display:none\" id='p1' href='file/$file_name_new' target='_blank'>http://myeasysite.eb2a.com/file/file/$file_name_new</a></input>";


$newlink = "file/$file_name_new" ;



} else {
    echo "move_uploaded_file function failed";
}
?>
