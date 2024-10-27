<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:slnt,wght@-11..11,200..1000&family=Lora&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmastan | اضافة منتجات</title>
    <link rel="stylesheet" href="index.css">
    <style>
        input{
            width: 250px;
            border-radius: 10px;
            background: ;
        }
        label{
            border-radius: 5px;
        }
        button{
            border-radius: 5px;
            
        }
    </style>
</head>
<body>
    <center>
    <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data">
             <h2>PHARMASTAN</h2> 
             <img src="pharmstan.png" alt="logo" width= "65%">
             <input type="text" name='name' placeholder= "              ادخل اسم المنتج ">
             <br>
             <input type="text" name='price' required="" placeholder= "              ادخل سعر المنتج ">
             <br>
             <input type="file" id="file" name='image'  style='display:none;'>
             <br>
             <label for="file">  اختيار صورة المنتج من ع جهازك</label>
             <br><br>
             <button name='upload' > ✅ رفع صورة المنتج ع السيرفر</button>
             <br><br>
             <a href="products.php">عرض كل المنتجات</a>
        </form>
    </div>
    <p> developor by Elzoz </p>
    </center>
</body>
</html>