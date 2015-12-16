<div id="content-wrap"><div id="content">		
	
	<div id="sidebar" >
		<div class="sidebox">	
		
			<h1 class="clear"><a href="index.php">Home</a></h1>
			<h1 class="clear"><a href="index.php?view=kategorie">Kategorie</a></h1>
			<h1 class="clear"><a href="index.php?view=logowanie">Logowanie</a></h1>
			<?php
				if(isset($_SESSION[user_id]))
				{
					$nazwa = $_SESSION['nazwa'];
					echo "<h1 class=\"clear\"><a href=\"index.php?view=wyloguj\">Wyloguj</a></h1>";
					echo "<h1>Jesteś zalogowany jako:<br/>".$nazwa."</h1>";
				}
			?>
			
		</div>	
				
	</div>
		
<div id="main">