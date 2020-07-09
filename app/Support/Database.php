<?php namespace app\Support;

use mysqli;

/**
 * Database
 */

abstract class Database {
    /**
     * Server Related Property
     */
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'obj';

    private $connection;

    /**
     * Database Connection Setup
     */

     private function connection(){

      return  $this -> connection = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db );
    }

}


//Crate Method


//Edit Method

//

// we will take abstract class Database that any one can not create instance from this class (Database) for projection purpose
//we will not use connection class in other class
//we will not use connection class as extends that's we will use private
//we will always return connection class from access pages
//$host, $user, $pass, $db are same class property that's why we will use $this

//mysqli is a class because we are doing instance(new mysqli) it
// new mysqli and new PDO  both are global  class
//Since mysqli is golbal class that's why we have to use (use key word) for namespace convention

//If instantiate then have to use (use key word)
?>


