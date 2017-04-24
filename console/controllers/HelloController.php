<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/24
 * Time: 10:12
 */
namespace console\controllers;

use yii\console\Controller;

class HelloController extends Controller{
    public function actionIndex($name,$id){
        echo 'hello word!'.$name.'--'.$id;
    }
}