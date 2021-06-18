<html>
<body>
<h3>Image File Upload Stats: </h3>

<?php
if($_FILES[ "file" ] [ "error"]){
header("Location: file.html");
die( ) ;}
$allowed = array( "gif");
$splitFileName = explode ( ".",$_POST[ "name"] ) ; 
$fileExtension = end($splitFileName) ;
$imageDetails = getimagesize($_FILES["file"] [ "tmp_name"]);
if(($imageDetails == FALSE ) || !in_array($fileExtension,$allowed))
    echo "Please upload a GIF file" ;
else{
    move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$_POST[ "name"]);
    print("File has been seccessfully uploaded");
    }
?>

</body>
</html>
