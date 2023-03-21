<?php 
//création parameter pour init la connection
$param = new Parameters($_POST);
$_SESSION['parameters'] = $_POST;
$co = DBConnect::Connect();

//création + remplissage table 'parameters' dans la bdd
Parameters_Manager::dropTable($param);
Parameters_Manager::createTable($param);
Parameters_Manager::add($param);

//création + remplissage table 'tables' dans la bdd
$tables = Parameters_Manager::getInfo($param);
$table = new Tables();
Tables_Manager::dropTable($table);
Tables_Manager::createTable($table);
// var_dump($tables );
foreach ($tables as $row) {
    $row = $row['Tables_in_' . $param->getNomBDD()];
    $row = ['name' => $row];
    $tab = new Tables($row);
    Tables_Manager::add($tab);
}

$tablefk = new Table_foreign_key();
Table_foreign_key_Manager::dropTable($tablefk);
Table_foreign_key_Manager::createTable($tablefk);

    // createBaseFiles();


    // $table_name = $tables[0]['Tables_in_' . $test->getNomBDD()];

//redirection sur liste tables pour leur gestion
// header('Location: index.php?page=tables');
