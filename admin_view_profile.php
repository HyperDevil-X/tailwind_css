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
    <title>Premium Cars - Admin Profile</title>    
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
            input[type='password'] 
            {
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
    </style>
</head>
<body bgcolor="#C1C1E8">
    <div class="ahead">Admin Profile</div>
    <div class="adminprofilecontainer">
        <div class="profile-container">
            <div class="profile-body">    
                <form action="" method="post">      
                    <?php       
                        include("connection.php");        
                        $query = "SELECT  name, phno,address, email, gender, image, rusername, rpassword FROM admin"; 
                        $result = mysqli_query($conn, $query);      
                        if ($result && mysqli_num_rows($result) > 0) 
                        {            
                            $row = mysqli_fetch_assoc($result);           
                            echo "<img src='" . $row['image'] . "' alt='Admin Profile Image' class='profile-image'>";
                            echo "<input type='text' id='name' placeholder='Name' value='" . $row['name'] . "' readonly>";
                            echo "<input type='email' id='email' placeholder='Email' value='" . $row['email'] . "' readonly>";
                            echo "<input type='text' id='text' placeholder='Gender' value='" . $row['gender'] . "' readonly>";
                            echo "<input type='number' id='number' placeholder='Phone Number' value='" . $row['phno'] . "' readonly>";
                            echo "<input type='text' id='address' placeholder='Address' value='" . $row['address'] . "' readonly>";
                            echo "<input type='text' id='username' placeholder='Username' value='" . $row['rusername'] . "' readonly>";
                            echo "<input type='password' id='password' placeholder='Password' value='" . $row['rpassword'] . "' readonly>";
                        } 
                        else 
                        {   
                            echo "<input type='text' id='name' placeholder='Name' readonly>";
                            echo "<input type='email' id='email' placeholder='Email' readonly>";
                            echo "<input type='number' id='number' placeholder='Phone Number' readonly>";
                            echo "<input type='text' id='address' placeholder='Address' readonly>";
                            echo "<input type='text' id='username' placeholder='Username' readonly>";
                            echo "<input type='password' id='password' placeholder='Password' readonly>";
                            echo "<img src='image/default-profile.jpg' alt='Default Profile Image' class='profile-image'>";
                        }
                        mysqli_close($conn);
                    ?>        
                </form>
            </div>
        </div>
        
        <div class="buttons" style="margin-top:13.5%; margin-left:-18%;">
            <button class="back-btn" onclick="goBack()"><i class="fas fa-arrow-left"></i> Back</button>
            <button class="edit-btn" onclick="confirmUpdate()"><i class="fas fa-edit"></i> Edit</button>
        </div>
    </div>

    <!-- Your JavaScript code for handling button actions start -->
    <script>
        function goBack() 
        {    
            if (confirm("𝓦𝓪𝓷𝓽 𝓣𝓸 𝓔𝔁𝓲𝓽 𝓣𝓱𝓮 𝓟𝓪𝓰𝓮?")) {
                window.location.href = "admin.php";
            }
        }
        function confirmUpdate() 
        {   
            if (confirm("𝓐𝓻𝓮 𝔂𝓸𝓾 𝓼𝓾𝓻𝓮! 𝓨𝓸𝓾 𝔀𝓪𝓷𝓽 𝓽𝓸 𝓔𝓭𝓲𝓽 𝓨𝓸𝓾𝓻 𝓟𝓻𝓸𝓯𝓲𝓵𝓮?")) {
                window.location.href = "update_admin_profile.php";
            }
        }
    </script>
    <!-- Your JavaScript code for handling button actions end -->
</body>
</html>
