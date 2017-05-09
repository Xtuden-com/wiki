<?php

//fixme
$project = "Project1";

//fixme too
$user = "root";

//me too
$pico_projects = "Pico Projects";

$owncloud_path = realpath(dirname("__FILE__")) . "/";
$project_path = $owncloud_path . "data/" . $user . "/files/" . $pico_projects . "/" . $project . "/";
$app_path = $owncloud_path . "apps/wiki/";
$pico_path = $app_path ."lib/pico/";

echo "owncloudpath : $owncloud_path \r\n";
echo "projectpath:  $project_path \r\n";
echo "app path :  $app_path \r\n";
echo "pico path : $pico_path \r\n";


//create projectdir
$project = $owncloud_path;
if (!is_dir ($project))
{
    //file mode
    $mode = 0777;
    //the third parameter set to true allows the creation of
    //nested directories specified in the pathname.
    mkdir($project, $mode, true);
}


define('ROOT_DIR', $project_path);

define('CONTENT_DIR', ROOT_DIR .'/content/');
define('CONTENT_EXT', '.md');
define('PLUGINS_DIR', ROOT_DIR .'/plugins/');
define('THEMES_DIR', ROOT_DIR .'/themes/');

define('LIB_DIR', $pico_path . "lib/");
define('CACHE_DIR', LIB_DIR ."cache/");
///Users/jonathankawohl/ocdev/owncloud/apps/wiki/lib/pico/vendor/autoload.php
require_once($pico_path .'vendor/autoload.php');
require_once(LIB_DIR .'pico.php');

$pico = new Pico(
    $project_path,    // root dir
    'config/',  // config dir
    'plugins/', // plugins dir
    'themes/'   // themes dir
);

// override configuration?
//$pico->setConfig(array());
// run application
echo $pico->run();