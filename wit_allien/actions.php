
<style>

.fold {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: rgba(220, 0, 0, 1);
    background-image: linear-gradient(to top left, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) 30%, rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, 0.6), inset -2px -2px 3px rgba(0, 0, 0, 0.6);
}

.call {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: #00ff00;
    background-image: linear-gradient(to top left, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) 30%, rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, 0.6), inset -2px -2px 3px rgba(0, 0, 0, 0.6);
}

.raise {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: #FFD700;
    background-image: linear-gradient(to top left, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) 30%, rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, 0.6), inset -2px -2px 3px rgba(0, 0, 0, 0.6);
}

.reraise {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: #9932CC;
    background-image: linear-gradient(to top left, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) 30%, rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, 0.6), inset -2px -2px 3px rgba(0, 0, 0, 0.6);
}

.iniciar {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: #48D1CC;
    background-image: linear-gradient(to top left, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) 30%, rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, 0.6), inset -2px -2px 3px rgba(0, 0, 0, 0.6);
}

</style>



<button class="favorite iniciar" type="button">
    INICIAR
</button>


<?php


$ranks = [
		  ["As", "Qs"], ["Ah", "Qh"], ["Ac", "Qc"], ["Ad", "Qd"], 
		  ["As", "Js"], ["Ah", "Jh"], ["Ac", "Jc"], ["Ad", "Jd"], 
		  ["Ks", "Qs"], ["Kh", "Qh"], ["Kc", "Qc"], ["Kd", "Qd"], 
		  ["As", "Kc"], ["As", "Kh"], ["As", "Kd"], ["Ac", "Ks"], ["Ac", "Kh"], ["Ac", "Kd"], ["Ah", "Kc"], ["Ah", "Ks"], ["Ah", "Kd"], ["Ad", "Kc"], ["Ad", "Kh"],
		  ["4s", "4c"], ["4s", "4d"], ["4s", "4h"], ["4c", "4d"], ["4c", "4h"], ["4d", "4h"],
		  ["As", "Qs"], ["Ah", "Qh"], ["Ac", "Qc"], ["Ad", "Qd"],
		  ["3s", "3c"], ["3s", "3d"], ["3s", "3h"], ["3c", "3d"], ["3c", "3h"], ["3d", "3h"],
		  ["As", "Ts"], ["Ah", "Th"], ["Ac", "Tc"], ["Ad", "Td"],
		  ["Ks", "Js"], ["Kh", "Jh"], ["Kc", "Jc"], ["Kd", "Jd"], 
		  ["2s", "2c"], ["2s", "2d"], ["2s", "2h"], ["2c", "2d"], ["2c", "2h"], ["2d", "2h"], 
		  ["As", "Js"], ["Ah", "Jh"], ["Ac", "Jc"], ["Ad", "Jd"],
		  ["8s", "8c"], ["8s", "8d"], ["8s", "8h"], ["8c", "8d"], ["8c", "8h"], ["8d", "8h"],
		  ["As", "8c"], ["As", "8h"], ["As", "8d"], ["Ac", "8s"], ["Ac", "8h"], ["Ac", "8d"], ["Ah", "8c"], ["Ah", "8s"], ["Ah", "8d"], ["Ad", "8c"], ["Ad", "8h"],  		  
	      ["As", "7c"], ["As", "7h"], ["As", "7d"], ["Ac", "7s"], ["Ac", "7h"], ["Ac", "7d"], ["Ah", "7c"], ["Ah", "7s"], ["Ah", "7d"], ["Ad", "7c"], ["Ad", "7h"], 
		  ["As", "6c"], ["As", "6h"], ["As", "6d"], ["Ac", "6s"], ["Ac", "6h"], ["Ac", "6d"], ["Ah", "6c"], ["Ah", "6s"], ["Ah", "6d"], ["Ad", "6c"], ["Ad", "6h"], 
		  ["6s", "6c"], ["6s", "6d"], ["6s", "6h"], ["6c", "6d"], ["6c", "6h"], ["6d", "6h"],
		  ["Ks", "Qs"], ["Kh", "Qh"], ["Kc", "Qc"], ["Kd", "Qd"], 
		  ["As", "Qc"], ["As", "Qh"], ["As", "Qd"], ["Ac", "Qs"], ["Ac", "Qh"], ["Ac", "Qd"], ["Ah", "Qc"], ["Ah", "Qs"], ["Ah", "Qd"], ["Ad", "Qc"], ["Ad", "Qh"], 
		  ["Ts", "9s"], ["Th", "9h"], ["Tc", "9c"], ["Td", "9d"],
		  ["Js", "Ts"], ["Jh", "Th"], ["Jc", "Tc"], ["Jd", "Td"], 
		  ["Ks", "Jc"], ["Ks", "Jh"], ["Ks", "Jd"], ["Kc", "Js"], ["Kc", "Jh"], ["Kc", "Jd"], ["Kh", "Jc"], ["Kh", "Js"], ["Kh", "Jd"], ["Kd", "Jc"], ["Kd", "Jh"],  
		  ["Qs", "Jc"], ["Qs", "Jh"], ["Qs", "Jd"], ["Qc", "Js"], ["Qc", "Jh"], ["Qc", "Jd"], ["Qh", "Jc"], ["Qh", "Js"], ["Qh", "Jd"], ["Qd", "Jc"], ["Qd", "Jh"],  
		  ["Js", "Tc"], ["Js", "Th"], ["Js", "Td"], ["Jc", "Ts"], ["Jc", "Th"], ["Jc", "Td"], ["Jh", "Tc"], ["Jh", "Ts"], ["Jh", "Td"], ["Jd", "Tc"], ["Jd", "Th"], 
		  ["As", "9s"], ["Ah", "9h"], ["Ac", "9c"], ["Ad", "9d"],  
		  ["As", "8s"], ["Ah", "8h"], ["Ac", "8c"], ["Ad", "8d"], 
          ["9s", "8s"], ["9h", "8h"], ["9c", "8c"], ["9d", "8d"],		  
		  ["As", "7s"], ["Ah", "7h"], ["Ac", "7c"], ["Ad", "7d"],  
		  ["As", "6s"], ["Ah", "6h"], ["Ac", "6c"], ["Ad", "6d"],  
		  ["Ks", "9c"], ["Ks", "9h"], ["Ks", "9d"], ["Kc", "9s"], ["Kc", "9h"], ["Kc", "9d"], ["Kh", "9c"], ["Kh", "9s"], ["Kh", "9d"], ["Kd", "9c"], ["Kd", "9h"], 		  
		  ["Qs", "9c"], ["Qs", "9h"], ["Qs", "9d"], ["Qc", "9s"], ["Qc", "9h"], ["Qc", "9d"], ["Qh", "9c"], ["Qh", "9s"], ["Qh", "9d"], ["Qd", "9c"], ["Qd", "9h"], 		  
		  ["Js", "8c"], ["Js", "8h"], ["Js", "8d"], ["Jc", "8s"], ["Jc", "8h"], ["Jc", "8d"], ["Jh", "8c"], ["Jh", "8s"], ["Jh", "8d"], ["Jd", "8c"], ["Jd", "8h"],  		  		  
		  ["Ts", "8c"], ["Ts", "8h"], ["Ts", "8d"], ["Tc", "8s"], ["Tc", "8h"], ["Tc", "8d"], ["Th", "8c"], ["Th", "8s"], ["Th", "8d"], ["Td", "8c"], ["Td", "8h"], 		  		  
		  ["Ts", "9c"], ["Ts", "9h"], ["Ts", "9d"], ["Tc", "9s"], ["Tc", "9h"], ["Tc", "9d"], ["Th", "9c"], ["Th", "9s"], ["Th", "9d"], ["Td", "9c"], ["Td", "9h"],  		  
		  ["8s", "7c"], ["8s", "7h"], ["8s", "7d"], ["8c", "7s"], ["8c", "7h"], ["8c", "7d"], ["8h", "7c"], ["8h", "7s"], ["8h", "7d"], ["8d", "7c"], ["8d", "7h"],  		  
		  ["7s", "6c"], ["7s", "6h"], ["7s", "6d"], ["7c", "6s"], ["7c", "6h"], ["7c", "6d"], ["7h", "6c"], ["7h", "6s"], ["7h", "6d"], ["7d", "6c"], ["7d", "6h"],  		  
		  ["6s", "5c"], ["6s", "5h"], ["6s", "5d"], ["6c", "5s"], ["6c", "5h"], ["6c", "5d"], ["6h", "5c"], ["6h", "5s"], ["6h", "5d"], ["6d", "5c"], ["6d", "5h"],  		  
		  ["5s", "4c"], ["5s", "4h"], ["5s", "4d"], ["5c", "4s"], ["5c", "4h"], ["5c", "4d"], ["5h", "4c"], ["5h", "4s"], ["5h", "4d"], ["5d", "4c"], ["5d", "4h"],  		  
		  ["As", "5c"], ["As", "5h"], ["As", "5d"], ["Ac", "5s"], ["Ac", "5h"], ["Ac", "5d"], ["Ah", "5c"], ["Ah", "5s"], ["Ah", "5d"], ["Ad", "5c"], ["Ad", "5h"],  
		  ["As", "4c"], ["As", "4h"], ["As", "4d"], ["Ac", "4s"], ["Ac", "4h"], ["Ac", "4d"], ["Ah", "4c"], ["Ah", "4s"], ["Ah", "4d"], ["Ad", "4c"], ["Ad", "4h"],  		  
	      ["As", "3c"], ["As", "3h"], ["As", "3d"], ["Ac", "3s"], ["Ac", "3h"], ["Ac", "3d"], ["Ah", "3c"], ["Ah", "3s"], ["Ah", "3d"], ["Ad", "3c"], ["Ad", "3h"],  
		  ["As", "2c"], ["As", "2h"], ["As", "2d"], ["Ac", "2s"], ["Ac", "2h"], ["Ac", "2d"], ["Ah", "2c"], ["Ah", "2s"], ["Ah", "2d"], ["Ad", "2c"], ["Ad", "2h"], 
		  ["As", "5s"], ["Ah", "5h"], ["Ac", "5c"], ["Ad", "5d"],  
		  ["5s", "4s"], ["5h", "4h"], ["5c", "4c"], ["5d", "4d"],
		  ["As", "4s"], ["Ah", "4h"], ["Ac", "4c"], ["Ad", "4d"],  
		  ["As", "3s"], ["Ah", "3h"], ["Ac", "3c"], ["Ad", "3d"],  
		  ["As", "2s"], ["Ah", "2h"], ["Ac", "2c"], ["Ad", "2d"], 
		  ["5s", "5c"], ["5s", "5d"], ["5s", "5h"], ["5c", "5d"], ["5c", "5h"], ["5d", "5h"],
		  ["As", "9c"], ["As", "9h"], ["As", "9d"], ["Ac", "9s"], ["Ac", "9h"], ["Ac", "9d"], ["Ah", "9c"], ["Ah", "9s"], ["Ah", "9d"], ["Ad", "9c"], ["Ad", "9h"],	
		  ["7s", "7c"], ["7s", "7d"], ["7s", "7h"], ["7c", "7d"], ["7c", "7h"], ["7d", "7h"],
		  ["As", "Jc"], ["As", "Jh"], ["As", "Jd"], ["Ac", "Js"], ["Ac", "Jh"], ["Ac", "Jd"], ["Ah", "Jc"], ["Ah", "Js"], ["Ah", "Jd"], ["Ad", "Jc"], ["Ad", "Jh"], 
		  ["9s", "9c"], ["9s", "9d"], ["9s", "9h"], ["9c", "9d"], ["9c", "9h"], ["9d", "9h"],
		  ["4s", "3s"], ["4h", "3h"], ["4c", "3c"], ["4d", "3d"],
		  ["Ts", "Tc"], ["Ts", "Td"], ["Ts", "Th"], ["Tc", "Td"], ["Tc", "Th"], ["Td", "Th"],
		  ["Ks", "9c"], ["Ks", "9h"], ["Ks", "9d"], ["Kc", "9s"], ["Kc", "9h"], ["Kc", "9d"], ["Kh", "9c"], ["Kh", "9s"], ["Kh", "9d"], ["Kd", "9c"], ["Kd", "9h"], 
		  ["As", "Ac"], ["As", "Ad"], ["As", "Ah"], ["Ac", "Ad"], ["Ac", "Ah"], ["Ad", "Ah"], 
		  ["As", "5c"], ["As", "5h"], ["As", "5d"], ["Ac", "5s"], ["Ac", "5h"], ["Ac", "5d"], ["Ah", "5c"], ["Ah", "5s"], ["Ah", "5d"], ["Ad", "5c"], ["Ad", "5h"],  
		  ["As", "4c"], ["As", "4h"], ["As", "4d"], ["Ac", "4s"], ["Ac", "4h"], ["Ac", "4d"], ["Ah", "4c"], ["Ah", "4s"], ["Ah", "4d"], ["Ad", "4c"], ["Ad", "4h"],  		  
	      ["8s", "7s"], ["8h", "7h"], ["8c", "7c"], ["8d", "7d"], 
		  ["7s", "6s"], ["7h", "6h"], ["7c", "6c"], ["7d", "6d"], 
		  ["6s", "5s"], ["6h", "5h"], ["6c", "5c"], ["6d", "5d"], 
		  ["As", "3c"], ["As", "3h"], ["As", "3d"], ["Ac", "3s"], ["Ac", "3h"], ["Ac", "3d"], ["Ah", "3c"], ["Ah", "3s"], ["Ah", "3d"], ["Ad", "3c"], ["Ad", "3h"],
		  ["Ks", "Kc"], ["Ks", "Kd"], ["Ks", "Kh"], ["Kc", "Kd"], ["Kc", "Kh"], ["Kd", "Kh"], 
		  ["Qs", "Qc"], ["Qs", "Qd"], ["Qs", "Qh"], ["Qc", "Qd"], ["Qc", "Qh"], ["Qd", "Qh"], 
		  ["As", "Tc"], ["As", "Th"], ["As", "Td"], ["Ac", "Ts"], ["Ac", "Th"], ["Ac", "Td"], ["Ah", "Tc"], ["Ah", "Ts"], ["Ah", "Td"], ["Ad", "Tc"], ["Ad", "Th"], 		  
		  ["As", "9c"], ["As", "9h"], ["As", "9d"], ["Ac", "9s"], ["Ac", "9h"], ["Ac", "9d"], ["Ah", "9c"], ["Ah", "9s"], ["Ah", "9d"], ["Ad", "9c"], ["Ad", "9h"],		  
		  ["Ks", "Tc"], ["Ks", "Th"], ["Ks", "Td"], ["Kc", "Ts"], ["Kc", "Th"], ["Kc", "Td"], ["Kh", "Tc"], ["Kh", "Ts"], ["Kh", "Td"], ["Kd", "Tc"], ["Kd", "Th"],
		  ["Qs", "Tc"], ["Qs", "Th"], ["Qs", "Td"], ["Qc", "Ts"], ["Qc", "Th"], ["Qc", "Td"], ["Qh", "Tc"], ["Qh", "Ts"], ["Qh", "Td"], ["Qd", "Tc"], ["Qd", "Th"], 
		  ["Js", "Jc"], ["Js", "Jd"], ["Js", "Jh"], ["Jc", "Jd"], ["Jc", "Jh"], ["Jd", "Jh"], 
		  ["As", "Ks"], ["Ah", "Kh"], ["Ac", "Kc"], ["Ad", "Kd"],
		  ["As", "2c"], ["As", "2h"], ["As", "2d"], ["Ac", "2s"], ["Ac", "2h"], ["Ac", "2d"], ["Ah", "2c"], ["Ah", "2s"], ["Ah", "2d"], ["Ad", "2c"], ["Ad", "2h"] 
		 ];
		 
		 
$r = array_rand( $ranks );
var_dump($ranks[$r]);
//echo $ranks[$r];


//var_dump(shuffle($ranks));
foreach ($ranks as $r) {
    //echo $r[0].'--'.$r[1]."</br>";
}




$positions = ["SB", "BB", "UTG", "UTG+1", "UTG+2", "MP1", "MP2", "MP3", "CO", "D"];

$players_qtd = ['2', '3', '4', '5', '6', '7', '8', '9', '10'];

$qp = array_rand( $players_qtd );

echo $players_qtd[$qp];

$positions_call = array_rand( $positions, $players_qtd[$qp] );

var_dump($positions_call);

$eu = array_rand( $positions_call );

echo "</br></br>";
echo "Eu sou o ".$positions[$positions_call[$eu]].'---'.$positions_call[$eu];
echo "</br></br>";


foreach ($positions_call as $p) {
    echo $positions[$p].'</br>';
}






$position = ["early_position", "middle_position", "late_position", "blinds"];

$p = array_rand( $position );

echo $position[$p];

echo '-------------';

$action = ["no_callers_before", "callers_before", "raysers_before"];

$a = array_rand( $action );

echo $action[$a];


?>


<button class="favorite fold" type="button">
    FOLD
</button>

<button class="favorite call" type="button">
    CALL
</button>

<button class="favorite raise" type="button">
    BET
</button>

<button class="favorite reraise" type="button">
    3-BET
</button>

