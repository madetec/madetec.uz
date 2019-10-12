<?php

namespace app\controllers;

use app\madetec\helpers\MadetecCaptcha;
use app\madetec\services\ContactService;
use app\models\ContactForm;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;

/**
 * @property ContactService $contactManage
 */
class SiteController extends Controller
{
    private $contactManage;

    public function __construct(string $id, $module, ContactService $contactService, array $config = [])
    {
        $this->contactManage = $contactService;
        parent::__construct($id, $module, $config);
    }

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
            'captcha' => [
                'class' => MadetecCaptcha::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'foreColor' => 0x05005c, // цвет символов
                'minLength' => 4, // минимальное количество символов
                'maxLength' => 5, // максимальное
                'offset' => 10, // расстояние между символами (можно отрицательное)
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionObjects()
    {
        return $this->render('objects');
    }

    public function actionDevelopment()
    {
        return $this->render('development');
    }

    public function actionDigital()
    {
        return $this->render('digital');
    }
    public function actionDesign()
    {
        return $this->render('design');
    }
    public function actionProject()
    {
        return $this->render('project');
    }
    public function actionWatchVault()
    {
        return $this->render('watch-vault');
    }

    /**
     * @param null $body
     * @return string|\yii\web\Response
     * @throws \yii\base\InvalidArgumentException
     */
    public function actionContact($body = null)
    {
        $form = new ContactForm($body);
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $client = $this->contactManage->create($form);
                Yii::$app->session->setFlash('success', $client->name . ', Спасибо! Ваше сообщение успешно отправлено.');
            } catch (\Exception $e) {
                Yii::$app->session->setFlash('error', 'Что-то пошло не так. Повторите попытку чуть позже! :(');
            }
            return $this->redirect(['site/contact']);
        }
        return $this->render('contact', [
            'model' => $form,
        ]);
    }


    public function actionLinks()
    {
        return $this->render('links');
    }

}
