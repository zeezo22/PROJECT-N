<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:slnt,wght@-11..11,200..1000&family=Lora&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | المنتجات</title>
<style>
        h3{
            font-family: "Cairo", sans-serif;
            font-weight: bold;
        }
        .card{
            float: right;
            margin-top: 30px;
            margin-left: 5px;
            margin-right: 5px; 
        }
        .card img{
            width: 105%;
            margin-left: -5px;
            height: 280px;
            margin-top: -8px;
        }
        main{
            width:97%;
        }
</style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a id="navbar-brand">
    </nav>
    <center>
        <h3>جميع المنتجات المتوفرة</h3>
        <h4>صفحة الادمن</h4>
        <a class='btn btn-danger' href="index.php">الرجوع الي صفحة نشر المنتجات</a>
    </center>
<?php
include('config.php');
$result = mysqli_query($con,"SELECT * FROM prod");
while($row = mysqli_fetch_array($result)){
    echo "
    <center>
    <main>
      <div class='card' style='width: -15%'>
         <div class='card-body'>
         <img src='$row[image]'class='card-img-top'>
             <h5 class='card-title'>$row[name]</h5>
             <p class='card-text'>$row[price]</p>
             <a href='delete.php? id=$row[id]' class='btn btn-danger'> حذف المنتج </a>
             <a href='update.php? id=$row[id]' class='btn btn-primary'>تعديل المنتج</a>
         </div>
      </div>
    </main
    <center>
    ";
}
?>
</body>
</html> 