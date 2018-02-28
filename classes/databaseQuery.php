<?php 
	class QueryDatabase{
		public $pdo; public $tableName;
		function __construct($pdo, $tableName){
			$this->pdo = $pdo;
			$this->tableName = $tableName;
		}
		function saveQuery($dataToQuery, $primaryKey=''){
		    try {
		        $this->insert($dataToQuery);
		    } 
		    catch (Exception $e) {
		        $this->update($dataToQuery, $primaryKey);
		    }
		}

		function insert($dataToQuery) {
		    $arrayKey = array_keys($dataToQuery);
		    $data = implode(', ', $arrayKey);
		    $dataWithColon = implode(', :', $arrayKey);

		    $query = 'INSERT INTO ' . $this->tableName . ' (' . $data . ') VALUES (:' . $dataWithColon . ')';

		    $stmt = $this->pdo->prepare($query);

		    $result = $stmt->execute($dataToQuery);
		}

		function update($dataToQuery, $primaryKey){
		    $query = 'UPDATE ' . $this->tableName. ' SET ';
		    $parameters = [];
		    foreach ($dataToQuery as $key => $value) {
		         $parameters[] = $key . ' = :'. $key;
		    } 
		    $query .= implode(', ', $parameters);
		    $query .= ' WHERE ' . $primaryKey . ' = :primaryKey';
		    $dataToQuery['primaryKey'] = $dataToQuery[$primaryKey];
		    $stmt = $this->pdo->prepare($query);
		    $stmt->execute($dataToQuery);
		}

		function find($field, $value) {
		        $stmt = $this->pdo->prepare('SELECT * FROM ' . $this->tableName . ' WHERE ' . $field . ' = :value');
		        $criteria = [
		                'value' => $value
		        ];
		        $stmt->execute($criteria);

		        return $stmt;
		}

		function findAll() {
		        $stmt = $this->pdo->prepare('SELECT * FROM ' . $this->tableName );
		        $stmt->execute();
		        return $stmt;
		}

		function delete($field, $value){
		    $stmt = $this->pdo->prepare('DELETE FROM ' . $this->tableName . ' WHERE ' . $field . ' = :value');
		    $criteria = [
		                'value' => $value
		        ];
		        $stmt->execute($criteria);

		        return $stmt;
		}
	}
?>