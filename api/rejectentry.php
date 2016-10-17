<?php
    if($_POST) {
        require("../config.php");
        include('../session.php');
        
        $loggedinUser = $_SESSION['id'];
        $db = getDB();
        $amount=$_POST['inputAmount'];
        $entryID=$_POST['entryID'];
        $comment=$_POST['inputComment'];

        
        $sth = $db->prepare('UPDATE listentrys SET amount=:amount, comment=:comment, status=2 WHERE id=:entryID');
        $sth->execute(array(
            ':amount' => $amount,
            ':entryID' => $entryID,
            ':comment' => $comment
        ));
    }
?>