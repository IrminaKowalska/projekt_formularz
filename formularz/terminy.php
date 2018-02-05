<?php

//inkluder plików do wszystkich stron

/* include('include/includer.php');

 */

include('include/session.php');

mysql_connect('localhost','irmkoww','A123456a');

mysql_select_db('irmkow');

$activ='terminy';

?>

<?php ob_start(); ?>

<!DOCTYPE html>

<html lang="pl-PL"> 

<html>

	<head>

		<?php 

			include('common/meta.php');

			include('common/header.php');

		?>



	<link rel="stylesheet" href="main.css" media="all" type="text/css"/>

 <script>

$(function() {

$( "#datepicker" ).datepicker();

});

</script>

<meta charset="UTF-8"/>

	</head>

	<body>

<?php if($_SESSION['login']=='irmina')

			{

			?>

	<?php 

if($_POST['przycisk'])

{

//if($_POST['data']!='' and $_POST['opis']!='')

$data_zapisz			= $_POST['data_zapisz'];

{

if($data_zapisz>0)

	{

				$sql="Update `terminy` set data='".$_POST['data']."', opis='".$_POST['opis']."' where id='$data_zapisz'";	

		$update=mysql_query($sql);

	}

	else

	{

	$sql="Insert into terminy (data,opis) values ('".$_POST['data']."','".$_POST['opis']."')";

	$insert=mysql_query($sql);

	echo "Rekord został pomyślnie dodany";

}

}

}

if($_POST['data_edytuj']>0)

{

	$Data=$_POST['data_edytuj'];

	$sql="SELECT id, data, opis FROM terminy where id=$Data";

	$select=mysql_query($sql);

	$row = mysql_fetch_array($select);

	$data=$row['data'];

	$opis=$row['opis'];

	

}

else 

{

	$Data=0;

	$opis="";

	

}

if($_POST['usun'])

{

	$data_usun=$_POST['data_usun'];

	$sql="Delete from terminy where id=$data_usun";

	$delete=mysql_query($sql);

	echo "Rekord został pomyślnie skasowany";

}



?>

	<div class="row">

	<div class="span6">

						<form id="termin" action="" method="post">

					<fieldset>

							<legend><p>Dodawanie nowego terminu</p></legend>

							<dl>

							<input type="hidden" value="<?php echo $Data; ?>" name="data_zapisz"/>

						    <dt><strong>Data:</strong></dt>

							<dd><input type="text" name="data" id="data" value="<?php echo $data; ?>"  placeholder="wpisz date"/></dd>

								

							<dt><strong>Opis:</strong></dt>

							<dd><textarea  type="text" name="opis"  value="<?php echo $opis; ?>" id="opis" placeholder="wpisz opis terminu"/></textarea></dd>

								</dl>

								

								<input name="przycisk" type="submit" id="przycisk" value="Zapisz" /> </font>

									

								

							</fieldset>

							</form>

	</div>

	<div class=" span2 offset2 ">

<div id="datepicker"></div>

		</div>

		</div>

				

				

					<legend><p> Edycja terminów</p></legend>

					<table class="table table-bordered table-hover">

						<tr class="success">

							<td><p  style="font-size:18px;">Data</p></td>

							<td><p  style="font-size:18px;">Opis</p></td>

							<td><p  style="font-size:18px;">Edycja</p></td>

							<td><p  style="font-size:18px;">Usuwanie</p></td>

						</tr>				

			

							<?php

							$sql="SELECT id, data, opis FROM terminy  ";

							$query = mysql_query($sql); 

							while($row = mysql_fetch_array($query))

							{

								echo '<tr>';

									echo'<td>'.$row['data'].'</td>';

									echo'<td>'.$row['opis'].'</td>';

									

									

									echo'<td>

									<form action="" method="POST">

											<input type="hidden" name="data_edytuj" value="'.$row['id'].'"/>

											<input type="submit" class="btn btn-success" name="edytuj" value="Edytuj"/>

										</form></td>';

									echo'<td>

										<form action="" method="POST">

											<input type="hidden" name="data_usun" value="'.$row['id'].'"/>

											<input type="submit" class="btn btn-danger" name="usun" value="Usuń"/>

										</form></td>';

									

										echo '</tr>';

									

									

									

							}

						?>

						</table>

<?php

			

			}else{

				header('location:terminy11.php');

			}

?>		

	

	<footer>	<?php include('common/footer.php');?></footer>

	

	</body>



</html>

