<?php
/**
 * Created by PhpStorm.
 * User: xiaoht
 * Date: 2018/4/17
 * Time: 22:30
 */

namespace app\modules\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}