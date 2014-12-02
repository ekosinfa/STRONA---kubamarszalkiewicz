<?php
$connect=mysqli_connect("localhost","kuba","kubaxsw21qaz","ekosinfa_kuba");
$result=mysqli_query($connect,'SELECT * FROM esport');
while($rows=mysqli_fetch_array($result)){
echo $rows['imie'];
echo $rows['nick'];
echo $rows['nazwisko'];
echo $rows['wiek'];
echo $rows['drużyna'];
}
