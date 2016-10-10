<?php
	require	("../config.php");
    include('../session.php');
    $loggedinUser = $_SESSION['id'];
    $db = getDB();
    
    $sth = $db->prepare('SELECT * FROM listentrys WHERE approved = 0 ORDER BY id DESC');
    $sth->bindParam(':loggedinUser', $loggedinUser, PDO::PARAM_STR);
    $sth->execute();
    $results=$sth->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    echo $json;
?>