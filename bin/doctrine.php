<?php

declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';

defined('DM_ROOT') or exit('Configuration is not loaded.');

use Distantmagic\Resonance\DoctrineConsoleRunner;

DoctrineConsoleRunner::run();
