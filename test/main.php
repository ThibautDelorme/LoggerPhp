<?php
/**
 * Created by PhpStorm.
 * User: Thibaut
 * Date: 14/10/14
 * Time: 19:24
 */
    include("../logger/Logger.php");

    $log = Logger4Php::getInstance("Main");

    $log->debug("It's debug mode !");
    $log->info("It's info mode !");
    $log->warn("It's warn mode !");
    $log->error("It's error mode !");
    $log->fatal("It's fatal mode !");
