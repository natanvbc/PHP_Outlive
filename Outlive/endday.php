<?php
session_start();
include("connect.php");
if(empty($_POST["user"]) || empty($_POST["game"])){
	header("Location: gamepage.php");
	exit();
}

$user = $_POST["user"];
$game = $_POST["game"];

#Authenticating User:
$query = "SELECT * FROM db_outlive.game WHERE user = $user and id = $game";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);

if($row["day"] == NULL){
    header("Location: userpage.php");
	exit();
#IF User is Right:
}else{
	#Updating Day value
	$day = $row["day"]+1;
	$query = "UPDATE db_outlive.game SET day = $day WHERE user = $user and id = $game";
	$result = mysqli_query($connection, $query);

	#PLAYER INFORMATION
	$query = "SELECT * FROM db_outlive.player WHERE game = $game and user = $user";
	$result = mysqli_query($connection, $query);
	$player = mysqli_fetch_array($result);



	#If Explore Option Call Explore Page
	if (isset($_POST['explore'])){
		include("explore.php");
		$query = "UPDATE db_outlive.player SET rest = rest-30 WHERE game = $game";
		$result = mysqli_query($connection, $query);
	}else{
		$rest_bonus = rand(1, 2);
		if($_SESSION["bed"] > 0 and $rest_bonus == 1){
			$_SESSION["msg"] .= "<p>A bed is really comfortable, +20 rest bonus</p>";
			#Updating player rest value
			$query = "UPDATE db_outlive.player SET rest = rest+60 WHERE game = $game";
			$result = mysqli_query($connection, $query);
		}else{
			#Updating player rest value
			$query = "UPDATE db_outlive.player SET rest = rest+40 WHERE game = $game";
			$result = mysqli_query($connection, $query);
		}
		
	}

	#Updating player Life
	if ($player["hunger"] <= 0) {
		$query = "UPDATE db_outlive.player SET life = life-10 WHERE game = $game";
		$result = mysqli_query($connection, $query);
	}
	if ($player["thirst"] <= 0) {
		$query = "UPDATE db_outlive.player SET life = life-25 WHERE game = $game";
		$result = mysqli_query($connection, $query);
	}
	
	include('playernormalize.php');

	#Updating player Hunger
	$query = "UPDATE db_outlive.player SET hunger = hunger-20 WHERE game = $game";
	$result = mysqli_query($connection, $query);

	#Updating player thirst
	$query = "UPDATE db_outlive.player SET thirst = thirst-25 WHERE game = $game";
	$result = mysqli_query($connection, $query);

	include('playernormalize.php');

	#see if is raining
	$rain = rand (0, 100);
	if($rain < 20) {
		$_SESSION["rain"] = "<p>Its Raining";
		if ($_SESSION["watercollector"] > 0) {
			$quant = rand(3, 6) * $_SESSION["watercollector"];
			$_SESSION["rain"] .= ", You filled $quant bottles of water</p>";
			$query = "UPDATE db_outlive.inventory SET bottles_of_water = bottles_of_water+$quant WHERE game = $game";
			$result = mysqli_query($connection, $query);
		}else{
			$_SESSION["rain"] .= "</p>";
		}
	}else{
		$_SESSION["rain"] = "";
	}

	if($result){
	    header("Location: gamepage.php?game=$game");
	}else{
	    header("Location: index.php");
	}
}
?>