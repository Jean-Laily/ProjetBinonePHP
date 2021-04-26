<?php
	
	if(isset($_POST["id"]) and isset($_POST["pass"]))
	{
	
		$_SESSION["id"] = $_POST["id"];
		$_SESSION["pass"] = $_POST["pass"] ;
	
	}
	else
	{
		return false;
	}

	echo "affiche moi ....... ($id)";
	echo "affiche moi ....... ($pass)";
?>

	<div class="articleBox">
		<article>
			<h2>Ma Formations</h2>
			<div class="Slider"><img src="" alt="imageFormation" /></div>
			<div>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</article>
	</div>
<?
	include("./structurePage/hautHTML.php");
	include("./structurePage/basHTML.php");


?>
   