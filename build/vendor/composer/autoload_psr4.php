<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'upload\\' => array($baseDir . '/Service/upload'),
    'model\\pdo\\' => array($baseDir . '/Service/model/pdo'),
    'model\\dataTypes\\' => array($baseDir . '/Service/model/dataTypes'),
    'model\\' => array($baseDir . '/Service/model'),
    'controller\\' => array($baseDir . '/Service/controller'),
    'CorsSlim\\' => array($vendorDir . '/palanik/corsslim'),
);
