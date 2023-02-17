<?php
  // Start a session
  session_start();
  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "db_connect.php";
    // Retrieve the username and password from the form data
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
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      h1 {
        text-align: center;
      }
      form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.3);
      }
      label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
      }
      input[type="text"],
      input[type="password"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
      input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
      p.error {
        color: #ff0000;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <h1>Login</h1>
    <form action="login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
      <input type="submit" value="Login">
    </form>
  </body>
</html>