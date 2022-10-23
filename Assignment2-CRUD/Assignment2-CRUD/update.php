<?php
include 'database.php';
$con=new mysqli('172.31.22.43','Kieren200409682','2YbUnxFPUA','Kieren200409682');
?>






<!doctype html>
<html lang="en">
<head>
    <!-- Meta data-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <meta name="description" content="This week we will create our layout using css grid">
    <meta name="robots" content="noindex, nofollow">
    <!-- add the css-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <script src="https://kit.fontawesome.com/77dd9f4fc2.js" crossorigin="anonymous"></script>
    <!-- add fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Figtree&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
     <!-- add my js file-->
     <script type="text/javascript" src="./js/main.js"></script>
    <!-- the following consists of the header and navigation with a logo-->
    
    <my-header></my-header>
   
    <main>
      <section>
      <h2>Update Registration form</h2>
      
    
      <form action="edit.php" method="POST">
            <p><input type="text" name="fname" placeholder="First name"></p>
            <p><input type="text" name="lname" placeholder="Last name"></p>
            <p><input type="email" name="email" placeholder="Email"></p>
            <p><input type="tel" name="phonenum" placeholder="Phone number"></p>
            <p><input type="text" name="company" placeholder="Company name"></p>
            <p><input type="text" name="school" placeholder="School name"></p> 
            <br>
            <a href="view.php"><button class="update-btn"type="button">Update</button></a>
      </form>
     
      </section>
    </main>
    <!-- footer-->
   <my-footer></my-footer>
</body>
</html>