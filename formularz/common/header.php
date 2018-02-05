<div id="dialog" title="Uwaga"></div>

	<div class="container">

	<div class="row">

		<div class="span16"><a href="https://www.ue.katowice.pl/">

			<img style="width:370px; height:200px" src="style/img/logo.jpg"><img style=" width:550px; height:200px" src="style/img/wydzial.jpg"></a></div>

<div class="offset2 span5" style="float:right">	

			

					<?php



    session_start();  

	



  if (isset($_SESSION['login']))/// czy nie jest ustawiona wartosc sesji login

	{ 

    		echo'<span style="margin-right: 10px;margin-left: 80px;">Zalogowany jako '.$_SESSION['login'].'</span>';

				

				echo '<a href="ses_logout.php" target="_self" title="Wyloguj" class="btn btn-info">Wyloguj</a>';

	} 

	

?>

</div> 





				

			<div class="span12">

			

			

				

					

						<ul class="nav nav-tabs" style="margin-top: 15px;">

                          <li <?if($activ=='promotorzy'){echo 'class="active"';}?>><a href="promotorzy.php"><h3>Promotorzy</h3></a></li>

						  <li <?if($activ=='formularz'){echo 'class="active"';}?>><a href="formularz.php"><h3>Formularz aplikacyjny</h3></a></li>

						  <li <?if($activ=='terminy'){echo 'class="active"';}?>><a href="terminy.php"><h3>Terminy</h3></a></li>

						  <li <?if($activ=='dziekanat'){echo 'class="active"';}?>><a href="dziekanat.php"><h3>Dziekanat</h3></a></li>

						  <li <?if($activ=='dziekanatki'){echo 'class="active"';}?>><?php if($_SESSION['login']=='irmina'){echo '<a href="dziekanatki.php"><h3>Formularz</h3></a></li>';}?>

						  <?php /*if($_SESSION['id_user']>0){ echo '<li><a href="dziekanat.php"><h4>Edycja promotorzy</h4></a></li>';}*/?>

						  <?php /*if($_SESSION['id']>0){ echo '<li><a href="terminy11.php"><h4>Edycja terminy</h4></a></li>';}*/?>

						</ul>	

       

				

				</div>

				

				

		

		</div>