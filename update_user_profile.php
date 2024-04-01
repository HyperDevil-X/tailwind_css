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
    <title>Update User Profile</title>    
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
            width: 340%; 
            padding: 10px;
            margin-bottom: 10px;
            margin-left: -120%;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 15px;
            font-weight: 600;
            font-family: 'Times New Roman', Times, serif;
            letter-spacing: 2px;
            text-shadow: 5px 5px 10px black;
        }

        input[readonly] 
        {
            background-color: #f5f5f5;
            cursor: not-allowed;
        }

        .update-btn 
        {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: dodgerblue;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            margin-bottom: 10px; 
        }

        .update-btn:hover 
        {
            background-color: #5670C2;
            color: #fff;
            box-shadow: 0px 0px 10px black;
            transition: all .5s ease;
        }

        .image-name 
        {
            font-size: 14px;
            margin-left: 10px;
            color: #333;
        }

        .button-group 
        {
            position: absolute;
            bottom: 20%;
            right: 49%; 
            height: 5%;
            display: flex;
        }

        .btn 
        {
            font-size: 15.5px;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 600;
            padding: 10px 20px;
            margin-left: 15px; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-update 
        {
            position: absolute;
            background-color: #007bff;
            color: #000;
            height: 45px;
        }
        .btn-update:hover
        {
            background-color: #5670C2;
            color: #fff;
            box-shadow: 0px 0px 10px black;
            transition: all .5s ease;
        }

        .btn-back
        {
            position: relative;
            right: -197%;
            top:-550%;
            background-color: #28a745;
            color: #000;
        }
        .btn-back:hover
        {
            background-color: #389012;
            color: #fff;
            box-shadow: 0px 0px 10px black;
            transition: all .5s ease;
        }
        .btn-cancel 
        {
            position: relative;
            right: -300%;
            top:-700%;
            background-color: #dc3545;
            color: #000;
        }
        .btn-cancel:hover
        {
            background-color:#CA0808;
            color: #fff;
            box-shadow: 0px 0px 10px black;
            transition: all .5s ease;
        }
        .search-container 
        {
            margin-bottom: 20px;
            height: 100px;
        }
        .search-container input[type='text'] 
        {
            width: 100%;
            margin-left: 0.5%;
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
            <div class="ahead" style="margin-left:11%; margin-top: -4%;">Update User Profile</div>
            <!-- Search box -->
            <div class="search-container">
                <form action="" method="post">
                    <input type="text" id="searchInput" name="slno" placeholder="Enter Slno"><br>
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i>Search</button>
                </form>
            </div>
            <div class="profile-body">    
                <form id="updateForm" action="" method="post" enctype="multipart/form-data">      
                        <?php
                            include("connection.php");
                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['slno']) && !empty($_POST['slno']))
                            {
                                $slno = $_POST['slno'];
                                $query = "SELECT rusername, remail, rpassword, cpassword FROM register WHERE Slno = '$slno'"; 
                                $result = mysqli_query($conn, $query);      

                                if ($result && mysqli_num_rows($result) > 0) 
                                {            
                                    $row = mysqli_fetch_assoc($result);           
                                    echo "<input type='hidden' id='slno' name='slno' value='" . $slno . "'>";
                                    echo "<input type='text' id='name' name='rusername' placeholder='Username' value='" . $row['rusername'] . "'><br>";
                                    echo "<input type='email' id='email' name='remail' placeholder='Email' value='" . $row['remail'] . "'><br>";
                                    echo "<input type='text' id='password' name='rpassword' placeholder='Password' value='" . $row['rpassword'] . "'><br>";
                                    echo "<input type='text' id='confirmPassword' name='cpassword' placeholder='Confirm Password' value='" . $row['cpassword'] . "'><br>";
                                } 
                                else 
                                {   
                                    echo "No user found with the provided Slno.";
                                }
                                
                            }

                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) 
                            {
                                $slno = mysqli_real_escape_string($conn, $_POST['slno']);
                                $rusername = mysqli_real_escape_string($conn, $_POST['rusername']);
                                $remail = mysqli_real_escape_string($conn, $_POST['remail']);
                                $rpassword = mysqli_real_escape_string($conn, $_POST['rpassword']);
                                $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
                                $update_query = "UPDATE register SET rusername='$rusername', remail='$remail', rpassword='$rpassword', cpassword='$cpassword' WHERE Slno='$slno'";
                                $update_result = mysqli_query($conn, $update_query);
                                if ($update_result) 
                                {
                                    echo "<script>
                                            if (confirm('𝓐𝓻𝓮 𝓨𝓸𝓾 𝓢𝓾𝓻𝓮 𝓨𝓸𝓾 𝓦𝓪𝓷𝓽 𝓣𝓸 𝓤𝓹𝓭𝓪𝓽𝓮')) 
                                            {
                                                alert('𝓤𝓹𝓭𝓪𝓽𝓮 𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵');
                                                window.location.href = 'view_user_profile.php';
                                            }
                                        </script>";
                                } 
                                else 
                                {
                                    echo "<script>
                                            if (confirm('𝓐𝓻𝓮 𝓨𝓸𝓾 𝓢𝓾𝓻𝓮 𝓨𝓸𝓾 𝓦𝓪𝓷𝓽 𝓣𝓸 𝓤𝓹𝓭𝓪𝓽𝓮')) 
                                            {
                                                alert('𝓢𝓸𝓶𝓮𝓽𝓱𝓲𝓷𝓰 𝔀𝓮𝓷𝓽 𝔀𝓻𝓸𝓷𝓰! 𝓟𝓵𝓮𝓪𝓼𝓮 𝓒𝓱𝓮𝓬𝓴 𝓲𝓽');
                                                window.location.href = 'update_user_profile.php';
                                            }
                                        </script>";
                                }
                            } 
                            mysqli_close($conn);
                        ?>  
                
                        <?php
                            echo "<div id='updateButtonContainer' style='position: fixed; bottom: 60%; right: -33%; width:60%'>";
                            echo "<button type='submit' name='update' class='btn btn-update'><i class='fas fa-save'></i> Update</button>";
                            echo "</div>";
                        ?>
                </form>
            </div>
        </div>
    </div>

    <!-- Buttons -->
    <div class="button-group">
        <button class="btn btn-cancel" onclick="cancelUpdate()"><i class="fas fa-times"></i> Cancel Update</button>
        <button class="btn btn-back" onclick="exitPage()"><i class="fas fa-arrow-left"></i> Exit</button>
    </div>

    <!-- Your JavaScript code for handling button actions start -->
    <script>
        function cancelUpdate() 
        {
            var result = confirm("Are you sure you want to Cancel the Update?");
            if (result) 
            {
                window.location.href = "update_user_profile.php";
            }
        }

        function exitPage() 
        {
            var result = confirm("Do you want to Exit The Page?");
            if (result) 
            {
                window.location.href = "admin.php";
            }
        }
    </script>
    <!-- Your JavaScript code for handling button actions end -->
</body>
</html>