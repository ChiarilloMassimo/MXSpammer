#!/usr/bin/env php
<?php

set_time_limit(0);

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Spammer\Command\VBulletin;

$application = new Application();

$application->addCommands([
    new VBulletin()
]);

$application->run();
