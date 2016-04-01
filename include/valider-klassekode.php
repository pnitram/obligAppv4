<?php
/*
	function validerKlassekode ($klassekode) {
	$lovligKlassekode=true;
	if (!$klassekode) {
		$lovligKlassekode=false;
	}
	elseif (strlen($klassekode)!=3) {
		$lovligKlassekode=false;
	}
	else {
	@$tegn1=substr($klassekode, 0, 1);
	@$tegn2=substr($klassekode, 1, 1);
	@$tegn3=substr($klassekode, 2, 1);
} 
	if (@$tegn1 <"A" || @$tegn1 >"Z" || @$tegn2 <"A" || @$tegn2 >"Z" || @$tegn3 <"1" || @$tegn3 >"9") {
		$lovligKlassekode=false;
	}
 return $lovligKlassekode;
}
*/

	function validerKlassekode ($klassekode) {
	$lovligKlassekode=true;
	if (!$klassekode) {
		$lovligKlassekode=false;
	}
	elseif (strlen($klassekode) < 3) {
		$lovligKlassekode=false;
	}

	/*elseif (!is_numeric(substr($klassekode, -1)))*/
	/*BENYTTER REGEX HER */
	elseif (!preg_match("/[A-Z]+[0-9]$/", $klassekode)) {
	 	$lovligKlassekode=false;		
	}
/*
	else {
	@$tegn1=substr($klassekode, 0, 1);
	@$tegn2=substr($klassekode, 1, 1);
} 
	if (@$tegn1 <"A" || @$tegn1 >"Z" || @$tegn2 <"A" || @$tegn2 >"Z") {
		$lovligKlassekode=false;
	}*/
 return $lovligKlassekode;
}



?>