<?php
    if($_POST) {
        require("../../config.php");
        include('../../session.php');
        
        $loggedinUser = $_SESSION['id'];
        $db = getDB();
        $firstname=$_POST['inputFirstname'];
        $lastname=$_POST['inputLastname'];
        $amount=$_POST['inputAmount'];
        $entryID=$_POST['entryID'];
        $age=$_POST['inputAge'];
        $comment=$_POST['inputComment'];
        
        //Fulhack, måste göras snyggare :D
        if ($age == "Ja"){
            $age = 0;
        } else {
            $age = 1;
        }
        
        $sth = $db->prepare('UPDATE vipentrys SET firstname=:firstname, lastname=:lastname, amount=:amount, comment=:comment, age=:age WHERE id=:entryID');
        $sth->execute(array(
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':amount' => $amount,
            ':entryID' => $entryID,
            ':comment' => $comment,
            ':age' => $age
        ));
    }
?>