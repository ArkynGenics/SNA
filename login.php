<?php

  session_start();
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "db_connect.php";
   
    if (isset($_POST['username']) && isset($_POST['password'])) {
        function validate($data){
    
           $data = trim($data);
    
           $data = stripslashes($data);
    
           $data = htmlspecialchars($data);
    
           return $data;
    
        }
        $username = validate($_POST['username']);
        $password = validate($_POST['password']);
    	
        if (empty($username)) {
            header("Location: login.php?error=User Name is required");
            exit();
    	
        }else if(empty($password)){
            header("Location: login.php?error=Password is required");
            exit();
	
        }
        else{
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' limit 1";

            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['username'] === $username && $row['password'] === $password) {
                    $_SESSION['username'] = $row['username'];
                    header("Location: home.php");
                    exit();
                }
            }else{
                header("Location: login.php?error=Invalid Credential");
            exit();
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="style1.css">
    <style>
      
    </style>
  </head>
  <body>
    <div class="wrapper">
			<h1>Login</h1>
			<div><span class="dot"></span></div>
			<div><span class="dot"></span></div>
			<div><span class="dot"></span></div>
			<div><span class="dot"></span></div>
			<div><span class="dot"></span></div>
			<div><span class="dot"></span></div>
			<div><span class="dot"></span></div>
			<div><span class="dot"></span></div>
			<div><span class="dot"></span></div>
			<div><span class="dot"></span></div>
			<div><span class="dot"></span></div>
			<div><span class="dot"></span></div>
			<div><span class="dot"></span></div>
			<div><span class="dot"></span></div>
			<div><span class="dot"></span></div>
		</div>
	
    <div class="box">
      <form action="login.php" method="post">
         <label for="username">Username:</label>
         <input type="text" id="username" name="username"><br>

         <label for="password">Password:</label>
         <input type="password" id="password" name="password"><br>
            <div class="message">
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            </div>
        <input type="submit" value="Login">
      </form>
    </div>
	  
  </body>
</html>
