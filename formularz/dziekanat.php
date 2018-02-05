<?php



//inkluder plików do wszystkich stron

/* include('include/includer.php');

 */

include('include/session.php');

mysql_connect('localhost','irmkoww','A123456a');

mysql_select_db('irmkow');

$activ='dziekanat';

?><?php/ob_start(); ?>



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

			



		<?php if($_SESSION['login']=='irmina')

			{?>		 

			

			<?php 

if($_POST['zapisz'])

{

//if($_POST['opis']!='' and $_POST['imie']!='')

$lp_zapisz			= $_POST['lp_zapisz'];

{

if($lp_zapisz>0)

	{

				$sql="Update `promotorzy` set  imie='".$_POST['imie']."',opis='".$_POST['opis']."',kierunek='".$_POST['kierunek']."' where id='$lp_zapisz'";	

		$update=mysql_query($sql);

	}

	else

	{

	$sql="Insert into promotorzy (imie,opis,kierunek) values ('".$_POST['imie']."','".$_POST['opis']."','".$_POST['kierunek']."')";

	$insert=mysql_query($sql);

	echo "Rekord został pomyślnie dodany";

}

}

}

if($_POST['lp_edytuj']>0)

{

	$lp=$_POST['lp_edytuj'];

	$sql="SELECT id, imie, opis, kierunek FROM promotorzy where id=$lp";

	$select=mysql_query($sql);

	$row = mysql_fetch_array($select);

	$opis=$row['opis'];

	$imie=$row['imie'];

	$kierunek=$row['kierunek'];

}

else 

{

    $lp=0;

	

	$imie="";

	$kierunek="";

}

if($_POST['usun'])

{

	$lpu=$_POST['lp_usun'];

	$sql="Delete from promotorzy where id=$lpu";

	$delete=mysql_query($sql);

	echo "Rekord został pomyślnie skasowany";

}

?>

<?php

	

//if($_SESSION['su']==1)

	//{

	?>

	

                        <form id="form" action="" method="post">

					<fieldset>

							<legend><p>Dodawanie nowego promotora</p></legend>

							<dl>

							<input type="hidden" value="<?php echo $lp; ?>" name="lp_zapisz"/>

						    

								

							<dt><strong>Imię i nazwisko:</strong></dt>

							<dd><input  type="text" name="imie"  value="<?php echo $imie; ?>" id="imie" placeholder="wpisz imie i nazwisko"/></dd>

								

							<dt><strong>Opis:</strong></dt>

							<dd><textarea  type="commet" name="opis" value="<?php echo $opis; ?>" id="opis" placeholder="wpisz opis"/></textarea></dd>

								

						    <dt><strong>Kierunek:</strong></dt>

							<dd><input type="text" name="kierunek" value="<?php echo $kierunek; ?>" id="kierunek" placeholder="wpisz kierunek"/></dd>

								</dl>

								

								<input name="zapisz" type="submit" id="submit" value="Zapisz" /> </font>

									

								

							</fieldset>

							</form>

						

					

					<?/*============================================================Edycja głownych tematów=======================================================================================*/?>			

					<legend><p> Edycja promotorów</p></legend>

					<table class="table table-bordered table-hover">

						<tr class="success">

							

							<td><p  style="font-size:18px;">Imię i nazwisko</p></td>

							<td><p  style="font-size:18px;">Opis</p></td>

							<td><p  style="font-size:18px;">Kierunek</p></td>

							<td><p  style="font-size:18px;">Edycja</p></td>

							<td><p style="font-size:18px;">Usuwanie</p></td>

						</tr>						

							<?php

							$sql="SELECT id, imie, opis, kierunek FROM promotorzy  ORDER BY opis ASC";

							$query = mysql_query($sql); 

							while($row = mysql_fetch_array($query))

							{

								echo '<tr>';

									

									echo'<td>'.$row['imie'].'</td>';

									echo'<td>'.$row['opis'].'</td>';

									echo'<td>'.$row['kierunek'].'</td>';

									

									

									

									echo'<td>

									<form action="" method="POST">

											<input type="hidden" name="lp_edytuj" value="'.$row['id'].'"/>

											<input type="submit" class="btn btn-success" name="edytuj" value="Edytuj"/>

										</form></td>';

									

									echo'<td>

										<form action="" method="POST">

											<input type="hidden" name="lp_usun" value="'.$row['id'].'"/>

											<input type="submit" class="btn btn-danger" name="usun" value="Usuń"/>

										</form></td>';

										echo '</tr>';

									

									

									

							}

						?>

					</table>



			<?php 

			}else{

			echo '<div class="offset4 span5">

		<form action="logowanie.php" method="POST">

					<input type="text" name="login" class="input-small" placeholder="Login">

					<input type="password" name="pass" class="input-small" placeholder="Hasło">

					<input type="submit" class="btn btn-info" value="zaloguj"/>

				</form>

				</div>';

			

			}

			

?>

		



<footer><?php include('common/footer.php');?></footer>

	</body>

</html>	