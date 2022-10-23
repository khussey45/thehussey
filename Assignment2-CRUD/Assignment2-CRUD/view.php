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
      
      <br>
        <h1 class="edit-h1">Registrations</h1>
        <table class="register-table">
          <thead>  
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Company</th>
              <th>School</th>
            </tr>
          </thead>
          <tbody>
        <?php
          $fname = "";
					$lname = "";
					$email = "";
					$phonenum = "";
					$company= "";
					$school= "";

          
					//  if statements checking if php variable have been inputed
					if($_SERVER["REQUEST_METHOD"] == "POST"){
						// first name 
						if(empty($_POST[$fname])){
							$fnameErr = "First name is required!";
						}else{
							$fname = form_input($_POST["fname"]);
						}
						// last name
						if(empty($_POST[$lname])){
							$lnameErr = "Last name is required!";
						}else{
							$lname = form_input($_POST["lname"]);
						}
						// email
						if(empty($_POST[$email])){
							$emailErr = "Email name is required!";
						}else{
							$email = form_input($_POST["email"]);
						}
						// address
						if(empty($_POST[$phonenum])){
							$addressErr = "Address is required!";
						}else{
							$address = form_input($_POST["address"]);
						}
						// phone number
						if(empty($_POST[$company])){
							$phoneErr = "Phone is required!";
						}else{
							$phone = form_input($_POST["phone"]);
						}
					//size of pizza
					if(isset($_POST[$school])) {
						$small = $_POST["small"];
					}else {
						$small = NULL;
					}
          function form_input($data){
						$data = trim($data);
						$data = stripslashes($data);
						$data = htmlspecialchars($data);
						return $data;
					}}
        ?>
        
        <tr>
            <td><?php echo $fname; ?></td>
            <td><?php echo $name; ?></td>
             <td><?php echo $email; ?></td>
            <td><?php echo $phonenum; ?></td>
             <td><?php echo $company; ?></td>
            <td><?php echo $school; ?></td>
            <td>
                <a href="update.php?id=<?php echo $row['people_id']; ?>" class="edit_btn" >Edit</a>
            </td>
            <td>
                <a href="del.php?id=<?php echo $row['people_id']; ?>" class="del_btn">Delete</a>
            </td>
        </tr>

          </tbody>
        </table>
      </section>
    </main>
    <!-- footer-->
   <my-footer></my-footer>
</body>
</html>