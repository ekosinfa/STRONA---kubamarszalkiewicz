<?php
$connect=mysqli_connect("localhost","kuba","kubaxsw21qaz","ekosinfa_kuba");
$result=mysqli_query($connect,'SELECT * FROM esport');
$row=mysqli_fetch_array($result);
var_dump($row);
