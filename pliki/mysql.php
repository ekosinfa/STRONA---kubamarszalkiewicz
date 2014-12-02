<?php
$connect=mysql_connect("localhost","kuba","kubaxsw21qaz","ekosinfa_michal");
$result=mysqli_query($connect,'SELECT * FROM esport');
$row=mysqli_fetch_array($result);
