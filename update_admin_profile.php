<?php
session_start();
if(!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true){
    header("Location: adminlogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Admin Profile</title>    
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adminstyle.css">    
    <link rel="icon" href="icon/caricon1.png">
    <style>
        input[type='text'],
        input[type='email'],
        input[type='number'],
        input[type='password'] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 15px;
            font-weight: 600;
            font-family: 'Times New Roman', Times, serif;
            letter-spacing: 2px;
            text-shadow: 5px 5px 10px black;
        }

        .upload-container {
            display: flex;
            align-items: center;
            margin-bottom: 2%;
        }
        .upload-btn {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
        }
        .upload-btn:hover{
            background-color: #5670C2;
            color: #fff;
            box-shadow: 0px 0px 10px black;
            transition: all .5s ease;
        }

        input[readonly] {
            background-color: #f5f5f5;
            cursor: not-allowed;
        }

        .update-btn {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: dodgerblue;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            margin-bottom: 10px; 
        }

        .update-btn:hover {
            background-color: #5670C2;
            color: #fff;
            box-shadow: 0px 0px 10px black;
            transition: all .5s ease;
        }

        .image-name {
            font-size: 14px;
            margin-left: 10px;
            color: #333;
        }

        .button-group {
            position: absolute;
            bottom: 5%;
            right: 49%; 
            height: 5%;
            display: flex;
        }

        .btn {
            font-size: 15.5px;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 600;
            padding: 10px 20px;
            margin-left: 15px; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-update {
            background-color: #007bff;
            color: #000;
        }
        .btn-update:hover{
            background-color: #5670C2;
            color: #fff;
            box-shadow: 0px 0px 10px black;
            transition: all .5s ease;
        }

        .btn-back {
            background-color: #28a745;
            color: #000;
        }
        .btn-back:hover{
            background-color: #389012;
            color: #fff;
            box-shadow: 0px 0px 10px black;
            transition: all .5s ease;
        }
        .btn-cancel {
            background-color: #dc3545;
            color: #000;
        }
        .btn-cancel:hover{
            background-color:#CA0808;
            color: #fff;
            box-shadow: 0px 0px 10px black;
            transition: all .5s ease;
        }
    </style>
</head>
<body bgcolor="#C1C1E8">
    <div class="ahead" style="margin-left:38%;">Update Admin Profile</div>
    <div class="adminprofilecontainer">
        <div class="profile-container">
            <div class="profile-body">    
                <form id="updateForm" action="admin_view_profile.php" method="post" enctype="multipart/form-data">      
                    <?php       
                        include("connection.php");        
                        $query = "SELECT  name, phno, address, email, gender, image, rusername, rpassword FROM admin"; 
                        $result = mysqli_query($conn, $query);      
                        if ($result && mysqli_num_rows($result) > 0) 
                        {            
                            $row = mysqli_fetch_assoc($result);           
                            echo "<img src='" . $row['image'] . "' alt='Admin Profile Image' class='profile-image'><br>";
                            echo "<div class='upload-container'>";
                            echo "<label for='new-image' class='upload-btn'>Upload New Image</label>";
                            echo "<input type='file' id='new-image' name='new-image' style='display: none;' accept='image/*' onchange='displayImageName(this)'>";
                            echo "<span id='image-name' class='image-name'></span>";
                            echo "</div>";
                            echo "<input type='text' id='name' name='name' placeholder='Name' value='" . $row['name'] . "'><br>";
                            echo "<input type='email' id='email' name='email' placeholder='Email' value='" . $row['email'] . "'><br>";
                            echo "<input type='text' id='gender' name='gender' placeholder='Gender' value='" . $row['gender'] . "'><br>";
                            echo "<input type='number' id='phno' name='phno' placeholder='Phone Number' value='" . $row['phno'] . "'><br>";
                            echo "<input type='text' id='address' name='address' placeholder='Address' value='" . $row['address'] . "'><br>";
                            echo "<input type='text' id='username' name='username' placeholder='Username' value='" . $row['rusername'] . "' readonly><br>";
                            echo "<input type='password' id='password' name='password' placeholder='Password' value='" . $row['rpassword'] . "' readonly><br>";
                        } 
                        if ($_SERVER["REQUEST_METHOD"] == "POST") 
                        {
                            $name = $_POST["name"];
                            $email = $_POST["email"];
                            $gender = $_POST["gender"];
                            $phno = $_POST["phno"];
                            $address = $_POST["address"];
                            $update_query = "UPDATE admin SET name='$name', email='$email', gender='$gender', phno='$phno', address='$address'";
                            
                            if (!empty($_FILES["new-image"]["name"])) 
                            {
                                $image = "image/" . basename($_FILES["new-image"]["name"]);
                                $update_query .= ", image='$image'";
                            }
                        
                            if (mysqli_query($conn, $update_query)) 
                            {
                                header("Location: admin_view_profile.php");
                                exit();
                            } 
                            else 
                            {
                                echo "Error updating record: " . mysqli_error($conn);
                            }
                        }
                        
                        mysqli_close($conn);
                    ?>        
                </form>
            </div>
        </div>
    </div>

    <!-- Buttons -->
    <div class="button-group">
        <button class="btn btn-update" onclick="confirmUpdate()"><i class="fas fa-save"></i> Update</button>
        <button class="btn btn-cancel" onclick="cancelUpdate()"><i class="fas fa-times"></i> Cancel Update</button>
        <button class="btn btn-back" onclick="exitPage()"><i class="fas fa-arrow-left"></i> Exit</button>
    </div>

    <!-- Your JavaScript code for handling button actions start -->
    <script>
       function confirmUpdate() 
       {
            var result = confirm("𝓐𝓻𝓮 𝓨𝓸𝓾 𝓢𝓾𝓻𝓮 ! 𝓨𝓸𝓾 𝓦𝓪𝓷𝓽 𝓣𝓸 𝓤𝓹𝓭𝓪𝓽𝓮?");
            if (result) 
            {
                updateProfile();
            }
        }

        function updateProfile() 
        {
            var form = document.getElementById("updateForm");
            var formData = new FormData(form);
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() 
            {
                if (xhr.readyState === XMLHttpRequest.DONE) 
                {
                    if (xhr.status === 200) 
                    {
                        alert("𝓤𝓹𝓭𝓪𝓽𝓮 𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵𝔂");
                        window.location.href = "admin_view_profile.php";
                    } 
                    else 
                    {
                        alert("𝓢𝓸𝓶𝓮𝓽𝓱𝓲𝓷𝓰 𝓦𝓮𝓷𝓽 𝓦𝓻𝓸𝓷𝓰! 𝓟𝓵𝓮𝓪𝓼𝓮 𝓒𝓱𝓮𝓬𝓴 𝓲𝓽");
                    }
                }
            };
            xhr.open("POST", "update_admin_profile.php", true);
            xhr.send(formData);
        }

        function cancelUpdate() 
        {
            var result = confirm("𝓐𝓻𝓮 𝓨𝓸𝓾 𝓢𝓾𝓻𝓮! 𝓨𝓸𝓾 𝓦𝓪𝓷𝓽 𝓣𝓸 𝓒𝓪𝓷𝓬𝓮𝓵 𝓣𝓱𝓮 𝓤𝓹𝓭𝓪𝓽𝓮?");
            if (result) 
            {
                window.location.href = "update_admin_profile.php";
            }
        }

        function exitPage() 
        {
            var result = confirm("𝓓𝓸 𝓨𝓸𝓾 𝓦𝓪𝓷𝓽 𝓣𝓸 𝓔𝔁𝓲𝓽 𝓣𝓱𝓮 𝓟𝓪𝓰𝓮?");
            if (result) 
            {
                window.location.href = "admin.php";
            }
        }

        function displayImageName(input) 
        {
            if (input.files && input.files[0]) 
            {
                var reader = new FileReader();
                reader.onload = function (e) 
                {
                    document.getElementById('image-name').textContent = input.files[0].name;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <!-- Your JavaScript code for handling button actions end -->
</body>
</html>
