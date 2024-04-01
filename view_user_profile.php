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
        .search-container 
        {
            margin-bottom: 20px;
            height: 100px;
        }
        .search-container input[type='text'] 
        {
            width: 100%;
            box-shadow: 0px 0px 10px black;
        }
        .search-container button 
        {
            width: 29%;
            height: 56px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #000;
            font-size: 20px;
            font-weight: 600;
            font-variant: small-caps;
            cursor: pointer;
        }
        .search-container button:hover 
        {
            background-color: #5670C2;
            color: #fff;
            box-shadow: 0px 0px 10px black;
            transition: all .5s ease;
        }
        
        
    </style>
</head>
<body bgcolor="#C1C1E8">
    
    <div class="adminprofilecontainer">
        <div class="profile-container">
            <div class="ahead" style="margin-top:-5%; margin-left:14%">User Profile</div>
            <!-- Search box -->
            <div class="search-container">
                <form action="" method="post">
                    <input type="text" id="searchInput" name="slno" placeholder="Enter Slno"><br>
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i>Search</button>
                </form>
            </div>
            <div class="profile-body">    
                <form id="slnoForm" action="" method="post">      
                    <?php       
                                include("connection.php");

                                if(isset($_POST['slno']) && !empty($_POST['slno'])) 
                                {
                                    $slno = $_POST['slno'];
                                    $query = "SELECT rusername, remail, rpassword, cpassword FROM register WHERE Slno = '$slno'"; 
                                    $result = mysqli_query($conn, $query);      
                                    if ($result && mysqli_num_rows($result) > 0) 
                                    {            
                                        $row = mysqli_fetch_assoc($result);           
                                        echo "<input type='text' id='name' name='rusername' placeholder='Name' value='" . $row['rusername'] . "' readonly>";
                                        echo "<input type='email' id='email' name='remail' placeholder='Email' value='" . $row['remail'] . "' readonly>";
                                        echo "<input type='password' id='password' name='rpassword' placeholder='Password' value='" . $row['rpassword'] . "' readonly>";
                                        echo "<input type='password' id='confirmPassword' name='cpassword' placeholder='Confirm Password' value='" . $row['cpassword'] . "' readonly>";
                                        echo "<input type='hidden' name='slno' value='" . $slno . "'>";
                                    } else 
                                    {   
                                        echo "No user found with the provided Slno.";
                                    }
                                }   
                                 else 
                                {
                                    echo "<input type='text' id='name' name='rusername' placeholder='Name' readonly>";
                                    echo "<input type='email' id='email' name='remail' placeholder='Email' readonly>";
                                    echo "<input type='password' id='password' name='rpassword' placeholder='Password' readonly>";
                                    echo "<input type='password' id='confirmPassword' name='cpassword' placeholder='Confirm Password' readonly>";
                                }
                                if (isset($_POST['delete']) && $_POST['delete'] == "true" && isset($_POST['slno'])) 
                                {
                                    $slno = $_POST['slno'];
                                    $delete_query = "DELETE FROM register WHERE Slno='$slno'";
                                    $delete_result = mysqli_query($conn, $delete_query);
                                    if ($delete_result) 
                                    {
                                        echo "<script>alert('𝓤𝓼𝓮𝓻 𝓭𝓮𝓵𝓮𝓽𝓮𝓭 𝓼𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵𝔂');</script>";
                                        
                                    } else 
                                    {
                                        echo "<script>alert('𝓕𝓪𝓲𝓵𝓮𝓭 𝓽𝓸 𝓭𝓮𝓵𝓮𝓽𝓮 𝓾𝓼𝓮𝓻');</script>";
                                    }
                                }
                                
                                mysqli_close($conn);
                    ?>   
                        <div class="buttons" >
                        <form id="deleteForm" action="" method="post" onsubmit="return confirmDelete();" >
                            <input type="hidden" name="delete" value="true">
                            <button type="submit" class="delete-btn"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                        </div>
                </form>
            </div>
        </div>
        
            <div class="buttons">
                <button class="back-btn" onclick="goBack()"><i class="fas fa-arrow-left"></i> Back</button>
                <button class="edit-btn" onclick="confirmUpdate()"><i class="fas fa-edit"></i> Edit</button>
                
            </div>
    </div>

    <!-- Your JavaScript code for handling button actions start -->
    <script>
        function goBack() 
        {    
            if (confirm("𝓦𝓪𝓷𝓽 𝓣𝓸 𝓔𝔁𝓲𝓽 𝓣𝓱𝓮 𝓟𝓪𝓰𝓮?")) 
            {
                window.location.href = "admin.php";
            }
        }

        function confirmUpdate() 
        {   
            if (confirm("𝓐𝓻𝓮 𝔂𝓸𝓾 𝓼𝓾𝓻𝓮! 𝓨𝓸𝓾 𝔀𝓪𝓷𝓽 𝓽𝓸 𝓔𝓭𝓲𝓽 𝓨𝓸𝓾𝓻 𝓟𝓻𝓸𝓯𝓲𝓵𝓮?")) 
            {
                window.location.href = "update_user_profile.php";
            }
        }
    </script>
    <!-- Your JavaScript code for handling button actions end -->


</body>
</html>
