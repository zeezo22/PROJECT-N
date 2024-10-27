<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:slnt,wght@-11..11,200..1000&family=Lora&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | تعديل منتج</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['id']; 
    $up = mysqli_query($con, "select * from prod where id=$ID ");
    $data = mysqli_fetch_array($up);
    ?>
    <center>
    <div class="main">
        <form action="up.php" method="post" enctype="multipart/form-data">
             <h2>PHARMASTAN</h2> 
             <br>
             <h1>تعديل المنتج</h1>
             <input type="text" name='id' value='<?php echo $data['id']?>'>
             <br>
             <input type="text" name='name' value='<?php echo $data['name']?>'>
             <br>
             <input type="text" name='price' value='<?php echo $data['price']?>'>
             <br>
             <input type="file" id="file" name='image'  style='display:none;'>
             <br>
             <label for="file">  اختيار صورة جديده من ع جهازك</label>
             <br><br    >
             <button name='update' type='submit'> تحديث صورة المنتج ع السيرفر</button>
             <br><br>
             <a href="products.php">عرض كل المنتاجات</a>
        </form>
    </div>
    <p> developor by Elzoz </p>


    <center>
</body>
</html>