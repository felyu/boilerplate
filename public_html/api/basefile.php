<?php
session_start();
header('Content-Type: application/json');
// Include Composer Autoload and externals functions
require_once __DIR__ . './../../vendor/autoload.php';
require_once './../functions/response.php';

require_once './../functions/input_cleaning.php';
require_once './../functions/ip.php';
require_once './../functions/uuid4.php';

// Include libraries
use Respect\Validation\Validator as v;
use Medoo\Medoo;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . './../../');
$dotenv->load();

// Initialize the database connection
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => $_ENV['MYSQL_DATABASE'],
    'server' => $_ENV['MYSQL_HOST'],
    'username' => $_ENV['MYSQL_USER'],
    'password' => $_ENV['MYSQL_PASSWORD']
]);

do{
    // Check if the form was successfully submitted using POST method
    if($_SERVER['REQUEST_METHOD'] != "POST"){
        echo response(400, "L'API a mal été appelée.");
        break;
    }

    // Data to return
    $data = [
        "data" => "lol",
    ];

    echo response(200, "", $data);

}while(0) ?>