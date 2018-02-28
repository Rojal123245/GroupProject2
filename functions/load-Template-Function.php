<?php 

	function contentLoadingFunction($filename, $templateVars){
		extract($templateVars);
		ob_start();
		require $filename;
		$content = ob_get_clean();
		return $content;
	} 

?>