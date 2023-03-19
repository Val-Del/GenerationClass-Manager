<?php
function createBaseFiles()
{
  $nom = Parameters::getProjectName();
  $dir = Parameters::getPathFramework();
  $mk =  $dir . '\\' . $nom;
  // var_dump($mk);
  // mkdir($mk);
  // $paths = ['/CSS', '/HTML', '/IMG', '/JS', '/SQL'];
  $paths = [
    '/CSS' => ['/MINIMIFY'=>['/csstest','/csstest3'=>['/csstest2']
    ]
  ],
    '/HTML' => ['/test'],
    '/IMG' => ['/test'], 
    '/JS' => ['/test'],
    '/SQL' => ['/test'],
    '/teststring'=>['/zz']
  ];
  function echoSubpaths($path, $subpaths) {
    foreach ($subpaths as $key => $subpath) {
        if (is_array($subpath)) {
            echoSubpaths($path . $key , $subpath);
        } else {
            echo $path . $subpath;
            echo '<br>';
        }
    }
}

foreach ($paths as $path => $subpaths) {
    echo $path . '<br>';
    echoSubpaths($path , $subpaths); 
}
}