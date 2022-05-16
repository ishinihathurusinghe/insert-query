<?php require_once('include/connection.php'); ?>

<?php

   $first_name = 'dileep';
   $last_name = 'hathurusinghe';
   $email = 'ishini@gmail.com';
   $password = 'mypwd';
   $is_deleted = '0';

   $hashed_password = sha1($password);

  $query = "INSERT INTO user (first_name, last_name,email,password,is_deleted) VALUES(' $first_name',' $last_name','$email','  $password', $is_deleted)";

  $result = mysqli_query($connection, $query);

   if($result){
       echo "1 record added ";
   }
   else{
       echo "failed";
   }
?>

<html>

<head>
      <title> insert query </title>
</head>

<body>
      
</body>

</html>

<?php mysqli_close($connection); ?>