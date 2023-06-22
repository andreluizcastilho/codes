<style>
body {
 background-image: url("back-poker.jpg");
 background-size: 100%;
}

#div1 {
		background-image: url("img1.jpg");
		background-size: 100%;
		float:left;
	  }

#div2 {
		border-style: solid;
		float: left;
		height: 750px;
		width: 1000px;
      }
	  
.board-area {
  position: absolute;
  top: 300px;
  right: 480px;
  width: 600px;
  height: 250px;
  #border: 3px solid #73AD21;
}

.pot-area {
  position: relative;
  width: 100%;
  height: 50px;
  background-color: #808000;
  #border: 3px solid #73AD21;
  bottom: 0;
  position: absolute;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 45px;
  color: #00FF00;
  
}

.pot-text {
	position: relative;
	padding-top: 15px;
}


.card-player-area {
  position: absolute;
  top: 30px;
  left: 300px;
  width: 1200px;
  height: 240px;
  #border: 5px solid #F0F8FF;
}

.card-player {
  position: relative;
  float: left;
  width: 297px;
  height: 120px;
  border: 5px solid #F0F8FF;
  background-color: #696969;
  margin-right: 20px;  
}

.card-player-img {
	#border: 5px solid #F0F8FF;
	float: left;
	height: 100%;
	width: 80px;
	object-fit: cover;
	
}

.cards-and-position {
	#border: 5px solid #778899;
	float: left;
	height: 32%;
	width: 216px;
	background-color: #778899;
	color: #FFFFFF;  
	font-size: 25px;
}

.card-player-name {
	border: 5px solid #8B4513;
	float: left;
	height: 25%;
	width: 207px;
	background-color: #8B4513;
	color: #FFFFFF;  
	font-size: 25px;
}

.name {
	padding-left: 10px;
	font-family: Arial, Helvetica, sans-serif;
}


.card-player-action {
	border: 5px solid black;
	float: left;
	height: 27%;
	width: 207px;
	background-color: black;
	color: #FFFFFF;  
	font-size: 25px;
}

.position {
	float: left;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 35px;
	background-color: black;
	color: #FFFFFF;
	margin-left: 8px;
	padding-left: 5px;
	padding-right: 5px;
}


.card-item-small {
  background-color: white;
  color: black;
  font-size: 33px;
  padding: 5px;
  border-radius: 5%;
  box-shadow: 0px 5px 15px grey;
  width: 50px;
  height: 60px;
  margin-top: -30px;
  margin-left: 10px;
  float: left;
 
}

.card-value-small-red {
	font-size: 41px;
	font-family: Arial, Helvetica, sans-serif;
	color: #d1555a;
	float: left;
	margin-top: 8px;
}

.card-value-small-black {
	font-size: 41px;
	font-family: Arial, Helvetica, sans-serif;
	color: #464655;
	float: left;
	margin-top: 8px;
}

.naipe-small {  
	float: left; 
	margin-top: 18px;
	width: 17px;
	height: 25px;
	margin-left: 1px;
}

.card-item-normal {
  background-color: white;
  color: black;
  font-size: 33px;
  padding: 5px;
  border-radius: 5%;
  box-shadow: 0px 5px 15px grey;
  width: 100px;
  height: 140px;
  margin-top: 20px;
  margin-left: 10px;
  float: left;
 
}

.card-value-normal-black {
	font-size: 75px;
	font-family: Arial, Helvetica, sans-serif;
	color: #464655;
	float: left;
	margin-top: 28px;
}

.card-value-normal-red {
	font-size: 75px;
	font-family: Arial, Helvetica, sans-serif;
	color: #d1555a;
	float: left;
	margin-top: 28px;
}

.naipe-normal {  
	float: left; 
	margin-top: 47px;
	width: 34px;
	height: 49px;
	margin-left: 7px;
}

.cropped1 {
    height: 100%;
	width: 80px;
    object-fit: cover;
    #border: 5px solid black;
}


.cropped3 {
    width: 200px; /* width of container */
    height: 200px; /* height of container */
    object-fit: cover;
    border: 5px solid black;
}
.cropped2 {
    width: 200px; /* width of container */
    height: 200px; /* height of container */
    object-fit: cover;
    object-position: 20px 10px; /* try 20% 10% */ 
    border: 5px solid black;
}




.actions { color: #00FF00;  font-size: 25px; border-bottom-style: dotted; padding: 10px 0 10px 0; font-family: Arial, Helvetica, sans-serif;}

.divsub { color: #FF4500;  font-size: 18px; background-color: black; font-family: Arial, Helvetica, sans-serif;}



.grid-2 {
  display: grid;
  grid-template-columns: repeat(1, 100px);
  margin-left: 20px;  
  float: left;
}

.heart-2 {
  font-size: 3em;
  color: red;
  margin-top: -20px;
  margin-left: 20px;
}


.diamond {
  font-size: 3em;
  color: red;
  margin-top: -20px;
  margin-left: 20px;
}

.club {
  font-size: 3em;
  color: black;
  margin-top: -20px;
  margin-left: 20px;
}

.spade {
  font-size: 3em;
  color: black;
  margin-top: -20px;
  margin-left: 20px;
}


.top-left-2 {
  font-size: 55px;
}

.grid-item-2 {
  background-color: white;
  color: black;
  font-size: 33px;
  padding: 5px;
  border-radius: 5%;
  box-shadow: 0px 5px 15px grey;
}


#toggle-1 {
   display:none;
}

#mostra {
   display:none;
}

/* CSS quando o checkbox está marcado */
#toggle-1:checked ~ #mostra {
   display:block;
}




</style>


<?php
#http://localhost:8080/wit_allien/background2.php
#http://localhost:8080/phpmyadmin4.9.7/index.php

$action_card = array(
    "1" => array(
         "position" => array(
             "sb" => "raise", 
			 "value" => "1500000"
			 
         ),
		 "next" => array(
             "bb" => ". . ."
         )
		 
    )
);

/*
$array = [
    "ordem" => "1",
    "bar" => "foo",
];
*/

var_dump($action_card);
echo $action_card[1]['position']['sb']; 

?>