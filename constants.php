<?php
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?>
<?php
define('MYDEAR','hello world', true);
echo greeting;
?>
//constants are automatically global and can be used across the entire script
<?php
define('greeting','hello world', true);
function myTest(){
    echo greeting;
}
myTest();
?>
