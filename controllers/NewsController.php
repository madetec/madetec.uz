<?php

namespace app\controllers;

use madetec\crm\entities\News;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\Controller;
use Yii;

class NewsController extends Controller
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
    public function actionIndex()
    {
        $provider = new ActiveDataProvider([
            'query' => News::find()
                ->where(['status' => News::STATUS_PUBLISHED])
                ->andWhere(['<=', 'published_at', time()])
                ->orderBy(['created_at' => SORT_DESC]),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('index', [
            'provider' => $provider,
        ]);
    }

    /**
     * @param $slug
     * @return string
     * @throws \yii\base\InvalidArgumentException
     */
    public function actionView($slug)
    {
        $news = News::findOne(['slug' => $slug]);
        return $this->render('view', [
            'news' => $news
        ]);
    }
}
