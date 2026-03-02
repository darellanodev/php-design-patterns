<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\FactoryMethod\ManagersExample\DevelopmentManager;
use App\FactoryMethod\ManagersExample\MarketingManager;

$devManager = new DevelopmentManager();
$devManager->takeInterview(); // Output: Asking about design patterns

$marketingManager = new MarketingManager();
$marketingManager->takeInterview(); // Output: Asking about community building.