<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$URL = parse_url($_SERVER['REQUEST_URI']);
if (isset($URL["query"])) {
  $URL["params"] = []; parse_str($URL['query'], $URL['params']);
}

$URLArray = explode('/', $URL['path']);
$controller = $URLArray[1];

ob_start();
require "controller/" . $controller . ".php";
ob_end_clean();

echo $controller;



$myClass = new myClass;
$myClass->index();
?>

<pre>
<?php
var_dump($URLArray);
print_r ("url: ".$URL);
?>
</pre>
