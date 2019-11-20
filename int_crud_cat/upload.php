<?php

if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {
if (isset($_FILES['icon']) && $_FILES['icon']['error'] === UPLOAD_ERR_OK) {
$fileTmpPath = $_FILES['icon']['tmp_name'];
$fileName = $_FILES['icon']['name'];
$fileType = $_FILES['icon']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
$allowedfileExtensions = array('jpg', 'png');
if (in_array($fileExtension, $allowedfileExtensions)) {
    $uploadFileDir = '../images/';
    $dest_path = $uploadFileDir . $newFileName;
     
    if(move_uploaded_file($fileTmpPath, $dest_path))
    {
      $message ='File is successfully uploaded.';
    }
    else
    {
      $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
    }
    echo("$message");
}
    
    }

}

?>