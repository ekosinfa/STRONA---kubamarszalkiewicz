<?php 
//Sprawdzanie,czy zmienne są ustawione i inne rzeczy
if(empty($_POST['username'])){
  exit('ERROR:Nie wpisałeś nazwy użytkownika!');
}
if(empty($_POST['email'])){
  exit('ERROR:Nie wpisałe adresu email!');
}
if(empty($_POST['imienazwisko'])){
  exit('ERROR:Nie wpisałeś swojego imienia i nazwiska!');
}
if(empty($_POST['haslo1'])){
  exit('ERROR:Nie wpisałeś hasła!');
}
if(empty($_POST['haslo2'])){
  exit('ERROR:Nie wpisałeś hasła!');
}
if($_POST['haslo1']!=$_POST['haslo2']){
  exit('ERROR:Hasła nie są identyczne!');
}
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )==false){
  exit('adres e-mail nie jest prawidlowy');};
?>
