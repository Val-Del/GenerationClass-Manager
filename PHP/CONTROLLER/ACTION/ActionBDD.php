<?php 
$test = new Parameters($_POST);
DBConnect::Connect();
Parameters_Manager::createTable($test);
Parameters_Manager::add($test);
// var_dump(Parameters::getAttributes());
// var_dump($test->getServername());
// var_dump($test->getUserBdd());
// var_dump($test->getPortBdd());
// var_dump($test->getNomBdd());
// var_dump($test->getProjectName());
// $co = DBConnect::Connect();
// if ($co != -1) {
//     $sql = "SHOW TABLES FROM ".$test->getNomBDD()."";
//     $tables = DBConnect::request($sql);
//    // var_dump($tables);

//     foreach ($tables as $row) {
//         $table_names[] = $row['Tables_in_' . $test->getNomBDD()];
//          var_dump($row['Tables_in_' . $test->getNomBDD()]);
//     }
    // createBaseFiles();


    // var_dump($table_names);
    // $table_name = $tables[0]['Tables_in_' . $test->getNomBDD()];
    // var_dump($table_name);
    
    // var_dump($tables);
    // foreach ($tables as $table) {
    //     $req = "SHOW columns FROM $table";
    //     var_dump($req);
    //     $columns = DBConnect::request($req);
    //     var_dump($columns);
    // }

