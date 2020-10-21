<?php

require 'vendor/autoload.php';

$request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

var_dump(get_included_files());

var_dump($request);
