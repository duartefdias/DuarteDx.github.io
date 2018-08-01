<!DOCTYPE html>
<html>
<head>
    <title>ErasmusConnect</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/world.css">
    <link rel="stylesheet" href="css/messages.css">
</head>
<body>

<!--Connect to database-->
<?php include_once "database/connection.php" ?>

<!--FACEBOOK FUNCTION-->
<script>
    FB.init({
        appId      : '1722990901149427',
        status     : true,
        xfbml      : true,
        version    : 'v3.0'
    });

    testAPI();
</script>
<script type="text/javascript" src="facebookIntegration/functions.js"></script>

<!--ADD NAVBAR TO WEBPAGE-->
<?php include_once "navbar/navbar.php"; session_start(); ?>

<div class="messages-wrapper">
    <h2>My messages</h2>
    <div class="messages-content">
            <?php
            $query_string = 'SELECT * FROM erasmus_messages WHERE recipient = \'' . $_SESSION['user_id'] . '\';';
            $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
            $result = $mysqli->query($query_string);
            foreach($result as $row){

                echo '<div class="message">';
                echo '<span class="message-sender">';
                echo '<a href="view_message.php?id=';
                echo $row['id'];
                echo '">';
                echo '<strong>From: </strong>';
                $query_string1 = 'SELECT * FROM erasmus_student WHERE id = \'' . $row['sender'] . '\';';
                $mysqli1 = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
                $result1 = $mysqli1->query($query_string1);
                $row1 = mysqli_fetch_assoc($result1);
                echo $row1['name'];
                $_SESSION['sender_name'] = $row1['name'];
                echo '</span>';
                echo '</a>';
                echo '<span class="message-topic">';
                echo substr($row['content'], 0, 16);
                echo '...';
                echo '</span>';
                echo '<a href="/backend/delete_message_action.php?id=';
                echo $row['id'];
                echo '"><button class="message-delete">X</button>';
                echo '</a>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>