<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo "<h1>PHP is working on Vercel!</h1>";
echo "PHP Version: " . PHP_VERSION . "<br><br>";
echo "<h3>Loaded Extensions:</h3><pre>";
print_r(get_loaded_extensions());
echo "</pre>";
