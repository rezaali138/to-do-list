<?php
include ("reza.php")
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>وبلاگ من</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        img{
            height: 250px;
            width: 140px;

        }

        div{
            text-align: center;
            margin-top: 10px;
        }
        
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">وبلاگ</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mb-4">
                <img src="picture/maghale1.jpg" class="card-img-top" alt="تصویر وبلاگ">
                <div class="card-body" dir="rtl">
                    <h5 class="card-title" dir="rtl"> انگیزه برای انجام هدف</h5>
                    <p class="card-text"dir="rtl">این یک متن نمونه برای وبلاگ است. شما می‌توانید اینجا توضیحات بیشتری درباره موضوع خود بنویسید. اینجا فضایی است برای جلب توجه خوانندگان.</p>
                    <a href="maghale.php" class="btn btn-primary" dir="rtl">مطالعه بیشتر</a>
                </div>
            </div>

            <div class="card mb-4">
                <img src="picture/maghale2.jpg" class="card-img-top" alt="تصویر وبلاگ">
                <div class="card-body">
                    <h5 class="card-title"> راهنمایی غلبه بر خستگی</h5>
                    <p class="card-text" dir="rtl"> سعی کنید هر شب در یک ساعت مشخص به خواب بروید و از خواب کافی برخوردار شوید.</p>
                    <a href="maghale2.php" class="btn btn-primary">مطالعه بیشتر</a>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include ("footer.php")
?>