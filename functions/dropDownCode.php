<div class="btn-group">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $dropDown ?></button>

    <div class="dropdown-menu">
        

        <?php 
    		foreach ($dropDownContent as $key) {
    			echo '<a class="dropdown-item" href="'. $key. '.php">'.
    					$key.'</a>';
    		}
    	 ?>
    </div>
</div>
