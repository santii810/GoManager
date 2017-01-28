<?php

require_once (__DIR__ . "/../../core/PDOConnection.php");
require_once (__DIR__ . "/../../model/pokemon/PokemonModel.php");

/**
 * Class RecordMapper
 *
 * Database interface for Record entities
 *        
 */
class PokemonMapper {

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
     * @return Array of all pokemon
     */
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM " . TABLE_POKEMON);

        $db_response = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $toret = array();

        foreach ($db_response as $value) {
            $id = $value[COL_POKEMON_ID];
            $pokemon = new PokemonModel($id, $value[COL_POKEMON_NAME], $value[COL_NECESARY_CANDYS], $value[COL_EVOLUTION], $value[COL_PREEVOLUTION], $value[COL_POKEMON_ACTIVE]);
            $toret[$id] = $pokemon;
        } return $toret;
    }

}
