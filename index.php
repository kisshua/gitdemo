<?php
// 错误等级
//error_reporting(E_ALL|E_STRICT);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//error_reporting(0);

/*
 * 命令脚本路径
 * 默认与站点目录同级
 */
if (!defined('SHELL_DIR')) {
    define('SHELL_DIR', dirname(dirname(dirname(__FILE__))).'/bin');
}

require_once(dirname(__FILE__) . '/library/library.php');

define('SITE_ID', 0);

//设置默认应用程序目录
define('SYSTEM_TYPE', 'app');
//设置默认Module 
define('SYSTEM_APP',  'default');  
                   
library::part()->dispatching();

?>