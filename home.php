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
      }
      header {
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.3);
      }
      h1 {
        margin: 0;
        font-size: 2em;
      }
      nav {
        background-color: #333;
        color: #fff;
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
      h2 {
        margin-top: 0;
        font-size: 1.5em;
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
      <h1>:V :D :X :3</h1>
      <h1>Welcome <?php echo $_SESSION["username"] ?></h1>
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