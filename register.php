<?php
    error_reporting(E_ALL);
/*
    $host = 'localhost';
    $user = 'root';
    $pw = 'noh28899';
    $dbName = 'user';
*/
    ini_set("display_errors", 1);
    header("Content-Type: text/html; charset=UTF-8");
    $conn = new mysqli("localhost", "root", "noh28899", "register");
    mysqli_query($conn,'SET NAMES utf8');

    $id = $_POST['id'];
    $password = $_POST['password'];
    $school_num = $_POST['school_num'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $nickname = $_POST['nickname'];



    $sql ="insert into users (id, password, school_num, name, email, nickname) values ('$id', '$password', '$school_num', '$name', '$email', '$nickname');";
    echo $sql;
    $res = mysqli_query($conn, $sql);
    #print_r($res);
    #echo "<script>location.href='login.html'</script>"
    #준호한테 phpmyadmin 연동방법, git 쓰는법, hover물어보기
?>