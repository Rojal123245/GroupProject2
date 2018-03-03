<?php 

	function update($key, $value, $query){
		$querySearch = $query->find($key, $value);
		while ($getRow = $querySearch->fetch()) {
		 	
		}
	}
?>