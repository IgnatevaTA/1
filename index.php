<?php
    //подключение к БД
    $conn = new PDO('mysql:host=localhost;dbname=Ignateva','root','');

    //создание и выполнение запроса к БД
    $stmt = $conn->query('select * from users');

    //преобразовать результат запроса в массив
    $users = $stmt->fetchAll();

    //вывести результаты запроса
    foreach($users as $user) {
        echo "<p> №" . $user[id]." ФИО: ". $user[fullname]."</p>";
    }
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <!--форма добавления нового пользователя -->
    <h2>Регистрация</h2>
    <form action="user_add.php" method="post">
        <div>
            <label for="">ФИО</label>
            <input type="text" name="fullname">
        </div>
        <div>
            <label for="">Логин</label>
            <input type="text" name="login">
        </div>
        <div>
            <label for="">Пароль</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="">Дата рождения</label>
            <input type="date" name="birthday">
        </div>
        <div>           
            <input type="submit">
        </div>
    </form>
 </body>
 </html>   
    
    
