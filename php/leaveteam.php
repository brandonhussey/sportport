<?php
    include_once('database.php');
    session_start();

    $conn = connect_db();
    $teamid = $_POST['myteam'];
    $userid = $_SESSION['userID'];
    leave_Team($conn, $userid, $teamid);
    header("Location: ../myteams.php");

?>
