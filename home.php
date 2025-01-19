<?php
include ("reza.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container mt-4 ">
        <h2>وظایف من</h2>
        <ul class="list-group" dir="rtl">
            <li class="list-group-item">کلاس زبان ساعت 6</li>
            <li class="list-group-item">باشگاه ساعت 9</li>
            <li class="list-group-item">پروژه بوت استرپ آقای فتاحی</li>
            <li class="list-group-item">امتحان پودمان ریاضی</li>
        </ul>

    </div>
    <div class = "d-flex justify-content-center">
        <button class="btn btn-outline-success ">اضافه کردن وظیفه جدید</button>
    </div>  
</body>
</html>

<?php
include("footer.php")
?>