<?php /*************** mysqlconnect.php * połączenie z bazą danych *****************************/



// nawiazujemy polaczenie

$connection = @mysql_connect('localhost', 'irmkoww', 'A123456a')

// w przypadku niepowodznie wyświetlamy komunikat

or die('Brak połączenia z serwerem MySQL.<br />Błąd: '.mysql_error());

// połączenie nawiązane ;-)

echo "Udało się połączyć z serwerem!<br />";

// nawiązujemy połączenie z bazą danych

$db = @mysql_select_db('irmkow', $connection)

// w przypadku niepowodzenia wyświetlamy komunikat

or die('Nie mogę połączyć się z bazą danych<br />Błąd: '.mysql_error());

// połączenie nawiązane

echo "Udało się połączyć z bazą dancych!";

// zamykamy połączenie

mysql_close($connection)

?> 