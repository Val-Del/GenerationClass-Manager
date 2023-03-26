<?php
$nom = Parameters::getProjectName();
$dir = Parameters::getPathFramework();
$dir =  $dir . '/' . $nom;

deleteDirectory($dir);


//create files
mkdir($dir);
$pathManager = $dir . '/MANAGER';
$pathClass = $dir . '/CLASS';
mkdir($pathManager);
mkdir($pathClass);

$ts = Tables_Manager::selectAll();
foreach ($ts as $key) {
  foreach ($_POST as $kk => $vv) {
    if ($kk == $key->getId_table()) {
      $key->setGeneration('1');
      Tables_Manager::update($key);
      // var_dump($key);
      createManager($key);
      contentManager($key);
      
      createClass($key);
      contentClass($key);
    }
  }
}