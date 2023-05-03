<?php
if (isset($_POST["upload"])) {
    // Validate if not empty
    if (!empty($_FILES['upload_file']["name"])) {
        $fileName = $_FILES["upload_file"]["name"];

        $isValidFile = true;

        // Validate if file already exists
        if (file_exists($fileName)) {
            echo "<span>File already exists.</span>";
            $isValidFile = false;
        }

        // Validate file extension
        $allowedFileType = array(
            'jpg',
            'jpeg',
            'png'
        );
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if (! in_array($fileExtension, $allowedFileType)) {
            echo "<span>File is not supported. Upload only <b>" . implode(", ", $allowedFileType) . "</b> files.</span>";
            $isValidFile = false;
        }

        // Validate file size
        if ($_FILES["upload_file"]["size"] > 200000) {
            echo "<span>File is too large to upload.</span>";
            $isValidFile = 0;
        }

        if ($isValidFile) {
            move_uploaded_file($_FILES["upload_file"]["tmp_name"], $fileName);
        }
    } else {
        echo "No files have been chosen.";
    }
}
?>