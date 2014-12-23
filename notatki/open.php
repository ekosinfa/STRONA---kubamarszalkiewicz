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
$rows=mysqli_fetch_array($result)
echo $rows['title'];
echo $rows['notes'];
?>
</body>
</html>
