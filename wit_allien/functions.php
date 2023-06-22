<?php

function naipe($naipe, $css){
	switch ($naipe) {
		case 's':			
			return "<img class='$css' src='spades-icon.png'> ";
			break;
		case 'c':
			return "<img class='$css' src='clubs-icon.png'> ";
			break;
		case 'd':
			return "<img class='$css' src='diamonds-icon.png'> ";
			break;
		case 'h':
			return "<img class='$css' src='hearts-icon.png'> ";
			break;	
	}		
}


?>