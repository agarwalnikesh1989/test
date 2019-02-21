<?php
/**
 * Database configuration
 */
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123456');
define('DB_HOST', 'localhost');
define('DB_NAME', 'courier');
 
define('UNABLE_TO_PROCEED', 'UP');
define('USER_CREATE_FAILED', 'E');
define('EMAIL_ALREADY_EXISTED', 'EAE');

define('INVALID_EMAIL', 0);
define('SUCCESSFULLY_DONE', 1);


define('USERNAME_ALREADY_EXISTED', 3);
define('MOB_NO_ALREADY_EXISTED', 6);

define('USER_ACCOUNT_DEACTVATED', 4);
define('INVALID_EMAIL_PASSWORD', 5);


define('INVALID_OLD_PASSWORD', 9);
define('INVALID_USER', 10);

define('PROFILE_UPDATED_SUCCESSFULLY', 11);

define('ALREADY_EXIST', 12);
define('ALREADY_REPLIED', 13);

define('INVALID_REQUEST', 14);


define('APIURL', 'http://'.$_SERVER['HTTP_HOST'].'/besttaxi/app/webroot/');
define('PROFILEPIC', APIURL.'profile_pic/');

?>
