<?php
mysql_connect('localhost','irmkoww','A123456a');
mysql_select_db('irmkow');
include('include/session.php');
$activ='formularz';
?>
<!DOCTYPE html>
<html>
	<head>
	<?php 
			include('common/meta.php');
			include('common/header.php');
			?>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="main.css" media="all" type="text/css"/>
		</head>
		<body>
		
 <?php
if (empty($_POST['submit']))

{
?> 

<form id="contactform" action="" method="post">  
     <fieldset>
	 <legend>Formularz wyboru promotora</legend>
	 <?php $today= date('d.m.Y\r.');
	        ?>
	 <dl>
		<dt><strong>Imię:</strong></dt>
        <dd><input type="text" id="name" name="imie" placeholder="wpisz imię" required tabindex="1" /></dd>
                   
        <dt><strong>Nazwisko:</strong></dt>
        <dd><input type="text" id="name" name="nazwisko" placeholder="wpisz nazwisko" required tabindex="2" /></dd>
		
		<dt><strong>Numer albumu:</strong></dt>
        <dd><input type="text" id="name" name="NR_albumu" placeholder="wpisz numer albumu" required tabindex="3" /></dd>  
		
		<dt><strong>Semestr:</strong></dt>
        <dd><input type="text" id="name" name="semestr" placeholder="wpisz semestr" required tabindex="4" /></dd>  
		
		<dt><strong>Kierunek:</strong></dt>
        <dd><input type="radio" id="name" name="kierunek" value="Informatyka" required />Informatyka</dd>
		<dd><input type="radio" id="name" name="kierunek" value="Informatyka i Ekonometria" required />Informatyka i Ekonometria</dd>
		<dd><input type="radio" id="name" name="kierunek" value="Dziennikarstwo i Komunikacja Społeczna" required />Dziennikarstwo i Komunikacja Społeczna</dd>
		
		<dt><strong>Stopień studiów:</strong></dt>
        <dd><input type="radio" name="stopien" value="Studia pierwszego stopnia" required />Studia pierwszego stopnia</dd>
		<dd><input type="radio" name="stopien" value="Studia drugiego stopnia"required />Studia drugiego stopnia</dd>
		
		<dt><strong>Specjalność:</strong></dt>
		<dd><select required name="specjalnosc" /></dd>
		<dd><option value=""/> Wybierz specjalnosc</option></dd>
        <dd><option value="Biznes elektroniczny" />Biznes elektroniczny</option></dd>
		<dd><option value="Informatyka ekonomiczna" />Informatyka ekonomiczna</option></dd>
		<dd><option value="Inżynieria systemów informatycznych zarządzania"/>Inżynieria systemów informatycznych zarządzania</option></dd>
		<dd><option value="Inżynieria wiedzy" />Inżynieria wiedzy</option></dd>
		<dd><option value="Metody i systemy wspomagania decyzji"/>Metody i systemy wspomagania decyzji</option></dd>
		<dd><option value="Zarządzanie projektami" />Zarządzanie projektami</option></dd>
		<dd><option value="Bazy danych i hurtownie danych"/>Bazy danych i hurtownie danych</option></dd>
		<dd><option value="Programowanie gier i aplikacji multimedialnych" />Programowanie gier i aplikacji multimedialnych</option></dd>
		<dd><option value="Zintegrowane systemy informatyczne zarządzania"/>Zintegrowane systemy informatyczne zarządzania</option></dd>
		<dd><option value="Nowe media i komunikacja elektroniczna w organizacjach" />Nowe media i komunikacja elektroniczna w organizacjach</option></dd>
		<dd><option value="Dziennikarstwo ekonomiczne i Public Relations"/>Dziennikarstwo ekonomiczne i Public Relations</option></dd>
		<dd><option value="Kultura i komunikacja międzykulturowa" />Kultura i komunikacja międzykulturowa</option></dd>
		</select>
		
		
		 <dt><strong>E-mail:</strong></dt> 
         <dd><input type="text" id="email" name="email" placeholder="wpisz email" required tabindex="5" /></dd>  
         
		<dt><strong>Średnia:</strong></dt>
        <dd><input type="text" id="name" name="srednia" placeholder="wpisz średnią" required tabindex="6" /></dd> 
		
        <dt><strong><p>Zainteresowania oraz </p><p>przykładowy temat pracy:</p></strong></dt>  
        <dd><textarea name="comment" id="comment" required tabindex="7"></textarea></dd> 
		
		<dt><strong>Wybieram promotora:</strong></dt>
		<dd><select required name="promotor" /></dd>
		<dd><option value=""/> Wybierz promotora</option></dd>
		<dd><option value="Dr Barbara Filipczyk"/>Dr Barbara Filipczyk</option></dd>
		<dd><option value="Prof. dr hab.inż. Antoni Niederliński"/>Prof. dr hab.inż. Antoni Niederliński</option></dd>
		<dd><option value="Prof. UE dr hab. Maria Mach-Król"/>Prof. UE dr hab. Maria Mach-Król</option></dd>
		<dd><option value="Prof. dr hab. Jerzy Gołuchowski"/>Prof. dr hab. Jerzy Gołuchowski</option></dd>
		<dd><option value="Prof. zw. dr hab. Henryk Sroka"/>Prof. zw. dr hab. Henryk Sroka</option></dd>
		<dd><option value="Prof. UE dr hab. Małgorzata Pańkowska"/>Prof. UE dr hab. Małgorzata Pańkowska</option></dd>
		<dd><option value="Dr inż. Janina Banasikowska"/>Dr inż. Janina Banasikowska</option></dd>
		<dd><option value="Dr inż. Krystian Gembala"/>Dr inż. Krystian Gembala</option></dd>
		<dd><option value="Dr Andrzej Sołtysik"/> 	Dr Andrzej Sołtysik</option></dd>
		<dd><option value="Dr Mariusz Żytniewski"/>Dr Mariusz Żytniewski</option></dd>
		<dd><option value="Dr Anna Sołtysik-Piorunkiewicz"/>Dr Anna Sołtysik-Piorunkiewicz</option></dd>
		<dd><option value="Dr Wiesław Wolny"/>Dr Wiesław Wolny</option></dd>
		<dd><option value="Dr Edyta Abramek"/>Dr Edyta Abramek</option></dd>
		<dd><option value="Dr Joanna Palonka"/>Dr Joanna Palonka</option></dd>
		<dd><option value="Dr Piotr Zadora"/>Dr Piotr Zadora</option></dd>
		<dd><option value="Dr Bogna Zacny"/>Dr Bogna Zacny</option></dd>
		<dd><option value="Dr Teresa Porębska-Miąc"/>Dr Teresa Porębska-Miąc</option></dd>
		</select>
		
		<dt><strong><p>Wybieram alternatywnego</p><p> promotora:</p></strong></dt>
		<dd><select required name="promotorr" /></dd>
		<dd><option value=""/> Wybierz alternatywnego promotora</option></dd>
		<dd><option value="Dr Barbara Filipczyk"/>Dr Barbara Filipczyk</option></dd>
		<dd><option value="Prof. dr hab.inż. Antoni Niederliński"/>Prof. dr hab.inż. Antoni Niederliński</option></dd>
		<dd><option value="Prof. UE dr hab. Maria Mach-Król"/>Prof. UE dr hab. Maria Mach-Król</option></dd>
		<dd><option value="Prof. dr hab. Jerzy Gołuchowski"/>Prof. dr hab. Jerzy Gołuchowski</option></dd>
		<dd><option value="Prof. zw. dr hab. Henryk Sroka"/>Prof. zw. dr hab. Henryk Sroka</option></dd>
		<dd><option value="Prof. UE dr hab. Małgorzata Pańkowska"/>Prof. UE dr hab. Małgorzata Pańkowska</option></dd>
		<dd><option value="Dr inż. Janina Banasikowska"/>Dr inż. Janina Banasikowska</option></dd>
		<dd><option value="Dr inż. Krystian Gembala"/>Dr inż. Krystian Gembala</option></dd>
		<dd><option value="Dr Andrzej Sołtysik"/> Dr Andrzej Sołtysik</option></dd>
		<dd><option value="Dr Mariusz Żytniewski"/>Dr Mariusz Żytniewski</option></dd>
		<dd><option value="Dr Anna Sołtysik-Piorunkiewicz"/>Dr Anna Sołtysik-Piorunkiewicz</option></dd>
		<dd><option value="Dr Wiesław Wolny"/>Dr Wiesław Wolny</option></dd>
		<dd><option value="Dr Edyta Abramek"/>Dr Edyta Abramek</option></dd>
		<dd><option value="Dr Joanna Palonka"/>Dr Joanna Palonka</option></dd>
		<dd><option value="Dr Piotr Zadora"/>Dr Piotr Zadora</option></dd>
		<dd><option value="Dr Bogna Zacny"/>Dr Bogna Zacny</option></dd>
		<dd><option value="Dr Teresa Porębska-Miąc"/>Dr Teresa Porębska-Miąc</option></dd>
		</select>

		</dl>
        
                  <input name="submit" type="submit" id="submit" tabindex="9" value="Wyślij" /> 
			  </fieldset>
              </form>
			  
<?php
} else {
if (!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['NR_albumu'])&& !empty($_POST['semestr'])&& !empty($_POST['kierunek'])&& !empty($_POST['stopien'])&& !empty($_POST['specjalnosc'])&& !empty($_POST['email'])&& !empty($_POST['srednia'])&& !empty($_POST['comment'])&& !empty($_POST['promotor'])&& !empty($_POST['promotorr'])) {
		$_POST['imie'] = strip_tags($_POST['imie']);
        $_POST['nazwisko'] = strip_tags($_POST['nazwisko']);
        $_POST['NR_albumu'] = strip_tags($_POST['NR_albumu']);
		$_POST['semestr'] = strip_tags($_POST['semestr']);
		$_POST['kierunek'] = strip_tags($_POST['kierunek']);
		$_POST['stopien'] = strip_tags($_POST['stopien']);
		$_POST['specjalnosc'] = strip_tags($_POST['specjalnosc']);
		$_POST['email'] = strip_tags($_POST['email']);
		$_POST['srednia'] = strip_tags($_POST['srednia']);
		$_POST['comment'] = strip_tags($_POST['comment']);
		$_POST['promotor'] = strip_tags($_POST['promotor']);
		$_POST['promotorr'] = strip_tags($_POST['promotorr']);
        $wiad = "<b>Imie:</b> $_POST[imie] <br /><b>Nazwisko:</b> $_POST[nazwisko] <br /><b>Numer_albumu:</b> $_POST[NR_albumu]  <br /><b>Semestr:</b> $_POST[semestr] <br /><b>Kierunek:</b> $_POST[kierunek] <br /><b>Stopien:</b> $_POST[stopien] <br /><b>Specjalnosc:</b> $_POST[specjalnosc] <br /><b>E-mail:</b> $_POST[email] <br /><b>Srednia:</b> $_POST[srednia] <br /><b>Zainteresowania i temat pracy:</b> $_POST[comment] <br /><b>Promotor:</b> $_POST[promotor] <br /><b>Alternatywny promotor:</b> $_POST[promotorr] ";
    $header  = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $header .= 'From: http://irmkow.cba.pl/~irmkoww/formularz/index.php' . "\r\n";
    @mail("irmina_kowalska@o2.pl","Formularz aplikacyjny $_POST[NR_albumu]","$wiad","$header") or die('Nie udało się wysłać wiadomości');
    echo "Wiadomość została wysłana";
	echo '<form method="POST" action="contactform.php"><input type="hidden" name="imiee" value="'.$_POST['imie'].'"/><input type="hidden" name="nazwiskoo" value="'.$_POST['nazwisko'].'"/><input type="hidden" name="NR_albumuu" value="'.$_POST['NR_albumu'].'"/><input type="hidden" name="semestrr" value="'.$_POST['semestr'].'"/><input type="hidden" name="kierunekk" value="'.$_POST['kierunek'].'"/><input type="hidden" name="stopienn" value="'.$_POST['stopien'].'"/><input type="hidden" name="specjalnosccc" value="'.$_POST['specjalnosc'].'"/><input type="hidden" name="emaill" value="'.$_POST['email'].'"/><input type="hidden" name="sredniaa" value="'.$_POST['srednia'].'"/><input type="hidden" name="commentt" value="'.$_POST['comment'].'"/><input type="hidden" name="proomotor" value="'.$_POST['promotor'].'"/><input type="hidden" name="prommotorr" value="'.$_POST['promotorr'].'"/><input name="generuj" type="submit" id="generuj" value="Generuj PDF" class="btn" /></form></font>';
}
	
else {
 echo "Wypełnij wszystkie pola poprawnie! ";
}
}
?>


<footer><?php include('common/footer.php');?></footer>
	</body>
</html>