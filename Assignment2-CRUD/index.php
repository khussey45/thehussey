<?php
  include 'database.php';
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment2-CRUD</title>
    <meta name="description" content="This week we will be building a CREATE and READ CRUD system with PDO">
    <meta name="robots" content="noindex, nofollow">
    <!--  Added Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Figtree&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
   
    <!--  Add our custom CSS  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <script src="https://kit.fontawesome.com/77dd9f4fc2.js" crossorigin="anonymous"></script>
    <!-- add my js file-->
    <script type="text/javascript" src="./js/main.js"></script>
  </head>
  <body>
  <my-header></my-header>
  <main class="wrapper">
   
    <section>
      <h1 class="index-h1">What is Kieren's AI Fest?</h1>
      <p class="index-p">A three day event filled with all the artificial intelligence you can dream about! Self driving cars, J.A.R.V.I.S inspired voice communication AI's and much more! Fill out the form below to register for the event with space being limited. It is a first come first serve basis. Those who use visual studio code will be entered in the best IDE give away!</p>
    </section>
    <section>
      <h2 class="btn-h2">Click Here To Register</h2>
      <a href="add.php"><button class="form-btn"type="button">Register</button></a>
    </section>
</main>
<my-footer></my-footer>
</body>
</html>
