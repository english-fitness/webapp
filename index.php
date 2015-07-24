<?php
// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';

$environment = getenv('ENV') ? getenv('ENV') : 'production';

$default = require(dirname(__FILE__).'/protected/config/main.default.php');
$config=require(dirname(__FILE__).'/protected/config/main.'.$environment.'.php');
$config = array_replace_recursive($default, $config);

//if($environment == 'development') {
	// remove the following lines when in production mode
	defined('YII_DEBUG') or define('YII_DEBUG',true);
	// specify how many levels of call stack should be shown in each log message
	defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
//}

require_once($yii);
Yii::createWebApplication($config)->run();
