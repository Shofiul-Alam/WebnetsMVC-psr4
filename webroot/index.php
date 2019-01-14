<?php 

use Lib\App;
use Lib\Router;
use Webnets\models\Employee;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATH', ROOT.DS.'app'.DS.'Webnets'.DS.'views');


require_once(ROOT.DS.'Lib'.DS.'init.php');
require_once(ROOT.DS.'config'.DS.'config.php');



App::run($_SERVER['REQUEST_URI']);

?>