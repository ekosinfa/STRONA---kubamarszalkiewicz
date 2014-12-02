<?php
$connect=mysqli_connect("localhost","kuba","kubaxsw21qaz","ekosinfa_kuba");
$result=mysqli_query($connect,'SELECT * FROM esport');
$rows=mysqli_fetch_array($result);
foreach($rows as $row){
var_dump($rows);}
