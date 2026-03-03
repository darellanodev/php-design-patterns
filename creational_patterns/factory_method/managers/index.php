<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Managers Example</title>
    <link rel="stylesheet" href="../../../css/styles.css">
</head>
<body>
<p><a href="../../../index.php">&larr; Back to main index</a></p>
<pre><?php

require_once __DIR__.'/../../../vendor/autoload.php';

use App\CreationalPatterns\FactoryMethod\Managers\DevelopmentManager;
use App\CreationalPatterns\FactoryMethod\Managers\MarketingManager;

$devManager = new DevelopmentManager();
$devManager->takeInterview(); // Output: Asking about design patterns

echo "\n";

$marketingManager = new MarketingManager();
$marketingManager->takeInterview(); // Output: Asking about community building.

?></pre>
</body>
</html>
