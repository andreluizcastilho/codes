<div id="div1" style="height:700px; width:250px">
        
		<div class="actions">
			<center>
				BLINDS
				<br>
				<div class="divsub"> <?php echo $blinds; ?> </div>
			</center>
		</div>
		
		<div class="actions">
			<center>
				CHIP BEHIND 
				<?php
				echo $name;
				?>
				<!--<div class="divsub">SMITH: 26,150,000</div>
				<div class="divsub">HOLZ: 62,175,000</div>-->
			</center>
		</div>
		
		
		<?php
		
		
		
		if (!isset($_GET['ordem'])){
			$action = '';
		}
		
		if ($street == 'pre'){
			
			$_SESSION['ordem'] = $_GET['ordem'];
		?>
		
		
		<!-- PRE FLOP -->
		<div class="actions">
			<center>
				PRE FLOP
				
				<?php
				
				
				$a = Poker::select_action_game_by_street($game, $ordem, 'pre');
				foreach($a['dados'] as $r){
					$name_player = explode(" ", $r['name_player']);
					$name_player = strtoupper( $name_player[1] );
					$action = strtoupper( $r['action'] );
					$value =  $r['value'] ;
					
					if ($r['position'] == 'sb'){
						
						if ( $r['monetario'] == 'K') {
							$small_blind  = $r['small_blind'] * 1000;
							$ante 		  =$r['ante'] * 1000;
						}
						
						if($r['action'] == 'raise' || $r['action'] == 'call'){
							$_SESSION['pot'] += ($value - ($small_blind)); 
						}
						
						
						
						$_SESSION['sb'] = $r['action'];
						$_SESSION['bb'] = '. . .';
					}
					
					if ($r['position'] == 'bb'){
						
						if ( $r['monetario'] == 'K') {
							$big_blind   = $r['big_blind'] * 1000;
							$ante 		 = $r['ante'] * 1000;
						}
						
						if($r['action'] == 'raise' || $r['action'] == 'call'){
							$_SESSION['pot'] += ($value - ($big_blind)); 
						}
						
						$_SESSION['bb'] = $r['action'];
						
					}
					
					if($r['action'] == 'raise'){
						echo "<div class='divsub'>$name_player $action TO $value</div>";
					}else{
						echo "<div class='divsub'>$name_player $action</div>";
					}
					
					
					
				}
				?>
				
				
				<!--
				<div class="divsub">HOLZ RAISE TO 1.5 M</div>
				<div class="divsub">SMITH CALL</div>
				-->
				
			</center>
		</div>
		<?php
		}elseif(isset($_GET['street']) and $_GET['street'] == 'pre' ){
			$_SESSION['bb'] = '';
			
		?>	
			<div class="actions">
				<center>
					PRE FLOP
					<br>
					<br>
				</center>
			</div>
		
		<?php
		}else{
			$_SESSION['bb'] = '';
			if($g['num'] < 3){
				$_SESSION['sb'] = '. . .';	
			}
			
		}
		?>
		
		
		
		<!-- FLOP -->
		<?php
		if ($street == 'flop'){
			$_SESSION['ordem'] = $_GET['ordem'];
		?>
		<div class="actions">
			<center>
				PRE FLOP
				
				<?php
				$a = Poker::select_action_game_by_street($game, $_SESSION['ordem'], 'pre');
				foreach($a['dados'] as $r){
					$name_player = explode(" ", $r['name_player']);
					$name_player = strtoupper( $name_player[1] );
					$action = strtoupper( $r['action'] );
					$value = strtoupper( $r['value'] );
					
					if ($r['position'] == 'sb'){
						
						if ( $r['monetario'] == 'K') {
							$small_blind  = $r['small_blind'] * 1000;
							$ante 		  =$r['ante'] * 1000;
						}
						
						if($r['action'] == 'raise' || $r['action'] == 'call'){
							$_SESSION['pot'] += ($value - ($small_blind)); 
						}
						
						
						
						$_SESSION['sb'] = $r['action'];
						$_SESSION['bb'] = '. . .';
					}
					
					if ($r['position'] == 'bb'){
						
						if ( $r['monetario'] == 'K') {
							$big_blind   = $r['big_blind'] * 1000;
							$ante 		 = $r['ante'] * 1000;
						}
						
						if($r['action'] == 'raise' || $r['action'] == 'call'){
							$_SESSION['pot'] += ($value - ($big_blind)); 
						}
						
						$_SESSION['bb'] = $r['action'];
						
					}
					
					if($r['action'] == 'raise'){
						echo "<div class='divsub'>$name_player $action TO $value</div>";
					}else{
						echo "<div class='divsub'>$name_player $action</div>";
					}
					
				}
				?>
			</center>
		</div>
		
		<div class="actions">
			<center>
				FLOP
				
				<?php
				$a = Poker::select_action_game_by_street($game, $_SESSION['ordem'], 'flop');
				foreach($a['dados'] as $r){
					$name_player = explode(" ", $r['name_player']);
					$name_player = strtoupper( $name_player[1] );
					$action = strtoupper( $r['action'] );
					$value = strtoupper( $r['value'] );
					
					if($r['action'] == 'raise'){
						echo "<div class='divsub'>$name_player $action TO $value</div>";
						$_SESSION['pot'] += $value;
					}else{
						echo "<div class='divsub'>$name_player $action</div>";
						
						if($r['action'] == 'call'){
							$_SESSION['pot'] += $value;
						}
					}
					
					if ($r['position'] == 'sb'){
						
						$_SESSION['sb'] = $r['action'];
						
						if ($_SESSION['sb'] == 'raise') {
							$_SESSION['bb'] = '. . .';
						}
						
					}
					
					if ($r['position'] == 'bb'){
						
						$_SESSION['bb'] = $r['action'];
						
						if( $r['next_position'] <> '' ){
							$_SESSION['sb'] = '. . .';
						}
						
					}
					
					
				}
				?>
				
				<!--
				<div class="divsub">SMITH CHECK</div>
				<div class="divsub">HOLZ RAISE TO 1.8 M</div>
				<div class="divsub">SMITH CALL</div>
				-->
			</center>
		</div>
		<?php
		}elseif(isset($_GET['street']) and $_GET['street'] == 'flop' ){
		?>
			<div class="actions">
				<center>
					PRE FLOP
					
					<?php
					$a = Poker::select_action_game_by_street($game, $_SESSION['ordem'], 'pre');
					foreach($a['dados'] as $r){
						$name_player = explode(" ", $r['name_player']);
						$name_player = strtoupper( $name_player[1] );
						$action = strtoupper( $r['action'] );
						$value = strtoupper( $r['value'] );
						
						if($r['action'] == 'raise'){
							echo "<div class='divsub'>$name_player $action TO $value</div>";
						}else{
							echo "<div class='divsub'>$name_player $action</div>";
						}
						
						if ($r['position'] == 'sb'){
							if ( $r['monetario'] == 'K') {
								$small_blind  = $r['small_blind'] * 1000;
								$ante 		  =$r['ante'] * 1000;
							}
							
							if($r['action'] == 'raise' || $r['action'] == 'call'){
								$_SESSION['pot'] += ($value - ($small_blind)); 
							}
							
						}
						
						if ($r['position'] == 'bb'){
							if ( $r['monetario'] == 'K') {
								$big_blind   = $r['big_blind'] * 1000;
								$ante 		 = $r['ante'] * 1000;
							}
							
							if($r['action'] == 'raise' || $r['action'] == 'call'){
							$_SESSION['pot'] += ($value - ($big_blind)); 
						}
							
						}
						
					}
					?>
				</center>
			</div>
			
			<div class="actions">
				<center>
					FLOP
					<br><br>
				</center>
			</div>
		<?php
		}
		?>
		
		
		
		<!-- TURN -->
		<?php
		if ($street == 'turn'){
			$_SESSION['ordem'] = $_GET['ordem'];
		?>
		
		
		<div class="actions">
			<center>
				PRE FLOP
				
				<?php
				$a = Poker::select_action_game_by_street($game, $_SESSION['ordem'], 'pre');
				foreach($a['dados'] as $r){
					$name_player = explode(" ", $r['name_player']);
					$name_player = strtoupper( $name_player[1] );
					$action = strtoupper( $r['action'] );
					$value = strtoupper( $r['value'] );
					
					if ($r['position'] == 'sb'){
						
						if ( $r['monetario'] == 'K') {
							$small_blind  = $r['small_blind'] * 1000;
							$ante 		  =$r['ante'] * 1000;
						}
						
						if($r['action'] == 'raise' || $r['action'] == 'call'){
							$_SESSION['pot'] += ($value - ($small_blind)); 
						}
						
						
						
						$_SESSION['sb'] = $r['action'];
						$_SESSION['bb'] = '. . .';
					}
					
					if ($r['position'] == 'bb'){
						
						if ( $r['monetario'] == 'K') {
							$big_blind   = $r['big_blind'] * 1000;
							$ante 		 = $r['ante'] * 1000;
						}
						
						if($r['action'] == 'raise' || $r['action'] == 'call'){
							$_SESSION['pot'] += ($value - ($big_blind)); 
						}
						
						$_SESSION['bb'] = $r['action'];
						
					}
					
					if($r['action'] == 'raise'){
						echo "<div class='divsub'>$name_player $action TO $value</div>";
					}else{
						echo "<div class='divsub'>$name_player $action</div>";
					}
					
				}
				?>
			</center>
		</div>
		
		<div class="actions">
			<center>
				FLOP
				
				<?php
				$a = Poker::select_action_game_by_street($game, $_SESSION['ordem'], 'flop');
				foreach($a['dados'] as $r){
					$name_player = explode(" ", $r['name_player']);
					$name_player = strtoupper( $name_player[1] );
					$action = strtoupper( $r['action'] );
					$value = strtoupper( $r['value'] );
					
					if($r['action'] == 'raise'){
						echo "<div class='divsub'>$name_player $action TO $value</div>";
						$_SESSION['pot'] += $value;
					}else{
						echo "<div class='divsub'>$name_player $action</div>";
						
						if($r['action'] == 'call'){
							$_SESSION['pot'] += $value;
						}
					}
					
					if ($r['position'] == 'sb'){
						
						$_SESSION['sb'] = $r['action'];
						
						if ($_SESSION['sb'] == 'raise') {
							$_SESSION['bb'] = '. . .';
						}
						
					}
					
					if ($r['position'] == 'bb'){
						
						$_SESSION['bb'] = $r['action'];
						
						if( $r['next_position'] <> '' ){
							$_SESSION['sb'] = '. . .';
						}
						
					}
					
				}
				?>
			</center>
		</div>
		
		<div class="actions">
			<center>
				TURN
				
				<?php
				$a = Poker::select_action_game_by_street($game, $_SESSION['ordem'], 'turn');
				foreach($a['dados'] as $r){
					$name_player = explode(" ", $r['name_player']);
					$name_player = strtoupper( $name_player[1] );
					$action = strtoupper( $r['action'] );
					$value = strtoupper( $r['value'] );
					
					if($r['action'] == 'raise'){
						echo "<div class='divsub'>$name_player $action TO $value</div>";
						$_SESSION['pot'] += $value;
					}else{
						echo "<div class='divsub'>$name_player $action</div>";
						
						if($r['action'] == 'call'){
							$_SESSION['pot'] += $value;
						}
					}
					
					if ($r['position'] == 'sb'){
						
						$_SESSION['sb'] = $r['action'];
						
						if ($_SESSION['sb'] == 'raise') {
							$_SESSION['bb'] = '. . .';
						}
						
					}
					
					if ($r['position'] == 'bb'){
						
						$_SESSION['bb'] = $r['action'];
						
						if( $r['next_position'] <> '' ){
							$_SESSION['sb'] = '. . .';
						}
						
					}
					
				}
				?>
				<!--
				<div class="divsub">SMITH CHECK</div>
				<div class="divsub">HOLZ CHECK</div>
				-->
			</center>
		</div>
		
		<?php
		}elseif(isset($_GET['street']) and $_GET['street'] == 'turn' ){
		?>
			<div class="actions">
				<center>
					PRE FLOP
					
					<?php
					$a = Poker::select_action_game_by_street($game, $_SESSION['ordem'], 'pre');
					foreach($a['dados'] as $r){
						$name_player = explode(" ", $r['name_player']);
						$name_player = strtoupper( $name_player[1] );
						$action = strtoupper( $r['action'] );
						$value = strtoupper( $r['value'] );
						
						if($r['action'] == 'raise'){
							echo "<div class='divsub'>$name_player $action TO $value</div>";
						}else{
							echo "<div class='divsub'>$name_player $action</div>";
						}
						
						if ($r['position'] == 'sb'){
							if ( $r['monetario'] == 'K') {
								$small_blind  = $r['small_blind'] * 1000;
								$ante 		  =$r['ante'] * 1000;
							}
							
							if($r['action'] == 'raise' || $r['action'] == 'call'){
								$_SESSION['pot'] += ($value - ($small_blind)); 
							}
							
						}
						
						if ($r['position'] == 'bb'){
							if ( $r['monetario'] == 'K') {
								$big_blind   = $r['big_blind'] * 1000;
								$ante 		 = $r['ante'] * 1000;
							}
							
							if($r['action'] == 'raise' || $r['action'] == 'call'){
							$_SESSION['pot'] += ($value - ($big_blind)); 
						}
							
						}
						
					}
					?>
				</center>
			</div>
			
			<div class="actions">
			<center>
				FLOP
				
				<?php
				$a = Poker::select_action_game_by_street($game,  $_SESSION['ordem'], 'flop');
				foreach($a['dados'] as $r){
					$name_player = explode(" ", $r['name_player']);
					$name_player = strtoupper( $name_player[1] );
					$action = strtoupper( $r['action'] );
					$value = strtoupper( $r['value'] );
					
					if($r['action'] == 'raise'){
						echo "<div class='divsub'>$name_player $action TO $value</div>";
						$_SESSION['pot'] += $value;
					}else{
						echo "<div class='divsub'>$name_player $action</div>";
						
						if($r['action'] == 'call'){
							$_SESSION['pot'] += $value;
						}
					}
					
					if ($r['position'] == 'sb'){
						
						$_SESSION['sb'] = $r['action'];
						
						if ($_SESSION['sb'] == 'raise') {
							$_SESSION['bb'] = '. . .';
						}
						
					}
					
					if ($r['position'] == 'bb'){
						
						$_SESSION['bb'] = $r['action'];
						
						if( $r['next_position'] <> '' ){
							$_SESSION['sb'] = '. . .';
						}
						
					}
					
				}
				?>
			</center>
		</div>
		
			<div class="actions">
				<center>
					TURN
					<br><br>
				</center>
			</div>
		
		<?php
		}
		?>
		
		
		
		
		<!-- RIVER -->
		<?php
		if ($street == 'river'){
			$_SESSION['ordem'] = $_GET['ordem'];
		?>
		
		
		<div class="actions">
			<center>
				PRE FLOP
				
				<?php
				$a = Poker::select_action_game_by_street($game, $_SESSION['ordem'], 'pre');
				foreach($a['dados'] as $r){
					$name_player = explode(" ", $r['name_player']);
					$name_player = strtoupper( $name_player[1] );
					$action = strtoupper( $r['action'] );
					$value = strtoupper( $r['value'] );
					
					if ($r['position'] == 'sb'){
						
						if ( $r['monetario'] == 'K') {
							$small_blind  = $r['small_blind'] * 1000;
							$ante 		  =$r['ante'] * 1000;
						}
						
						if($r['action'] == 'raise' || $r['action'] == 'call'){
							$_SESSION['pot'] += ($value - ($small_blind)); 
						}
						
						
						
						$_SESSION['sb'] = $r['action'];
						$_SESSION['bb'] = '. . .';
					}
					
					if ($r['position'] == 'bb'){
						
						if ( $r['monetario'] == 'K') {
							$big_blind   = $r['big_blind'] * 1000;
							$ante 		 = $r['ante'] * 1000;
						}
						
						if($r['action'] == 'raise' || $r['action'] == 'call'){
							$_SESSION['pot'] += ($value - ($big_blind)); 
						}
						
						$_SESSION['bb'] = $r['action'];
						
					}
					
					if($r['action'] == 'raise'){
						echo "<div class='divsub'>$name_player $action TO $value</div>";
					}else{
						echo "<div class='divsub'>$name_player $action</div>";
					}
					
				}
				?>
			</center>
		</div>
		
		<div class="actions">
			<center>
				FLOP
				
				<?php
				$a = Poker::select_action_game_by_street($game, $_SESSION['ordem'], 'flop');
				foreach($a['dados'] as $r){
					$name_player = explode(" ", $r['name_player']);
					$name_player = strtoupper( $name_player[1] );
					$action = strtoupper( $r['action'] );
					$value = strtoupper( $r['value'] );
					
					if($r['action'] == 'raise'){
						echo "<div class='divsub'>$name_player $action TO $value</div>";
						$_SESSION['pot'] += $value;
					}else{
						echo "<div class='divsub'>$name_player $action</div>";
						
						if($r['action'] == 'call'){
							$_SESSION['pot'] += $value;
						}
					}
					
					if ($r['position'] == 'sb'){
						
						$_SESSION['sb'] = $r['action'];
						
						if ($_SESSION['sb'] == 'raise') {
							$_SESSION['bb'] = '. . .';
						}
						
					}
					
					if ($r['position'] == 'bb'){
						
						$_SESSION['bb'] = $r['action'];
						
						if( $r['next_position'] <> '' ){
							$_SESSION['sb'] = '. . .';
						}
						
					}
					
				}
				?>
			</center>
		</div>
		
		<div class="actions">
			<center>
				TURN
				
				<?php
				$a = Poker::select_action_game_by_street($game, $_SESSION['ordem'], 'turn');
				foreach($a['dados'] as $r){
					$name_player = explode(" ", $r['name_player']);
					$name_player = strtoupper( $name_player[1] );
					$action = strtoupper( $r['action'] );
					$value = strtoupper( $r['value'] );
					
					if($r['action'] == 'raise'){
						echo "<div class='divsub'>$name_player $action TO $value</div>";
						$_SESSION['pot'] += $value;
					}else{
						echo "<div class='divsub'>$name_player $action</div>";
						
						if($r['action'] == 'call'){
							$_SESSION['pot'] += $value;
						}
					}
					
					if ($r['position'] == 'sb'){
						
						$_SESSION['sb'] = $r['action'];
						
						if ($_SESSION['sb'] == 'raise') {
							$_SESSION['bb'] = '. . .';
						}
						
					}
					
					if ($r['position'] == 'bb'){
						
						$_SESSION['bb'] = $r['action'];
						
						if( $r['next_position'] <> '' ){
							$_SESSION['sb'] = '. . .';
						}
						
					}
					
				}
				?>
				<!--
				<div class="divsub">SMITH CHECK</div>
				<div class="divsub">HOLZ CHECK</div>
				-->
			</center>
		</div>
		
		<div class="actions">
			<center>
				RIVER
				
				<?php
				$a = Poker::select_action_game_by_street($game, $_SESSION['ordem'], 'river');
				foreach($a['dados'] as $r){
					$name_player = explode(" ", $r['name_player']);
					$name_player = strtoupper( $name_player[1] );
					$action = strtoupper( $r['action'] );
					$value = strtoupper( $r['value'] );
					
					if($r['action'] == 'raise'){
						echo "<div class='divsub'>$name_player $action TO $value</div>";
						$_SESSION['pot'] += $value;
					}else{
						echo "<div class='divsub'>$name_player $action</div>";
						
						if($r['action'] == 'call'){
							$_SESSION['pot'] += $value;
						}
					}
					
					if ($r['position'] == 'sb'){
						
						$_SESSION['sb'] = $r['action'];
						
						if ($_SESSION['sb'] == 'raise') {
							$_SESSION['bb'] = '. . .';
						}
						
					}
					
					if ($r['position'] == 'bb'){
						
						$_SESSION['bb'] = $r['action'];
						
						if( $r['next_position'] <> '' ){
							$_SESSION['sb'] = '. . .';
						}
						
					}
					
				}
				?>
				<!--
				<div class="divsub">SMITH CHECK</div>
				<div class="divsub">HOLZ CHECK</div>
				-->
			</center>
		</div>
		
		<?php
		}elseif(isset($_GET['street']) and $_GET['street'] == 'river' ){
		?>
			<div class="actions">
				<center>
					PRE FLOP
					
					<?php
					$a = Poker::select_action_game_by_street($game, $_SESSION['ordem'], 'pre');
					foreach($a['dados'] as $r){
						$name_player = explode(" ", $r['name_player']);
						$name_player = strtoupper( $name_player[1] );
						$action = strtoupper( $r['action'] );
						$value = strtoupper( $r['value'] );
						
						if($r['action'] == 'raise'){
							echo "<div class='divsub'>$name_player $action TO $value</div>";
						}else{
							echo "<div class='divsub'>$name_player $action</div>";
						}
						
						if ($r['position'] == 'sb'){
							if ( $r['monetario'] == 'K') {
								$small_blind  = $r['small_blind'] * 1000;
								$ante 		  =$r['ante'] * 1000;
							}
							
							if($r['action'] == 'raise' || $r['action'] == 'call'){
								$_SESSION['pot'] += ($value - ($small_blind)); 
							}
							
						}
						
						if ($r['position'] == 'bb'){
							if ( $r['monetario'] == 'K') {
								$big_blind   = $r['big_blind'] * 1000;
								$ante 		 = $r['ante'] * 1000;
							}
							
							if($r['action'] == 'raise' || $r['action'] == 'call'){
							$_SESSION['pot'] += ($value - ($big_blind)); 
						}
							
						}
						
					}
					?>
				</center>
			</div>
			
			<div class="actions">
			<center>
				FLOP
				
				<?php
				$a = Poker::select_action_game_by_street($game,  $_SESSION['ordem'], 'flop');
				foreach($a['dados'] as $r){
					$name_player = explode(" ", $r['name_player']);
					$name_player = strtoupper( $name_player[1] );
					$action = strtoupper( $r['action'] );
					$value = strtoupper( $r['value'] );
					
					if($r['action'] == 'raise'){
						echo "<div class='divsub'>$name_player $action TO $value</div>";
						$_SESSION['pot'] += $value;
					}else{
						echo "<div class='divsub'>$name_player $action</div>";
						
						if($r['action'] == 'call'){
							$_SESSION['pot'] += $value;
						}
					}
					
					if ($r['position'] == 'sb'){
						
						$_SESSION['sb'] = $r['action'];
						
						if ($_SESSION['sb'] == 'raise') {
							$_SESSION['bb'] = '. . .';
						}
						
					}
					
					if ($r['position'] == 'bb'){
						
						$_SESSION['bb'] = $r['action'];
						
						if( $r['next_position'] <> '' ){
							$_SESSION['sb'] = '. . .';
						}
						
					}
					
				}
				?>
			</center>
		</div>
		
			<div class="actions">
				<center>
					TURN
					<?php
					$a = Poker::select_action_game_by_street($game,  $_SESSION['ordem'], 'turn');
					foreach($a['dados'] as $r){
						$name_player = explode(" ", $r['name_player']);
						$name_player = strtoupper( $name_player[1] );
						$action = strtoupper( $r['action'] );
						$value = strtoupper( $r['value'] );
						
						if($r['action'] == 'raise'){
							echo "<div class='divsub'>$name_player $action TO $value</div>";
							$_SESSION['pot'] += $value;
						}else{
							echo "<div class='divsub'>$name_player $action</div>";
							
							if($r['action'] == 'call'){
								$_SESSION['pot'] += $value;
							}
						}
						
						if ($r['position'] == 'sb'){
							
							$_SESSION['sb'] = $r['action'];
							
							if ($_SESSION['sb'] == 'raise') {
								$_SESSION['bb'] = '. . .';
							}
							
						}
						
						if ($r['position'] == 'bb'){
							
							$_SESSION['bb'] = $r['action'];
							
							if( $r['next_position'] <> '' ){
								$_SESSION['sb'] = '. . .';
							}
							
						}
						
					}
					?>
				</center>
			</div>
			
			<div class="actions">
				<center>
					RIVER
					<br><br>
				</center>
			</div>
		<?php
		}
		?>
		
		
		
		<div class="naipe-small-clubs"></div> 
		
	</div>