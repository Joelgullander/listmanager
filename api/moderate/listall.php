<?php
	require	("../../config.php");
    include('../../session.php');
    $loggedinUser = $_SESSION['id'];
    $db = getDB();
    
    //$sth = $db->prepare('SELECT * FROM listentrys WHERE approved = 0 ORDER BY id DESC');
    $sth = $db->prepare('select l.id, l.userID, l.firstname, l.lastname, l.amount, l.approved, u.username from listentrys l inner join users u on u.id = l.userID WHERE approved = 0 AND age = 1 ORDER BY firstname ASC');
    
    $sth->bindParam(':loggedinUser', $loggedinUser, PDO::PARAM_STR);
    $sth->execute();
    $results=$sth->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    echo $json;
?>