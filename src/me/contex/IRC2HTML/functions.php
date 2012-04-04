<?php
/*
 * This file is part of IRC2HTML <http://www.contex.me/>.
 *
 * IRC2HTML is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * IRC2HTML is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * chr(2) = 	bold
 * chr(3) =    	color
 * chr(15) = 	clean 
 * chr(29) = 	italic
 */
function parseToHTML($string) {
	$string = str_replace(chr(2), "<b>", $string);
	$string = str_replace(chr(29), "<i>", $string);
	$string = str_replace(chr(15), "</font></i></b>", $string);
	for($a = 15; $a >= 0; $a--) {
		for($b = 15; $b >= 0; $b--) {
			if ($a == 0) {
				$string = str_replace(chr(3) . '0' . $b, "</font><font style='color: " . getHTMLColor($b) . ";'>", $string);
				$string = str_replace(chr(3) . $b, "</font><font style='color: " . getHTMLColor($b) . ";'>", $string);
			} else {
				$string = str_replace(chr(3) . $a . ',' . $b, "</font><font style='background-color: " . getHTMLColor($a) . ";color: " . getHTMLColor($b) . ";'>", $string);
			}
		}
	}
	return $string;
}

function parseToBBCode($string) {
	for($a = 15; $a >= 0; $a--) {
		for($b = 15; $b >= 0; $b--) {
			if ($a == 0) {
				$string = str_replace(chr(3) . '0' . $b, "[color=" . getBBCodeColor($b) . "]", $string);
				$string = str_replace(chr(3) . $b, "[color=" . getBBCodeColor($b) . "]", $string);
			} else {
				$string = str_replace(chr(3) . $a . ',' . $b, "[color=" . getBBCodeColor($b) . "]", $string);
			}
		}
	}
	$array = explode("\n", $string);
	$count = substr_count($string, chr(15));
	$string = "";
	$color = false;
	$bold = false;
	$italic = false;
	for ($a = 0; count($array) > $a; $a++) {
		$length = strlen($array[$a]);
		$temp = $array[$a];
		$array[$a] = "";
		for ($b = 0; $length > $b; $b++) {
			if ($temp[$b] == "[") {
				$check = $temp[$b + 1] . $temp[$b + 2] . $temp[$b + 3];
				if ($check == "col") {
					if ($color) {
						$array[$a] .= "[/color]";
					} else {
						$color = true;
					}
					$array[$a] .= $temp[$b];
				}
			} else if ($temp[$b] == chr(3)) {
				$color = true;
				$array[$a] .= chr(3);
			} else if ($temp[$b] == chr(2)) {
				$bold = true;
				$array[$a] .= "[b]";
			} else if ($temp[$b] == chr(29)) {
				$italic = true;
				$array[$a] .= "[i]";
			} else if ($temp[$b] == chr(15)) {
				if ($color) {
					$array[$a] .= "[/color]";
					$color = false;
				}
				if ($bold) {
					$array[$a] .= "[/b]";
					$bold = false;
				}
				if ($italic) {
					$array[$a] .= "[/i]";
					$italic = false;
				}
			} else {
				$array[$a] .= $temp[$b];
			}
		}
		$string .= $array[$a] . "\n";
	}	
	$string = str_replace("<br>", "", $string); 
	return $string;
}

function parseToIRC($string) {
	$string = str_replace("</font></i></b>", chr(15), $string);
	$string = str_replace("</font>", chr(3), $string);
	$string = str_replace("<b>", chr(2), $string);
	$string = str_replace("</b>", chr(2), $string);
	$string = str_replace("<i>", chr(29), $string);
	$string = str_replace("</i>", chr(29), $string);
	return $string;
}

function getHTMLColor($id) {
	switch($id) {
		case 0: 	return "white";
		case 1: 	return "black";
		case 2: 	return "darkblue";
		case 3: 	return "green";
		case 4: 	return "red";
		case 5: 	return "brown";
		case 6: 	return "purple";
		case 7: 	return "orange";
		case 8: 	return "yellow";
		case 9: 	return "lime";
		case 10: 	return "teal";
		case 11: 	return "cyan";
		case 12: 	return "blue";
		case 13: 	return "pink";
		case 14: 	return "grey";
		case 15: 	return "lightgrey";
	}
	return "white";
}

function getBBCodeColor($id) {
	switch($id) {
		case 0: 	return "white";
		case 1: 	return "black";
		case 2: 	return "darkblue";
		case 3: 	return "green";
		case 4: 	return "red";
		case 5: 	return "brown";
		case 6: 	return "purple";
		case 7: 	return "orange";
		case 8: 	return "yellow";
		case 9: 	return "lime";
		case 10: 	return "teal";
		case 11: 	return "cyan";
		case 12: 	return "blue";
		case 13: 	return "pink";
		case 14: 	return "grey";
		case 15: 	return "lightgrey";
	}
	return "white";
}

function getIRCColor($id) {
	switch($id) {
		case "white": 		return 0;
		case "black": 		return 1;
		case "darkblue":	return 2;
		case "green": 		return 3;
		case "red": 		return 4;
		case "brown": 		return 5;
		case "purple": 		return 6;
		case "orange": 		return 7;
		case "yellow": 		return 8;
		case "lime": 		return 9;
		case "teal": 		return 10;
		case "cyan": 		return 11;
		case "blue": 		return 12;
		case "pink": 		return 13;
		case "grey": 		return 14;
		case "lightgrey": 	return 15;
	}
	return 0;
}
?>