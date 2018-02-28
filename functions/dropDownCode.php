<li class="dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle"><?php echo $dropDown ?> <span class="caret"></span></a>
    <ul role="menu" class="dropdown-menu">
    	<?php 
    		foreach ($dropDownContent as $key) {
    			echo '<li role="presentation"><a href="'. $key. '.php">'.
    					$key.'</a></li>';
    		}
    	 ?>
    </ul>
</li>