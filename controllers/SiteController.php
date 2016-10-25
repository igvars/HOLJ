<?php

namespace app\controllers;

use app\components\BaseController;
use app\models\Breed;
use app\models\OurFriend;
use app\models\Pet;
use app\models\Slide;
use Yii;
use yii\db\ActiveQuery;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\NotFoundHttpException;

class SiteController extends BaseController
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $breeds = Breed::find()->puppies()->all();
        return $this->render('index',[
            'breeds' => $breeds
        ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContacts()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contacts', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionPuppies() {
        $breeds = Breed::find()->puppies()->all();
        return $this->render('puppies', ['breeds' => $breeds]);
    }

    public function actionGallery() {
        $models = Slide::find()->active()->all();
        return $this->render('gallery', ['models' => $models]);
    }

    public function actionOurFriends() {
        $models = OurFriend::find()->all();
        return $this->render('our-friends', [
            'models' => $models
        ]);
    }
    
    public function actionBreed($id) {
        $model = Breed::findOne($id);
        if(!$model) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        return $this->render('breed', ['model' => $model]);
    }
    public function actionPuppiesBreed($id) {
        $model = Breed::findOne($id);
        if(!$model) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        return $this->render('puppiesBreed', ['model' => $model]);
    }
    public function actionPet($id) {
        $model = Pet::findOne($id);
        if(!$model) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        return $this->render('pet', ['model' => $model]);
    }
}
