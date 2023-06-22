<?php

class Poker extends Connection{

	static function isset_email($email){
		$n = self::getConn()->prepare('SELECT id_user FROM user WHERE email=?');					
		$n->execute(array($email));		
		$d['num'] = $n->rowCount();
		return $d;
	}

#select	( ! ) Notice: Undefined variable: id in C:\wamp64\www\wit_allien\Poker.class.php on line 22
	
	static function select_play_game_join($game){
		$n1 = self::getConn()->prepare('SELECT *
										  FROM game g, player p, player_game pg
										 WHERE g.id_game = pg.id_game
										   AND p.id_player = pg.id_player
										   AND g.id_game = ? 
									  ORDER BY position_order asc
									');		
		
		$n1->execute(array($game));			
		$d['num'] = $n1->rowCount();
		$d['dados'] = $n1->fetchAll();			
		return $d;
	}

	static function select_action_game($game, $ordem){
		$n1 = self::getConn()->prepare('SELECT *
										  FROM action_game a, player_game p
										 WHERE a.id_player_game = p.id_player_game AND p.id_game = ? AND a.ordem = ?
									');		
		
		$n1->execute(array($game, $ordem));			
		$d = $n1->fetch();	
        $d['num'] = $n1->rowCount();		
		return $d;
	}
	
	static function select_action_game_by_street($game, $ordem, $street){
		$n1 = self::getConn()->prepare('SELECT *
										  FROM action_game a, player_game p, player y, game g
										 WHERE a.id_player_game = p.id_player_game 
										   AND p.id_player = y.id_player 
										   AND g.id_game = p.id_game 
										   AND p.id_game = ? 
										   AND a.ordem <= ? 
										   AND a.street = ?									  
									  ');		
		
		$n1->execute(array($game, $ordem, $street));			
		$d['num'] = $n1->rowCount();
		$d['dados'] = $n1->fetchAll();			
		return $d;
	}
	
	static function select_action_game_top($game, $ordem){
		$n1 = self::getConn()->prepare('SELECT *
										  FROM action_game a, player_game p, player y, game g
										 WHERE a.id_player_game = p.id_player_game 
										   AND p.id_player = y.id_player 
										   AND g.id_game = p.id_game 
										   AND p.id_game = ? 
										   AND a.ordem = ? 
									');		
		
		$n1->execute(array($game, $ordem));			
		$d = $n1->fetch();			
		return $d;
	}
	
	static function sum_chip_behind($id_player_game, $ordem){
		$n = self::getConn()->prepare('SELECT sum(value) as sum 
										 FROM action_game a, player_game p 
										WHERE a.id_player_game = p.id_player_game
										  AND a.id_player_game = ? 
										  AND a.ordem = ?');					
		$n->execute(array($id_player_game, $ordem));		
		$d = $n->fetch();
		$d['num'] = $n->rowCount();
		return $d;
	}
	

}
?>