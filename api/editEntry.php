<?php
    if($_POST) {
        require("../config.php");
        include('../session.php');
        
        $loggedinUser = $_SESSION['id'];
        $db = getDB();
        $firstname=$_POST['inputFirstname'];
        $lastname=$_POST['inputLastname'];
        $amount=$_POST['inputAmount'];
        $entryID=$_POST['entryID'];
        $sth = $db->prepare('UPDATE listentrys SET firstname=:firstname, lastname=:lastname, amount=:amount WHERE id=:entryID');
        $sth->execute(array(
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':amount' => $amount,
            ':entryID' => $entryID
        ));
    }
?>