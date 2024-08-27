<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VibeChat Signup</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #585858;
            background-size: cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .welcome-message {
            font-size: 2.5rem;
            color: #ff5f6d;
            font-weight: bold;
            margin-bottom: 20px;
            height: 40px;
        }

        .container {
            margin-right: 13%;
        }

        .container header {
            font-size: 3rem;
            color: #fff;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .container .field {
            margin-bottom: 20px;
            position: relative;
        }

        .container .field label {
            color: #fff;
            font-size: 1rem;
            margin-bottom: 5px;
            display: block;
        }

        .container .field input {
            width: 140%;
            padding: 12px;
            border-radius: 5px;
            border: 1px solid #fff;
            background: transparent;
            color: #fff;
            font-size: 1rem;
            outline: none;
        }

        .container .field input:focus {
            border-color: #ff5f6d;
        }

        .container .button input {
            width: 140%;
            max-width: 360px;
            padding: 12px;
            background-color: #ff5f6d;
            border: none;
            color: white;
            font-size: 1.2rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .container .button input:hover {
            background-color: #ff2d50;
        }

        .container .link {
            color: #fff;
            margin-top: 10px;
            font-size: 0.9rem;
        }

        .container .link a {
            color: #ff5f6d;
            text-decoration: none;
        }

        .container .link a:hover {
            text-decoration: underline;
        }

        .container .field input[type="password"] {
            padding-right: 40px;
        }

        .container .field i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #ccc;
        }
    </style>
</head>
<body>

    <h1 class="welcome-message" id="welcome-text"></h1>

    <div class="container">
        <section class="form signup">
            <header>VibeChat</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter new password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>

    <script>
        const welcomeText = "Welcome to VibeChat";
        let index = 0;

        function typeWriter() {
            if (index < welcomeText.length) {
                document.getElementById("welcome-text").innerHTML += welcomeText.charAt(index);
                index++;
                setTimeout(typeWriter, 100);
            }
        }

        window.onload = typeWriter;
    </script>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>

</body>
</html>
