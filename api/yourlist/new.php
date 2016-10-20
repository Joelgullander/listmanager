<?php
    if($_POST) {
        require("../../config.php");
        include('../../session.php');
        
        $loggedinUser = $_SESSION['id'];
        $db = getDB();
        $firstname=$_POST['inputFirstname'];
        $lastname=$_POST['inputLastname'];
        $amount=$_POST['inputAmount'];
        $age=$_POST['inputAge'];
        $comment=$_POST['inputComment'];
        $approved = 0;
        
        //Fulhack, måste göras snyggare :D
        if ($age == "Ja"){
            $age = 0;
            $approved = 1;
        } else {
            $age = 1;
        }
        
        $sth = $db->prepare('INSERT INTO listentrys (userID, firstname, lastname, amount, comment, approved, age) VALUES (:userID, :firstname, :lastname, :amount, :comment, :approved, :age)');
        $sth->execute(array(
            ':userID' => $loggedinUser,
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':amount' => $amount,
            ':comment' => $comment,
            ':age' => $age, 
            ':approved' => $approved
        ));
    }
?>