<?php
use core\Router;
use core\Request;
require "vendor\autoload.php";
require "core\bootstrap.php";
Router::load("app/routes.php")->direct(Request::filter_uri(),Request::method());

