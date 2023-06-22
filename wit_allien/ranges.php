<script>
function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }
	
function ShowPosition(e2) {
        var display = document.getElementById(e2).style.display;
        if(display == "none")
            document.getElementById(e2).style.display = 'block';
        else
            document.getElementById(e2).style.display = 'none';
    }
	
function Refresh(){
  window.location.reload();
}
</script>




<?php

$rank1 = [
		  ["As", "Ac"], ["As", "Ad"], ["As", "Ah"], ["Ac", "Ad"], ["Ac", "Ah"], ["Ad", "Ah"], 
		  ["Ks", "Kc"], ["Ks", "Kd"], ["Ks", "Kh"], ["Kc", "Kd"], ["Kc", "Kh"], ["Kd", "Kh"], 
		  ["Qs", "Qc"], ["Qs", "Qd"], ["Qs", "Qh"], ["Qc", "Qd"], ["Qc", "Qh"], ["Qd", "Qh"], 
		  ["Js", "Jc"], ["Js", "Jd"], ["Js", "Jh"], ["Jc", "Jd"], ["Jc", "Jh"], ["Jd", "Jh"], 
		  ["As", "Ks"], ["Ah", "Kh"], ["Ac", "Kc"], ["Ad", "Kd"]
		 ];
		 
$rank2 = [
		  ["Ts", "Tc"], ["Ts", "Td"], ["Ts", "Th"], ["Tc", "Td"], ["Tc", "Th"], ["Td", "Th"],
		  ["As", "Qs"], ["Ah", "Qh"], ["Ac", "Qc"], ["Ad", "Qd"], 
		  ["As", "Js"], ["Ah", "Jh"], ["Ac", "Jc"], ["Ad", "Jd"], 
		  ["Ks", "Qs"], ["Kh", "Qh"], ["Kc", "Qc"], ["Kd", "Qd"], 
		  ["As", "Kc"], ["As", "Kh"], ["As", "Kd"], ["Ac", "Ks"], ["Ac", "Kh"], ["Ac", "Kd"], ["Ah", "Kc"], ["Ah", "Ks"], ["Ah", "Kd"], ["Ad", "Kc"], ["Ad", "Kh"]  
		 ];
		 
$rank3 = [
		  ["9s", "9c"], ["9s", "9d"], ["9s", "9h"], ["9c", "9d"], ["9c", "9h"], ["9d", "9h"],
		  ["As", "Ts"], ["Ah", "Th"], ["Ac", "Tc"], ["Ad", "Td"], 
		  ["Ks", "Js"], ["Kh", "Jh"], ["Kc", "Jc"], ["Kd", "Jd"],  
		  ["Qs", "Js"], ["Qh", "Jh"], ["Qc", "Jc"], ["Qd", "Jd"], 
		  ["Js", "Ts"], ["Jh", "Th"], ["Jc", "Tc"], ["Jd", "Td"], 
		  ["As", "Qc"], ["As", "Qh"], ["As", "Qd"], ["Ac", "Qs"], ["Ac", "Qh"], ["Ac", "Qd"], ["Ah", "Qc"], ["Ah", "Qs"], ["Ah", "Qd"], ["Ad", "Qc"], ["Ad", "Qh"]
		 ];
		 
$rank4 = [
		  ["8s", "8c"], ["8s", "8d"], ["8s", "8h"], ["8c", "8d"], ["8c", "8h"], ["8d", "8h"],
		  ["Ks", "Ts"], ["Kh", "Th"], ["Kc", "Tc"], ["Kd", "Td"], 
		  ["Qs", "Ts"], ["Qh", "Th"], ["Qc", "Tc"], ["Qd", "Td"], 
		  ["Js", "9s"], ["Jh", "9h"], ["Jc", "9c"], ["Jd", "9d"], 
		  ["Ts", "9s"], ["Th", "9h"], ["Tc", "9c"], ["Td", "9d"],
		  ["9s", "8s"], ["9h", "8h"], ["9c", "8c"], ["9d", "8d"],
		  ["As", "Jc"], ["As", "Jh"], ["As", "Jd"], ["Ac", "Js"], ["Ac", "Jh"], ["Ac", "Jd"], ["Ah", "Jc"], ["Ah", "Js"], ["Ah", "Jd"], ["Ad", "Jc"], ["Ad", "Jh"],  
		  ["Ks", "Qc"], ["Ks", "Qh"], ["Ks", "Qd"], ["Kc", "Qs"], ["Kc", "Qh"], ["Kc", "Qd"], ["Kh", "Qc"], ["Kh", "Qs"], ["Kh", "Qd"], ["Kd", "Qc"], ["Kd", "Qh"]
		 ];

$rank5 = [
		  ["7s", "7c"], ["7s", "7d"], ["7s", "7h"], ["7c", "7d"], ["7c", "7h"], ["7d", "7h"],
		  ["As", "9s"], ["Ah", "9h"], ["Ac", "9c"], ["Ad", "9d"],  
		  ["As", "8s"], ["Ah", "8h"], ["Ac", "8c"], ["Ad", "8d"],  
		  ["As", "7s"], ["Ah", "7h"], ["Ac", "7c"], ["Ad", "7d"],  
		  ["As", "6s"], ["Ah", "6h"], ["Ac", "6c"], ["Ad", "6d"],  
		  ["As", "5s"], ["Ah", "5h"], ["Ac", "5c"], ["Ad", "5d"],  
		  ["As", "4s"], ["Ah", "4h"], ["Ac", "4c"], ["Ad", "4d"],  
		  ["As", "3s"], ["Ah", "3h"], ["Ac", "3c"], ["Ad", "3d"],  
		  ["As", "2s"], ["Ah", "2h"], ["Ac", "2c"], ["Ad", "2d"],  
		  ["Qs", "9s"], ["Qh", "9h"], ["Qc", "9c"], ["Qd", "9d"], 
		  ["Ts", "8s"], ["Th", "8h"], ["Tc", "8c"], ["Td", "8d"],
		  ["9s", "7s"], ["9h", "7h"], ["9c", "7c"], ["9d", "7d"], 
		  ["8s", "7s"], ["8h", "7h"], ["8c", "7c"], ["8d", "7d"], 
		  ["7s", "6s"], ["7h", "6h"], ["7c", "6c"], ["7d", "6d"], 
		  ["6s", "5s"], ["6h", "5h"], ["6c", "5c"], ["6d", "5d"], 
		  ["Ks", "Jc"], ["Ks", "Jh"], ["Ks", "Jd"], ["Kc", "Js"], ["Kc", "Jh"], ["Kc", "Jd"], ["Kh", "Jc"], ["Kh", "Js"], ["Kh", "Jd"], ["Kd", "Jc"], ["Kd", "Jh"],  
		  ["Qs", "Jc"], ["Qs", "Jh"], ["Qs", "Jd"], ["Qc", "Js"], ["Qc", "Jh"], ["Qc", "Jd"], ["Qh", "Jc"], ["Qh", "Js"], ["Qh", "Jd"], ["Qd", "Jc"], ["Qd", "Jh"],  
		  ["Js", "Tc"], ["Js", "Th"], ["Js", "Td"], ["Jc", "Ts"], ["Jc", "Th"], ["Jc", "Td"], ["Jh", "Tc"], ["Jh", "Ts"], ["Jh", "Td"], ["Jd", "Tc"], ["Jd", "Th"]
		 ];
		 
$rank6 = [
		  ["6s", "6c"], ["6s", "6d"], ["6s", "6h"], ["6c", "6d"], ["6c", "6h"], ["6d", "6h"],
		  ["5s", "5c"], ["5s", "5d"], ["5s", "5h"], ["5c", "5d"], ["5c", "5h"], ["5d", "5h"],
		  ["Ks", "9s"], ["Kh", "9h"], ["Kc", "9c"], ["Kd", "9d"], 
		  ["Js", "8s"], ["Jh", "8h"], ["Jc", "8c"], ["Jd", "8d"],
		  ["8s", "6s"], ["8h", "6h"], ["8c", "6c"], ["8d", "6d"], 
		  ["7s", "5s"], ["7h", "5h"], ["7c", "5c"], ["7d", "5d"], 
		  ["5s", "4s"], ["5h", "4h"], ["5c", "4c"], ["5d", "4d"],
		  ["As", "Tc"], ["As", "Th"], ["As", "Td"], ["Ac", "Ts"], ["Ac", "Th"], ["Ac", "Td"], ["Ah", "Tc"], ["Ah", "Ts"], ["Ah", "Td"], ["Ad", "Tc"], ["Ad", "Th"], 		  
		  ["As", "9c"], ["As", "9h"], ["As", "9d"], ["Ac", "9s"], ["Ac", "9h"], ["Ac", "9d"], ["Ah", "9c"], ["Ah", "9s"], ["Ah", "9d"], ["Ad", "9c"], ["Ad", "9h"],		  
		  ["Ks", "Tc"], ["Ks", "Th"], ["Ks", "Td"], ["Kc", "Ts"], ["Kc", "Th"], ["Kc", "Td"], ["Kh", "Tc"], ["Kh", "Ts"], ["Kh", "Td"], ["Kd", "Tc"], ["Kd", "Th"],
		  ["Qs", "Tc"], ["Qs", "Th"], ["Qs", "Td"], ["Qc", "Ts"], ["Qc", "Th"], ["Qc", "Td"], ["Qh", "Tc"], ["Qh", "Ts"], ["Qh", "Td"], ["Qd", "Tc"], ["Qd", "Th"]		 
		 ];
		 
$rank7 = [
		  ["4s", "4c"], ["4s", "4d"], ["4s", "4h"], ["4c", "4d"], ["4c", "4h"], ["4d", "4h"],
		  ["3s", "3c"], ["3s", "3d"], ["3s", "3h"], ["3c", "3d"], ["3c", "3h"], ["3d", "3h"],
		  ["2s", "2c"], ["2s", "2d"], ["2s", "2h"], ["2c", "2d"], ["2c", "2h"], ["2d", "2h"], 
		  ["Qs", "8s"], ["Qh", "8h"], ["Qc", "8c"], ["Qd", "8d"],
		  ["Ts", "7s"], ["Th", "7h"], ["Tc", "7c"], ["Td", "7d"], 
		  ["6s", "4s"], ["6h", "4h"], ["6c", "4c"], ["6d", "4d"],
		  ["5s", "3s"], ["5h", "3h"], ["5c", "3c"], ["5d", "3d"], 
		  ["4s", "3s"], ["4h", "3h"], ["4c", "3c"], ["4d", "3d"], 
		  ["Js", "9c"], ["Js", "9h"], ["Js", "9d"], ["Jc", "9s"], ["Jc", "9h"], ["Jc", "9d"], ["Jh", "9c"], ["Jh", "9s"], ["Jh", "9d"], ["Jd", "9c"], ["Jd", "9h"],  		  
		  ["Ts", "9c"], ["Ts", "9h"], ["Ts", "9d"], ["Tc", "9s"], ["Tc", "9h"], ["Tc", "9d"], ["Th", "9c"], ["Th", "9s"], ["Th", "9d"], ["Td", "9c"], ["Td", "9h"],  		  
		  ["9s", "8c"], ["9s", "8h"], ["9s", "8d"], ["9c", "8s"], ["9c", "8h"], ["9c", "8d"], ["9h", "8c"], ["9h", "8s"], ["9h", "8d"], ["9d", "8c"], ["9d", "8h"], 		  
		  ["Ks", "7s"], ["Kh", "7h"], ["Kc", "7c"], ["Kd", "7d"], 
		  ["Ks", "6s"], ["Kh", "6h"], ["Kc", "6c"], ["Kd", "6d"], 
		  ["Ks", "5s"], ["Kh", "5h"], ["Kc", "5c"], ["Kd", "5d"], 
		  ["Ks", "4s"], ["Kh", "4h"], ["Kc", "4c"], ["Kd", "4d"], 
		  ["Ks", "3s"], ["Kh", "3h"], ["Kc", "3c"], ["Kd", "3d"], 
		  ["Ks", "2s"], ["Kh", "2h"], ["Kc", "2c"], ["Kd", "2d"], 
		  ["As", "8c"], ["As", "8h"], ["As", "8d"], ["Ac", "8s"], ["Ac", "8h"], ["Ac", "8d"], ["Ah", "8c"], ["Ah", "8s"], ["Ah", "8d"], ["Ad", "8c"], ["Ad", "8h"],  		  
	      ["As", "7c"], ["As", "7h"], ["As", "7d"], ["Ac", "7s"], ["Ac", "7h"], ["Ac", "7d"], ["Ah", "7c"], ["Ah", "7s"], ["Ah", "7d"], ["Ad", "7c"], ["Ad", "7h"], 
		  ["As", "6c"], ["As", "6h"], ["As", "6d"], ["Ac", "6s"], ["Ac", "6h"], ["Ac", "6d"], ["Ah", "6c"], ["Ah", "6s"], ["Ah", "6d"], ["Ad", "6c"], ["Ad", "6h"] 
		 ];
		 
		 
$rank8 = [
		  ["Js", "7s"], ["Jh", "7h"], ["Jc", "7c"], ["Jd", "7d"], 
		  ["9s", "6s"], ["9h", "6h"], ["9c", "6c"], ["9d", "6d"],
          ["8s", "5s"], ["8h", "5h"], ["8c", "5c"], ["8d", "5d"], 		  
		  ["7s", "4s"], ["7h", "4h"], ["7c", "4c"], ["7d", "4d"], 
		  ["4s", "2s"], ["4h", "2h"], ["4c", "2c"], ["4d", "2d"], 
		  ["3s", "2s"], ["3h", "2h"], ["3c", "2c"], ["3d", "2d"], 
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
		  ["As", "2c"], ["As", "2h"], ["As", "2d"], ["Ac", "2s"], ["Ac", "2h"], ["Ac", "2d"], ["Ah", "2c"], ["Ah", "2s"], ["Ah", "2d"], ["Ad", "2c"], ["Ad", "2h"] 		  	 
		 ];
		 
		 
		 
$ranks = ["rank1", "rank2", "rank3", "rank4", "rank5", "rank6", "rank7", "rank8"];

/*
$r = array_rand( $rank1 );
echo $rank1[$r][0];
echo $rank1[$r][1];
?>
<div id="minhaDiv" style="display: none;">rank1</br></div>
<button type="button" onclick="Mudarestado('minhaDiv')">Rank</br></button>
<div id="minhaDiv2" style="display: none;">Maior</br></div>
<button type="button" onclick="ShowPosition('minhaDiv2')">Position</br></button>
<?php
echo '<img src="cards/'.$rank1[$r][0].'.png" alt="'.$rank1[$r][0].'" width="300">';
echo '<img src="cards/'.$rank1[$r][1].'.png" alt="'.$rank1[$r][1].'" width="300">';
*/


$e = array_rand( $ranks );
switch ($e) {
    case 0:
        ?>
		<div id="minhaDiv" style="display: none;">rank1</br></div>
		<button type="button" onclick="Mudarestado('minhaDiv')">Rank</button>
		</br>
		<div id="minhaDiv2" style="display: none;">Maior Cautela</br></div>
		<button type="button" onclick="ShowPosition('minhaDiv2')">Position</button>
		</br>
		<?php
        $r = array_rand( $rank1 );
		echo '<img src="cards/'.$rank1[$r][0].'.png" alt="'.$rank1[$r][0].'" width="300">';
		echo '<img src="cards/'.$rank1[$r][1].'.png" alt="'.$rank1[$r][1].'" width="300">';

		break;
    case 1:
        ?>
		<div id="minhaDiv" style="display: none;">rank2</br></div>
		<button type="button" onclick="Mudarestado('minhaDiv')">Rank</button>
		</br>
		<div id="minhaDiv2" style="display: none;">UTG</br></div>
		<button type="button" onclick="ShowPosition('minhaDiv2')">Position</button>
		</br>
		<?php
		$r = array_rand( $rank2 );
		echo '<img src="cards/'.$rank2[$r][0].'.png" alt="'.$rank2[$r][0].'" width="300">';
		echo '<img src="cards/'.$rank2[$r][1].'.png" alt="'.$rank2[$r][1].'" width="300">';
        break;
    case 2:
        ?>
		<div id="minhaDiv" style="display: none;">rank3</br></div>
		<button type="button" onclick="Mudarestado('minhaDiv')">Rank</button>
		</br>
		<div id="minhaDiv2" style="display: none;">UTG+</br></div>
		<button type="button" onclick="ShowPosition('minhaDiv2')">Position</button>
		</br>
		<?php
		$r = array_rand( $rank3 );
		echo '<img src="cards/'.$rank3[$r][0].'.png" alt="'.$rank3[$r][0].'" width="300">';
		echo '<img src="cards/'.$rank3[$r][1].'.png" alt="'.$rank3[$r][1].'" width="300">';
        break;
	case 3:
        ?>
		<div id="minhaDiv" style="display: none;">rank4</br></div>
		<button type="button" onclick="Mudarestado('minhaDiv')">Rank</button>
		</br>
		<div id="minhaDiv2" style="display: none;"> BIG BLIND ||| MP </br></div>
		<button type="button" onclick="ShowPosition('minhaDiv2')">Position</button>
		</br>
		<?php
		$r = array_rand( $rank4 );
		echo '<img src="cards/'.$rank4[$r][0].'.png" alt="'.$rank4[$r][0].'" width="300">';
		echo '<img src="cards/'.$rank4[$r][1].'.png" alt="'.$rank4[$r][1].'" width="300">';
        break;
    case 4:
        ?>
		<div id="minhaDiv" style="display: none;">rank5</br></div>
		<button type="button" onclick="Mudarestado('minhaDiv')">Rank</button>
		</br>
		<div id="minhaDiv2" style="display: none;"> SMALL BLIND ||| LOJACK </br></div>
		<button type="button" onclick="ShowPosition('minhaDiv2')">Position</button>
		</br>
		<?php
		$r = array_rand( $rank5 );
		echo '<img src="cards/'.$rank5[$r][0].'.png" alt="'.$rank5[$r][0].'" width="300">';
		echo '<img src="cards/'.$rank5[$r][1].'.png" alt="'.$rank5[$r][1].'" width="300">';	
        break;
    case 5:
        ?>
		<div id="minhaDiv" style="display: none;">rank6</br></div>
		<button type="button" onclick="Mudarestado('minhaDiv')">Rank</button>
		</br>
		<div id="minhaDiv2" style="display: none;"> HIJACK </br></div>
		<button type="button" onclick="ShowPosition('minhaDiv2')">Position</button>
		</br>
		<?php
		$r = array_rand( $rank6 );
		echo '<img src="cards/'.$rank6[$r][0].'.png" alt="'.$rank6[$r][0].'" width="300">';
		echo '<img src="cards/'.$rank6[$r][1].'.png" alt="'.$rank6[$r][1].'" width="300">';		
        break;
	case 6:
        ?>
		<div id="minhaDiv" style="display: none;">rank7</br></div>
		<button type="button" onclick="Mudarestado('minhaDiv')">Rank</button>
		</br>
		<div id="minhaDiv2" style="display: none;"> CUTOFF </br></div>
		<button type="button" onclick="ShowPosition('minhaDiv2')">Position</button>
		</br>
		<?php
		$r = array_rand( $rank7 );
		echo '<img src="cards/'.$rank7[$r][0].'.png" alt="'.$rank7[$r][0].'" width="300">';
		echo '<img src="cards/'.$rank7[$r][1].'.png" alt="'.$rank7[$r][1].'" width="300">';	
        break;
    case 7:
        ?>
		<div id="minhaDiv" style="display: none;">rank8</br></div>
		<button type="button" onclick="Mudarestado('minhaDiv')">Rank</button>
		</br>
		<div id="minhaDiv2" style="display: none;"> BUTTON </br></div>
		<button type="button" onclick="ShowPosition('minhaDiv2')">Position</button>
		</br>
		<?php
		$r = array_rand( $rank8 );
		echo '<img src="cards/'.$rank8[$r][0].'.png" alt="'.$rank8[$r][0].'" width="300">';
		echo '<img src="cards/'.$rank8[$r][1].'.png" alt="'.$rank8[$r][1].'" width="300">';	
        break;
}
		 
?>
</br></br></br></br>

<button type="button" onclick="Refresh()">REFRESH</button>

