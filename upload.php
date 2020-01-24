<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Your file is successfully upload " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "sorry,only 1mb file are allowed to upload.";
        $uploadOk = 0;
    }
}
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, the upload file is morethan 1mb......the file is not allowed";
    $uploadOk = 0;
}

    function formatSizeUnits($bytes)
    {
        if ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1033414, 1) . ' MB';
        }
       
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
}
?>
