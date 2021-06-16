<?php

namespace SRC\Infrastructure\Factory;

use \SRC\Infrastructure\Database\Connection;
use SRC\Infrastructure\Pdf\SnnapyPDF;
use \SRC\Infrastructure\Repository\DirfRepository;
use \SRC\Domain\DIRF;

class DIRFFactory
{
    public static function create()
    {
        $connection = new Connection();
        $repository = new DirfRepository($connection->getConnection());
        $pdf = new SnnapyPDF();
        return new DIRF($repository, $pdf);
    }
}