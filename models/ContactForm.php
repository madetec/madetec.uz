<?php

namespace app\models;

use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $body;
    public $verifyCode;

    public function __construct(string $body = null, array $config = [])
    {
        if ($body) {
            $this->body = $body;
        }
        parent::__construct($config);
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'body'], 'required'],
            ['email', 'email'],
            [['phone','name', 'body','email'], 'trim'],
            [['name', 'body'], 'string', 'max' => 255],
            [['name', 'body'], 'match', 'not' => true, 'pattern' => '/[^a-zA-Z_-].,\n/'],
            ['phone', 'string', 'max' => 9],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'body' => 'Текст',
            'email' => 'Эл.почта',
            'verifyCode' => 'проверочный код',
        ];
    }
}
