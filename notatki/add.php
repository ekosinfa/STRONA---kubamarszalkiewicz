<?php 
// odbieramy dane z formularza 
$nazwa = $_GET['nazwa']; 
$tresc = $_GET['notatka']; 

if($nazwa and $tresc) { 
     
    // łączymy się z bazą danych 
    $connection = mysqli_connect("localhost", "kuba", "kubaxsw21qaz","ekosinfa_kuba") 
    or die('Brak połączenia z serwerem MySQL'); 
    //$db = @mysql_select_db("notes", $connection) 
    //or die('Nie mogę połączyć się z bazą danych'); 
     
    // dodajemy rekord do bazy 
    $query = 'INSERT INTO notes (title, notes) VALUES (\''.$nazwa.'\',\''.$tresc.'\')';
    var_dump($query);
    $ins = mysqli_query($query); 
    if($ins) echo "Rekord został dodany poprawnie"; 
    else echo "Błąd nie udało się dodać nowego rekordu"; 
     
    mysqli_close($connection); 
} 

?> 
