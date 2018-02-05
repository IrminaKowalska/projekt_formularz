<?php



/* //Ustalam potrzebne dane	

	

	//dane do MySql

		//serwer

		$mysql_server = "localhost"; 

		// admin   

		$mysql_admin = "irmkoww"; 

		// hasło  

		$mysql_pass = "A123456a"; 

		// nazwa baza   

		$mysql_db = "irmkow";  

		

	//Inne dane

		$title = "Wybór Promotora";



	//adres strony

	$FRONTPAGE = '';

	$nazwa_portalu= 'Wybór Promotora'; */

	

$login='irmkoww';

$pass='A123456a';

$db_name='irmkow';



function connection ($login,$pass,$db_name)

{

mysql_connect('localhost',$login,$pass);	

mysql_select_db($baza);

} 

?>