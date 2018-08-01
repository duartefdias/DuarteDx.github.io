<!DOCTYPE html>
<html>
<head>
    <title>ErasmusConnect</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/world.css">
    <link rel="stylesheet" href="css/students-list.css">
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

<?php
    include_once "../database/connection.php";

    $country = $_POST['country'];
    $city = $_POST['city'];
?>

<!--ADD NAVBAR TO WEBPAGE-->
<?php include_once "navbar/navbar.php" ?>

<div class="students-wrapper">
    <h2>Students in <?php echo $city;?></h2>
    <div class="students-content">
        <?php
            $query_string = 'SELECT * FROM erasmus_student WHERE city = \'' . $city . '\';';
            $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
            $result = $mysqli->query($query_string);
            foreach($result as $row){
                echo '<div class="student">';
                echo '<span class="student-name">';
                echo $row['name'];
                echo '</span>';
                echo '<span class="student-nationality">Country of origin: ';
                echo $row['nationality'];
                echo '</span>';
                echo '<a href="/send_message.php?id=';
                echo $row['id'];
                echo '"><button class="student-send-message">Send Message</button></a>';
            }
        ?>
    </div>
</div>

</body>
</html>