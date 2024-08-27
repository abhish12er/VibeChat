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
    <title>VibeChat Login</title>
    <style>
  
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color:#585858;
            background-size: cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        /* Typewriter Heading */
        .welcome-message {
            font-size: 2.5rem;
            color: #ff5f6d;
            font-weight: bold;
            margin-bottom: 20px;
            height: 40px;
        }

        /* Simple Form Layout */
        .container {
          margin-right:13%;
           
        }

        /* ChatWeb Header */
        .container header {
            font-size: 3rem;
            color: #fff;
            margin-bottom: 30px;
            font-weight: bold;
        }

        /* Input Fields */
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
           width:140%;
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

        /* Button Styling */
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

        /* Link to Signup */
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

        /* Custom Input Icon */
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
     <section class="form login">
        <header>VibeChat</header>
        <form action="#" method="POST" autocomplete="off">
        <div class="error-text"></div>
            <div class="field">
                <label>Email Address</label>
                <input type="text" name="email" placeholder="Enter your email" required>
            </div>
            <div class="field">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
                <i class="fas fa-eye"></i>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="Continue to Chat">
            </div>
        </form>
        <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
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

</body>
</html>


<script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
</body>
</html>
