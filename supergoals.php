<?php
//some predefined variable is called super goals which means that they are alwsa accessible.
//supergoals variable are 1.$GLOBAL 2. $_SERVER     3.$_REQUEST     4.$_POST    5.$GET
//6._FILE   7._ENV      8._COOCKIE      9._SESSION

//.1 GLOBAL it is a variable which is used to access gloabl variable from anywhere in php programs
//PHP store all GLOBAL variable in a array calles $GLOBAL[index].The index hold the name of variable

$x = 20;
$y = 20;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS ['y'];
}
addition();
echo "***PHP GLOBAL VARIABLE***";
echo "<br>";
echo $z;
echo "<br>";
echo "<br>";

echo "***PHP SERVER VARIABLE***";
//$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "<br>";


?>