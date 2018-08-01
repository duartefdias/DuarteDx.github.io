<?php
    //Defines format of response
    //header('Content-Type: text/json');

    //Connects to database
    require_once "../database/connection.php";

    // Create session for the user
    // Get user information from js facebook login
    session_start();
    $_SESSION['user_id'] = $_POST['user_id'];
    $id = $_POST['user_id'];
    $_SESSION['user_name'] = $_POST['user_name'];
    $username = $_POST['user_name'];

    $query_string = 'SELECT * FROM erasmus_student WHERE id = ' . $id;
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    //Execute query
    $result = $mysqli->query($query_string);

    // Doesn't find user in database, registers him
    if(mysqli_num_rows($result) == 0 ) {
        $query_string_insert = 'INSERT INTO erasmus_student VALUES ("' . $id . '", "' . $username . '", "undefined_nationality", "Barcelona");';
        // echo($query_string_insert);
        $result_insert = $mysqli->query($query_string_insert);
        echo json_encode('user_added_to_DB');
    }
    // Finds user in database, does nothing
    else if(mysqli_num_rows($result) > 0) {
        echo json_encode('user_already_in_DB');
    }

?>