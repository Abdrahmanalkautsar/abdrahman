<?php
require 'config.php';
require 'functions.php';
$ip      = ip_user();
$browser = browser_user();
$os      = os_user();
if (! isset($_COOKIE['VISITOR'])) {
 $duration = time()+60*60*24;
 setcookie('VISITOR',$browser,$duration);
 $sql = "INSERT INTO statistik (ip, os, browser) VALUES ('$ip', '$os', '$browser')";
 $query = $db->query($sql);
 }
 ?>
 <h1>Hanya gambar</h1>
 <img src="pick.jpeg" width="800px" height="800px"/>