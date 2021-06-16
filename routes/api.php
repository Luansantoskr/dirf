<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeradorController;
use \PlugRoute\PlugRoute;
use \PlugRoute\RouteContainer;
use \PlugRoute\Http\RequestCreator;
use \SRC\Infrastructure\Factory\DIRFFactory;

$route = new PlugRoute(new RouteContainer(), RequestCreator::create());

Route::get('/index', [GeradorController::class, 'index']);

Route::get('/generate', [GeradorController::class, 'generate']);

Route::get('/sum/{cnpj}', [GeradorController::class, 'sum']);

Route::get('/code/{cnpj}', [GeradorController::class, 'code']);

Route::get('/import', function(\PlugRoute\Http\Request $request) {
    $file = dirname(__DIR__).'/routes/dirf4.csv';
    echo "<pre>";
    $handle = fopen($file, "r");
    $row = 0;
    $query = [];
    while ($line = fgetcsv($handle, 1000, ";")) {
        $identifier = str_pad($line[0], 14, "0", STR_PAD_LEFT);;
        $jan = empty($line[1]) ? 0 : $line[1];
        $feb = empty($line[2]) ? 0 : $line[2];
        $mar = empty($line[3]) ? 0 : $line[3];
        $apr = empty($line[4]) ? 0 : $line[4];
        $may = empty($line[5]) ? 0 : $line[5];
        $jun = empty($line[6]) ? 0 : $line[6];
        $jul = empty($line[7]) ? 0 : $line[7];
        $aug = empty($line[8]) ? 0 : $line[8];
        $sep = empty($line[9]) ? 0 : $line[9];
        $oct = empty($line[10]) ? 0 : $line[10];
        $nov = empty($line[11]) ? 0 : $line[11];
        $dec = empty($line[12]) ? 0 : $line[12];
        $query[] = "INSERT INTO dirf (cnpj, jan, fev, mar, abr, mai, jun, jul, ago, setembro, outubro, nov, dez) VALUES ('{$identifier}', '{$jan}', '{$feb}', '{$mar}', '{$apr}', '{$may}', '{$jun}', '{$jul}', '{$aug}', '{$sep}', '{$oct}', '{$nov}', '{$dec}');";
    }
    echo implode("<br>", $query);
});


// Route::get('/mysql', function(\PlugRoute\Http\Request $request) {
//     try {
//         $conn = new \PDO("sqlsrv:server=172.20.0.1;Database=master",  "SA", 'Root@1234');
//         $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

//         $stmt = $conn->query('SELECT TOP 1 cnpj from dirf');
//         var_dump($stmt->fetch());
//     } catch (\PDOException $pdoException) {
//         echo $pdoException->getMessage();
//     }
// });


