<?php

namespace app\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;

class ServicesController extends Controller
{

    public function actions()
    {
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => Yii::$app->params['description']],'description');
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => Yii::$app->params['keywords']],'keywords');
        \Yii::$app->view->registerMetaTag(['name' => 'og:description', 'content' => Yii::$app->params['description']],'og:description');
        \Yii::$app->view->registerMetaTag(['name' => 'og:image', 'content' => Url::to(['/img/madetec_seo.jpg'])],'og:image');
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * @return string
     * @throws \yii\base\InvalidArgumentException
     */
    public function actionThermoplint()
    {
        return $this->render('thermoplint');
    }

    public function actionTurnkey()
    {
        return $this->render('turnkey');
    }

    public function actionVentilation()
    {
        return $this->render('ventilation');
    }
}
