<?php
    include 'db.php';
    $stmt = $conn->prepare("insert into users(fullname,login,password,birthday)
     values(?,?,?,?,?)");
    $stmt->execute([
        $_POST['name'],
        $_POST['login'],
        $_POST['password'],
        $_POST['birthday'],
    ]);
//перенаправление на главную страницу
header("Location: index.php");
