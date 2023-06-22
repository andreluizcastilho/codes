<div class="board-area">
		
		<?php
			$board = str_split($r['board']);
			
		?>
		
		
		<?php
		//card 1
		
		if ($board[1] == 's' || $board[1] == 'c'){
			
			$board_value  = strtoupper($board[0]);
			$board_naipe  = naipe($board[1], 'naipe-normal');	
			
			$board_card_1 = "
				<div class='card-item-normal'>
					<b class='card-value-normal-black'>
						$board_value
					</b>
					$board_naipe 
				</div>
			";

		}else{
			
			$board_value  = strtoupper($board[0]);
			$board_naipe  = naipe($board[1], 'naipe-normal');	
			
			$board_card_1 = "
				<div class='card-item-normal'>
					<b class='card-value-normal-red'>
						$board_value
					</b>
					$board_naipe
				</div>
			";
			
		}
		
		
		//card 2
		if ($board[5] == 's' || $board[5] == 'c'){
			
			$board_value  = strtoupper($board[4]);
			$board_naipe  = naipe($board[5], 'naipe-normal');	
			
			$board_card_2 = "
				<div class='card-item-normal'>
					<b class='card-value-normal-black'>
						$board_value
					</b>
					$board_naipe 
				</div>
			";

		}else{
			
			$board_value  = strtoupper($board[4]);
			$board_naipe  = naipe($board[5], 'naipe-normal');	
			
			$board_card_2 = "
				<div class='card-item-normal'>
					<b class='card-value-normal-red'>
						$board_value
					</b>
					$board_naipe
				</div>
			";
			
		}
		
		
		//card 3
		if ($board[9] == 's' || $board[9] == 'c'){
			
			$board_value  = strtoupper($board[8]);
			$board_naipe  = naipe($board[9], 'naipe-normal');	
			
			$board_card_3 = "
				<div class='card-item-normal'>
					<b class='card-value-normal-black'>
						$board_value
					</b>
					$board_naipe 
				</div>
			";

		}else{
			
			$board_value  = strtoupper($board[8]);
			$board_naipe  = naipe($board[9], 'naipe-normal');	
			
			$board_card_3 = "
				<div class='card-item-normal'>
					<b class='card-value-normal-red'>
						$board_value
					</b>
					$board_naipe
				</div>
			";
			
		}

		//card 4
		if ($board[14] == 's' || $board[14] == 'c'){
			
			$board_value  = strtoupper($board[13]);
			$board_naipe  = naipe($board[14], 'naipe-normal');	
			
			$board_card_4 = "
				<div class='card-item-normal'>
					<b class='card-value-normal-black'>
						$board_value
					</b>
					$board_naipe 
				</div>
			";

		}else{
			
			$board_value  = strtoupper($board[13]);
			$board_naipe  = naipe($board[14], 'naipe-normal');	
			
			$board_card_4 = "
				<div class='card-item-normal'>
					<b class='card-value-normal-red'>
						$board_value
					</b>
					$board_naipe
				</div>
			";
			
		}
		
		
		//card 5
		if ($board[18] == 's' || $board[18] == 'c'){
			
			$board_value  = strtoupper($board[17]);
			$board_naipe  = naipe($board[18], 'naipe-normal');	
			
			$board_card_5 = "
				<div class='card-item-normal'>
					<b class='card-value-normal-black'>
						$board_value
					</b>
					$board_naipe 
				</div>
			";

		}else{
			
			$board_value  = strtoupper($board[17]);
			$board_naipe  = naipe($board[18], 'naipe-normal');	
			
			$board_card_5 = "
				<div class='card-item-normal'>
					<b class='card-value-normal-red'>
						$board_value
					</b>
					$board_naipe
				</div>
			";
			
		}
		
		
		
		if ($street == 'flop' || (isset($_GET['street']) and $_GET['street'] == 'flop') ){
		?>
			<?php echo $board_card_1; ?>
		
			<?php echo $board_card_2; ?>
			
			<?php echo $board_card_3; ?>

		<?php
		}
		if ($street == 'turn' || (isset($_GET['street']) and $_GET['street'] == 'turn') ){
		?>

			<?php echo $board_card_1; ?>
		
			<?php echo $board_card_2; ?>
			
			<?php echo $board_card_3; ?>
		
			<?php echo $board_card_4; ?>
		<?php
		}
		if ($street == 'river' || (isset($_GET['street']) and $_GET['street'] == 'river')  ){
		?>
		
			<?php echo $board_card_1; ?>
		
			<?php echo $board_card_2; ?>
			
			<?php echo $board_card_3; ?>
		
			<?php echo $board_card_4; ?>
			
			<?php echo $board_card_5; ?>
			
		<?php
		}
		//var_dump($board);
		?>
		
		
		<div class="pot-area">
		    <center><b>POT <?php echo number_format($_SESSION['pot'],0,".",",");; ?></b></center>
		</div>
		
		<!--
		<div class="grid-2">
			<div class="grid-item-2">
				<div class="top-left-2">T</div>			
				<div class="heart-2">♥</div>
			</div>
		</div>
		
		<div class="grid-2">
			<div class="grid-item-2">
				<div class="top-left-2">J</div>			
				<div class="club">♣</div>
			</div>
		</div>
		
		<div class="grid-2">
			<div class="grid-item-2">
				<div class="top-left-2">Q</div>			
				<div class="diamond">♦</div>
			</div>
		</div>
		
		<div class="grid-2">
			<div class="grid-item-2">
				<div class="top-left-2">K</div>			
				<div class="spade">♠</div>
			</div>
		</div>
		
		<div class="grid-2">
			<div class="grid-item-2">
				<div class="top-left-2">A</div>			
				<div class="heart-2">♥</div>
			</div>
		</div>
		-->
		
	</div>