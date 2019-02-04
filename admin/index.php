<?php 

require_once('scripts/config.php');
confirm_logged_in();
greeting();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,500" rel="stylesheet">
  <title>Welcome to Your Admin Panel</title>
</head>
<body id="admin-dash">
  <h1>Admin Dashboard</h1>
  <h2>Welcome <?php echo $_SESSION['user_name'];?></h2>
  <h3><?php if(isset($message)){echo $message;}  ?></h3>
  <p>Your Last Login Was: <?php echo $_SESSION['user_login_time'];?></p>
  <p>This is the admin dashboard page</p>
  <nav>
    <ul>
      <li><a href="#">Create User</a></li>
      <li><a href="#">Edit User</a></li>
      <li><a href="#">Delete User</a></li>
      <li><a href="scripts/caller.php?caller_id=logout">Sign Out</a></li>
    </ul>
  </nav>
</body>
</html>

