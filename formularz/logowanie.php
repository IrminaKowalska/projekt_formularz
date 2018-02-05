<?php

mysql_connect('localhost','irmkoww','A123456a');

mysql_select_db('irmkow');

include('include/session.php');

?>

<?php 



  if (isset($_POST[login]) && isset($_POST[pass]))

{  

           $sql="Select * from db_users";

           $wynik=mysql_query($sql);

           $wiersz=mysql_fetch_array($wynik);



            if ($_POST[login] == $wiersz['login'] && $_POST[pass] == $wiersz['pass'] )

            { 

              session_start(); 

			  

              $login = $_POST['login'];

              $insert=$wiersz['insert']; 

              $delete= $wiersz['delete'];

              $update= $wiersz['update'];

              

                $_SESSION['insert']= $insert;

                $_SESSION['delete']=$delete; 

                $_SESSION['update']=$update;

        	    $_SESSION['login']=$login;  

				

				header('Location:dziekanat.php');

				

				

              // echo'Zalogowany jako '.$_SESSION['login'];

				

				//echo '<br><br><a href="ses_logout.php" target="_self" title="Wyloguj" class="btn btn-info">Wyloguj</a>';

				

			

           

			

			

            } else 

			

                echo '<br><h3>Bledny login lub haslo!</h3></br>'; 

			echo "<a href=dziekanat.php><br><h3>Powróć na stronę logowania</h3></br></a>";

				

			

				

            } else 

             $error = ''; 

			  







?>



