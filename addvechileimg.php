<?php
// Include the connection file
include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $Slno = $_POST['Slno'];

    // File upload
    $target_dir = "../tailwind_css/uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "𝓕𝓲𝓵𝓮 𝓲𝓼 𝓷𝓸𝓽 𝓪𝓷 𝓲𝓶𝓪𝓰𝓮.";
            $uploadOk = 0;
            exit(); // Terminate script execution after displaying the message
        }
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) { //Image should not be greater in 500kb in size
        echo "𝓢𝓸𝓻𝓻𝔂! 𝓨𝓸𝓾𝓻 𝓘𝓶𝓪𝓰𝓮 𝓘𝓼 𝓣𝓸𝓸 𝓛𝓪𝓻𝓰𝓮.";
        $uploadOk = 0;
        exit(); // Terminate script execution after displaying the message
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "𝓢𝓸𝓻𝓻𝔂! 𝓸𝓷𝓵𝔂 𝓙𝓟𝓖, 𝓙𝓟𝓔𝓖, 𝓟𝓝𝓖 & 𝓖𝓘𝓕 𝓘𝓶𝓪𝓰𝓮 𝓪𝓻𝓮 𝓪𝓵𝓵𝓸𝔀𝓮𝓭.";
        $uploadOk = 0;
        exit(); // Terminate script execution after displaying the message
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "𝓢𝓸𝓻𝓻𝔂, 𝓘𝓶𝓪𝓰𝓮  𝓦𝓪𝓼 𝓝𝓸𝓽 𝓤𝓹𝓵𝓸𝓪𝓭𝓮𝓭.";
        exit(); // Terminate script execution after displaying the message
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            
            // Insert into database
            $sql = "UPDATE addvehicle SET image = '$target_file' WHERE Slno = $Slno";

            if ($conn->query($sql) === TRUE) {
                echo "𝓘𝓶𝓪𝓰𝓮 𝓐𝓭𝓭𝓮𝓭 𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵𝔂";
            } else {
                echo "𝓘𝓶𝓪𝓰𝓮 𝓝𝓸𝓽 𝓐𝓭𝓭𝓮𝓭! 𝓟𝓵𝓮𝓪𝓼𝓮 𝓣𝓻𝔂 𝓐𝓰𝓪𝓲𝓷." . $conn->error;
            }
        } else {
            echo "𝓢𝓸𝓻𝓻𝔂, 𝓣𝓱𝓮𝓻𝓮 𝓦𝓪𝓼 𝓐𝓷 𝓔𝓻𝓻𝓸𝓻 𝓤𝓹𝓵𝓸𝓪𝓭𝓲𝓷𝓰 𝓨𝓸𝓾𝓻 𝓘𝓶𝓪𝓰𝓮.";
        }
    }

    $conn->close();
}
?>
