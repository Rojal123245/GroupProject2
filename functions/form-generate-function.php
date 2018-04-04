<?php 
	$i = 0;
	foreach ($formData as $key) {
		if(sizeof($key) < 4){
			$key[3] = '';
		}
		if($key[0] == 'checkbox'){
			$req = "";
		}
		else{
			$req = "required";
		}
		echo '
			<div class="form-group">
		        <label for="'.$key[0].'-input" class="control-label">'.$key[2].'</label>';

		if ($key[1] == 'studentMiddleName' || $key[1] == 'staffMiddleName') {
			if(sizeof($getRow) == 0){
				echo '
					<input type="'.$key[0].'" name="'.$key[1].'" class="form-control" id="'.$key[0].'-input" />
				    </div>
				';
			}
			else{
				echo '
					<input type="'.$key[0].'" name="'.$key[1].'" class="form-control" id="'.$key[0].'-input" value="'.$getRow[$i].'" />
				    </div>
				';
			}
		}
		else{
			if(sizeof($getRow) == 0){
				echo '
					<input type="'.$key[0].'" name="'.$key[1].'" class="form-control" id="'.$key[0].'-input" '.$req.' '.$key[3].'>
				    </div>
				';
			}
			else{
				echo '
					<input type="'.$key[0].'" name="'.$key[1].'" class="form-control" id="'.$key[0].'-input"  value="'.$getRow[$i].'" '.$req.' '.$key[3].'>
				    </div>
				';
			}
		}
		$i++;      
	}

?>