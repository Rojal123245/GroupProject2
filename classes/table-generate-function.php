<?php 
	class GenerateTableClass{
		public $tableHeading;
		public $tableRow = [];
		public function settableHeadingToTable($tableHeading){
			$this->tableHeading = $tableHeading;
		}
		public function addRowToTable($row){
			$this->tableRow[] = $row;
		}
		public function getHTMLTemplate(){
			$result ='';
			$result .= '<div class="table-responsive"><table class="table"><thead><tr>';
			foreach($this->tableHeading as $heading){
				$result .= '<th>' .$heading.'</th>';
			}
			$result .= '</tr></thead><tbody>';
			foreach ($this->tableRow as $row) {
				$result .= '<tr>';
				foreach ($row as $cell) {
					$result .= '<td>'.$cell.'</td>';
				}
				$result .= '</tr>';
			}
			$result .='</tbody></table></div>';
			return $result;
		}
	}
?>