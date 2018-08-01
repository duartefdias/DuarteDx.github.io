<?php

    //Connects to database
    require_once "../database/connection.php";

    session_start();
    $home_country = $_POST['edit_country'];
    $erasmus_city = $_POST['edit_city'];
    $student_id = $_SESSION['user_id'];
    $student_name = $_SESSION['user_name'];

    $query_string1 = 'DELETE FROM erasmus_student WHERE id = ' . $student_id . ';';
    // echo($query_string1);
    $query_string2 = 'INSERT INTO erasmus_student VALUES (\'' . $student_id . '\', \'' . $student_name . '\', \'' . $home_country . '\', \'' . $erasmus_city . '\');';
    // echo($query_string2);
    $mysqli1 = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $mysqli2 = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);


    //Execute query
    $mysqli1->query($query_string1);
    $mysqli2->query($query_string2);

        header('location: /../main.php');

?>