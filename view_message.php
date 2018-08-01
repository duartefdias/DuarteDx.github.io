<!DOCTYPE html>
<html>
<head>
    <title>ErasmusConnect</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/world.css">
    <link rel="stylesheet" href="css/send-message.css">
</head>
<body>

<!--Connect to database-->
<?php include_once "database/connection.php"; session_start();?>

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
<?php include_once "navbar/navbar.php" ?>
<?php
$query_string = 'SELECT * FROM erasmus_messages WHERE id = \'' . $_GET['id'] . '\';';
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
$result = $mysqli->query($query_string);
$row = mysqli_fetch_assoc($result);
?>

<div class="send-message-wrapper">
    <h2>Message sent from <?php echo $_SESSION['sender_name']; ?></h2>
    <div class="send-message-content">
        <p>
            <?php echo $row['content']; ?>
        </p>
    </div>
</div>

</body>
</html>