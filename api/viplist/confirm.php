<?php
    if($_POST) {
        require	("../../config.php");
        include('../../session.php');
        
        $loggedinUser = $_SESSION['id'];
        $db = getDB();
        $amount=$_POST['inputAmount'];
        $entryID=$_POST['entryID'];
        $comment=$_POST['inputComment'];

        
        $sth = $db->prepare('UPDATE vipentrys SET amount=:amount, comment=:comment, status=1 WHERE id=:entryID');
        $sth->execute(array(
            ':amount' => $amount,
            ':entryID' => $entryID,
            ':comment' => $comment
        ));
    }
?>