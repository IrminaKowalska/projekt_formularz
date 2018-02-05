<?php

//inkluder plików do wszystkich stron

/*include('include/includer.php');

*/

include('include/session.php');

mysql_connect('localhost','irmkoww','A123456a');

mysql_select_db('irmkow');

$activ='promotorzy';

?>

<!DOCTYPE html>

<html>

	<head>

		<?php 

			include('common/meta.php');

			include('common/header.php');	

		?>

		<meta charset="UTF-8"/>

		</head>

	<body><article>

	<?php

 if($_POST['zapisz'])

		{

		if($_POST['kierunek']){$kierunek = strip_tags($_POST['kierunek']);}

		}

	if($_SESSION['id_user']>0)

	{

	include('dziekanat.php');

	}

	?>

		

	<form method="POST" action="">

			<div class="offset4 span5">

				<select name="kierunek">

					<option value="wszyscy">Wszyscy</option>

					<option value="informatyka i ekonometria">Informatyka i Ekonometria</option>

					<option value="informatyka">Informatyka</option>

					

				</select>

				<div class="control-group">

					<div class="controls">		

						<input type="submit" class="btn btn-info" name="zapisz" value="Wyświetl" style="margin-left:70px;"/>

					</div>

				</div>

			</form>	

			</div>

	<header><legend><p style="color:#02A">LISTA PROMOTORÓW</p></legend></header>

					<table class="table table-bordered table-hover" >

						<tr class="success">

							

							<td><p style="font-size:18px;">Imię i nazwisko</p></td>

							<td><p style="font-size:18px;">Opis</p></td>

							<td><p style="font-size:18px;">Kierunek</p></td>

							

						</tr>				

		<?php

							

							if($kierunek=='informatyka i ekonometria')

							{

							$sql="SELECT id,  imie, opis, kierunek FROM promotorzy WHERE kierunek='informatyka i ekonometria' ORDER BY opis ASC";

							}

						    elseif($kierunek=='informatyka')

							{

							$sql="SELECT id,  imie, opis, kierunek FROM promotorzy WHERE kierunek='informatyka' ORDER BY opis ASC";

							}

							elseif($kierunek=='Wszyscy')

							{

							$sql="SELECT id,  imie, opis, kierunek FROM promotorzy  ORDER BY opis ASC";

							}

							else

							{

							$sql="SELECT id,  imie, opis, kierunek FROM promotorzy  ORDER BY opis ASC";

							}

					

							$query = mysql_query($sql); 

							while($row = mysql_fetch_array($query))

								{

	

									echo '<tr>';

									

									echo'<td>'.$row['imie'].'</td>';

									echo'<td>'.$row['opis'].'</td>';

									echo'<td>'.$row['kierunek'].'</td>';

									echo'</tr>';

									}

  

				

						?>

					</table>

			

							<footer><?php include('common/footer.php');?></footer>

	</article></body>

</html>