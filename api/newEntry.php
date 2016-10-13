<?php
    // $sth = $db->prepare('SELECT * FROM listentrys WHERE userID = :loggedinUser ORDER BY id');
    // $sth->bindParam(':loggedinUser', $loggedinUser, PDO::PARAM_STR);
    // $sth->execute();
    // $results=$sth->fetchAll(PDO::FETCH_ASSOC);
    // $json = json_encode($results);
    // echo $json;
    
    if($_POST) {
        require("../config.php");
        include('../session.php');
        
        $loggedinUser = $_SESSION['id'];
        $db = getDB();
        $firstname=$_POST['inputFirstname'];
        $lastname=$_POST['inputLastname'];
        $amount=$_POST['inputAmount'];
        $age=$_POST['inputAge'];
        $comment=$_POST['inputComment'];
        
        //Fulhack, måste göras snyggare :D
        if ($age == "Ja"){
            $age = 0;
        } else {
            $age = 1;
        }
        
        $sth = $db->prepare('INSERT INTO listentrys (userID, firstname, lastname, amount, comment, age) VALUES (:userID, :firstname, :lastname, :amount, :comment, :age)');
        $sth->execute(array(
            ':userID' => $loggedinUser,
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':amount' => $amount,
            ':comment' => $comment,
            ':age' => $age
        ));
    }
?>