<?php
include('config.php');
$session_uid='';
$_SESSION['id']=''; 
$session_permission='';
$_SESSION['permission']='';
if(empty($session_uid) && empty($_SESSION['id']))
{
$url=BASE_URL.'listmanager/index.php';
header("Location: $url");
//echo "<script>window.location='$url'</script>";
}
?>