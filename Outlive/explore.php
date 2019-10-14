<?php
include("connect.php");

#Search probability Values (100 aways find | 0 never find):
#Basic Stuff:
$find_woods = 800;
$find_scraps = 500;
$find_nails = 600;
$find_pipes = 220;
$find_coffees = 120;
$find_cigarettes = 100;
$find_gears = 80;
#Food and Water:
$find_vegetable_seeds = 90;
$find_vegetables = 70;
$find_meats = 40;
$find_canned_foods = 130;
$find_beers = 170;
$find_bottles_of_water = 90;
$fertilizers = 160;
#Medicine Stuff
$find_herbal_seeds = 90;
$find_medicines = 20;
$find_herbs = 80;
#Combat Stuff:
$find_guns = 10;
$find_bullets = 40;
$find_melee_weapons = 60;
$find_tools = 150;
$find_gun_parts = 50;


$_SESSION["msg"] = "<p>Exploration Found: </p>";

$query = "SELECT * FROM db_outlive.inventory WHERE game = $game";
$result = mysqli_query($connection, $query);
$inventory = mysqli_fetch_array($result);


#Basic Stuff:
$find = rand (0, 1000);
if($find < $find_woods) {
	$quant = rand (8, 15);
	$_SESSION["msg"] .= "<p>$quant woods</p>";
	$quant += $inventory["woods"];
	$query = "UPDATE db_outlive.inventory SET woods = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_scraps) {
	$quant = rand (5, 12);
	$_SESSION["msg"] .= "<p>$quant scraps</p>";
	$quant += $inventory["scraps"];
	$query = "UPDATE db_outlive.inventory SET scraps = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_nails) {
	$quant = rand (5, 10);
	$_SESSION["msg"] .= "<p>$quant nails</p>";
	$quant += $inventory["nails"];
	$query = "UPDATE db_outlive.inventory SET nails = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_pipes) {
	$quant = rand (2, 4);
	$_SESSION["msg"] .= "<p>$quant pipes</p>";
	$quant += $inventory["pipes"];
	$query = "UPDATE db_outlive.inventory SET pipes = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_coffees) {
	$quant = rand (5, 10);
	$_SESSION["msg"] .= "<p>$quant coffees</p>";
	$quant += $inventory["coffees"];
	$query = "UPDATE db_outlive.inventory SET coffees = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_cigarettes) {
	$quant = rand (3, 8);
	$_SESSION["msg"] .= "<p>$quant cigarettes</p>";
	$quant += $inventory["cigarettes"];
	$query = "UPDATE db_outlive.inventory SET cigarettes = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_gears) {
	$quant = rand (1, 2);
	$_SESSION["msg"] .= "<p>$quant gears</p>";
	$quant += $inventory["gears"];
	$query = "UPDATE db_outlive.inventory SET gears = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}








#Food and Water:
$find = rand (0, 1000);
if($find < $find_vegetable_seeds) {
	$quant = rand (1, 2);
	$_SESSION["msg"] .= "<p>$quant Vegetable seeds</p>";
	$quant += $inventory["vegetable_seeds"];
	$query = "UPDATE db_outlive.inventory SET vegetable_seeds = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_vegetables) {
	$quant = rand (1, 2);
	$_SESSION["msg"] .= "<p>$quant Vegetables</p>";
	$quant += $inventory["vegetables"];
	$query = "UPDATE db_outlive.inventory SET vegetables = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_meats) {
	$quant = 1;
	$_SESSION["msg"] .= "<p>$quant Meat</p>";
	$quant += $inventory["meats"];
	$query = "UPDATE db_outlive.inventory SET meats = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_canned_foods) {
	$quant = 1;
	$_SESSION["msg"] .= "<p>$quant Canned food</p>";
	$quant += $inventory["canned_foods"];
	$query = "UPDATE db_outlive.inventory SET canned_foods = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_beers) {
	$quant = rand (1, 4);
	$_SESSION["msg"] .= "<p>$quant Beers</p>";
	$quant += $inventory["beers"];
	$query = "UPDATE db_outlive.inventory SET beers = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_bottles_of_water) {
	$quant = rand (1, 2);
	$_SESSION["msg"] .= "<p>$quant Bottles Of Water</p>";
	$quant += $inventory["bottles_of_water"];
	$query = "UPDATE db_outlive.inventory SET bottles_of_water = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $fertilizers) {
	$quant = 1;
	$_SESSION["msg"] .= "<p>$quant Fertilizers</p>";
	$quant += $inventory["fertilizers"];
	$query = "UPDATE db_outlive.inventory SET fertilizers = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}







$find = rand (0, 1000);
if($find < $find_herbal_seeds) {
	$quant = rand (1, 2);
	$_SESSION["msg"] .= "<p>$quant Herbal seeds</p>";
	$quant += $inventory["herbal_seeds"];
	$query = "UPDATE db_outlive.inventory SET herbal_seeds = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_herbs) {
	$quant = rand (1, 2);
	$_SESSION["msg"] .= "<p>$quant Herbs</p>";
	$quant += $inventory["herbs"];
	$query = "UPDATE db_outlive.inventory SET herbs = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_medicines) {
	$quant = 1;
	$_SESSION["msg"] .= "<p>$quant Medicine</p>";
	$quant += $inventory["medicines"];
	$query = "UPDATE db_outlive.inventory SET medicines = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}







$find = rand (0, 1000);
if($find < $find_guns) {
	$quant = 1;
	$_SESSION["msg"] .= "<p>$quant Gun</p>";
	$quant += $inventory["guns"];
	$query = "UPDATE db_outlive.inventory SET guns = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_bullets) {
	$quant = rand(2, 4);
	$_SESSION["msg"] .= "<p>$quant Bullets</p>";
	$quant += $inventory["bullets"];
	$query = "UPDATE db_outlive.inventory SET bullets = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_melee_weapons) {
	$quant = 1;
	$_SESSION["msg"] .= "<p>$quant Melee weapon</p>";
	$quant += $inventory["melee_weapons"];
	$query = "UPDATE db_outlive.inventory SET melee_weapons = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_tools) {
	$quant = 1;
	$_SESSION["msg"] .= "<p>$quant Tool</p>";
	$quant += $inventory["tools"];
	$query = "UPDATE db_outlive.inventory SET tools = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}
$find = rand (0, 1000);
if($find < $find_gun_parts) {
	$quant = rand (1,2);
	$_SESSION["msg"] .= "<p>$quant Gun parts</p>";
	$quant += $inventory["gun_parts"];
	$query = "UPDATE db_outlive.inventory SET gun_parts = $quant WHERE game = $game";
	$result = mysqli_query($connection, $query);
}







#exploration Danger:
$danger = 'false';
#Find a Creature
$danger_chance = rand (0, 1000);
if($danger_chance < 100){
	$_SESSION["msg"] .= "<p>You found a Creature";
	
	#Updating Story
	$story .= '<center><p>i found one of that things'; 

	$danger = 'true';

	$random = rand(0,100);
	#it see you chance
	if ($random < 20){
		$_SESSION["msg"] .=", but it didnt see you.</p>";

		#Updating Story
		$story .= ' but it didnt see me, i was bad scared</p></center>';

		$danger = 'false';
	}else{
		$_SESSION["msg"] .=":</p>";
		#If you have a melee weapon:
		if (isset($_POST['melee']) and $danger == 'true'){
			$random = rand (0, 100);
			if ($random < 70){
				$_SESSION["msg"] .="<p>You had a melee weapon, you manage to escape.</p>";
				$danger = 'false';
				$query = "UPDATE db_outlive.inventory SET melee_weapons = melee_weapons-1 WHERE game = $game";
				$result = mysqli_query($connection, $query);

				#Updating Story
				$story .= ' somehow i manage to escape, weapons are really a need</p></center>';
			}else{
				$_SESSION["msg"] .="<p>You had a melee weapon, but it was not enough.</p>";
				$danger = 'true';
				$query = "UPDATE db_outlive.inventory SET melee_weapons = melee_weapons-1 WHERE game = $game";
				$result = mysqli_query($connection, $query);
			}
		}

		#IF you have a gun
		if(isset($_POST['gun']) and $danger == 'true'){
			$_SESSION["msg"] .="<p>You pulled your gun, ";
			for($i = 1; $i <= $inventory["bullets"]; $i++){

				$random = rand (1, 2);
				if ($random == 1){
					$_SESSION["msg"] .="shot $i times and manage to escape.</p>";
					$query = "UPDATE db_outlive.inventory SET bullets = bullets-$i WHERE game = $game";
					$result = mysqli_query($connection, $query);
					$danger = 'false';
					#Updating Story
					$story .= ' my hands still smell like gunpowder, still better than dying</p></center>';
					break;
				}
			}
			if($danger == 'true'){
				$_SESSION["msg"] .="unloaded it, but it was not enough.</p>";
				$query = "UPDATE db_outlive.inventory SET bullets = bullets-bullets WHERE game = $game";
				$result = mysqli_query($connection, $query);

			}
		}
	if($danger == 'true'){
		$_SESSION["msg"] .="20 life Damage</p>";
		$query = "UPDATE db_outlive.player SET life = life-20 WHERE game = $game";
		$result = mysqli_query($connection, $query);
		#Updating Story
		$story .= '</p></center>';
	}
	}
}

$danger = 'false';
#Find people:
$danger_chance = rand (0, 1000);
if($danger_chance < 10){
	$_SESSION["msg"] .= "<p>You meet ";
	$random = rand (1, 2);
	#Good pelople
	if ($random == 1){
		$_SESSION["msg"] .="friendly people</p>";
	}
	#Bad pelople
	else{
		$_SESSION["msg"] .="dangerous people";
		#they see you chance
		$random = rand (1, 2);
		if ($random == 1){
			$_SESSION["msg"] .=", but they didnt see you.</p>";
		}else{
			$_SESSION["msg"] .=":</p>";
		}
	}

	
}


?>