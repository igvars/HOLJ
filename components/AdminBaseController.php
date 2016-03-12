<?php
namespace app\components;

use yii\filters\AccessControl;
use yii\web\Controller;

class AdminBaseController extends Controller {
    public $layout = 'admin';
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['index','create','update','delete','view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
}