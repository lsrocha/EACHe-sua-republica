<?php
namespace EACHeRepublica\Lib;

require 'Database.php';

use EACHeRepublica\Lib\Database;

/**
 * @author Leonardo Rocha <leonardo.lsrocha@gmail.com>
 */
class Model
{
    protected $database = null;

    public function __construct()
    {
        $this->database = Database::getInstance();
    }    
}