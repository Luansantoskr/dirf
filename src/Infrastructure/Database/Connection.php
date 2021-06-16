<?php

namespace SRC\Infrastructure\Database;

/**
 * Class Connection
 * @package SRC\Infrastructure\Database
 */
class Connection
{
    /**
     * @return \PDO
     */
    public function getConnection()
    {
        try {
            $conn = new \PDO("mysql:server=127.0.0.1;Database=dirf", "root", '');
//            $conn = new \PDO("sqlsrv:server=baseunica.fortbrasil.com.br;Database=Stage",  "610038", 'G&n!GKU3*hvdPbcPsh27n#$R$Q_HXmnA');
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (\PDOException $pdoException) {
            echo $pdoException->getMessage();
        }
    }
}