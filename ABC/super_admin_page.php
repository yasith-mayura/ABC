<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['super_admin_name'])){
   header('location:login_form.php');
}

?>
<script>
if($_SESSION['visit'] > 1){
   document.QuerySelectorall(".h3").style.display = "none";
}

</script>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>super admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
    
    


</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>Boss</span></h3>
      <h1>welcome <span><?php echo $_SESSION['super_admin_name'] ?></span></h1>
      <p>this is the super admin page</p>
      
      <a href="admin_registration.php" class="btn">Register an Admin</a>
      <a href="products.php" class="btn">view products</a>
      <a href="logout.php" class="btn">logout</a>

   </div>

</div>





</body>

<?php
session_unset();
session_destroy();
?>
</html>