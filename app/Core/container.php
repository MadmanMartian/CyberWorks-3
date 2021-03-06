<?php
/**
 * Created by PhpStorm.
 * User: Cameron Chilton
 * Date: 19/07/2017
 * Time: 03:24
 */
$container['validator'] = function ($container) {
    return new CyberWorks\Core\Validation\Validator;
};
$container['HomeController'] = function ($container) {
    return new CyberWorks\Core\Controllers\HomeController($container);
};
$container['AuthController'] = function ($container) {
    return new CyberWorks\Core\Controllers\Auth\AuthController($container);
};
$container['MetricsController'] = function ($container) {
    return new CyberWorks\Core\Controllers\API\MetricsController($container);
};
$container['GroupController'] = function ($container) {
    return new CyberWorks\Core\Controllers\Auth\GroupController($container);
};
$container['UserController'] = function ($container) {
    return new CyberWorks\Core\Controllers\Auth\UserController($container);
};