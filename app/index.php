<?php
require __DIR__ . '/vendor/autoload.php';

echo "<h1>PoC PHP 8.5 + Apache</h1>";

$testVar = getenv('TEST_VAR') ?: 'No variable!';

echo "<p><strong>Variable test from /etc/environment (TEST_VAR):</strong> {$testVar}</p>";

echo "<h2>Extensions:</h2>";
echo "<ul>";
echo "<li>PDO MySQL: " . (extension_loaded('pdo_mysql') ? 'Yes' : 'No') . "</li>";
echo "<li>Redis: " . (extension_loaded('redis') ? 'Yes' : 'No') . "</li>";
echo "<li>Xdebug (dev version): " . (extension_loaded('xdebug') ? 'Yes' : 'No') . "</li>";
echo "</ul>";

phpinfo();
