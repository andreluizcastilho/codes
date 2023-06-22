<?php session_start() ?>
<style>
body {
	
 <?php
 if((isset($_GET['street']) and $_GET['street'] == 'pre') or (!isset($_GET['ordem']) and !isset($_GET['street'])) ){
 ?> 
	background-image: url("back-poker-start.jpg");
 <?php
 }else{
 ?>
	background-image: url("back-poker.jpg");
 <?php
 }
 ?>
 background-size: 100%;
}

</style>

<link rel="stylesheet" media="all" href="style.css">

<?php
require_once "Connection.class.php";
require_once "Poker.class.php";

//functions
require_once('functions.php');


//modulo start game
require_once('modulo_start_game.php');

//echo $_SESSION['chip_behind'];

?>

<body>
    
	<!-- -->
	<?php
		//modulo_actions_sidee
		require_once('modulo_actions_side.php');
	?>
	
	<?php
		//modulo_cards_player
		require_once('modulo_cards_player.php');
	?>
	
	 
	<?php
		//modulo_show_board
		require_once('modulo_show_board.php');
		//( ! ) Notice: Undefined index: chip_behind_before_sb in C:\wamp64\www\wit_allien\background.php on line 57
		
	?>
    
	<div class="button-area">
		<!--
		

		
		<button class="favorite end" type="button">
			END
		</button>
		
		<button class="favorite call" type="button">
			START
		</button>
		
		<button class="favorite next" type="button">
			NEXT
		</button>
		
		<button class="favorite street" type="button">
			STREET
		</button>
		-->
		
		<?php
			if (!isset($_GET['ordem']) and !isset($_GET['street'])) {
		?>	
				<a class="btn" href="?street=pre">
					<button class="favorite start" type="button">
						START
					</button>
				</a>
		<?php	
			}else{
				
				if (isset($_GET['street']) and $_GET['street']=='pre'){
					$_SESSION['street'] = $_GET['street'];
					$_SESSION['ordem'] = 1;
		?>
					<a class="btn" href="?ordem=<?php echo $_SESSION['ordem']; ?>">
						<button class="favorite next" type="button">
							NEXT
						</button>
					</a>
		
		<?php	
				}else{
					
					
					if (isset($_GET['ordem']) and $_GET['ordem'] == 1){
						$_SESSION['ordem']++;
		?>			
						<a class="btn" href="?ordem=<?php echo $_SESSION['ordem']; ?>">
							<button class="favorite next" type="button">
								NEXT
							</button>
						</a>
		
		<?php			
					}else{
						
						//verificar se a próxima action tem street diferente da atual
						$o = Poker::select_action_game($game, ($_SESSION['ordem'] + 1));
						
						
						if (!isset($o['street'])){
							echo'
							<a class="btn" href="destruir_sessions.php">
								<button class="favorite end" type="button">
									END
								</button>
							</a>';
						
						}elseif($_SESSION['street'] <> $o['street']){
							$_SESSION['street'] = $o['street'];
							
		?>					
							<a class="btn" href="?street=<?php echo $o['street']; ?>">
								<button class="favorite street" type="button">
									STREET
								</button>
							</a>

		<?php
						}else{
							$_SESSION['ordem']++;
		?>					
							<a class="btn" href="?ordem=<?php echo $_SESSION['ordem']; ?>">
								<button class="favorite next" type="button">
									NEXT
								</button>
							</a>
		<?php
						
						}
					}
					//echo $_SESSION['ordem'];
				}
			}
		?>
		
		<!--
		<a class="btn" href="destruir_sessions.php" target="_blank">
			<button class="favorite end" type="button">
				END
			</button>
		</a>
		-->
	</div>
	
</body>