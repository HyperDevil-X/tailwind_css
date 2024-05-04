<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Image</title>
    <style>
        /* Styles for modal */
        .m {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .mc {
            background-color: white;
            margin: 20% auto;
            padding: 20px;
            border-radius: 5px;
            max-width: 500px;
            position: relative;
        }
        .c {
            position: absolute;
            top: 5%;
            right: 5%;
            font-size: 34px;
            cursor: pointer;
            font-weight:500;
            transition: background-color 0.3s ease;
            transition: all .5s ease ;
        }
        .c:hover{
            font-size: 44px;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }    
        .vimage {
            position: fixed;
            top: 11%;
            left: 42%;
            transform: translateX(-50%);
        }
        .vimage button{
            padding: 10px 20px;
            background-color: #4790DE;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            transition: all .5s ease ;
        }
        .vimage button:hover{
            box-shadow: 0px 0px 10px black;
        }
        .mc{
            box-shadow: 0px 0px 10px black;
            margin-top: 8%;
            margin-left:37.6%;
        }
        .mc h2{
            width: 80%;
            font-family: 'Times New Roman', Times, serif;
            font-size: 25px;
            font-weight: 600;
            font-variant: small-caps;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .m button{
            position: absolute;
            margin-top: -8%;
            background-color:#FE2F13;
            font-size: 20px;
            font-weight: 600;
            border: 2px solid black;
            width: 24%;
            transition: background-color 0.3s ease;
            transition: all .5s ease ;
            color: white;
            border-radius: 5px;
            border: none;
            outline: none;
        }
        .m button:hover{
            color: black;
            box-shadow: 0px 0px 10px black;
        }
    </style>
</head>
<body>
    <!-- Button to open modal -->
    <div class="vimage">
        <button onclick="om()">Click to Add Image</button>
    </div>
    <!-- Modal -->
    <div id="mm" class="m">
        <div class="mc">
            <span class="c" onclick="cm()">&times;</span>
            <h2>Add Image</h2>
            <form id="imageForm" enctype="multipart/form-data" method="post" action="admin.php">
                <input type="text" id="Slno" name="Slno" placeholder="Enter Slno:" required style="margin-top:4%; width:27%; height:15px; background:transparent; border-radius:5px; border:none; outline:none; border-bottom:2px solid black;  font-size:19px; font-weight:520;"><br>
                <input type="file" id="image" name="image" accept="image/*" required style=" margin-left:8.5%; top:23.5%; position:fixed; background:transparent; border-radius:5px; border:none; outline:none; font-size:19px; font-weight:520;"><br><br>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>

    <!-- Script for modal functionality -->
    <script>
        var m = document.getElementById("mm");

        // Function to open modal
        function om() {
            m.style.display = "block";
        }

        // Function to close modal
        function cm() {
            m.style.display = "none";
        }

        // Function to handle form submission
        document.getElementById("imageForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission

            var form = event.target;
            var formData = new FormData(form);

            // AJAX request to admin.php
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "addvechileimg.php", true);
            xhr.onload = function () {
                if (xhr.status == 200) {
                    var response = xhr.responseText;
                    alert(response); // Display the response message in an alert dialog
                    location.reload(); // Reload the page after displaying the message
                }
            };
            xhr.send(formData);
        });
    </script>





   </body>
</html>
