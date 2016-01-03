<?php

#Hey, welcome, these are the achievements I did :) 
#They all work; But aren't written in your syntax. I didn't really know how to include your syntax into my functions; I'm not good at stuff like this
#Therefore, this requires a bit of work from your side :)

#APIKEY
$apikey = "...";

#Summoner ID
$summonerid = "50716823";

#Get matchlist from rito :)																			Did not know if only SoloQ or also Teamranked counts
$url_matchlist = 'https://euw.api.pvp.net/api/lol/euw/v2.2/matchlist/by-summoner/' . $summonerid . '?rankedQueues=RANKED_SOLO_5x5&api_key=' . $apikey;
$obj_matchlist = json_decode(file_get_contents($url_matchlist), true);





#Achievement1: Played over x Support games? "MasterSupport"

function MasterSupport(){
	
	$x = 10;
	$matches = 0;

	for($i=0; $i < count($obj_matchlist["matches"]); $i++) {

		if($obj_matchlist["matches"][$i]["role"] == "DUO_SUPPORT") {

			$matches++;

			if($matches >= $x) {

				#What happens if the player played x support games?

				echo "true";

				return true;

			}

		}

	}

	return false;

}





#Achievement2: Played over x ADC games? "MasterCarry"

function MasterCarry(){
	
	$x = 10;
	$matches = 0;

	for($i=0; $i < count($obj_matchlist["matches"]); $i++) {

		if($obj_matchlist["matches"][$i]["role"] == "DUO_CARRY") {

			$matches++;

			if($matches >= $x) {

				#What happens if the player played x carry games?

				echo "true";

				return true;

			}

		}

	}

	return false;

}





#Achievement3: Played over x Midlane games? "Master of the Midlane"

function MasterMid(){
	
	$x = 10;
	$matches = 0;

	for($i=0; $i < count($obj_matchlist["matches"]); $i++) {

		if($obj_matchlist["matches"][$i]["lane"] == "MID") {

			$matches++;

			if($matches >= $x) {

				#What happens if the player played x mid games?

				echo "true";

				return true;

			}

		}

	}

	return false;

}





#Achievement4: Played over x Jungle games? "MasterJungler"

function MasterJungler(){
	
	$x = 10;
	$matches = 0;

	for($i=0; $i < count($obj_matchlist["matches"]); $i++) {

		if($obj_matchlist["matches"][$i]["lane"] == "JUNGLE") {

			$matches++;

			if($matches >= $x) {

				#What happens if the player played x jungle games?

				echo "true";

				return true;

			}

		}

	}

	return false;

}





#Achievement5: Played over x Top games? "MasterTop"

function MasterTop(){
	
	$x = 10;
	$matches = 0;

	for($i=0; $i < count($obj_matchlist["matches"]); $i++) {

		if($obj_matchlist["matches"][$i]["lane"] == "TOP") {

			$matches++;

			if($matches >= $x) {

				#What happens if the player played x top games?

				echo "true";

				return true;

			}

		}

	}

	return false;

}



?>