<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE phone = '$phone' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:shop.php');
      $message[] = 'تم تسجيل الدخول';
   }
   else{
     
      $message[] = '! رقم الموبايل او كلمة المرور خطاء';
   }

}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
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

<style>
  .social{
    margin-top: 30px;
    display: flex;
  }
  .social div{
    background: red;
    width: 150px;
    border-radius: 3px;
    padding: 5px 10px 10px 5px;
    background-color: rgba(255,255,255,0.27);
    color: #eaf0fb;
    text-align: center;
  }
  .social div:hover{
    background-color: rgba(255,255,255,0.47);
  }
  .social .fb{
    margin-left: 25px;
  }
  .social i{
    margin-right: 4px;
  }

  </style>
<div class="bg"></div>

  <main class="form-signin">
    
      <h1 class="h3">تسجيل دخول</h1>
    
      <form action="" method="post">


      <div class="form-floating">
        <input type="phone" name="phone" class="form-control" id="floatingInput" placeholder>
        <label for="floatingInput"> البريد الالكتروني</label>
      </div><br>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">كلمة المرور</label>
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>

      </div>

      <div class="checkbox mb-3">
        <div class="form-check form-switch">
  <input  class="form-check-input" type="checkbox" value="1" name="remember_me" id="rememberMeSwitch">
  <label class="form-check-label" for="rememberMeSwitch"> تذكرني</label>
</div>
      <a href="SignUp.php">انشاء حساب جديد</a>  
      </div>
      <button type="submit" name="submit" class="w-100 btn btn-lg" type="submit">دخول</button>
    </form>
          <p class="copyright"> devolebor by Hamza</p>
  </main>
<!-- partial -->
  
</body>
</html>
