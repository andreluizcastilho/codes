<div class="card-player-area">
		
		<?php
		/*
		$t = Poker::select_action_game_top($game, $ordem);
		$action2 = [
			'sb' => 'raise',
			'bb' => '. . .'
		
		];
		
		if (!isset($_SESSION['before_position'])){
			$_SESSION['before_position'] = '';
		}
		
		$_SESSION[$t['position']] = $t['position'];
		$_SESSION[$t['next_position']] = $t['next_position'];
		
			
		$action = [
			$t['position'] 		=> $t['action'], 
			$t['next_position'] => $t['next_action']
		];
		
		if($t['next_action'] == '. . .'){
			$_SESSION['before_position'] = $action[$_SESSION[$t['position']]];
		}
		
		echo $_SESSION['before_position'].$t['next_position'];
		
		//echo $_SESSION[$t['position']].'-'.$_SESSION[$t['next_position']];
		//echo $t['position'].$t['next_position']; 
		
		
		//$action = $_SESSION[$t['position']];
		*/
		foreach($g['dados'] as $r){
			
			//card_player
			
			
			//cards
			$hand = str_split($r['hand']);

			if ($hand[1] == 's' || $hand[1] == 'c'){
			
				$card_value  = strtoupper($hand[0]);
				$naipe  	  = naipe($hand[1], 'naipe-small');	
				
				$card_1 = "
					<div class='card-item-small'>
						<b class='card-value-small-black'>
							$card_value
						</b>
						$naipe 
					</div>
				";

			}else{
				
				$card_value  = strtoupper($hand[0]);
				$naipe  	  = naipe($hand[1], 'naipe-small');		
				
				$card_1 = "
					<div class='card-item-small'>
						<b class='card-value-small-red'>
							$card_value
						</b>
						$naipe
					</div>
				";
				
			}
			
			if ($hand[5] == 's' || $hand[5] == 'c'){
			
				$card_value  = strtoupper($hand[4]);
				$naipe  	  = naipe($hand[5], 'naipe-small');	
				
				$card_2 = "
					<div class='card-item-small'>
						<b class='card-value-small-black'>
							$card_value
						</b>
						$naipe 
					</div>
				";

			}else{
				
				$card_value  = strtoupper($hand[4]);
				$naipe  	  = naipe($hand[5], 'naipe-small');		
				
				$card_2 = "
					<div class='card-item-small'>
						<b class='card-value-small-red'>
							$card_value
						</b>
						$naipe
					</div>
				";
				
			}
			
			
			//outros
			$position     = strtoupper( $r['position'] );
			
			$name_player = explode(" ", $r['name_player']);
			$name_player = strtoupper( $name_player[1] );
			
			$img_player = $r['img_player'];
			
			/*
			if($r['position'] == $_SESSION[$t['position']]){
				$action1 = $action[$_SESSION[$t['position']]];
			}else{
				if($t['next_position'] == ''){
					$action1 = $_SESSION['before_position'];
				}else{
					$action1 = $action[$_SESSION[$t['next_position']]];
				}
			}
			*/
		?>

			<div class='card-player'>
				
				<div class='card-player-img'>
					<img class='cropped1' src='<?php echo $r['img_player']; ?>' />
				</div>	
			
				<div class='cards-and-position'>
					
					<?php echo $card_1; ?>
		
					<?php echo $card_2; ?>
				
					<div class='position'><?php echo $position; ?></div>
				
				</div>	
				
				<div class='card-player-name'><span class='name'><?php echo $name_player; ?></span></div>
				
				<?php
				if(isset($_GET['street']) and ($_GET['street'] == 'pre') and ($r['position'] == 'sb')){
				?>
					<div class='card-player-action'><center><?php echo '. . .' ?></center></div>
				
				<?php
				}elseif(isset($_GET['street']) and ($_GET['street'] == 'flop') and ($g['num'] == 2)){
				?>
				
					<?php
					if($r['position'] == 'bb'){
					?>
						<div class='card-player-action'><center><?php echo '. . .' ?></center></div>
					<?php
					}
					?>
				
					<?php
					if($r['position'] == 'sb'){
					?>
						<div class='card-player-action'><center></center></div>
					<?php
					}
					?>
				
				<?php
				}elseif(isset($_GET['street']) and ($_GET['street'] == 'turn') and ($g['num'] == 2)){
				?>
				
					<?php
					if($r['position'] == 'bb'){
					?>
						<div class='card-player-action'><center><?php echo '. . .' ?></center></div>
					<?php
					}
					?>
				
					<?php
					if($r['position'] == 'sb'){
					?>
						<div class='card-player-action'><center></center></div>
					<?php
					}
					?>
					
				<?php
				}elseif(isset($_GET['street']) and ($_GET['street'] == 'river') and ($g['num'] == 2)){
				?>
				
					<?php
					if($r['position'] == 'bb'){
					?>
						<div class='card-player-action'><center><?php echo '. . .' ?></center></div>
					<?php
					}
					?>
				
					<?php
					if($r['position'] == 'sb'){
					?>
						<div class='card-player-action'><center></center></div>
					<?php
					}
					?>
				
				<!--  -->
				<?php
				}else{
					
					if (!isset($_GET['ordem']) and !isset($_GET['street'])) {
						$_SESSION['sb'] = '';
						$_SESSION['bb'] = '';
					}
					
					if($r['position'] == 'sb'){
				?>
						<div class='card-player-action'><center><?php echo strtoupper($_SESSION['sb']); ?></center></div>
				<?php
					}elseif($r['position'] == 'bb'){
				?>
						<div class='card-player-action'><center><?php echo strtoupper($_SESSION['bb']); ?></center></div>
				<?php
					}else{
				?>
						<div class='card-player-action'><center></center></div>
				<?php
					}
				}
				?>
			</div>
			
		<?php
		
		}
		?>
		
		
		
		<?php
		//echo $card_player;
		?>
		
		<!--
		<div class="card-player">
			
			<div class="card-player-img">
				<img class="cropped1" src="1.jpg" >
			</div>	
		
			<div class="cards-and-position">
				<div class="card-item-small">
					<b class="card-value-small-red">
						Q
					</b>
					<img class="naipe-small" src="diamonds-icon.png"> 
				</div>
				
				<div class="card-item-small">
					<b class="card-value-small-black">
						T
					</b>
					 <img class="naipe-small" src="spades-icon.png">   
				</div>
			
				<div class="position">SB</div>
			
			</div>
			
			<div class="card-player-name"><span class="name">HOLZ</span></div>
			
			<div class="card-player-action"><center>CHECK</center></div>
			
		</div>
		
		 
		<div class="card-player">
			
			<div class="card-player-img">
				<img class="cropped1" src="2.jpg" >
			</div>	
		
			<div class="cards-and-position">
				<div class="card-item-small">
					<b class="card-value-small-red">
						T
					</b>
					<img class="naipe-small" src="diamonds-icon.png"> 
				</div>
				
				<div class="card-item-small">
					<b class="card-value-small-black">
						9
					</b>
					 <img class="naipe-small" src="hearts-icon.png">   
				</div>
			
				<div class="position">BB</div>
			
			</div>
			
			<div class="card-player-name"><span class="name">SMITH</span></div>
			
			<div class="card-player-action"><center>CHECK</center></div>
			
		</div>
		-->


	</div>