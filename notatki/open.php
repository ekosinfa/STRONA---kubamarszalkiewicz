<!DOCTYPE html>
<html lang="pl_PL"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Notatki-otwórz</title>
</head>
<body>
<?php
$nazwa = $_GET['nazwa'];
$connect=mysqli_connect("localhost","kuba","kubaxsw21qaz","ekosinfa_kuba");
$result=mysqli_query($connect,'SELECT $nazwa FROM notes');
?>
<table>
<?php
while($rows=mysqli_fetch_array($result)){
echo '<tr>'.'<td>'.$rows['title'].'</td>';
echo '<td>'.$rows['notes'].'</td>';
}
?>
</table>
</body>
</html>
