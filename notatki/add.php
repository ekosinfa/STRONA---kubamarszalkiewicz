<?php 
// odbieramy dane z formularza 
$nazwa = $_GET['nazwa']; 
$tresc = $_GET['notatka']; 

if($nazwa and $tresc) { 
     
    // łączymy się z bazą danych 
    $connection = @mysql_connect('localhost', 'kuba', 'kubaxsw21qaz') 
    or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('notes', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 
     
    // dodajemy rekord do bazy 
    $ins = @mysql_query("INSERT INTO test SET title='$nazwa', notes='$tresc'"); 
     
    if($ins) echo "Rekord został dodany poprawnie"; 
    else echo "Błąd nie udało się dodać nowego rekordu"; 
     
    mysql_close($connection); 
} 

?> 
