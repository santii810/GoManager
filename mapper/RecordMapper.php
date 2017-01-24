<?php
require_once (__DIR__ . "/../core/PDOConnection.php");

/**
 * Class RecordMapper
 *
 * Database interface for Record entities
 *        
 */
class RecordMapper {
	
	/**
	 * Reference to the PDO connection
	 * 
	 * @var PDO
	 */
	private $db;
	public function __construct() {
		$this->db = PDOConnection::getInstance ();
	}


	
	/**
	 * Retrieves all records
	 *
	 *
	 * @throws PDOException if a database error occurs
	 * @return Array of Record instances
	 */
	public function getAll() {
		$id_user = 1;
		$stmt = $this->db->prepare ( "SELECT * FROM record WHERE record_user=?");
		$stmt->execute ( array (
			$id_user
			) );
		$record_db = $stmt->fetchAll ( PDO::FETCH_ASSOC );
		$recordList = array ();

		foreach ( $record_db as $record ) {
			array_push($record, new Record( $record["record_id"],$record["record_user"],$record["record_candys"],$record["record_pokedex"],$record["record_pokemon"],$record["record_date"]));

		}

		return $recordList;
	}
}
