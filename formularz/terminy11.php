<?php

//inkluder plików do wszystkich stron

/*include('include/includer.php');

*/

include('include/session.php');

mysql_connect('localhost','irmkoww','A123456a');

mysql_select_db('irmkow');

$activ='terminy';



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

		<article><aside> <script>

$(function() {

$( "#datepicker" ).datepicker();

});

</script></aside>

		</head>

	<body>

	<?php

	/*if($_SESSION['id_user']>0)

	{

	include('terminy.php');

	}*/

	?>

	

	<div class="row">

		<div class="span6">

		<div class="table table-bordered" style="background-color:#F9F9F9;padding:15px">

		<?php

	         $sql="SELECT id, data, opis FROM terminy  ";

		

					

							$query = mysql_query($sql); 

							while($row = mysql_fetch_array($query))

								{

	

									echo '<tr>';

									echo'<p style="font-size:18px;">Data: '.$row['data'].'</p>';

									echo'<p style="font-size:18px;border-bottom:1px solid #e6e4dd;margin-bottom:10px">Opis: '.$row['opis'].'</p>';

									

									echo'</tr>';

									}

  

				

						?>



		</div>

		</div>

		<div class=" span2 offset2 ">

<div id="datepicker"></div>

		</div>

		</div>

		

					

			

						<footer>	<?php include('common/footer.php');?></footer>

	</article></body>

</html>

