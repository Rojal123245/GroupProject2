<?php 

	$i = 0;
	foreach ($formData as $key) {
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
					<input type="'.$key[0].'" name="'.$key[1].'" class="form-control" id="'.$key[0].'-input"  value="'.$getRow[$i].'" />
				    </div>
				';
			}
		}
		else{
			if(sizeof($getRow) == 0){
				echo '
					<input type="'.$key[0].'" name="'.$key[1].'" class="form-control" id="'.$key[0].'-input"  required />
				    </div>
				';
			}
			else{
				echo '
					<input type="'.$key[0].'" name="'.$key[1].'" class="form-control" id="'.$key[0].'-input"  value="'.$getRow[$i].'" required />
				    </div>
				';
			}
		}
		$i++;      
	}

?>