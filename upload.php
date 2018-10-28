<?php
/** Date: 16.10.2018 Time: 13:04 */
include 'header.php';
?>


<?php


$targetFile = 'uploads/' . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
    //file was successfully uploaded
    header("Location: http://localhost:63342/facebattle");
}



?>