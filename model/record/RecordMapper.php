<?php

require_once (__DIR__ . "/../../core/PDOConnection.php");
require_once (__DIR__ . "/../../model/record/RecordModel.php");

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
        $this->db = PDOConnection::getInstance();
    }

    /**
     * Retrieves all records
     *
     *
     * @throws PDOException if a database error occurs
     * @return Array of Record instances
     */
    public function getAll() {
        $id_user = 0;
        $stmt = $this->db->prepare("SELECT * FROM " . TABLE_RECORD . " WHERE " . COL_RECORD_USER . "=?");
        $stmt->execute(array(
            $id_user
        ));
        $db_response = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $toret = array();

        foreach ($db_response as $value) {
            $record = new RecordModel($value[COL_RECORD_ID], $value[COL_RECORD_CANDYS], $value[COL_RECORD_POKEDEX], $value[COL_RECORD_POKEMON], $value[COL_RECORD_DATE]);
            $toret[$value[COL_RECORD_POKEMON]] = $record;
        }

        return $toret;
    }

    /**
     * Updates a Record in the database
     *
     * @param RecordModel record
     *        	The post to be updated
     * @throws PDOException if a database error occurs
     * @return void
     */
    public function update(RecordModel $record) {
        $stmt = $this->db->prepare("UPDATE record set record_candys=?, record_date = curdate() where record_pokemon=?");
        $stmt->execute(array(
            $record->getCandys(),
            $record->getPokemonId()
        ));
    }

    public function insert(RecordModel $record) {
        $userId = 0;
        $stmt = $this->db->prepare("INSERT INTO record "
                . " ( record_user, record_candys, record_pokedex, record_pokemon, record_date) "
                . "VALUES (?, ?, ?, ?, CURRENT_DATE)");
        $stmt->execute(array(
            $userId,
            $record->getCandys(),
            $record->isPokedex(),
            $record->getPokemonId(),
        ));
    }

}
