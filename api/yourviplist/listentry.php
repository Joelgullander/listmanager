<?php
	require	("../../config.php");
    include('../../session.php');
    $entryID = $_GET['entryID'];
    $db = getDB();
    
    $sth = $db->prepare('SELECT * FROM vipentrys WHERE id = :entryID');
    $sth->bindParam(':entryID', $entryID, PDO::PARAM_STR);
    $sth->execute();
    $results=$sth->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    echo $json;
?>