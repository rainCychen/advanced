<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/24
 * Time: 10:12
 */
namespace console\controllers;

use yii\base\Controller;

class HelloController extends \yii\console\Controller{
    public function actionIndex($name){
        echo 'hello word!'.$name;
    }
}