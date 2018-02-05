<?php

include('include/session.php');

mysql_connect('localhost','irmkoww','A123456a');

mysql_select_db('irmkow');

$activ='dziekanatki';

?>

<!DOCTYPE html>

<html lang="pl">

<html>

	<head>

		<?php 

			include('common/meta.php');

			include('common/header.php');	

			?>

		<meta  charset="utf-8" />

		<link rel="stylesheet" href="main.css" media="all" type="text/css"/>

		</head>

	<body>

<?php if($_SESSION['login']=='irmina')

			{?>	

	<?php

if (empty($_POST['su']))

{

?>

	 

			<form id="contact" action="" method="post"> 

          <fieldset>

	        <legend>Formularz do odpowiedzi</legend>

	            <dl>

		<dt><strong>Imię:</strong></dt>

       <dd><input type="text" id="name" name="iimie" placeholder="wpisz imię" required tabindex="1" /></dd>

		

		<dt><strong>Nazwisko:</strong></dt>

       <dd><input type="text" id="name" name="nnazwisko" placeholder="wpisz nazwisko" required tabindex="2" /></dd>

		

		<dt><strong>Numer albumu:</strong></dt>

       <dd><input type="text" id="name" name="NNR_albumu" placeholder="wpisz numer albumu" required tabindex="3" /></dd> 

	   

	 <dt><strong><p>Odpowiedź w sprawie</p><p> wyboru promotora</p></strong></dt>  

       <dd><textarea name="ccomment" id="ccomment" required tabindex="4"></textarea></dd> 

		

		<dt><strong>E-mail:</strong></dt> 

        <dd><input type="text" id="emaill" name="emaill" placeholder="wpisz email" required tabindex="5" /></dd>

	 

		 </dl>

        

                  <input name="su" type="submit" id="su" tabindex="6" value="Wyślij" /> 

			  </fieldset>

              </form>

			

			



			





<?php

} else {

if (!empty($_POST['iimie']) && !empty($_POST['nnazwisko']) && !empty($_POST['NNR_albumu'])&&  !empty($_POST['emaill'])&& !empty($_POST['ccomment'])) {

		$_POST['iimie'] = strip_tags($_POST['iimie']);

        $_POST['nnazwisko'] = strip_tags($_POST['nnazwisko']);

        $_POST['NNR_albumu'] = strip_tags($_POST['NNR_albumu']);

		$_POST['emaill'] = strip_tags($_POST['emaill']);

		$_POST['ccomment'] = strip_tags($_POST['ccomment']);

	  $wiad = "<b>Imie:</b> $_POST[iimie] <br /><b>Nazwisko:</b> $_POST[nnazwisko] <br /><b>Numer_albumu:</b> $_POST[NNR_albumu] <br /><b>Odpowiedź w sprawie wyboru promotora</b> $_POST[ccomment]";

    $header  = 'MIME-Version: 1.0' . "\r\n";

        $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        $header .= 'From: http://irmkow.cba.pl/~irmkoww/formularz/dziekanatki.php' . "\r\n";

		$mail = "$_POST[emaill]";

    @mail($mail,"Odpowiedź w sprawie wyboru promotora $_POST[NNR_albumu]","$wiad","$header") or die('Nie udało się wysłać wiadomości');

   echo "Wiadomość została wysłana";



}

	

else {

 echo "Wypełnij wszystkie pola poprawnie! ";

}

}

?> 

	<?php 

			}else{

			echo '<div class="offset4 span5">

		<form action="logowanie.php" method="POST">

					<input type="text" name="login" class="input-small" placeholder="Login">

					<input type="password" name="pass" class="input-small" placeholder="Haslo">

					<input type="submit" class="btn btn-info" value="zaloguj"/>

				</form>

				</div>';

			

			}

			

?>



<footer><?php include('common/footer.php');?></footer>

	</body>

</html>	