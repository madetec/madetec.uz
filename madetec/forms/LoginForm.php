<?php

namespace app\madetec\forms;

use madetec\crm\entities\User;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            ['username', 'match', 'pattern' => '/^[a-zA-Z0-9_-]+$/'],
            ['rememberMe', 'boolean'],
        ];
    }
}
