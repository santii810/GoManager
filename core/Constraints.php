<?php

/**
 * Default controller if any controller is passed in the URL
 *
 * Controller por defecto si no se le pasa ninguno en la URL
 */
define("DEFAULT_CONTROLLER", "record");

/**
 * Default action if any action is passed in the URL
 *
 * Accion por defecto en caso de que no se le pase en la URL
 */
define("DEFAULT_ACTION", "index");






/**
 * Name from table pokemon
 * Contains the list of pokemon added to database
 */
define("TABLE_POKEMON", "pokemon");

/**
 * Name from column pokemon_id of table pokemon
 * Contains id pokemon, its equal than his pokedex number
 */
define("COL_POKEMON_ID", "pokemon_id");
/**
 * Name from column necesary_candys of table pokemon
 * Contains count of candys to evolve this pokemon
 */
define("COL_NECESARY_CANDYS", "necesary_candys");
/**
 * Name from column pokemon_name of table pokemon
 * Contains the name of this pokemon
 */
define("COL_POKEMON_NAME", "pokemon_name");
/**
 * Name from column pokemon_evolution of table pokemon
 * Contains the pokemon_id of the pokmeon evolution or null if it not exist
 */
define("COL_EVOLUTION", "pokemon_evolution");
/**
 * Name from column pokemon_preevolution of table pokemon
 * Contains the pokemon_id of the pokemon PREevolution or null if it not exist
 */
define("COL_PREEVOLUTION", "pokemon_preevolution");
/**
 * Name from column pokemon_active of table pokemon
 * Boolean especifies if the pokemon is active in the game
 */
define("COL_POKEMON_ACTIVE", "pokemon_active");






/**
 * Name from table pokemon
 * Contains the list of pokemon added to database
 */
define("TABLE_RECORD", "record");


/**
 * Name from column record_id of table record
 * Contains autoincrement id identifies the record row
 */
define("COL_RECORD_ID", "record_id");
/**
 * Name from column record_user of table record
 * Contains id  of the record user
 */
define("COL_RECORD_USER", "record_user");
/**
 * Name from column record_candys of table record
 * Contains number of candys of the pokemon
 */
define("COL_RECORD_CANDYS", "record_candys");
/**
 * Name from column record_pokedex of table record
 * Contains if the pokemon is already registered in pokedex
 */
define("COL_RECORD_POKEDEX", "record_pokedex");
/**
 * Name from column record_pokemon of table record
 * Contains pokemon id reference the record
 */
define("COL_RECORD_POKEMON", "record_pokemon");
/**
 * Name from column record_date of table record
 * Contains date of last update
 */
define("COL_RECORD_DATE ", "record_date");
