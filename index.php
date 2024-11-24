<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت وظایف</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #4CAF50;
    color: white;
    padding: 15px;
    text-align: center;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

.container {
    display: flex;
}

.sidebar {
    width: 25%;
    background-color: #f4f4f4;
    padding: 20px;
}

main {
    width: 75%;
    padding: 20px;
}

footer {
    background-color: #4CAF50;
    color: white;
    text-align: center;
    padding: 10px;
    position: absolute;
    width: 100%;
    bottom: 0;
}

h2 {
    color: #333;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    <header>
        <h1>سیستم مدیریت وظایف</h1>
        <nav>
            <ul>
                <li><a href="index.php">صفحه اصلی</a></li>
                <li><a href="my.php">درباره ما</a></li>
                <li><a href="callme.php">تماس با ما</a></li>
                <li><a href="weblog.php">وبلاگ </a></li>

            </ul>
        </nav>
    </header>
    
    <div class="container">
        
        <main>
            <h2>وظایف جاری</h2>
            <ul>
                <li>وظیفه ۱</li>
                <li>وظیفه ۲</li>
                <li>وظیفه ۳</li>
            </ul>
            <button>اضافه کردن وظیفه جدید</button>
        </main>
        <aside class="sidebar">
            <h2>منوی کناری</h2>
            <ul>
                <li><a href="#">وظایف من</a></li>
                <li><a href="#">وظایف تکمیل شده</a></li>
                <li><a href="#">ایجاد وظیفه جدید</a></li>
            </ul>
        </aside>
    </div>

    <footer>
        <p>&copy; 2023 سیستم مدیریت وظایف. تمام حقوق محفوظ است.</p>
    </footer>

</body>
</html>
