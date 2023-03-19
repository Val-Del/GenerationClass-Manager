<?php

$param = new Parameters($_SESSION['parameters']);
$co = DBConnect::Connect();

// $parameters = Parameters_Manager::getList();
// var_dump($parameters);
// $param = new Parameters();
// $co = DBConnect::Connect();
     
     // Parameters::getPassBdd();
     // Parameters::getNomBdd();
     // var_dump(Parameters::getServername());
$tables = Tables_Manager::selectAll();
foreach ($tables as $table) {
     var_dump($table->getName()) ;
}