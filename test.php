<?php

require __DIR__ . '/vendor/autoload.php';

use PHPJava\Core\JavaArchive;

(new JavaArchive('out.jar'))
    ->getClassByName('HelloCat')
    ->getInvoker()
    ->getStatic()
    ->getMethods()
    ->call('main', []);
