<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    echo "<h1>Laravel Boot Crash!</h1>";
    $current = $e;
    $i = 1;
    while ($current) {
        echo "<h2>Exception #$i</h2>";
        echo "<b>Class:</b> " . get_class($current) . "<br>";
        echo "<b>Error Message:</b> " . $current->getMessage() . "<br>";
        echo "<b>File:</b> " . $current->getFile() . " on line " . $current->getLine() . "<br>";
        echo "<h3>Stack Trace #$i:</h3><pre>" . $current->getTraceAsString() . "</pre><hr>";
        $current = $current->getPrevious();
        $i++;
    }
}
