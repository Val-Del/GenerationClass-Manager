<?php

// $param = new Parameters($_SESSION['parameters']);
// $co = DBConnect::Connect();

// $parameters = Parameters_Manager::getList();
// var_dump($parameters);
// $param = new Parameters();
// $co = DBConnect::Connect();

// Parameters::getPassBdd();
// Parameters::getNomBdd();
// var_dump(Parameters::getServername());
$tables = Tables_Manager::selectAll();
// var_dump($tables);
echo '<form method=POST action="?page=creationFiles">';
echo '<h1>Tables :</h1>
<ul class="table-list">';
echo '<li class=flex>';
echo '<label></label>';
echo '<input type="checkbox" class=none>';
echo '</li>';
foreach ($tables as $table) {
     if ($table->getName() != "tables" && $table->getName() != "parameters" && $table->getName() != "foreign_key"  && $table->getName() != "table_foreign_key") {
          echo '<li class=flex>';
          echo '<label>' . ucFirst($table->getName()) . '</label>';
          echo '<input type="checkbox" name="'.$table->getId_table().'">';
          echo '</li>';
     }


     // echo'<li>';
     // echo($table->getForeign_key()) ;
     // echo'</li>';

     // echo'<li>';
     // echo($table->getUrl()) ;
     // echo'</li>';

     // echo'<li>';
     // echo($table->getBack()) ;
     // echo'</li>';
}
echo '</ul>';
echo '<br><button type=submit>Génération</button>';
echo '</form>';
