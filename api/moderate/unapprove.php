<?php
    if($_POST) {
        require("../../config.php");
        include('../../session.php');
        
        $loggedinUser = $_SESSION['id'];
        $db = getDB();
        $entryID=$_POST['entryID'];

        $sth = $db->prepare('DELETE FROM listentrys WHERE id=:entryID');
        $sth->execute(array(
            ':entryID' => $entryID
        ));
    }
?>