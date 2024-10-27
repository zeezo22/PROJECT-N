<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM users WHERE phone = '$phone' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO users(name, phone, password) VALUES('$name', '$phone', '$pass')") or die('query failed');
      $message[] = 'registered successfully!';
      header('location:login.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SignUp</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<!-- partial:index.partial.html -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<div class="bg">

</div>

  <main class="form-signin">
    
      <h1 class="h3">انشاء حساب جديد</h1>
    
      <form action="" method="post">


      <div class="form-floating">
      <input type="text" name="name" class="form-control" id="floatingInput" placeholder>
        <label for="floatingInput">اسم المستخدم</label>
<br>
        <div class="form-floating">
        <input type="phone" name="phone" class="form-control" id="floatingInput" placeholder>
        <label for="floatingInput">رقم الموبايل</label>
<br>
        <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">كلمة المرور </label>
        <br>
        <div class="form-floating">
        <input type="password" name="cpassword" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">تاكيد كلمة المرور </label>
        
        <div class="checkbox mb-3">
        <div class="form-check form-switch">
</div>
        <p><a href="login.php">لديك حساب بالفعل</a></p>
      </div>
      <button type="submit" name="submit" class="w-100 btn btn-lg" type="submit">دخول</button>
    </form></div>
          <p class="copyright"> devolebor by Hamza</p>
  </main>
<!-- partial -->
  
</body>
</html>
