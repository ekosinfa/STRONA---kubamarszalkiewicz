 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <html>
 <head>
 <title>Serwis ABC</title>
 <meta http-equiv=content-type content="text/html; charset=iso-8859-2">
 <meta http-equiv="Content-Language" content="pl">
 </head>
 
 <body>
 
 <?php 
 $data_wydarzenia = '2027-08-02';
 $liczba_dni_do_wydarzenia = 
         ZwrocLiczbeDniDoWydarzenia ($data_wydarzenia);
 
 if ($liczba_dni_do_wydarzenia == -1)
    echo 'Niestety, całkowite zaćmienie słońca 2 sierpnia 2027 roku 
          już miało miejsce...<br />';
 else
    echo 'Całkowite zaćmienie słońca będzie 2 sierpnia 2027 roku. 
              Pozostało już tylko <strong>' . 
              $liczba_dni_do_wydarzenia . '</strong> dni!<br />';
 
 //////////////////////////////////////////////////////////////////////
 /////// Funkcja ZwrocLiczbeDniDoWydarzenia ($data_wydarzenia) ///////
 //Funkcja zwraca liczbe (zaokraglona do dolu) okreslajaca ile  dni
 //pozostalo do okreslonego wydarzenia zawartego w zmiennej 
 //$data_wydarzenia
 //Jesli $data_wydarzenia jest wczesniejsza niż data aktualna to fukcja
 //zwraca -1
 //Argument $data_wydarzenia powinie byc postaci:
 //        Rok-Miesiąc-Dzień
 //na przykład
 //        '2027-08-02'
 //co oznacza
 //        2 sierpnia 2027 roku 
 //Funkcja zwróci liczbę dni pozostałych do daty $data_wydarzenia, 
 //na przykład:
 //   5852
 //////////////////////////////////////////////////////////////////////
 function ZwrocLiczbeDniDoWydarzenia ($data_wydarzenia) {
    $data_aktualna = Date("Y-m-d");
 
    $liczba_sekund_dla_wydarzenia = StrToTime($data_wydarzenia);
    $liczba_sekund_dla_aktualnej_daty = StrToTime($data_aktualna);
 
    $liczba_sekund_miedzy_datami = $liczba_sekund_dla_wydarzenia 
                     - $liczba_sekund_dla_aktualnej_daty;
    if ($liczba_sekund_miedzy_datami<0)
       return -1;
 
    $liczba_sekund_w_dniu = 60 * 60 * 24;
    $liczba_dni_miedzy_datami = 
          Floor ($liczba_sekund_miedzy_datami/$liczba_sekund_w_dniu);
 
    return $liczba_dni_miedzy_datami;
 }
 
 ?>
 
 </body> 
 </html>
