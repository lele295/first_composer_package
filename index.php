<?php
/**
 * Created by PhpStorm.
 * User: zou_mj
 * Date: 2021/4/4
 * Time: 19:22
 */

require 'vendor/autoload.php';
$paramObj = new \zmj\PassParam();
print_r($paramObj);

echo '<br>';
$testObj = new \zmj\Test();
$testObj->setName($paramObj);
print_r($paramObj);