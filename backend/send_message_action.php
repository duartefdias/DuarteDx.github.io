<?php

    //Connects to database
    require_once "../database/connection.php";

    session_start();
    $recipient = $_POST['receiver_id'];
    $sender = $_SESSION['user_id'];
    $message = $_POST['message_content'];
    echo $recipient;
    echo '  ';
    echo $sender;
    echo $message;

    $query_string = 'INSERT INTO erasmus_messages VALUES (\'' . $recipient . '\', \'' . $sender . '\', \'' . '' . '\', \'' . $message . '\');';
    echo $query_string;
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    //Execute query
    $mysqli->query($query_string);

    header('location: /../main.php');
?>