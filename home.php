<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Menu</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
        background-color: #E7F2F8;
        opacity: 1;
        background-image:  radial-gradient(#74BDCB 2px, transparent 2px), radial-gradient(#74BDCB 2px, #E7F2F8 2px);
        background-size: 80px 80px;
        background-position: 0 0,40px 40px;
      }
      header {
        text-align: center;
        font-family: "Georgia", serif;
        background-color: #FFA384;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        background-color: #FFA384;
        opacity: 1;
        background-image:  repeating-radial-gradient( circle at 0 0, transparent 0, #FFA384 40px ), 
          repeating-linear-gradient( #EFE7BC55, #EFE7BC );
      }
      h1 {
        margin: 0;
        font-size: 3em;
        color: brown;
      }
      h2 {
        font-size: 25px;
        color: brown;
      }
      nav {
        background-color: #74BDCB;
        color: #EFE7BC;
        font-size: 20px;
        display: flex;
        justify-content: space-between;
        padding: 10px;
      }
      nav a {
        color: #fff;
        text-decoration: none;
        padding: 10px;
        margin-right: 10px;
      }
      nav a:hover {
        background-color: #f2f2f2;
        color: #333;
      }
      main {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.3);
      }
      ul {
        list-style: none;
        margin: 0;
        padding: 0;
      }
      li {
        margin-bottom: 10px;
      }
      li span {
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>SNA Restaurant</h1>
      <h2>Welcome, <?php echo $_SESSION["username"] ?>!</h2>
    </header>
    <nav>
      <a href="#">Home</a>
      <a href="#">Menu</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
    </nav>
    <main>
      <h2>Menu</h2>
      <ul>
        <li>
          <span>Appetizers</span>
          <ul>
            <li>Garlic Bread</li>
            <li>Mozzarella Sticks</li>
            <li>Spinach Dip</li>
          </ul>
        </li>
        <li>
          <span>Entrees</span>
          <ul>
            <li>Pizza</li>
            <li>Pasta</li>
            <li>Burgers</li>
            <li>Steak</li>
          </ul>
        </li>
        <li>
          <span>Desserts</span>
          <ul>
            <li>Ice Cream Sundae</li>
            <li>Cheesecake</li>
            <li>Brownie</li>
          </ul>
        </li>
      </ul>
    </main>
  </body>
</html>
