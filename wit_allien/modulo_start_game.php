<?php

if(!isset($_SESSION['ordem'])){
	$_SESSION['ordem'] 	  = 0;	
	$_SESSION['ordem_sb'] = 0;
	$_SESSION['ordem_bb'] = 0;
}

if(!isset($_SESSION['chip_behind'])){
	$_SESSION['chip_behind'] = 0;
	$_SESSION['chip_behind_pre'] = 0;
	$_SESSION['chip_behind_before_bb'] = 0;
	$_SESSION['chip_behind_before_sb'] = 0;
	$_SESSION['pot'] = 0;
	$_SESSION['street'] = '';
}



$game = 1;
$ordem = '';
$street = '';
if(isset($_GET['ordem'])){
	$a = Poker::select_action_game($game, $_GET['ordem']);
	
	$ordem  = $a['ordem'];
	$street = $a['street'];
	$_SESSION['ordem'] = $_GET['ordem'];
}


$name = "";
$pot = 0;
$_SESSION['pot'] = 0;



$g = Poker::select_play_game_join($game);
	
foreach($g['dados'] as $r){
	
	$small_blind = $r['small_blind'];
	$big_blind   = $r['big_blind'];
	$ante        = $r['ante'];
	
	$blinds 	 = $small_blind.$r['monetario'].' / '.$big_blind.$r['monetario'].' / '.$ante.$r['monetario'];
	
	
	//chip_behind
	$name_player = explode(" ", $r['name_player']);
	$name_player = strtoupper( $name_player[1] );
	$chip_behind 	= $r['chip_behind'];
	
	
	
	if ($r['position'] == 'sb'){

		$_SESSION['ordem_sb'] = 0;
			
		if ( $r['monetario'] == 'K') {
			$small_blind = $small_blind * 1000;
			$ante 		 = $ante * 1000;
		}
		$_SESSION['pot'] += ($small_blind + $ante);


		if (isset($_GET['ordem'])) {
			$sum = Poker::sum_chip_behind($r['id_player_game'], $_GET['ordem']);
			
			if ($sum['num'] > 0) {
				
				if ($_GET['ordem'] > $_SESSION['ordem_sb']) {
					$_SESSION['ordem_sb'] = $_GET['ordem'];
					
					$chip_behind = $_SESSION['chip_behind_before_sb'] - $sum['sum'];
					$_SESSION['chip_behind_before_sb'] = $chip_behind;
					
					$chip_behind = $chip_behind;
				}
				
			}else{
				$chip_behind = $_SESSION['chip_behind_before_sb'];
			}
			
		}else{
			
			if (isset($_GET['street']) and ($_GET['street'] == 'pre')){
				
				$_SESSION['chip_behind_pre_sb'] = $chip_behind - ($small_blind + $ante);
				$_SESSION['chip_behind_before_sb'] = $_SESSION['chip_behind_pre_sb'];
				
				$chip_behind = $_SESSION['chip_behind_pre_sb'];
			}
			
			if (isset($_GET['street']) and ($_GET['street'] == 'flop')){
				$chip_behind = $_SESSION['chip_behind_before_sb'];
			}
			if (isset($_GET['street']) and ($_GET['street'] == 'turn')){
				$chip_behind = $_SESSION['chip_behind_before_sb'];
			}
		
			if (isset($_GET['street']) and ($_GET['street'] == 'river')){
				$chip_behind = $_SESSION['chip_behind_before_sb'];
			}
		}
		
		
		
	}
	
	if ($r['position'] == 'bb'){

		$_SESSION['ordem_bb'] = 0;
				
		if ( $r['monetario'] == 'K') {
			$big_blind = $big_blind * 1000;
			$ante 	   = $ante * 1000;
		}
		$_SESSION['pot'] += ($big_blind + $ante);

		if (isset($_GET['ordem'])) {
			
			$sum = Poker::sum_chip_behind($r['id_player_game'], $_GET['ordem']);
			
			if ($sum['num'] > 0) {
				
				if ($_GET['ordem'] > $_SESSION['ordem_bb']) {
					
					$_SESSION['ordem_bb'] = $_GET['ordem'];
					
					$chip_behind = $_SESSION['chip_behind_before_bb'] - $sum['sum'];
					$_SESSION['chip_behind_before_bb'] = $chip_behind;
					$chip_behind = $chip_behind;
				}
				
			}else{
				$chip_behind = $_SESSION['chip_behind_before_bb'];
			}
			
		}else{

			if (isset($_GET['street']) and ($_GET['street'] == 'pre')){
				
				$_SESSION['chip_behind_pre_bb'] = $chip_behind - ($big_blind + $ante);
				$_SESSION['chip_behind_before_bb'] = $_SESSION['chip_behind_pre_bb'];
				
				$chip_behind = $_SESSION['chip_behind_pre_bb'];
				
			}
			
			if (isset($_GET['street']) and ($_GET['street'] == 'flop')){
				$chip_behind = $_SESSION['chip_behind_before_bb'];
			}
			
			if (isset($_GET['street']) and ($_GET['street'] == 'turn')){
				$chip_behind = $_SESSION['chip_behind_before_bb'];
			}
		
			if (isset($_GET['street']) and ($_GET['street'] == 'river')){
				$chip_behind = $_SESSION['chip_behind_before_bb'];
			}
		}

	}
	
	$action_card = '. . .';
	/*
	
	if($t['action'] == 'raise to'){
		$action_top = 'RAISE';
	}else{
		$action_top = strtoupper( $t['action'] );
	}
	*/

	$chip_behind = number_format($chip_behind,0,".",",");
	$name .= "<div class='divsub'>$name_player: $chip_behind</div>";
	
	/*
	$card_player .= "
		<div class='card-player'>
			
			<div class='card-player-img'>
				<img class='cropped1' src='$img_player' >
			</div>	
		
			<div class='cards-and-position'>
				<div class='card-item-small'>
					<b class='card-value-small-red'>
						$card_value1
					</b>
					$naipe_1 
				</div>
				
				<div class='card-item-small'>
					<b class='card-value-small-black'>
						$card_value2
					</b>
					 $naipe_2   
				</div>
			
				<div class='position'>$position</div>
			
			</div>	
			
			<div class='card-player-name'><span class='name'>$name_player</span></div>
				
			<div class='card-player-action'><center>$action_card</center></div>
			
		</div>
	";
	*/
}

?>