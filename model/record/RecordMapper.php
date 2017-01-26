<?php

require_once (__DIR__ . "/../../core/PDOConnection.php");
require_once (__DIR__ . "/../../model/record/RecordModel.php");
/**
 * Class RecordMapper
 *
 * Database interface for Record entities
 *        
 */
define("COL_RECORD_ID", "record_id");
define("COL_RECORD_USER", "record_user");
define("COL_RECORD_CANDYS", "record_candys");
define("COL_RECORD_POKEDEX", "record_pokedex");
define("COL_RECORD_POKEMON", "record_pokemon");
define("COL_RECORD_DATE ", "record_date");

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
        $stmt = $this->db->prepare("SELECT * FROM record WHERE record_user=?");
        $stmt->execute(array(
            $id_user
        ));
        $db_response = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $toret = array();

        foreach ($db_response as $value) {
            array_push($toret, new RecordModel($value[COL_RECORD_ID], $value[COL_RECORD_USER], 
                    $value[COL_RECORD_CANDYS], $value[COL_RECORD_POKE], $value[COL_RECORD_POKEMON],
                    $value[COL_RECORD_DATE]));
        }

        return $toret;
    }

}
