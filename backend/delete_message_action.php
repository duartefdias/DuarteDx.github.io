<?php

    //Connects to database
    require_once "../database/connection.php";

    $message_to_delete = $_GET['id'];
    echo $message_to_delete;

    $query_string = 'DELETE FROM erasmus_messages WHERE id = ' . $message_to_delete . ';';
    echo $query_string;
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $result = $mysqli->query($query_string);

    header('location: /../messages.php');
?>