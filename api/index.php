<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    
    // Resolve the HTTP Kernel
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    
    // Manually force boot the application using Reflection to catch the real boot exception
    $reflection = new ReflectionClass($kernel);
    $method = $reflection->getMethod('bootstrap');
    $method->setAccessible(true);
    $method->invoke($kernel);
    
    // If boot succeeds, run normally
    $app->handleRequest(Illuminate\Http\Request::capture());
} catch (\Throwable $e) {
    echo "<h1>Real Laravel Boot Crash!</h1>";
    echo "<b>Class:</b> " . get_class($e) . "<br>";
    echo "<b>Error Message:</b> " . $e->getMessage() . "<br>";
    echo "<b>File:</b> " . $e->getFile() . " on line " . $e->getLine() . "<br>";
    echo "<h3>Stack Trace:</h3><pre>" . $e->getTraceAsString() . "</pre>";
}
