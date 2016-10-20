<?php
    if($_POST) {
        require("../../config.php");
        include('../../session.php');
        
        $loggedinUser = $_SESSION['id'];
        $db = getDB();
        $firstname=$_POST['inputFirstname'];
        $lastname=$_POST['inputLastname'];
        $amount=$_POST['inputAmount'];
        $comment=$_POST['inputComment'];
        $approved = 0;
        
        $sth = $db->prepare('INSERT INTO vipentrys (userID, firstname, lastname, amount, comment, approved) VALUES (:userID, :firstname, :lastname, :amount, :comment, :approved)');
        $sth->execute(array(
            ':userID' => $loggedinUser,
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':amount' => $amount,
            ':comment' => $comment,
            ':approved' => $approved
        ));
    }
?>