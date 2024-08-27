<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #585858; /* Dark background */
            color:grey;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .wrapper {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .users {
            width: 100%;
             background:#F8F8F8;
            padding: 20px;
            border-radius: 10px;
        }

        .users header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 20px;
            border-bottom: 1px solid #444;
        }

        .users header .content {
            display: flex;
            align-items: center;
        }

        .users header img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }

        .users header .details {
            color: black;
        }

        .users header .details span {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .users header .details p {
            margin-top: 5px;
        }

        .users header .logout {
            background-color: #ff5f6d;
            color: black;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .users header .logout:hover {
            background-color: #ff2d50;
        }

        .search {
            display: flex;
            align-items: center;
            padding: 10px 0;
            background:white;
            border-radius:15px;
            border: 2px solid black;
        }

        .search .text {
            font-size: 1rem;
            color: white;
            margin-right: 10px;
        }

        .search input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #444;
            background: #555;
            color: white;
        }

        .search button {
            background-color: #ff5f6d;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            margin-left: 10px;
            transition: background-color 0.3s;
        }

        .search button:hover {
            background-color: #ff2d50;
        }

        .users-list {
            margin-top: 20px;
        }
    </style>
</head>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text" style="color:black; margin-left:15px;" >Select a user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
        <!-- User list will be dynamically populated here -->
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
