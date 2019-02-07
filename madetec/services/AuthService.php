<?php
/**
 * Created by Madetec-Solution.
 * Developer: Mirkhanov Z.S.
 */

namespace app\madetec\services;

use app\madetec\forms\LoginForm;
use madetec\crm\entities\User;
use yii\helpers\VarDumper;
use yii\web\BadRequestHttpException;
use Yii;

class AuthService
{
    /**
     * @param LoginForm $form
     * @throws BadRequestHttpException
     * @throws \yii\base\InvalidArgumentException
     */
    public function login(LoginForm $form)
    {
        $user = User::findByUsername($form->username);
        if(!$user->validatePassword($form->password))
        {
            throw new BadRequestHttpException('incorrect username or password');
        }
        Yii::$app->user->login($user, $form->rememberMe ? 3600 * 24 * 30 : 0);
    }
}