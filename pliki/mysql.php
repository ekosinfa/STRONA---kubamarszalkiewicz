<!DOCTYPE html>
<html lang="pl_PL"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>E-sport</title>
</head>
<body>
<table>
<?php
$connect=mysqli_connect("localhost","kuba","kubaxsw21qaz","ekosinfa_kuba");
$result=mysqli_query($connect,'SELECT * FROM esport');
while($rows=mysqli_fetch_array($result)){
echo '<tr>'.'<td>'.$rows['imie'].'</td>';
echo '<td>'.$rows['nazwisko'].'</td>';
echo '<td>'.$rows['nick'].'</td>';
echo '<td>'.$rows['wiek'].'</td>';
echo '<td>'.$rows['druzyna'].'</td>'.'</tr>';
}
?>
</table>
</body>
</html>
