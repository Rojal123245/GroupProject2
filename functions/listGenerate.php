<?php 
	function listGenerate($lists){
		$i=1;
		foreach ($lists as $key) {
			echo '<li>
                    <a data-toggle="collapse" aria-expanded="false" aria-controls="collapse-'.$i.'" href="#collapse-'.$i.'">'.$key.'</a>
                    <div class="collapse" id="collapse-'.$i.'">
                    	<ul class="list-group">
					        <li class="list-group-item">
					        	<a href="page.php?t=a'.sha1($key).'">Add '.$key.'</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="page.php?t=v'.sha1($key).'">View '.$key.'</a>
					        </li>
					      </ul>
                    </div>
                </li>';
                $i++;
		}
	}
?>